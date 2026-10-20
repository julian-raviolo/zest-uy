<?php
/**
 * Zest — recepción del formulario de contacto.
 * Valida, frena spam (honeypot + CSRF + límite de tiempo), envía el mail
 * y guarda una copia en storage/mensajes.csv. Siempre redirige de vuelta.
 */
declare(strict_types=1);

require __DIR__ . '/includes/functions.php';
$config = require __DIR__ . '/includes/config.php';

function back(string $status): never
{
    header('Location: ./?form=' . rawurlencode($status) . '#contacto', true, 303);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    back('');
}

zest_session();

// 1. CSRF
$sent = (string) ($_POST['csrf'] ?? '');
if ($sent === '' || empty($_SESSION['csrf']) || !hash_equals($_SESSION['csrf'], $sent)) {
    back('error');
}

// 2. Honeypot: los bots completan el campo oculto. Fingimos éxito.
if (trim((string) ($_POST['website'] ?? '')) !== '') {
    back('ok');
}

// 3. Un envío por minuto por sesión
if (!empty($_SESSION['last_sent']) && time() - (int) $_SESSION['last_sent'] < 60) {
    back('wait');
}

// 4. Validación
$clean = static fn (string $key, int $max): string =>
    mb_substr(trim(str_replace(["\r", "\0"], '', (string) ($_POST[$key] ?? ''))), 0, $max);

$nombre = str_replace("\n", ' ', $clean('nombre', 120));
$email  = $clean('email', 160);

// Servicios marcados: solo se aceptan los que existen en la configuración
$valid    = array_column($config['services'], 'pick');
$picked   = array_values(array_intersect($valid, (array) ($_POST['servicios'] ?? [])));
$servicio = $picked ? implode(', ', $picked) : 'Sin especificar';

if ($nombre === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    back('error');
}

// 5. Copia de respaldo (CSV fuera del alcance público, ver storage/.htaccess)
if ($config['mail']['save_copy']) {
    $dir = __DIR__ . '/storage';
    if (is_dir($dir) || @mkdir($dir, 0750, true)) {
        $neutralize = static fn (string $v): string => preg_match('/^[=+\-@]/', $v) ? "'" . $v : $v;
        $fh = @fopen($dir . '/mensajes.csv', 'ab');
        if ($fh) {
            fputcsv($fh, array_map($neutralize, [date('c'), $nombre, $email, $servicio]), ',', '"', '\\');
            fclose($fh);
        }
    }
}

// 6. Envío
$body = "Nuevo mensaje desde la web de Zest\n\n"
      . "Nombre:     {$nombre}\n"
      . "Email:      {$email}\n"
      . "Le interesa: {$servicio}\n";

$headers = [
    'From'         => 'Zest Web <' . $config['mail']['from'] . '>',
    'Reply-To'     => $email,
    'Content-Type' => 'text/plain; charset=UTF-8',
    'X-Mailer'     => 'PHP/' . PHP_VERSION,
];

$subject = '=?UTF-8?B?' . base64_encode($config['mail']['subject'] . ' · ' . $nombre) . '?=';
$ok = @mail($config['mail']['to'], $subject, $body, $headers);

$_SESSION['last_sent'] = time();
unset($_SESSION['csrf']); // un token por envío

back($ok || $config['mail']['save_copy'] ? 'ok' : 'fail');

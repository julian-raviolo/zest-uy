<?php
declare(strict_types=1);

/** Escapa texto para HTML. */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Inicia la sesión con cookies seguras (solo una vez). */
function zest_session(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

/** Token anti-CSRF para el formulario. */
function csrf_token(): string
{
    zest_session();
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf'];
}

/** Isotipo de Zest en SVG. $top = color de la pieza superior, $rest = color del resto. */
function zest_mark(string $top = 'var(--mandarina)', string $rest = 'var(--tinta)', string $class = '', string $label = 'Zest'): string
{
    $aria = $label === '' ? 'aria-hidden="true"' : 'role="img" aria-label="' . e($label) . '"';
    return '<svg class="mark ' . e($class) . '" viewBox="0 0 100 100" ' . $aria . '>'
        . '<polygon class="mark__p mark__p--1" points="36,18 94,18 78,34 20,34" fill="' . $top . '"/>'
        . '<polygon class="mark__p mark__p--2" points="51,37 75,37 49,63 25,63" fill="' . $rest . '"/>'
        . '<polygon class="mark__p mark__p--3" points="22,66 80,66 64,82 6,82" fill="' . $rest . '"/>'
        . '</svg>';
}

/** Íconos de línea propios (24×24, trazo 1.75). */
function icon(string $name, string $class = 'icon'): string
{
    $paths = [
        'chart'   => '<path d="M4 20h16"/><path d="M7 16v-4"/><path d="M12 16V8"/><path d="M17 16v-7"/><path d="m6 9 5-4 4 3 4-4"/>',
        'chat'    => '<path d="M20 12a8 8 0 0 1-11.6 7.1L4 20l1-4.2A8 8 0 1 1 20 12Z"/><path d="M8.5 12h.01M12 12h.01M15.5 12h.01"/>',
        'spark'   => '<path d="M12 3v4M12 17v4M3 12h4M17 12h4"/><path d="m12 8 1.4 2.6L16 12l-2.6 1.4L12 16l-1.4-2.6L8 12l2.6-1.4Z"/>',
        'code'    => '<path d="m8 8-4 4 4 4"/><path d="m16 8 4 4-4 4"/><path d="m13.5 5-3 14"/>',
        'target'  => '<circle cx="12" cy="12" r="8.5"/><circle cx="12" cy="12" r="4.5"/><path d="M12 12 20 4"/><path d="M17 4h3v3"/>',
        'compass' => '<circle cx="12" cy="12" r="8.5"/><path d="m15.5 8.5-2 5-5 2 2-5Z"/>',
        'bulb'    => '<path d="M9 18h6M10 21h4"/><path d="M12 3a6 6 0 0 0-3.5 10.9c.6.5 1 1.2 1 2.1h5c0-.9.4-1.6 1-2.1A6 6 0 0 0 12 3Z"/>',
        'shield'  => '<path d="M12 3 5 6v5c0 4.4 3 8.3 7 10 4-1.7 7-5.6 7-10V6Z"/><path d="m9 12 2 2 4-4"/>',
        'users'   => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.2a6.5 6.5 0 0 1 3.5 5.8"/>',
        'search'  => '<circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/>',
        'check'   => '<path d="m5 12.5 4.5 4.5L19 7.5"/>',
        'x'       => '<path d="M7 7l10 10M17 7 7 17"/>',
        'arrow'   => '<path d="M5 12h14"/><path d="m13 6 6 6-6 6"/>',
        'mail'    => '<rect x="3" y="5" width="18" height="14" rx="1"/><path d="m3.5 6 8.5 7 8.5-7"/>',
        'whatsapp'=> '<path d="M20 11.6A8.4 8.4 0 0 1 7.6 19L3.5 20.5 5 16.6A8.4 8.4 0 1 1 20 11.6Z"/><path d="M9 8.5c0 3.6 2.9 6.5 6.5 6.5l1-1.6-2.1-1-1 .9a4 4 0 0 1-2.2-2.2l.9-1-1-2.1Z"/>',
        'instagram'=> '<rect x="3.5" y="3.5" width="17" height="17" rx="4.5"/><circle cx="12" cy="12" r="4"/><path d="M17 7h.01"/>',
        'pin'     => '<path d="M12 21s-6.5-6-6.5-11a6.5 6.5 0 0 1 13 0c0 5-6.5 11-6.5 11Z"/><circle cx="12" cy="10" r="2.3"/>',
        'menu'    => '<path d="M4 8h16M4 16h16"/>',
    ];
    $inner = $paths[$name] ?? '';
    return '<svg class="' . e($class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $inner . '</svg>';
}

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

/** Ruta de un archivo de assets/ con su fecha de modificación, para que el navegador tome siempre la última versión. */
function asset(string $path): string
{
    $file = dirname(__DIR__) . '/assets/' . $path;
    return 'assets/' . $path . (is_file($file) ? '?v=' . filemtime($file) : '');
}

<?php
declare(strict_types=1);

/**
 * Blog de Zest. Cada artículo es un archivo en includes/blog/posts/ que devuelve un array.
 *
 * Publicación automática con revisión previa: un artículo solo se ve cuando
 *   estado = 'revisado'  (lo aprueba una persona) Y  ya pasó su fecha y hora ('fecha' + 'hora', por defecto 12:00, hora de Uruguay).
 * Los 'borrador' nunca se muestran. Para verlos en una prueba local: ZEST_BLOG_PREVIEW=1.
 */
function zest_blog_posts(): array
{
    static $posts = null;
    if ($posts !== null) {
        return $posts;
    }

    $preview = getenv('ZEST_BLOG_PREVIEW') === '1';
    $tz      = new DateTimeZone('America/Montevideo');
    $ahora   = new DateTimeImmutable(getenv('ZEST_BLOG_NOW') ?: 'now', $tz); // ZEST_BLOG_NOW solo para pruebas locales
    $posts   = [];

    foreach (glob(__DIR__ . '/blog/posts/*.php') ?: [] as $file) {
        $p = require $file;
        if (!is_array($p) || empty($p['slug'])) {
            continue;
        }
        if (!$preview) {
            $sale = new DateTimeImmutable(($p['fecha'] ?? '9999-12-31') . ' ' . ($p['hora'] ?? '12:00'), $tz);
            if (($p['estado'] ?? '') !== 'revisado' || $sale > $ahora) {
                continue;
            }
        }
        $posts[] = $p;
    }

    usort($posts, static fn ($a, $b) => strcmp($b['fecha'], $a['fecha']) ?: (($a['orden'] ?? 99) <=> ($b['orden'] ?? 99)));
    return $posts;
}

function zest_blog_post(string $slug): ?array
{
    foreach (zest_blog_posts() as $p) {
        if ($p['slug'] === $slug) {
            return $p;
        }
    }
    return null;
}

function zest_blog_service(array $config, string $id): ?array
{
    foreach ($config['services'] as $s) {
        if ($s['id'] === $id) {
            return $s;
        }
    }
    return null;
}

function zest_blog_fecha(string $ymd): string
{
    $meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'setiembre', 'octubre', 'noviembre', 'diciembre'];
    $t = strtotime($ymd);
    return (int) date('j', $t) . ' de ' . $meses[(int) date('n', $t) - 1] . ' de ' . date('Y', $t);
}

/** Agrega id a cada <h2> y devuelve [html, índice]. */
function zest_blog_toc(string $html): array
{
    $toc = [];
    $html = preg_replace_callback('/<h2>(.*?)<\/h2>/s', static function ($m) use (&$toc) {
        $txt  = trim(strip_tags($m[1]));
        $slug = trim(preg_replace('/[^a-z0-9]+/', '-', strtolower(strtr(
            mb_strtolower($txt, 'UTF-8'),
            ['á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u', 'ñ' => 'n', 'ü' => 'u']
        ))), '-');
        $toc[] = ['id' => $slug, 'txt' => $txt];
        return '<h2 id="' . $slug . '">' . $m[1] . '</h2>';
    }, $html);
    return [$html, $toc];
}

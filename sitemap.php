<?php
declare(strict_types=1);

// sitemap.xml dinámico: páginas fijas + artículos del blog ya publicados.
require __DIR__ . '/includes/blog.php';
$config = require __DIR__ . '/includes/config.php';
$base   = rtrim($config['site']['url'], '/');

$urls = [
    [$base . '/', '2026-11-08'],
    [$base . '/privacidad.php', '2026-11-08'],
];
$posts = zest_blog_posts();
if ($posts) {
    $urls[] = [$base . '/blog/', $posts[0]['actualizado'] ?? $posts[0]['fecha']];
}
foreach ($posts as $p) {
    $urls[] = [$base . '/blog/' . $p['slug'] . '/', $p['actualizado'] ?? $p['fecha']];
}

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as [$loc, $mod]) {
    echo '  <url><loc>' . htmlspecialchars($loc, ENT_XML1) . '</loc><lastmod>' . $mod . '</lastmod></url>' . "\n";
}
echo '</urlset>' . "\n";

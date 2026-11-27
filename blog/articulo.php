<?php
declare(strict_types=1);

require dirname(__DIR__) . '/includes/functions.php';
require dirname(__DIR__) . '/includes/icons.php';
require dirname(__DIR__) . '/includes/blog.php';
require dirname(__DIR__) . '/includes/blog-covers.php';
$config   = require dirname(__DIR__) . '/includes/config.php';
$site     = $config['site'];
$contact  = $config['contact'];
$services = $config['services'];
$email    = $contact['email_user'] . '@' . $contact['email_domain'];
$base     = rtrim($site['url'], '/');

$slug = preg_replace('/[^a-z0-9-]/', '', (string) ($_GET['slug'] ?? ''));
$post = $slug !== '' ? zest_blog_post($slug) : null;
if (!$post) {
    http_response_code(404);
    header('Location: /blog/', true, 302);
    exit;
}

$serv = zest_blog_service($config, $post['servicio']);
[$cuerpo, $toc] = zest_blog_toc($post['cuerpo']);

// Posts de tarjetas de fidelización: llevan a la landing de Zest Wallet (con marca UTM para medir de qué artículo llega cada visita).
$landing    = !empty($post['landing']);
$landingUrl = 'https://wallet.zest.uy/?utm_source=zest.uy&utm_medium=blog&utm_campaign=' . rawurlencode($post['slug']);
if ($landing) {
    // la mención suelta "wallet.zest.uy" pasa a ser un enlace
    $cuerpo = preg_replace('~(?<![/\w.>])wallet\.zest\.uy~', '<a href="' . e($landingUrl) . '" data-landing target="_blank" rel="noopener">wallet.zest.uy</a>', $cuerpo);
    // un cuadro corto antes del segundo apartado, para quien no llega al final
    $aviso = '<div class="callout"><strong>Zest Wallet</strong>Armá tu tarjeta de fidelización digital con tu marca, para Apple Wallet y Google Wallet. <a href="' . e($landingUrl) . '" data-landing target="_blank" rel="noopener">Mirá cómo funciona</a>.</div>';
    $partes = preg_split('/(?=<h2\b)/', $cuerpo, 3);
    if (count($partes) === 3) {
        $cuerpo = $partes[0] . $partes[1] . $aviso . "\n" . $partes[2];
    }
}
if (!empty($post['faq'])) {
    $toc[] = ['id' => 'preguntas-frecuentes', 'txt' => 'Preguntas frecuentes'];
}
$relacionados = array_slice(array_values(array_filter(
    zest_blog_posts(),
    static fn ($p) => $p['slug'] !== $post['slug']
)), 0, 3);

$pageTitle = $post['titulo'] . ' | Zest';
$pageDesc  = $post['descripcion'];
$canonical = $base . '/blog/' . $post['slug'] . '/';
$ogType    = 'article';

$graph = [
    [
        '@type' => 'BlogPosting',
        'headline' => $post['titulo'],
        'description' => $post['descripcion'],
        'datePublished' => $post['fecha'],
        'dateModified' => $post['actualizado'] ?? $post['fecha'],
        'inLanguage' => 'es-UY',
        'mainEntityOfPage' => $canonical,
        'image' => $base . '/assets/img/og-zest.png',
        'author' => ['@type' => 'Organization', 'name' => $site['name'], 'url' => $base . '/'],
        'publisher' => ['@type' => 'Organization', 'name' => $site['name'], 'url' => $base . '/', 'logo' => ['@type' => 'ImageObject', 'url' => $base . '/assets/img/logo-zest.png']],
    ],
    [
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Inicio', 'item' => $base . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => $base . '/blog/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $post['titulo'], 'item' => $canonical],
        ],
    ],
];
if (!empty($post['faq'])) {
    $graph[] = [
        '@type' => 'FAQPage',
        'mainEntity' => array_map(static fn ($f) => [
            '@type' => 'Question', 'name' => $f['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
        ], $post['faq']),
    ];
}
$schema = ['@context' => 'https://schema.org', '@graph' => $graph];

require dirname(__DIR__) . '/partials/blog-top.php';
?>
<main id="contenido">
  <article class="post">
    <header class="art__head wrap">
      <nav class="crumbs" aria-label="Migas de pan">
        <a href="./">Inicio</a><span>/</span><a href="blog/">Blog</a><span>/</span><a href="blog/?servicio=<?= e($serv['id']) ?>"><?= e($serv['pick']) ?></a>
      </nav>
      <span class="pcard__tag art__tag"><?= ico($serv['icon'], 'ico') ?> <?= e($serv['pick']) ?></span>
      <h1 class="art__title"><?= e($post['titulo']) ?></h1>
      <p class="art__lead"><?= e($post['resumen']) ?></p>
      <div class="art__meta">
        <span class="art__by"><?= zest_mark('#FF5B2E', '#F2EFE6', 'art__mark', '') ?> Equipo Zest</span>
        <span><?= e(zest_blog_fecha($post['fecha'])) ?></span>
        <span><?= (int) $post['minutos'] ?> min de lectura</span>
      </div>
    </header>

    <div class="wrap art__grid">
      <?php if (count($toc) > 2): ?>
      <aside class="toc" aria-label="Contenido del artículo">
        <div class="toc__box">
          <span class="label">En este artículo</span>
          <div class="toc__bar" aria-hidden="true"><i data-progress></i></div>
          <ol>
            <?php foreach ($toc as $t): ?><li><a href="blog/<?= e($post['slug']) ?>/#<?= e($t['id']) ?>"><?= e($t['txt']) ?></a></li><?php endforeach; ?>
          </ol>
        </div>
      </aside>
      <?php endif; ?>

      <div class="prose">
      <div class="art__cover" role="img" aria-label="Ilustración: <?= e($serv['pick']) ?>">
        <?= zest_blog_cover($post['cover'] ?? 'bars') ?>
      </div>

        <?= $cuerpo /* HTML propio del sitio, escrito y revisado por el equipo */ ?>

        <?php if (!empty($post['faq'])): ?>
          <h2 id="preguntas-frecuentes">Preguntas frecuentes</h2>
          <div class="faq__list">
            <?php foreach ($post['faq'] as $f): ?>
              <details class="qa"><summary><?= e($f['q']) ?></summary><p><?= e($f['a']) ?></p></details>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if ($landing): ?>
        <aside class="acta">
          <span class="label"><span>●</span> Zest Wallet</span>
          <h3>Mirá cómo quedaría la tarjeta de tu negocio</h3>
          <p>Diseñala con tu marca, elegí sellos, puntos o cashback y tus clientes la guardan en Apple Wallet o Google Wallet, sin instalar nada.</p>
          <div class="acta__btns">
            <a class="btn" href="<?= e($landingUrl) ?>" data-landing target="_blank" rel="noopener">Ver cómo funciona Zest Wallet <?= ico('arrow', 'btn__ico') ?></a>
            <a class="btn btn--ghost" href="/#contacto">Hablar con Zest</a>
          </div>
        </aside>
        <?php else: ?>
        <aside class="acta">
          <span class="label"><span>●</span> <?= e($serv['pick']) ?></span>
          <h3><?= e($serv['short']) ?></h3>
          <p><?= e($serv['text']) ?></p>
          <a class="btn" href="/#contacto">Quiero hablar con Zest <?= ico('arrow', 'btn__ico') ?></a>
        </aside>
        <?php endif; ?>
      </div>
    </div>
  </article>

  <?php if ($relacionados): ?>
  <section class="bsec bsec--rel">
    <div class="wrap">
      <div class="head"><span class="label"><span>●</span> Seguí leyendo</span><h2 class="h2">Más del blog</h2></div>
      <div class="pgrid">
        <?php
        function zest_mini(array $p, array $config): string {
            $s = zest_blog_service($config, $p['servicio']);
            return '<a class="pcard" href="blog/' . e($p['slug']) . '/"><div class="pcard__cover" style="--g:' . ((crc32($p['slug']) % 60) + 20) . '%"><span class="pcard__ico">' . ico($s['icon'], 'ico') . '</span><span class="pcard__tag">' . e($s['pick']) . '</span></div><div class="pcard__body"><div class="pcard__meta">' . e(zest_blog_fecha($p['fecha'])) . ' · ' . (int) $p['minutos'] . ' min</div><h3 class="pcard__title">' . e($p['titulo']) . '</h3></div></a>';
        }
        foreach ($relacionados as $p) { echo zest_mini($p, $config); }
        ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
</main>
<?php require dirname(__DIR__) . '/partials/blog-bottom.php'; ?>

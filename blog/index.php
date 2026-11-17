<?php
declare(strict_types=1);

require dirname(__DIR__) . '/includes/functions.php';
require dirname(__DIR__) . '/includes/icons.php';
require dirname(__DIR__) . '/includes/blog.php';
$config   = require dirname(__DIR__) . '/includes/config.php';
$site     = $config['site'];
$contact  = $config['contact'];
$services = $config['services'];
$email    = $contact['email_user'] . '@' . $contact['email_domain'];
$base     = rtrim($site['url'], '/');

$posts  = zest_blog_posts();
$filtro = (string) ($_GET['servicio'] ?? '');
$filtroOk = $filtro !== '' && zest_blog_service($config, $filtro);
$lista  = $filtroOk ? array_values(array_filter($posts, static fn ($p) => $p['servicio'] === $filtro)) : $posts;
$dest   = $lista[0] ?? null;
$resto  = array_slice($lista, 1);

$pageTitle = 'Blog de marketing digital en Uruguay | Zest';
$pageDesc  = 'Guías prácticas de Google Ads, Meta Ads, redes sociales, branding, diseño web y más, para negocios de Uruguay.';
$canonical = $base . '/blog/';
$ogType    = 'website';
$schema    = [
    '@context' => 'https://schema.org',
    '@type'    => 'Blog',
    'name'     => 'Blog de Zest',
    'url'      => $canonical,
    'inLanguage' => 'es-UY',
    'publisher' => ['@type' => 'Organization', 'name' => $site['name'], 'url' => $base . '/'],
];

function zest_tarjeta(array $p, array $config, bool $grande = false): string
{
    $s = zest_blog_service($config, $p['servicio']);
    ob_start(); ?>
    <a class="pcard<?= $grande ? ' pcard--big' : '' ?>" href="blog/<?= e($p['slug']) ?>/">
      <div class="pcard__cover" style="--g: <?= (int) (crc32($p['slug']) % 60) + 20 ?>%">
        <span class="pcard__ico"><?= ico($s['icon'], 'ico') ?></span>
        <span class="pcard__tag"><?= e($s['pick']) ?></span>
      </div>
      <div class="pcard__body">
        <div class="pcard__meta"><?= e(zest_blog_fecha($p['fecha'])) ?> · <?= (int) $p['minutos'] ?> min de lectura</div>
        <h3 class="pcard__title"><?= e($p['titulo']) ?></h3>
        <p class="pcard__text"><?= e($p['resumen']) ?></p>
        <span class="pcard__more">Leer artículo <?= ico('arrow', 'btn__ico') ?></span>
      </div>
    </a>
    <?php return (string) ob_get_clean();
}

require dirname(__DIR__) . '/partials/blog-top.php';
?>
<main id="contenido">
  <section class="bhero">
    <div class="wrap">
      <span class="label"><span>●</span> Blog</span>
      <h1 class="h2 bhero__title">Marketing digital para negocios que quieren <em>crecer en serio</em>.</h1>
      <p class="head__lead bhero__lead">Guías claras y sin humo sobre publicidad, redes, marca, web y ventas, escritas desde lo que hacemos todos los días en Uruguay.</p>
      <nav class="chips" aria-label="Filtrar por servicio">
        <a class="chip<?= $filtroOk ? '' : ' is-on' ?>" href="blog/">Todos</a>
        <?php foreach ($services as $s): ?>
          <a class="chip<?= $filtro === $s['id'] ? ' is-on' : '' ?>" href="blog/?servicio=<?= e($s['id']) ?>"><?= e($s['pick']) ?></a>
        <?php endforeach; ?>
      </nav>
    </div>
  </section>

  <section class="bsec">
    <div class="wrap">
      <?php if (!$dest): ?>
        <p class="bempty">Todavía no hay artículos en esta sección. Pronto subimos los primeros.</p>
      <?php else: ?>
        <?= zest_tarjeta($dest, $config, true) ?>
        <?php if ($resto): ?>
          <div class="pgrid">
            <?php foreach ($resto as $p): echo zest_tarjeta($p, $config); endforeach; ?>
          </div>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </section>

  <section class="bcta">
    <div class="wrap bcta__box">
      <div>
        <span class="label"><span>●</span> Hablemos</span>
        <h2 class="h2 bcta__title">¿Querés aplicar esto en tu negocio?</h2>
        <p class="head__lead">Contanos qué necesitás y te respondemos con una propuesta concreta.</p>
      </div>
      <a class="btn" href="/#contacto">Quiero una propuesta <?= ico('arrow', 'btn__ico') ?></a>
    </div>
  </section>
</main>
<?php require dirname(__DIR__) . '/partials/blog-bottom.php'; ?>

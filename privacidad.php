<?php
declare(strict_types=1);

require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/icons.php';
$config  = require __DIR__ . '/includes/config.php';
$site    = $config['site'];
$contact = $config['contact'];
$email   = $contact['email_user'] . '@' . $contact['email_domain'];
$base    = rtrim($site['url'], '/');
?>
<!doctype html>
<html lang="<?= e($site['lang']) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Política de privacidad y cookies | Zest</title>
<meta name="description" content="Qué datos trata Zest, para qué, qué cookies usa la web y cómo ejercer tus derechos.">
<link rel="canonical" href="<?= e($base) ?>/privacidad.php">
<link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@100..125,500..900&family=IBM+Plex+Mono:wght@400;500&family=Instrument+Sans:wght@400..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= e(asset('css/styles.css')) ?>">
<?php require __DIR__ . '/partials/tags.php'; ?>
<style>
  .legal { padding: 40px 0 72px; }
  .legal__body { max-width: 68ch; display: grid; gap: 14px; color: var(--beige-dim); line-height: 1.65; }
  .legal__body h2 { margin: 22px 0 0; font-family: var(--f-display); font-stretch: 108%; font-weight: 700; font-size: 22px; letter-spacing: -.02em; color: var(--white); }
  .legal__body p, .legal__body ul { margin: 0; }
  .legal__body ul { padding-left: 20px; display: grid; gap: 6px; list-style: disc; }
  .legal__body a { color: var(--orange); text-decoration: underline; text-underline-offset: 3px; }
  .legal__back { display: inline-block; margin-bottom: 22px; font-size: 14px; color: var(--beige-dim); }
</style>
</head>
<body>
<header class="header" data-header>
  <div class="wrap header__inner">
    <a class="brand" href="./" aria-label="Zest, inicio">
      <?= zest_mark('#FF5B2E', '#F2EFE6', 'brand__mark', '') ?>
      <span class="brand__word">zest</span>
    </a>
    <a class="btn btn--sm" href="./#contacto">Contacto</a>
  </div>
</header>
<main class="legal">
  <div class="wrap">
    <a class="legal__back" href="./">← Volver al inicio</a>
    <div class="head">
      <p class="label">Legal</p>
      <h1 class="h2">Política de privacidad y cookies</h1>
    </div>
    <div class="legal__body">
      <p>Esta política explica cómo Zest trata los datos personales en <?= e($site['url']) ?>, conforme a la Ley N° 18.331 de Protección de Datos Personales y Acción de &quot;Habeas Data&quot; y su normativa reglamentaria.</p>

      <h2>1. Quién trata los datos</h2>
      <p>Zest, agencia de marketing digital con base en <?= e($contact['city']) ?>. Contacto: <a href="mailto:<?= e($email) ?>"><?= e($email) ?></a>.</p>

      <h2>2. Qué datos tratamos y para qué</h2>
      <ul>
        <li><strong>Formulario de contacto:</strong> nombre, email y los servicios que marcás. Los usamos solo para responderte y coordinar una reunión de diagnóstico. Guardamos una copia del mensaje para no perderlo si falla el correo.</li>
        <li><strong>Medición de la web</strong> (solo si aceptás las cookies): páginas vistas, clics y envíos del formulario, de forma agregada, para entender qué interesa y mejorar el sitio y nuestros anuncios.</li>
      </ul>
      <p>No vendemos datos personales ni los cedemos a terceros para sus propios fines.</p>

      <h2>3. Cookies</h2>
      <p>El sitio funciona sin cookies de medición. Al entrar te pedimos elegir:</p>
      <ul>
        <li><strong>Aceptar:</strong> activamos Google Analytics (medición de visitas), Google Ads (medir conversiones de nuestros anuncios) y Meta Pixel (medir y mejorar anuncios en Facebook e Instagram).</li>
        <li><strong>Solo necesarias:</strong> no se activa ninguna de esas herramientas.</li>
      </ul>
      <p>Podés cambiar tu elección cuando quieras con el botón <strong>Preferencias de cookies</strong> al pie de cada página. Tu elección se guarda en tu navegador. Además, la tipografía se carga desde Google Fonts.</p>

      <h2>4. Con quién los compartimos</h2>
      <ul>
        <li><strong>Google</strong> (Analytics y Ads) y <strong>Meta</strong> (Pixel): solo si aceptás las cookies.</li>
        <li><strong>Hosting</strong> del sitio y servicio de correo, para recibir tus mensajes.</li>
      </ul>

      <h2>5. Plazo de conservación</h2>
      <p>Conservamos los mensajes mientras sean necesarios para atender tu consulta y la relación comercial. Podés pedir que los borremos en cualquier momento.</p>

      <h2>6. Tus derechos</h2>
      <p>Podés acceder a tus datos, rectificarlos, actualizarlos o suprimirlos escribiendo a <a href="mailto:<?= e($email) ?>"><?= e($email) ?></a>. Si considerás que no atendimos tu pedido, podés presentar un reclamo ante la Unidad Reguladora y de Control de Datos Personales (URCDP).</p>

      <p>Última actualización: <?= e($site['updated']) ?>.</p>
    </div>
  </div>
</main>
<?php require __DIR__ . '/partials/cookies.php'; ?>
<script src="<?= e(asset('js/cookies.js')) ?>" defer></script>
<script src="<?= e(asset('js/eventos.js')) ?>" defer></script>
<div style="padding:0 var(--gut) 32px;text-align:center;font:12px var(--f-mono);color:#8F8B80">
  © <?= e(date('Y')) ?> Zest · <button type="button" class="footer__cookies" data-cookies-open>Preferencias de cookies</button>
</div>
</body>
</html>

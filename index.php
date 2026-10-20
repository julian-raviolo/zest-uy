<?php
declare(strict_types=1);

require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/icons.php';
require __DIR__ . '/includes/illustrations.php';
$config = require __DIR__ . '/includes/config.php';

$site     = $config['site'];
$contact  = $config['contact'];
$services = $config['services'];
$steps    = $config['steps'];
$faq      = $config['faq'];
$email    = $contact['email_user'] . '@' . $contact['email_domain'];

$formStatus = $_GET['form'] ?? '';
$token      = csrf_token();
$year       = date('Y');

require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main id="contenido">
<?php
require __DIR__ . '/partials/hero.php';
require __DIR__ . '/partials/servicios.php';
require __DIR__ . '/partials/metodo.php';
require __DIR__ . '/partials/faq.php';
require __DIR__ . '/partials/contacto.php';
?>
</main>
<?php require __DIR__ . '/partials/footer.php'; ?>

<?php
// Cabecera común del blog. Espera: $pageTitle, $pageDesc, $canonical, $schema (array|null), $ogType.
$base = rtrim($site['url'], '/');
?>
<!doctype html>
<html lang="<?= e($site['lang']) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<base href="/">
<title><?= e($pageTitle) ?></title>
<meta name="description" content="<?= e($pageDesc) ?>">
<link rel="canonical" href="<?= e($canonical) ?>">
<meta property="og:type" content="<?= e($ogType ?? 'website') ?>">
<meta property="og:title" content="<?= e($pageTitle) ?>">
<meta property="og:description" content="<?= e($pageDesc) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta property="og:image" content="<?= e($base) ?>/assets/img/og-zest.png">
<meta property="og:locale" content="es_UY">
<link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@100..125,500..900&family=IBM+Plex+Mono:wght@400;500&family=Instrument+Sans:wght@400..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= e(asset('css/styles.css')) ?>">
<link rel="stylesheet" href="<?= e(asset('css/blog.css')) ?>">
<?php if (!empty($schema)): ?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
<?php endif; ?>
<?php require __DIR__ . '/tags.php'; ?>
</head>
<body>
<?php require __DIR__ . '/header.php'; ?>

<?php
// Datos estructurados (schema.org): la agencia, sus servicios, el sitio y las preguntas frecuentes.
$base   = rtrim($site['url'], '/');
$sameAs = array_values(array_filter([
    $contact['instagram'] ? 'https://instagram.com/' . $contact['instagram'] : '',
    $contact['linkedin'] ?? '',
]));
$schema = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'       => ['Organization', 'ProfessionalService'],
            '@id'         => $base . '/#zest',
            'name'        => $site['name'],
            'alternateName' => 'Zest Marketing',
            'url'         => $base . '/',
            'logo'        => $base . '/assets/img/logo-zest.png',
            'image'       => $base . '/assets/img/og-zest.png',
            'description' => $site['description'],
            'email'       => $email,
            'areaServed'  => ['@type' => 'Country', 'name' => 'Uruguay'],
            'address'     => ['@type' => 'PostalAddress', 'addressCountry' => 'UY'],
            'sameAs'      => $sameAs,
            'knowsAbout'  => ['Marketing digital', 'Google Ads', 'Meta Ads', 'Redes sociales', 'Branding', 'Diseño web', 'CRM', 'SEO'],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name'  => 'Servicios de marketing digital',
                'itemListElement' => array_map(static fn ($s) => [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type'       => 'Service',
                        'name'        => $s['name'],
                        'description' => $s['text'],
                        'areaServed'  => 'UY',
                        'provider'    => ['@id' => $base . '/#zest'],
                    ],
                ], $services),
            ],
        ],
        [
            '@type'     => 'WebSite',
            '@id'       => $base . '/#web',
            'url'       => $base . '/',
            'name'      => $site['name'],
            'inLanguage'=> $site['lang'],
            'publisher' => ['@id' => $base . '/#zest'],
        ],
        [
            '@type'        => 'WebPage',
            '@id'          => $base . '/#inicio',
            'url'          => $base . '/',
            'name'         => $site['title'],
            'description'  => $site['description'],
            'inLanguage'   => $site['lang'],
            'isPartOf'     => ['@id' => $base . '/#web'],
            'about'        => ['@id' => $base . '/#zest'],
            'dateModified' => $site['updated'],
        ],
        [
            '@type'      => 'FAQPage',
            '@id'        => $base . '/#preguntas',
            'mainEntity' => array_map(static fn ($f) => [
                '@type' => 'Question',
                'name'  => $f['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
            ], $faq),
        ],
    ],
];
?>
<!doctype html>
<html lang="<?= e($site['lang']) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, interactive-widget=resizes-content">
<title><?= e($site['title']) ?></title>
<meta name="description" content="<?= e($site['description']) ?>">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="<?= e($base) ?>/">
<link rel="alternate" hreflang="es-UY" href="<?= e($base) ?>/">
<link rel="alternate" hreflang="x-default" href="<?= e($base) ?>/">
<meta name="theme-color" content="#0B0B0A">
<meta name="color-scheme" content="dark">
<meta name="geo.region" content="UY">

<meta property="og:type" content="website">
<meta property="og:site_name" content="Zest">
<meta property="og:locale" content="es_UY">
<meta property="og:title" content="<?= e($site['title']) ?>">
<meta property="og:description" content="<?= e($site['description']) ?>">
<meta property="og:url" content="<?= e($base) ?>/">
<meta property="og:image" content="<?= e($base) ?>/assets/img/og-zest.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Zest, agencia de marketing digital en Uruguay: un solo equipo">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($site['title']) ?>">
<meta name="twitter:description" content="<?= e($site['description']) ?>">
<meta name="twitter:image" content="<?= e($base) ?>/assets/img/og-zest.png">

<link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@100..125,500..900&family=IBM+Plex+Mono:wght@400;500&family=Instrument+Sans:wght@400..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= e(asset('css/styles.css')) ?>">

<script type="application/ld+json">
<?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_PRETTY_PRINT) ?>
</script>
</head>
<body>
<a class="skip" href="#contenido">Saltar al contenido</a>

<?php
declare(strict_types=1);

/**
 * Íconos de línea de Zest (32×32, trazo 1.6) con partes animables.
 * - Clase "d": se dibuja cuando el ícono entra en pantalla (.is-in en un contenedor).
 * - Clases "i-*": se mueven al pasar el mouse o tocar (.ico-host:hover / .is-active).
 */
function ico(string $name, string $class = 'ico'): string
{
    $p = [
        'ads' => '
            <path class="d" d="M5 27h22"/>
            <path class="d i-bar" style="--b:0" d="M9 23v-5"/>
            <path class="d i-bar" style="--b:1" d="M15 23v-8"/>
            <path class="d i-bar" style="--b:2" d="M21 23v-11"/>
            <g class="i-arrow"><path class="d" d="M6 13l6-5 4 3 9-7"/><path class="d" d="M21 4h4v4"/></g>',
        'redes' => '
            <path class="d" d="M5 7h22v15H15l-6 5v-5H5z"/>
            <path class="i-heart" d="M16 18.5c-2.6-1.7-4-3.1-4-4.6 0-1.2.9-2.1 2-2.1.9 0 1.6.5 2 1.2.4-.7 1.1-1.2 2-1.2 1.1 0 2 .9 2 2.1 0 1.5-1.4 2.9-4 4.6z"/>',
        'branding' => '
            <g class="i-nib"><path class="d" d="M16 4l7.5 11L16 28 8.5 15z"/><path class="d" d="M16 17v11"/><circle class="fill" cx="16" cy="15.5" r="1.8"/></g>
            <path class="d" d="M4 9h5M23 9h5"/>',
        'web' => '
            <rect class="d" x="4" y="6" width="24" height="18" rx="2.5"/>
            <path class="d" d="M4 11h24"/>
            <path class="d" d="M8 15h8M8 19h5"/>
            <path class="i-cursor" d="M20 15l7 2.6-3 1.1-1.1 3z"/>',
        'ventas' => '
            <path class="d" d="M4 7h24l-9 10v7l-6 3V17z"/>
            <circle class="i-drop" cx="16" cy="3" r="1.6"/>',
        'consultoria' => '
            <circle class="d" cx="16" cy="16" r="11"/>
            <path class="d" d="M16 3v2M16 27v2M3 16h2M27 16h2"/>
            <path class="i-needle" d="M19.5 12.5l-2.2 5.8-5.8 2.2 2.2-5.8z"/>',
        'ia' => '
            <path class="d i-star" d="M14 5l2.4 6.6L23 14l-6.6 2.4L14 23l-2.4-6.6L5 14l6.6-2.4z"/>
            <path class="i-s1" d="M24.5 19.5l1 2.5 2.5 1-2.5 1-1 2.5-1-2.5-2.5-1 2.5-1z"/>
            <path class="i-s2" d="M24 4l.8 2 2 .8-2 .8-.8 2-.8-2-2-.8 2-.8z"/>',
        'escuchar' => '
            <circle class="d" cx="9" cy="16" r="2.2"/>
            <path class="d i-w1" d="M14 11a7 7 0 0 1 0 10"/>
            <path class="d i-w2" d="M18.5 7.5a12 12 0 0 1 0 17"/>
            <path class="d i-w3" d="M23 4a17 17 0 0 1 0 24"/>',
        'planear' => '
            <circle class="d" cx="7" cy="24" r="2.5"/>
            <path class="d i-route" d="M9.5 24H18a4 4 0 0 0 0-8h-6a4 4 0 0 1 0-8h9"/>
            <path class="d" d="M24 4v9"/><path class="i-flag" d="M24 4h5l-1.5 2.5L29 9h-5z"/>',
        'hacer' => '
            <path class="d i-bolt" d="M18 3L7 18h8l-2 11 12-16h-8z"/>',
        'medir' => '
            <path class="d" d="M4 22a12 12 0 0 1 24 0"/>
            <path class="d" d="M7.5 13.5l1.6 1.2M16 9v2M24.5 13.5l-1.6 1.2"/>
            <path class="i-gauge" d="M16 22l6-6"/>
            <circle cx="16" cy="22" r="1.8" class="fill"/>',
        'arrow' => '<path d="M6 16h20"/><path d="M19 9l7 7-7 7"/>',
        'check' => '<path d="M7 16.5l6 6L25 10"/>',
        'mail' => '<rect x="4" y="7" width="24" height="18" rx="2"/><path d="M5 8l11 9 11-9"/>',
        'instagram' => '<rect x="5" y="5" width="22" height="22" rx="6"/><circle cx="16" cy="16" r="5"/><path d="M22.5 9.5h.01"/>',
    ];
    $inner = str_replace('class="d', 'pathLength="1" class="d', $p[$name] ?? '');
    return '<svg class="' . e($class) . ' ico--' . e($name) . '" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $inner . '</svg>';
}

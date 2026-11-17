<?php
declare(strict_types=1);

/** Portadas ilustradas del blog (SVG propio, con los colores de la marca). */
function zest_blog_cover(string $key): string
{
    $o = '#FF5B2E'; $b = '#F2EFE6';
    $head = '<svg class="cover" viewBox="0 0 840 360" preserveAspectRatio="xMidYMid slice" aria-hidden="true">';
    switch ($key) {
        case 'calendar':
            $s = '<g fill="none" stroke="' . $b . '" stroke-opacity=".35" stroke-width="2">';
            $on = [2, 5, 8, 11, 15, 19, 23, 26];
            for ($i = 0; $i < 28; $i++) {
                $x = 150 + ($i % 7) * 76; $y = 50 + intdiv($i, 7) * 68;
                $hit = in_array($i, $on, true);
                $s .= '<rect x="' . $x . '" y="' . $y . '" width="62" height="54" rx="10"' . ($hit ? ' fill="' . $o . '" stroke="' . $o . '" fill-opacity=".85"' : '') . '/>';
            }
            return $head . $s . '</g><circle cx="680" cy="300" r="26" fill="#151513" stroke="' . $b . '" stroke-opacity=".3"/><path d="M670 300l8 8 14-16" fill="none" stroke="' . $o . '" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
        case 'brand':
            return $head . '<circle cx="330" cy="180" r="100" fill="' . $o . '" fill-opacity=".9"/><circle cx="430" cy="180" r="100" fill="' . $b . '" fill-opacity=".85" style="mix-blend-mode:normal"/><circle cx="530" cy="180" r="100" fill="#1C1C19" stroke="' . $b . '" stroke-opacity=".5" stroke-width="2"/><text x="530" y="205" text-anchor="middle" font-family="Archivo, sans-serif" font-weight="800" font-size="76" fill="' . $b . '">Aa</text><polygon points="296,150 372,150 352,172 276,172" fill="#0B0B0A"/><polygon points="316,180 346,180 314,212 284,212" fill="#0B0B0A"/></svg>';
        case 'web':
            return $head . '<rect x="190" y="50" width="460" height="260" rx="18" fill="#151513" stroke="' . $b . '" stroke-opacity=".4" stroke-width="2"/><path d="M190 90h460" stroke="' . $b . '" stroke-opacity=".25" stroke-width="2"/><circle cx="216" cy="70" r="5" fill="' . $o . '"/><circle cx="236" cy="70" r="5" fill="' . $b . '" fill-opacity=".4"/><circle cx="256" cy="70" r="5" fill="' . $b . '" fill-opacity=".4"/><rect x="226" y="120" width="250" height="20" rx="6" fill="' . $b . '" fill-opacity=".85"/><rect x="226" y="152" width="190" height="12" rx="6" fill="' . $b . '" fill-opacity=".35"/><rect x="226" y="176" width="160" height="12" rx="6" fill="' . $b . '" fill-opacity=".35"/><rect x="226" y="214" width="130" height="38" rx="19" fill="' . $o . '"/><rect x="500" y="120" width="110" height="132" rx="12" fill="' . $o . '" fill-opacity=".25" stroke="' . $o . '" stroke-width="2"/><rect x="620" y="150" width="60" height="150" rx="12" fill="#0B0B0A" stroke="' . $b . '" stroke-opacity=".6" stroke-width="2"/><rect x="632" y="168" width="36" height="8" rx="4" fill="' . $b . '" fill-opacity=".6"/><rect x="632" y="262" width="36" height="16" rx="8" fill="' . $o . '"/></svg>';
        case 'wallet':
            return $head . '<rect x="320" y="24" width="200" height="320" rx="30" fill="#0B0B0A" stroke="' . $b . '" stroke-opacity=".6" stroke-width="3"/><rect x="342" y="62" width="156" height="96" rx="14" fill="' . $o . '"/><g fill="#0B0B0A" fill-opacity=".85"><circle cx="372" cy="124" r="9"/><circle cx="402" cy="124" r="9"/><circle cx="432" cy="124" r="9"/></g><g fill="none" stroke="#0B0B0A" stroke-opacity=".6" stroke-width="2.5"><circle cx="462" cy="124" r="9"/></g><rect x="342" y="178" width="156" height="14" rx="7" fill="' . $b . '" fill-opacity=".3"/><rect x="342" y="204" width="110" height="14" rx="7" fill="' . $b . '" fill-opacity=".2"/><rect x="342" y="244" width="156" height="14" rx="7" fill="' . $b . '" fill-opacity=".2"/><circle cx="600" cy="120" r="34" fill="#151513" stroke="' . $b . '" stroke-opacity=".3"/><path d="M586 120l10 10 18-20" fill="none" stroke="' . $o . '" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>';
        default: // bars
            return $head . '<g fill="none" stroke="' . $b . '" stroke-opacity=".9" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M120 300h600" stroke-opacity=".35"/><rect x="170" y="210" width="64" height="90" rx="8" fill="' . $o . '" fill-opacity=".25" stroke="' . $o . '"/><rect x="274" y="170" width="64" height="130" rx="8" fill="' . $o . '" fill-opacity=".35" stroke="' . $o . '"/><rect x="378" y="125" width="64" height="175" rx="8" fill="' . $o . '" fill-opacity=".5" stroke="' . $o . '"/><rect x="482" y="80" width="64" height="220" rx="8" fill="' . $o . '" stroke="' . $o . '"/><path d="M150 190l124-52 104 22 168-86" stroke-width="3"/></g></svg>';
    }
}

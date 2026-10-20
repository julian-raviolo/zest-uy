<?php
declare(strict_types=1);

/**
 * Ilustraciones de Zest, dibujadas en código con los colores de marca.
 * Cada una muestra el resultado de un servicio. Los colores salen de la clase
 * .art--papel / .art--mandarina / .art--tinta del contenedor (ver styles.css):
 *   k-bg = fondo · k-ink = trazo principal · k-acc = acento · k-soft = superficie · k-mute = texto secundario
 */
function illustration(string $id): string
{
    switch ($id) {

        // Mensajes de clientes llegando por WhatsApp o Instagram
        case 'consultas':
            return <<<SVG
<svg viewBox="0 0 400 400" role="img" aria-label="Mensajes de clientes interesados llegando a un chat">
  <rect class="k-bg" width="400" height="400"/>
  <g class="a-pop" style="--k:0"><rect class="k-acc" x="28" y="56" width="250" height="64" rx="20"/><text class="t k-ink" x="50" y="96">Hola, ¿cuánto sale?</text></g>
  <g class="a-pop" style="--k:1"><rect class="k-acc" x="28" y="140" width="226" height="64" rx="20"/><text class="t k-ink" x="50" y="180">¿Hacen envíos?</text></g>
  <g class="a-pop" style="--k:2"><rect class="k-ink" x="120" y="224" width="252" height="64" rx="20"/><text class="t k-acc" x="144" y="264">¡Sí! Te paso info</text></g>
  <g class="a-pop" style="--k:3"><rect class="k-acc" x="28" y="308" width="214" height="64" rx="20"/><text class="t k-ink" x="50" y="348">Quiero reservar</text></g>
  <g class="a-pulse"><circle class="k-ink" cx="350" cy="72" r="28"/><text class="t t--b k-acc" x="350" y="80" text-anchor="middle">+3</text></g>
</svg>
SVG;

        // Un anuncio en el buscador y las consultas que crecen
        case 'ads':
            return <<<SVG
<svg viewBox="0 0 600 450" role="img" aria-label="Anuncio patrocinado en un buscador y un gráfico de consultas que crece semana a semana">
  <rect class="k-bg" width="600" height="450"/>
  <rect class="k-soft" x="40" y="36" width="520" height="56" rx="28"/>
  <circle class="s-ink" cx="76" cy="62" r="10" fill="none" stroke-width="3"/>
  <path class="s-ink" d="M84 70 L94 80" stroke-width="3" stroke-linecap="round"/>
  <text class="t k-ink" x="108" y="71">zapatillas para correr</text>
  <rect class="k-soft" x="40" y="110" width="520" height="140" rx="16"/>
  <rect class="k-ink" x="64" y="130" width="110" height="28" rx="14"/>
  <text class="t t--s k-bg" x="119" y="149" text-anchor="middle">Patrocinado</text>
  <rect class="k-acc" x="64" y="172" width="300" height="22" rx="4"/>
  <rect class="k-ink" x="64" y="206" width="420" height="10" rx="5" opacity=".25"/>
  <rect class="k-ink" x="64" y="224" width="340" height="10" rx="5" opacity=".25"/>
  <g class="a-click"><path class="k-ink" d="M440 186 L440 230 L452 219 L461 238 L469 234 L460 216 L476 215 Z"/><circle class="s-acc" cx="440" cy="186" r="16" fill="none" stroke-width="3"/></g>
  <g class="a-bars">
    <rect class="k-ink" x="40"  y="350" width="62" height="45"  style="--k:0"/>
    <rect class="k-ink" x="118" y="335" width="62" height="60"  style="--k:1"/>
    <rect class="k-ink" x="196" y="340" width="62" height="55"  style="--k:2"/>
    <rect class="k-ink" x="274" y="315" width="62" height="80"  style="--k:3"/>
    <rect class="k-ink" x="352" y="295" width="62" height="100" style="--k:4"/>
    <rect class="k-acc" x="430" y="270" width="62" height="125" style="--k:5"/>
  </g>
  <text class="t t--s k-mute" x="40" y="428">Consultas por semana</text>
</svg>
SVG;

        // Un perfil de Instagram con publicaciones y mensajes
        case 'redes':
            $cells = '';
            $fills = ['k-ink', 'k-bg', 'k-soft', 'k-bg', 'k-ink', 'k-soft', 'k-soft', 'k-ink', 'k-bg', 'k-ink', 'k-soft', 'k-bg', 'k-bg', 'k-ink', 'k-soft'];
            foreach ($fills as $n => $f) {
                $x = 220 + ($n % 3) * 56;
                $y = 108 + intdiv($n, 3) * 56;
                $cells .= '<rect class="' . $f . '" x="' . $x . '" y="' . $y . '" width="52" height="52"/>';
            }
            return <<<SVG
<svg viewBox="0 0 600 450" role="img" aria-label="Perfil de una marca en redes sociales con publicaciones, me gusta y mensajes de clientes">
  <rect class="k-bg" width="600" height="450"/>
  <rect class="k-ink" x="200" y="22" width="200" height="410" rx="30"/>
  <rect class="k-acc" x="212" y="40" width="176" height="374" rx="18"/>
  <circle class="k-bg" cx="240" cy="74" r="16"/>
  <rect class="k-ink" x="266" y="64" width="84" height="8" rx="4"/>
  <rect class="k-ink" x="266" y="80" width="54" height="8" rx="4" opacity=".4"/>
  {$cells}
  <g class="a-float" style="--k:0">
    <rect class="k-acc" x="40" y="120" width="140" height="52" rx="26"/>
    <path class="k-bg" d="M70 156 C58 148 52 141 52 134 C52 128 57 124 62 124 C66 124 69 126 70 129 C71 126 74 124 78 124 C83 124 88 128 88 134 C88 141 82 148 70 156 Z"/>
    <text class="t t--s k-ink" x="98" y="152">Me gusta</text>
  </g>
  <g class="a-float" style="--k:1">
    <rect class="k-ink" x="410" y="262" width="160" height="52" rx="26"/>
    <text class="t t--s k-acc" x="490" y="294" text-anchor="middle">¿Tienen stock?</text>
  </g>
</svg>
SVG;

        // Marca de ejemplo: construcción del logo, paleta, tipografía y una tarjeta
        case 'branding':
            return <<<SVG
<svg viewBox="0 0 600 450" role="img" aria-label="Ejemplo de identidad de marca: logo en construcción, paleta de colores, tipografía y tarjeta personal">
  <rect class="k-bg" width="600" height="450"/>
  <g class="s-ink" fill="none" stroke-width="1" opacity=".18">
    <circle cx="170" cy="170" r="128"/><circle cx="170" cy="170" r="64"/>
    <path d="M30 170 H310 M170 30 V310 M80 80 L260 260 M260 80 L80 260"/>
  </g>
  <circle class="s-acc a-draw" cx="170" cy="170" r="96" fill="none" stroke-width="2" pathLength="1"/>
  <g class="a-rise" style="--k:1"><circle class="k-acc" cx="170" cy="170" r="84"/></g>
  <g class="a-rise" style="--k:2"><path class="k-bg" d="M112 192 A58 58 0 0 1 228 192 Z"/></g>
  <g class="a-rise" style="--k:3"><rect class="k-bg" x="104" y="204" width="132" height="10" rx="5"/></g>
  <g class="a-rise" style="--k:4">
    <text class="t t--brand k-ink" x="58" y="372">aurora</text>
    <text class="t t--s k-mute" x="60" y="404">Marca de ejemplo</text>
  </g>
  <g class="a-rise" style="--k:2"><rect class="k-acc" x="380" y="40" width="180" height="50" rx="10"/></g>
  <g class="a-rise" style="--k:3"><rect class="k-ink" x="380" y="98" width="180" height="50" rx="10"/></g>
  <g class="a-rise" style="--k:4"><rect class="k-soft" x="380" y="156" width="180" height="50" rx="10"/></g>
  <g class="a-rise" style="--k:5"><text class="t t--display2 k-ink" x="378" y="290">Aa</text></g>
  <g class="a-float" style="--k:0">
    <g transform="rotate(-8 470 370)">
      <rect class="k-ink" x="390" y="320" width="170" height="100" rx="10"/>
      <circle class="k-acc" cx="424" cy="356" r="18"/>
      <path class="k-ink" d="M411 362 A13 13 0 0 1 437 362 Z"/>
      <text class="t t--xs k-bg" x="452" y="362">aurora</text>
      <rect class="k-bg" x="408" y="392" width="90" height="6" rx="3" opacity=".5"/>
    </g>
  </g>
</svg>
SVG;

        // Un sitio en computadora y en celular
        case 'web':
            return <<<SVG
<svg viewBox="0 0 600 450" role="img" aria-label="Un sitio web que se ve bien en la computadora y en el celular">
  <rect class="k-bg" width="600" height="450"/>
  <rect class="k-soft" x="30" y="40" width="430" height="340" rx="14"/>
  <rect class="k-ink" x="30" y="40" width="430" height="38" rx="14"/>
  <rect class="k-ink" x="30" y="60" width="430" height="18"/>
  <circle class="k-acc" cx="54" cy="59" r="6"/><circle class="k-bg" cx="74" cy="59" r="6"/><circle class="k-bg" cx="94" cy="59" r="6"/>
  <g class="a-rise" style="--k:0">
    <rect class="k-acc" x="50" y="96" width="390" height="140"/>
    <rect class="k-ink" x="72" y="122" width="230" height="22"/>
    <rect class="k-ink" x="72" y="152" width="160" height="22"/>
    <rect class="k-ink" x="72" y="194" width="110" height="28"/>
  </g>
  <g class="a-rise" style="--k:1">
    <rect class="k-bg" x="50" y="252" width="122" height="108"/><rect class="k-bg" x="184" y="252" width="122" height="108"/><rect class="k-bg" x="318" y="252" width="122" height="108"/>
    <rect class="k-ink" x="64" y="270" width="70" height="10" opacity=".5"/><rect class="k-ink" x="198" y="270" width="70" height="10" opacity=".5"/><rect class="k-ink" x="332" y="270" width="70" height="10" opacity=".5"/>
  </g>
  <g class="a-rise" style="--k:2">
    <rect class="k-ink" x="420" y="150" width="150" height="280" rx="24"/>
    <rect class="k-bg" x="431" y="170" width="128" height="242" rx="14"/>
    <rect class="k-acc" x="439" y="180" width="112" height="96"/>
    <rect class="k-ink" x="449" y="196" width="76" height="12"/>
    <rect class="k-ink" x="449" y="214" width="52" height="12"/>
    <rect class="k-ink" x="449" y="244" width="50" height="18"/>
    <rect class="k-soft" x="439" y="286" width="112" height="54"/>
    <rect class="k-soft" x="439" y="348" width="112" height="54"/>
  </g>
</svg>
SVG;

        // Embudo de ventas: de visitas a clientes
        case 'ventas':
            $labels = ['Visitas', 'Consultas', 'Propuestas', 'Clientes'];
            $fills  = [['k-ink', 'k-acc', '1'], ['k-soft', 'k-acc', '1'], ['k-acc', 'k-ink', '1'], ['k-acc', 'k-ink', '1']];
            $bands  = '';
            foreach ($labels as $i => $label) {
                $y = 40 + $i * 80;
                $t = 500 - 110 * $i;
                $b = 500 - 110 * ($i + 1) + 20;
                $pts = (300 - $t / 2) . ",$y " . (300 + $t / 2) . ",$y " . (300 + $b / 2) . ',' . ($y + 70) . ' ' . (300 - $b / 2) . ',' . ($y + 70);
                [$f, $tc, $op] = $fills[$i];
                $bands .= '<g class="a-rise" style="--k:' . $i . '"><polygon class="' . $f . '" opacity="' . $op . '" points="' . $pts . '"/>'
                        . '<text class="t t--b ' . $tc . '" x="300" y="' . ($y + 43) . '" text-anchor="middle">' . $label . '</text></g>';
            }
            return <<<SVG
<svg viewBox="0 0 600 450" role="img" aria-label="Embudo de ventas: visitas, consultas, propuestas y clientes">
  <rect class="k-bg" width="600" height="450"/>
  {$bands}
  <g class="a-drop"><circle class="k-ink" cx="300" cy="24" r="7" style="--k:0"/><circle class="k-ink" cx="300" cy="24" r="7" style="--k:1"/><circle class="k-ink" cx="300" cy="24" r="7" style="--k:2"/></g>
  <text class="t t--s k-ink" x="300" y="410" text-anchor="middle">Ninguna consulta queda sin respuesta</text>
</svg>
SVG;

        // Hoja de ruta: un punto recorre el camino de diagnóstico a resultados
        case 'consultoria':
            $stops = [
                [50, 380, 'Diagnóstico', 40, 398, 132],
                [160, 315, 'Prioridades', 176, 330, 130],
                [270, 250, 'Plan', 228, 196, 72],
                [395, 181, 'Acción', 410, 196, 88],
            ];
            $nodes = '';
            foreach ($stops as $k => [$x, $y, $label, $lx, $ly, $lw]) {
                $nodes .= '<g class="a-rise" style="--k:' . ($k + 1) . '">'
                        . '<circle class="k-bg s-acc" cx="' . $x . '" cy="' . $y . '" r="13" stroke-width="3"/>'
                        . '<circle class="k-acc" cx="' . $x . '" cy="' . $y . '" r="5"/>'
                        . '<rect class="k-soft" x="' . $lx . '" y="' . $ly . '" width="' . $lw . '" height="34" rx="17"/>'
                        . '<text class="t t--s k-ink" x="' . ($lx + $lw / 2) . '" y="' . ($ly + 23) . '" text-anchor="middle">' . $label . '</text></g>';
            }
            return <<<SVG
<svg viewBox="0 0 600 450" role="img" aria-label="Hoja de ruta con diagnóstico, prioridades, plan, acción y resultados, con un punto que recorre el camino">
  <rect class="k-bg" width="600" height="450"/>
  <path id="rm-track" class="s-soft" d="M50 380 C 170 380, 150 250, 270 250 S 390 120, 550 90" fill="none" stroke-width="14" stroke-linecap="round"/>
  <path class="s-acc a-draw" d="M50 380 C 170 380, 150 250, 270 250 S 390 120, 550 90" fill="none" stroke-width="3" stroke-linecap="round" pathLength="1"/>
  <path class="s-ink" d="M50 380 C 170 380, 150 250, 270 250 S 390 120, 550 90" fill="none" stroke-width="1.5" stroke-dasharray="2 10" stroke-linecap="round" opacity=".35"/>
  {$nodes}
  <g class="a-rise" style="--k:5">
    <path class="s-ink" d="M550 90 V30" stroke-width="3" stroke-linecap="round"/>
    <path class="k-acc a-wave" d="M550 30 h40 l-10 13 l10 13 h-40 z"/>
    <rect class="k-soft" x="410" y="104" width="122" height="34" rx="17"/>
    <text class="t t--s k-ink" x="471" y="127" text-anchor="middle">Resultados</text>
  </g>
  <g class="a-travel">
    <circle class="k-acc" r="18" opacity=".22"><animateMotion dur="6s" repeatCount="indefinite" calcMode="spline" keyTimes="0;1" keySplines=".45 0 .25 1"><mpath href="#rm-track"/></animateMotion></circle>
    <circle class="k-ink" r="7"><animateMotion dur="6s" repeatCount="indefinite" calcMode="spline" keyTimes="0;1" keySplines=".45 0 .25 1"><mpath href="#rm-track"/></animateMotion></circle>
  </g>
</svg>
SVG;

        // Automatizaciones con IA: un asistente conectado a los canales
        case 'ia':
            $links = [
                ['M250 205 C 222 205, 248 92, 220 92', 60, 60, 'WhatsApp'],
                ['M250 245 C 222 245, 248 352, 220 352', 60, 320, 'Instagram'],
                ['M350 205 C 378 205, 352 92, 380 92', 380, 60, 'CRM'],
                ['M350 245 C 378 245, 352 352, 380 352', 380, 320, 'Email'],
            ];
            $wires = ''; $apps = '';
            foreach ($links as $k => [$d, $x, $y, $label]) {
                $wires .= '<path class="s-soft" d="' . $d . '" fill="none" stroke-width="3"/>'
                        . '<path class="s-acc a-flow" style="--k:' . $k . '" d="' . $d . '" fill="none" stroke-width="3" stroke-dasharray="6 12" stroke-linecap="round"/>';
                $apps  .= '<g class="a-rise" style="--k:' . ($k + 1) . '"><rect class="k-soft" x="' . $x . '" y="' . $y . '" width="160" height="64" rx="18"/>'
                        . '<circle class="k-acc" cx="' . ($x + 28) . '" cy="' . ($y + 32) . '" r="8"/>'
                        . '<text class="t k-ink" x="' . ($x + 48) . '" y="' . ($y + 39) . '">' . $label . '</text></g>';
            }
            return <<<SVG
<svg viewBox="0 0 600 450" role="img" aria-label="Asistente con inteligencia artificial conectado a WhatsApp, Instagram, el CRM y el email">
  <rect class="k-bg" width="600" height="450"/>
  {$wires}
  {$apps}
  <g class="a-pulse">
    <rect class="k-acc" x="250" y="175" width="100" height="100" rx="26"/>
    <path class="k-bg" d="M300 196 l7 20 20 7 -20 7 -7 20 -7 -20 -20 -7 20 -7 z"/>
    <path class="k-bg" d="M327 236 l2.5 6 6 2.5 -6 2.5 -2.5 6 -2.5 -6 -6 -2.5 6 -2.5 z"/>
  </g>
</svg>
SVG;
    }
    return '';
}

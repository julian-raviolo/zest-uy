<section class="section pf" id="portafolio" aria-labelledby="portafolio-title">
  <div class="wrap">
    <div class="head">
      <p class="label" data-reveal>Portafolio</p>
      <h2 class="h2" id="portafolio-title" data-reveal style="--d:60ms">Imágenes que venden antes de hablar</h2>
    </div>
    <div class="pf__filters" role="group" aria-label="Filtrar portafolio" data-reveal>
      <button type="button" class="pf__chip is-on" data-filter="all" aria-pressed="true">Todo</button>
      <?php foreach ($pfCats as $k => $label): ?>
      <button type="button" class="pf__chip" data-filter="<?= e($k) ?>" aria-pressed="false"><?= e($label) ?></button>
      <?php endforeach; ?>
    </div>
    <ul class="pf__grid">
      <?php $count = []; foreach ($portfolio as $i => $p):
          $base = 'assets/img/portafolio/' . $p['file'];
          $label = $pfCats[$p['cat']] ?? '';
          $count[$p['cat']] = ($count[$p['cat']] ?? 0) + 1; ?>
      <li class="pf__item" data-cat="<?= e($p['cat']) ?>">
        <button class="pf__btn" type="button" data-pf data-full="<?= e($base) ?>-1600.webp" data-cap="<?= e($label) ?>" aria-label="Ver en grande: <?= e($label) ?> <?= $count[$p['cat']] ?>">
          <img class="pf__img" src="<?= e($base) ?>-800.webp" width="<?= (int) $p['w'] ?>" height="<?= (int) $p['h'] ?>"
               alt="<?= e($label) ?>: fotografía de Zest" loading="lazy" decoding="async">
          <span class="pf__shade" aria-hidden="true"></span>
          <span class="pf__meta"><span class="pf__n"><?= e($label) ?></span></span>
        </button>
      </li>
      <?php endforeach; ?>
    </ul>
    <p class="pf__cta" data-reveal>
      <a class="btn" href="#contacto">Quiero algo así <?= ico('arrow', 'btn__ico') ?></a>
    </p>
  </div>
</section>

<div class="lb" id="lb" role="dialog" aria-modal="true" aria-label="Visor de imágenes" hidden>
  <button class="lb__x" type="button" data-lb="close" aria-label="Cerrar">×</button>
  <button class="lb__nav lb__nav--prev" type="button" data-lb="prev" aria-label="Anterior">‹</button>
  <figure class="lb__fig"><img class="lb__img" alt=""><figcaption class="lb__cap"></figcaption></figure>
  <button class="lb__nav lb__nav--next" type="button" data-lb="next" aria-label="Siguiente">›</button>
</div>

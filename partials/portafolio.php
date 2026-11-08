<section class="section pf" id="portafolio" aria-labelledby="portafolio-title">
  <div class="wrap">
    <div class="head">
      <p class="label" data-reveal>Portafolio</p>
      <h2 class="h2" id="portafolio-title" data-reveal style="--d:60ms">Imágenes que venden antes de hablar</h2>
    </div>
    <ul class="pf__grid" aria-label="Trabajos de fotografía">
      <?php foreach ($portfolio as $p): $base = 'assets/img/portafolio/' . $p['file']; ?>
      <li class="pf__item">
        <button class="pf__btn" type="button" data-pf data-full="<?= e($base) ?>-1600.webp" aria-label="Ver en grande: <?= e($p['alt']) ?>">
          <img class="pf__img" src="<?= e($base) ?>-sq.webp" width="640" height="640" alt="<?= e($p['alt']) ?>" loading="lazy" decoding="async">
          <span class="pf__shade" aria-hidden="true"></span>
        </button>
      </li>
      <?php endforeach; ?>
      <li class="pf__item"><a class="pf__more" href="#contacto"><span>Quiero algo así</span><?= ico('arrow', 'pf__more-ico') ?></a></li>
    </ul>
  </div>
</section>

<div class="lb" id="lb" role="dialog" aria-modal="true" aria-label="Visor de imágenes" hidden>
  <button class="lb__x" type="button" data-lb="close" aria-label="Cerrar">×</button>
  <button class="lb__nav lb__nav--prev" type="button" data-lb="prev" aria-label="Anterior">‹</button>
  <figure class="lb__fig"><img class="lb__img" alt=""><figcaption class="lb__cap"></figcaption></figure>
  <button class="lb__nav lb__nav--next" type="button" data-lb="next" aria-label="Siguiente">›</button>
</div>

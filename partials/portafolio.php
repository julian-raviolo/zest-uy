<section class="section pf" id="portafolio" aria-labelledby="portafolio-title">
  <div class="wrap">
    <div class="head">
      <p class="label" data-reveal>Portafolio</p>
      <h2 class="h2" id="portafolio-title" data-reveal style="--d:60ms">Imágenes que venden antes de hablar</h2>
    </div>
    <ul class="pf__grid" data-reveal>
      <?php foreach ($portfolio as $i => $p):
          $base = 'assets/img/portafolio/' . $p['file']; ?>
      <li class="pf__item">
        <button class="pf__btn" type="button" data-pf="<?= $i ?>" data-full="<?= e($base) ?>-1600.webp" data-cap="<?= e($p['title']) ?>" aria-label="Ver en grande: <?= e($p['title']) ?>">
          <img class="pf__img" src="<?= e($base) ?>-800.webp" srcset="<?= e($base) ?>-800.webp 800w, <?= e($base) ?>-1600.webp 1600w" sizes="(min-width: 900px) 560px, 92vw"
               width="<?= (int) $p['w'] ?>" height="<?= (int) $p['h'] ?>" alt="<?= e($p['alt']) ?>" loading="lazy" decoding="async">
          <span class="pf__shade" aria-hidden="true"></span>
          <span class="pf__meta">
            <span class="pf__n"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
            <span class="pf__title"><?= e($p['title']) ?></span>
            <span class="pf__client"><?= e($p['client']) ?></span>
          </span>
          <span class="pf__zoom" aria-hidden="true"><?= ico('arrow') ?></span>
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

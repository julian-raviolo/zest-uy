<section class="section section--tight" id="proceso" aria-labelledby="proceso-title">
  <div class="wrap">
    <div class="head">
      <p class="label" data-reveal>Proceso</p>
      <h2 class="h2" id="proceso-title" data-reveal style="--d:60ms">Cómo trabajamos</h2>
    </div>
    <ol class="steps" data-reveal>
      <?php foreach ($steps as $i => $st): ?>
      <li class="step ico-host" style="--k: <?= $i ?>">
        <span class="step__ico"><?= ico($st['icon']) ?></span>
        <h3 class="step__title"><span class="step__n"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span><?= e($st['verb']) ?></h3>
        <p class="step__text"><?= e($st['text']) ?></p>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

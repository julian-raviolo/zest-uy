<section class="hero" id="inicio">
  <div class="wrap hero__grid">
    <div class="hero__copy">
      <h1 class="hero__title" data-reveal>
        <span class="sr-only">Agencia de marketing digital en Uruguay. </span>Todo tu marketing digital, <span class="accent">en un solo equipo.</span>
      </h1>
      <p class="hero__lead" data-reveal style="--d:100ms">Anuncios, redes, marca, web, ventas e IA. Un plan y un equipo coordinado con un objetivo claro.</p>
    </div>

    <div class="hero__visual" aria-hidden="true">
      <div class="orbit">
        <span class="orbit__ring orbit__ring--a"></span>
        <span class="orbit__ring orbit__ring--b"></span>
        <span class="orbit__glow"></span>
        <div class="orbit__spin">
          <?php foreach ($services as $i => $s): ?>
          <span class="orbit__node" style="--a: <?= round($i * 360 / count($services), 2) ?>deg"><span class="orbit__chip"><?= ico($s['icon']) ?></span></span>
          <?php endforeach; ?>
        </div>
        <?= zest_mark('#FF5B2E', '#F2EFE6', 'orbit__mark', '') ?>
      </div>
    </div>
  </div>
</section>

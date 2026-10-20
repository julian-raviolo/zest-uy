<section class="section" id="servicios" aria-labelledby="servicios-title">
  <div class="wrap">
    <div class="head">
      <p class="label" data-reveal>Servicios</p>
      <h2 class="h2" id="servicios-title" data-reveal style="--d:60ms">Lo que hacemos por tu negocio</h2>
      <p class="head__lead" data-reveal style="--d:120ms">Nuestros servicios funcionan juntos o por separado, siempre con el mismo equipo. Tocá uno para ver qué incluye.</p>
    </div>

    <div class="svc" data-tabs>
      <div class="svc__list" role="tablist" aria-label="Servicios" data-reveal>
        <?php foreach ($services as $i => $s): ?>
        <button class="svc__tab ico-host<?= $i === 0 ? ' is-active' : '' ?>" type="button" role="tab"
                id="tab-<?= e($s['id']) ?>" aria-controls="panel-<?= e($s['id']) ?>" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>" tabindex="<?= $i === 0 ? '0' : '-1' ?>">
          <span class="svc__ico"><?= ico($s['icon']) ?></span>
          <span class="svc__txt">
            <span class="svc__title"><?= e($s['title']) ?></span>
            <span class="svc__short"><?= e($s['short']) ?></span>
          </span>
        </button>
        <?php endforeach; ?>
      </div>

      <div class="svc__panels">
        <?php foreach ($services as $i => $s): ?>
        <article class="svc__panel" role="tabpanel" id="panel-<?= e($s['id']) ?>" aria-labelledby="tab-<?= e($s['id']) ?>" tabindex="0">
          <figure class="svc__art art art--dark">
            <?= illustration($s['id']) ?>
          </figure>
          <div class="svc__body">
            <h3 class="svc__name"><?= e($s['name']) ?></h3>
            <p class="svc__text"><?= e($s['text']) ?></p>
            <ul class="svc__bullets">
              <?php foreach ($s['bullets'] as $b): ?>
              <li><?= ico('check', 'svc__check') ?><?= e($b) ?></li>
              <?php endforeach; ?>
            </ul>
            <a class="more" href="#contacto" data-want="<?= e($s['pick']) ?>">Quiero este servicio <?= ico('arrow', 'more__ico') ?></a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

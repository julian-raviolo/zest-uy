<section class="section section--tight" id="preguntas" aria-labelledby="faq-title">
  <div class="wrap faq">
    <div class="head faq__head">
      <p class="label" data-reveal>Preguntas</p>
      <h2 class="h2" id="faq-title" data-reveal style="--d:60ms">Preguntas frecuentes</h2>
      <p class="head__lead" data-reveal style="--d:120ms">Lo que más nos preguntan antes de la primera reunión.</p>
    </div>
    <div class="faq__list" data-reveal>
      <?php foreach ($faq as $i => $item): ?>
      <details class="qa"<?= $i === 0 ? ' open' : '' ?>>
        <summary class="qa__q"><span><?= e($item['q']) ?></span><span class="qa__icon" aria-hidden="true"></span></summary>
        <p class="qa__a"><?= e($item['a']) ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

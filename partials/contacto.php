<?php
$messages = [
    'ok'    => ['type' => 'ok',    'text' => '¡Gracias! Te escribimos en menos de 24 horas hábiles para coordinar el diagnóstico.'],
    'error' => ['type' => 'error', 'text' => 'Revisá los datos: necesitamos tu nombre y un email válido.'],
    'fail'  => ['type' => 'error', 'text' => 'No pudimos enviar el mensaje. Escribinos por WhatsApp.'],
    'wait'  => ['type' => 'error', 'text' => 'Ya recibimos un mensaje tuyo. Esperá un minuto antes de volver a enviar.'],
];
$msg    = $messages[$formStatus] ?? null;
$waBase = 'https://wa.me/' . rawurlencode($contact['whatsapp']);
$waLink = $waBase . '?text=' . rawurlencode('Hola Zest, quiero pedir un diagnóstico para mi negocio.');
?>
<section class="section section--tight" id="contacto" aria-labelledby="contacto-title">
  <div class="wrap">
    <div class="cta" data-reveal>
      <div class="cta__intro">
        <p class="label label--dark">Contacto</p>
        <h2 class="cta__title" id="contacto-title">Armá tu equipo</h2>
        <p class="cta__lead">Marcá lo que necesitás y dejanos tus datos. Te escribimos para una reunión de diagnóstico, sin compromiso.</p>
        <ul class="cta__links">
          <li><a href="<?= e($waLink) ?>" target="_blank" rel="noopener" data-wa-link><?= ico('whatsapp', 'cta__ico') ?><?= e($contact['whatsapp_label']) ?></a></li>
          <li><a href="mailto:<?= e($email) ?>"><?= ico('mail', 'cta__ico') ?><?= e($email) ?></a></li>
          <li><a href="https://instagram.com/<?= e($contact['instagram']) ?>" target="_blank" rel="noopener"><?= ico('instagram', 'cta__ico') ?>@<?= e($contact['instagram']) ?></a></li>
        </ul>
      </div>

      <form class="cta__form" action="contacto.php" method="post" data-team data-wa="<?= e($waBase) ?>">
        <?php if ($msg): ?>
        <p class="notice notice--<?= e($msg['type']) ?>" role="status"><?= e($msg['text']) ?></p>
        <?php endif; ?>
        <input type="hidden" name="csrf" value="<?= e($token) ?>">
        <div class="hp" aria-hidden="true">
          <label for="website">No completar</label>
          <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
        </div>

        <fieldset class="picks">
          <legend class="picks__legend">¿Qué necesitás?</legend>
          <?php foreach ($services as $s): ?>
          <label class="pick">
            <input type="checkbox" name="servicios[]" value="<?= e($s['pick']) ?>">
            <span class="pick__box"><?= ico($s['icon'], 'pick__ico') ?><span><?= e($s['pick']) ?></span></span>
          </label>
          <?php endforeach; ?>
        </fieldset>
        <p class="team" aria-live="polite" data-team-summary>Elegí uno o varios. Una sola persona coordina todo.</p>

        <div class="fields">
          <label class="field">
            <span class="field__label">Nombre</span>
            <input class="field__input" type="text" name="nombre" required maxlength="120" autocomplete="name" enterkeyhint="next">
          </label>
          <label class="field">
            <span class="field__label">Email</span>
            <input class="field__input" type="email" name="email" required maxlength="160" autocomplete="email" autocapitalize="none" autocorrect="off" enterkeyhint="send">
          </label>
        </div>
        <button class="btn btn--dark btn--block" type="submit">Pedir diagnóstico <?= ico('arrow', 'btn__ico') ?></button>
        <p class="cta__note">Respondemos en menos de 24 horas hábiles.</p>
      </form>
    </div>
  </div>
</section>

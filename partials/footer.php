<footer class="footer">
  <div class="wrap">
    <a class="footer__mail" href="mailto:<?= e($email) ?>"><?= e($email) ?></a>
    <a class="footer__ig" href="https://instagram.com/<?= e($contact['instagram']) ?>" target="_blank" rel="noopener"><?= ico('instagram', 'footer__ig-ico') ?>@<?= e($contact['instagram']) ?></a>
    <div class="footer__row">
      <a class="brand" href="#inicio" aria-label="Zest, inicio">
        <?= zest_mark('#FF5B2E', '#F2EFE6', 'brand__mark', '') ?>
        <span class="brand__word">zest</span>
      </a>
      <p class="footer__claim">Agencia de marketing digital 360 en <?= e($contact['city']) ?>.</p>
      <nav class="footer__nav" aria-label="Pie de página">
        <a href="#servicios">Servicios</a>
        <a href="#proceso">Proceso</a>
        <a href="#preguntas">Preguntas</a>
        <a href="#contacto">Contacto</a>
      </nav>
    </div>
    <div class="footer__meta">
      <span>© <?= e($year) ?> Zest. Todos los derechos reservados.</span>
      <button type="button" class="footer__cookies" data-cookies-open>Preferencias de cookies</button>
    </div>
  </div>
</footer>

<div class="cookies" id="cookies" role="dialog" aria-labelledby="cookies-title" aria-describedby="cookies-text" hidden>
  <p class="cookies__title" id="cookies-title">Cookies</p>
  <p class="cookies__text" id="cookies-text">Usamos cookies para medir las visitas y mejorar nuestros anuncios. Podés aceptarlas o quedarte solo con las necesarias.</p>
  <div class="cookies__btns">
    <button type="button" class="btn btn--sm" data-cookies="granted">Aceptar</button>
    <button type="button" class="btn btn--sm btn--ghost" data-cookies="denied">Solo necesarias</button>
  </div>
</div>

<script src="<?= e(asset('js/main.js')) ?>" defer></script>
<script src="<?= e(asset('js/cookies.js')) ?>" defer></script>
<script src="<?= e(asset('js/eventos.js')) ?>" defer></script>
</body>
</html>

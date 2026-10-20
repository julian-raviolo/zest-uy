<footer class="footer">
  <div class="wrap">
    <a class="footer__mail" href="mailto:<?= e($email) ?>"><?= e($email) ?></a>
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
    </div>
  </div>
</footer>

<script src="<?= e(asset('js/main.js')) ?>" defer></script>
</body>
</html>

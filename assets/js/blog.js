// Blog: índice que marca la sección en la que está el lector y barra de progreso de lectura.
(function () {
  'use strict';
  var toc = document.querySelector('.toc');
  if (!toc) return;

  var items = [];
  toc.querySelectorAll('a[href*="#"]').forEach(function (a) {
    var id = decodeURIComponent(a.getAttribute('href').split('#')[1] || '');
    var h = id && document.getElementById(id);
    if (h) items.push({ a: a, li: a.parentNode, h: h });
  });
  if (!items.length) return;

  var bar = toc.querySelector('[data-progress]');
  var prose = document.querySelector('.prose');
  var ticking = false;
  var current = -1;

  function offset() {
    var header = document.querySelector('[data-header]');
    return (header ? header.offsetHeight : 64) + 64;
  }

  function update() {
    ticking = false;
    var y = offset();
    var idx = -1;
    for (var i = 0; i < items.length; i++) {
      if (items[i].h.getBoundingClientRect().top <= y) idx = i; else break;
    }
    // Al llegar al final de la página, la última sección queda activa
    if (window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 4) idx = items.length - 1;

    if (idx !== current) {
      current = idx;
      items.forEach(function (it, k) {
        var on = k === idx;
        it.a.classList.toggle('is-active', on);
        it.li.classList.toggle('is-active', on);
        if (on) it.a.setAttribute('aria-current', 'true'); else it.a.removeAttribute('aria-current');
      });
    }

    if (bar && prose) {
      var r = prose.getBoundingClientRect();
      var total = r.height - window.innerHeight * 0.5;
      var done = Math.min(Math.max(-r.top + y, 0), Math.max(total, 1));
      bar.style.width = Math.round((done / Math.max(total, 1)) * 100) + '%';
    }
  }

  function onScroll() {
    if (!ticking) { ticking = true; requestAnimationFrame(update); }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll);
  update();
})();

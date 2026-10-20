/* Zest — interacciones. Sin librerías. Sin JavaScript se ve todo el contenido y el formulario funciona. */
(() => {
  'use strict';
  const root = document.documentElement;
  root.classList.add('js');
  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* Entradas al hacer scroll */
  const items = document.querySelectorAll('[data-reveal]');
  if (reduced || !('IntersectionObserver' in window)) {
    items.forEach((el) => el.classList.add('is-in'));
  } else {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((e) => {
        if (!e.isIntersecting) return;
        e.target.classList.add('is-in');
        io.unobserve(e.target);
      });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.12 });
    items.forEach((el) => io.observe(el));
  }

  /* Header: línea inferior al bajar */
  const header = document.querySelector('[data-header]');
  const onScroll = () => header && header.classList.toggle('is-scrolled', window.scrollY > 8);
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* Link activo según la sección visible */
  const links = [...document.querySelectorAll('.nav a')];
  if ('IntersectionObserver' in window && links.length) {
    const spy = new IntersectionObserver((entries) => {
      entries.forEach((e) => {
        if (!e.isIntersecting) return;
        links.forEach((l) => l.classList.toggle('is-active', l.getAttribute('href') === `#${e.target.id}`));
      });
    }, { rootMargin: '-45% 0px -50% 0px' });
    links.forEach((l) => { const s = document.querySelector(l.getAttribute('href')); if (s) spy.observe(s); });
  }

  /* Servicios: pestañas accesibles (clic, flechas, Inicio/Fin) */
  const tabs = document.querySelector('[data-tabs]');
  if (tabs) {
    const list = [...tabs.querySelectorAll('[role="tab"]')];
    const panels = [...tabs.querySelectorAll('[role="tabpanel"]')];
    const select = (tab, focus, user = true) => {
      list.forEach((t) => {
        const on = t === tab;
        t.classList.toggle('is-active', on);
        t.setAttribute('aria-selected', String(on));
        t.tabIndex = on ? 0 : -1;
      });
      panels.forEach((p) => p.classList.toggle('is-active', p.id === tab.getAttribute('aria-controls')));
      if (focus) tab.focus({ preventScroll: true });
      if (user) {
        // En el celular la lista es horizontal: centrar la pestaña elegida sin mover la página
        const bar = tab.parentElement;
        if (bar.scrollWidth > bar.clientWidth) {
          bar.scrollTo({ left: tab.offsetLeft - (bar.clientWidth - tab.offsetWidth) / 2, behavior: reduced ? 'auto' : 'smooth' });
        }
      }
    };
    list.forEach((t, i) => {
      t.addEventListener('click', () => select(t, false));
      t.addEventListener('keydown', (e) => {
        const keys = { ArrowRight: i + 1, ArrowDown: i + 1, ArrowLeft: i - 1, ArrowUp: i - 1, Home: 0, End: list.length - 1 };
        if (!(e.key in keys)) return;
        e.preventDefault();
        select(list[(keys[e.key] + list.length) % list.length], true);
      });
    });
    select(list[0], false, false);
  }

  /* Armá tu equipo: resumen, mensaje de WhatsApp y "Quiero este servicio" */
  const form = document.querySelector('[data-team]');
  if (form) {
    const summary = form.querySelector('[data-team-summary]');
    const wa = document.querySelector('[data-wa-link]');
    const base = form.dataset.wa;
    const boxes = [...form.querySelectorAll('input[name="servicios[]"]')];
    const initial = summary.textContent;

    const update = () => {
      const picked = boxes.filter((b) => b.checked).map((b) => b.value);
      if (!picked.length) {
        summary.textContent = initial;
      } else {
        const list = picked.length === 1 ? picked[0] : `${picked.slice(0, -1).join(', ')} y ${picked[picked.length - 1]}`;
        summary.textContent = '';
        const strong = document.createElement('strong');
        strong.textContent = picked.length === 1 ? 'Un servicio' : `${picked.length} servicios`;
        summary.append(strong, `: ${list}. Los coordina una sola persona.`);
      }
      const text = picked.length ? `Hola Zest, me interesa: ${picked.join(', ')}.` : 'Hola Zest, quiero pedir un diagnóstico para mi negocio.';
      if (wa && base) wa.href = `${base}?text=${encodeURIComponent(text)}`;
    };
    boxes.forEach((b) => b.addEventListener('change', update));
    update();

    document.querySelectorAll('[data-want]').forEach((a) => {
      a.addEventListener('click', () => {
        const box = boxes.find((b) => b.value === a.dataset.want);
        if (box && !box.checked) { box.checked = true; update(); }
      });
    });
  }
})();

/* Zest — medición de eventos (Google Analytics y Meta Pixel). Si las etiquetas no cargan, no hace nada. */
(() => {
  'use strict';
  const ga = (name, params) => { try { if (window.gtag) window.gtag('event', name, params || {}); } catch (e) {} };
  const fb = (type, name, params) => { try { if (window.fbq) window.fbq(type, name, params || {}); } catch (e) {} };
  const once = (key) => { try { if (sessionStorage.getItem(key)) return false; sessionStorage.setItem(key, '1'); } catch (e) {} return true; };
  const clean = (s) => (s || '').replace(/\s+/g, ' ').trim().slice(0, 100);

  document.addEventListener('click', (ev) => {
    const a = ev.target.closest('a, button');
    if (!a) return;

    // "Quiero este servicio"
    if (a.dataset.want) {
      ga('select_content', { content_type: 'servicio', item_id: a.dataset.want });
      fb('track', 'InitiateCheckout', { content_name: a.dataset.want });
    }
    // Pestañas de servicios
    if (a.classList.contains('svc__tab')) {
      const name = clean((a.querySelector('.svc__title') || a).textContent);
      ga('ver_servicio', { servicio: name });
      fb('track', 'ViewContent', { content_name: name });
    }
    // Landing de Zest Wallet
    if (a.classList.contains('more-cta')) {
      ga('click', { link_url: a.href, link_text: clean(a.textContent), outbound: true });
      fb('trackCustom', 'WalletClick');
    }
    // Botón "Contacto" del menú
    if (a.matches('header a.btn[href="#contacto"]')) ga('clic_contacto_menu');
    // Email y Instagram
    if (a.tagName === 'A') {
      if (a.href.startsWith('mailto:')) { ga('click_email'); fb('track', 'Contact'); }
      if (a.href.includes('instagram.com/')) ga('click_instagram', { link_url: a.href });
    }
  });

  // Email copiado
  document.addEventListener('copy', () => {
    const t = String(window.getSelection() || '');
    if (t.includes('@zest.uy')) ga('copiar_email');
  });

  // Preguntas frecuentes (el evento toggle no burbujea: se escucha en captura)
  document.addEventListener('toggle', (ev) => {
    const d = ev.target;
    if (d.classList && d.classList.contains('qa') && d.open && document.readyState === 'complete') {
      ga('faq_abierta', { pregunta: clean((d.querySelector('summary') || d).textContent) });
    }
  }, true);

  // Formulario: inicio y servicios elegidos al enviar
  const form = document.querySelector('form[data-team]');
  if (form) {
    let started = false;
    const start = () => {
      if (started) return; started = true;
      ga('form_start'); fb('trackCustom', 'FormStart');
    };
    form.addEventListener('focusin', start);
    form.addEventListener('change', start);
    form.addEventListener('submit', () => {
      const picked = [...form.querySelectorAll('input[name="servicios[]"]:checked')].map((i) => i.value).join(', ');
      try { sessionStorage.setItem('zest_servicios', picked); sessionStorage.removeItem('zest_lead'); } catch (e) {}
    });
  }

  // Profundidad de scroll: 50 % y 90 %
  const marks = [50, 90];
  const onScroll = () => {
    const h = document.documentElement;
    const pct = ((window.scrollY + window.innerHeight) / h.scrollHeight) * 100;
    marks.slice().forEach((m) => {
      if (pct >= m) { marks.splice(marks.indexOf(m), 1); ga('scroll_profundo', { porcentaje: m }); }
    });
    if (!marks.length) window.removeEventListener('scroll', onScroll);
  };
  window.addEventListener('scroll', onScroll, { passive: true });
})();

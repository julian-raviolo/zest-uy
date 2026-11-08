/* Zest — aviso de cookies. La medición (Google y Meta) empieza solo si la persona acepta. */
(() => {
  'use strict';
  const KEY = 'zest_cookies';
  const box = document.getElementById('cookies');
  if (!box) return;
  const read = () => { try { return localStorage.getItem(KEY); } catch (e) { return null; } };
  const apply = (v) => {
    const g = v === 'granted' ? 'granted' : 'denied';
    try { if (window.gtag) window.gtag('consent', 'update', { analytics_storage: g, ad_storage: g, ad_user_data: g, ad_personalization: g }); } catch (e) {}
    try { if (window.fbq) window.fbq('consent', v === 'granted' ? 'grant' : 'revoke'); } catch (e) {}
    if (v !== 'granted') {
      // Borra las cookies de Google Analytics y Meta que hayan quedado de una aceptación anterior
      document.cookie.split(';').forEach((c) => {
        const n = c.split('=')[0].trim();
        if (/^(_ga|_gid|_gcl|_fbp|_fbc)/.test(n)) {
          ['', '.' + location.hostname.replace(/^www\./, '')].forEach((d) => {
            document.cookie = n + '=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/' + (d ? '; domain=' + d : '');
          });
        }
      });
    }
  };
  const open = () => { box.hidden = false; box.querySelector('[data-cookies]').focus({ preventScroll: true }); };
  box.addEventListener('click', (e) => {
    const b = e.target.closest('[data-cookies]');
    if (!b) return;
    try { localStorage.setItem(KEY, b.dataset.cookies); } catch (err) {}
    apply(b.dataset.cookies);
    box.hidden = true;
  });
  document.querySelectorAll('[data-cookies-open]').forEach((b) => b.addEventListener('click', open));
  if (!read()) box.hidden = false;
})();

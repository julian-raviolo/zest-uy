<?php /* Etiquetas de medición (Google y Meta). Esperan $site. Respetan el consentimiento de cookies. */ ?>
<?php $gtagIds = array_values(array_filter([$site['ga_id'] ?? '', $site['ads_id'] ?? ''])); ?>
<?php if ($gtagIds): ?>
<!-- Google tag (gtag.js): Analytics + Ads -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= e($gtagIds[0]) ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  // Consentimiento: todo negado hasta que la persona acepta (se recuerda en este navegador).
  gtag('consent', 'default', { analytics_storage: 'denied', ad_storage: 'denied', ad_user_data: 'denied', ad_personalization: 'denied', wait_for_update: 500 });
  try { if (localStorage.getItem('zest_cookies') === 'granted') gtag('consent', 'update', { analytics_storage: 'granted', ad_storage: 'granted', ad_user_data: 'granted', ad_personalization: 'granted' }); } catch (e) {}
  gtag('js', new Date());
<?php foreach ($gtagIds as $gid): ?>
  gtag('config', '<?= e($gid) ?>');
<?php endforeach; ?>
</script>
<?php endif; ?>
<?php if (!empty($site['pixel_id'])): ?>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
var ck; try { ck = localStorage.getItem('zest_cookies'); } catch (e) {}
fbq('consent', ck === 'granted' ? 'grant' : 'revoke');
fbq('init', '<?= e($site['pixel_id']) ?>');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" alt=""
src="https://www.facebook.com/tr?id=<?= e($site['pixel_id']) ?>&amp;ev=PageView&amp;noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<?php endif; ?>

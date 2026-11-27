<?php
// Artículo nuevo 4. Se publica solo cuando estado = 'revisado' y la fecha ya llegó.
return [
    'slug'        => 'medir-campanas-pixel-conversiones-analytics',
    'estado'      => 'revisado',
    'fecha'       => '2026-11-27',
    'hora'        => '12:00',
    'servicio'    => 'ads',
    'cover'       => 'dash',
    'minutos'     => 9,
    'titulo'      => 'Cómo medir tus campañas: píxel de Meta, conversiones de Google y Analytics explicados simple',
    'descripcion' => 'Qué son el píxel de Meta, Google Analytics 4 y las conversiones de Google Ads, cómo instalarlos y qué eventos medir para saber si tus anuncios realmente traen clientes.',
    'resumen'     => 'Qué son el píxel, las conversiones y Analytics, y cómo configurarlos para saber qué anuncio trae consultas de verdad.',
    'cuerpo'      => <<<'HTML'
<p>Una campaña sin medición es un gasto a ciegas. Podés ver que tuvo mil clics y cientos de "me gusta", pero si no sabés cuántos de esos clics terminaron en una consulta o una venta, no sabés si el dinero está bien invertido.</p>
<p>La medición suena técnica, pero la idea es simple: <strong>dejar "marcas" en tu web para que las plataformas sepan qué acciones valiosas hace la gente</strong>, y así puedan optimizar tus anuncios y mostrarte cuáles funcionan. En esta guía te explicamos las tres piezas principales (el píxel de Meta, las conversiones de Google Ads y Google Analytics), qué medir y cómo hacerlo respetando la privacidad de tus visitantes.</p>
<h2>Qué significa "medir" en publicidad</h2>
<p>Hay tres niveles de información, de menos a más útil:</p>
<ol><li><strong>Lo que pasó en el anuncio:</strong> impresiones, alcance, clics. Lo reportan las plataformas sin que hagas nada.</li><li><strong>Lo que pasó en tu web:</strong> cuántas visitas llegaron y qué hicieron. Lo mide Google Analytics.</li><li><strong>Lo que pasó después del clic:</strong> quiénes consultaron, reservaron o compraron. Se mide con <strong>conversiones</strong>.</li></ol>
<p>El tercer nivel es el que importa para el negocio. Y es el que requiere un poco de configuración.</p>
<h2>Qué es una conversión</h2>
<p>Una conversión es <strong>cualquier acción valiosa para tu negocio</strong> que hace un visitante. Ejemplos típicos:</p>
<ul><li>Hacer clic en el botón de WhatsApp.</li><li>Completar y enviar un formulario de contacto.</li><li>Llamar por teléfono desde la web.</li><li>Reservar un turno.</li><li>Agregar un producto al carrito o completar una compra.</li><li>Registrarse o iniciar una prueba.</li></ul>
<p>Cada negocio define las suyas. La regla es medir lo que <strong>se parece más a un cliente</strong>, y no solo lo que es fácil de contar.</p>
<h2>Las tres herramientas principales</h2>
<p><strong>Google Analytics 4 (GA4):</strong> mide el comportamiento en tu web: de dónde llega la gente, qué páginas ve, cuánto tiempo se queda y qué acciones realiza. Te sirve para entender el panorama completo, incluido el tráfico que no viene de anuncios.</p>
<p><strong>El píxel de Meta:</strong> un código que se instala en tu web para que Meta (Instagram y Facebook) sepa qué hizo cada visitante que llegó desde tus anuncios. Permite medir resultados, crear públicos de remarketing y optimizar para las personas con más probabilidad de convertir.</p>
<p><strong>Las conversiones de Google Ads:</strong> una etiqueta que le avisa a Google Ads cuándo una visita terminó en una acción valiosa. Con esa información, el sistema aprende qué palabras clave y anuncios traen clientes y no solo clics.</p>
<figure class="fig"><div class="fig__box"><p class="fig__title">Qué hace cada herramienta</p><div class="pillars"><div class="pillar"><b><i>1</i>Google Analytics</b>Entender qué pasa en tu web: de dónde llega la gente y qué hace.</div><div class="pillar"><b><i>2</i>Píxel de Meta</b>Avisarle a Instagram y Facebook qué hizo cada visita de tus anuncios.</div><div class="pillar"><b><i>3</i>Etiqueta de Google Ads</b>Avisarle a Google qué anuncios y palabras traen consultas.</div></div></div></figure>
<h2>Qué eventos conviene medir</h2>
<p>No hace falta medir todo. Empezá con los eventos que realmente indican interés comercial:</p>
<ul><li><strong>Contacto:</strong> clic en WhatsApp, llamada, correo.</li><li><strong>Lead:</strong> formulario enviado.</li><li><strong>Inicio de compra o reserva:</strong> el paso previo a la venta.</li><li><strong>Compra:</strong> con su valor, si tenés tienda online.</li><li><strong>Visualización de contenido clave:</strong> una página de servicio o precios, como señal de interés.</li></ul>
<p>Tener pocos eventos bien configurados es mejor que tener decenas confusos.</p>
<h2>Cómo se instala</h2>
<p>Hay varias formas, de la más simple a la más completa:</p>
<ul><li><strong>Directo en el código de la web:</strong> se pega el fragmento que entrega cada plataforma en la cabecera de la página.</li><li><strong>Con Google Tag Manager:</strong> una herramienta gratuita que permite instalar y modificar todas las etiquetas desde un panel, sin tocar el código cada vez. Es lo recomendable si vas a medir varias cosas.</li><li><strong>Con plugins o integraciones</strong> si tu web está en un gestor de contenidos o en una tienda online.</li></ul>
<p>Después de instalar, <strong>siempre verificá que funcione</strong>. Meta ofrece una extensión para el navegador que muestra si el píxel se activa; Google Tag Assistant y el modo de vista previa de Tag Manager hacen lo mismo con las etiquetas de Google. Un evento que no se registra es el error más frecuente.</p>
<h2>Los parámetros UTM: saber de dónde viene cada visita</h2>
<p>Cuando compartís un enlace en un anuncio, un correo o una publicación, podés agregarle etiquetas llamadas UTM que indican su origen: la fuente (por ejemplo, instagram), el medio (anuncio, correo) y la campaña. Así, en Analytics ves qué acción concreta trajo cada visita, en lugar de un genérico "tráfico directo".</p>
<p>Usarlas de forma ordenada, con nombres consistentes, te permite comparar campañas con claridad.</p>
<h2>Los números que importan</h2>
<p>Una vez que todo mide, mirá estas métricas:</p>
<ul><li><strong>Costo por conversión:</strong> cuánto pagás por cada consulta, reserva o compra.</li><li><strong>Tasa de conversión:</strong> el porcentaje de visitas que realizan la acción.</li><li><strong>Conversiones por canal o campaña:</strong> para saber dónde conviene poner más o menos presupuesto.</li><li><strong>Valor de conversión y ROAS,</strong> si tenés ventas con importe.</li></ul>
<figure class="fig"><div class="fig__box"><p class="fig__title">Cuatro números para mirar (valores de ejemplo)</p><div class="stats stats--2"><div class="stat"><b>$ 320</b><span>Costo por conversión</span></div><div class="stat"><b>4,5 %</b><span>Tasa de conversión</span></div><div class="stat"><b>28</b><span>Conversiones del mes</span></div><div class="stat"><b>3,1x</b><span>Retorno sobre la inversión</span></div></div></div><figcaption class="fig__cap">Los valores son de ejemplo para mostrar cómo se ve un tablero; los tuyos van a ser distintos.</figcaption></figure>
<h2>Medir con respeto: cookies, consentimiento y privacidad</h2>
<p>El píxel y Analytics usan cookies y datos de navegación. En Uruguay rige la Ley 18.331 de protección de datos personales, y las buenas prácticas apuntan a la transparencia:</p>
<ul><li><strong>Informá en tu política de privacidad</strong> qué herramientas usás y para qué.</li><li><strong>Ofrecé un aviso de cookies</strong> que permita aceptar o rechazar la medición.</li><li><strong>Respetá la elección del visitante:</strong> si rechaza, no se activan las etiquetas de seguimiento.</li><li><strong>No mandes datos sensibles</strong> (salud, ideología, datos de menores) a las plataformas publicitarias.</li><li><strong>Evitá enviar datos personales</strong> como nombre, teléfono o correo dentro de los eventos, salvo que tengas una base legal clara.</li></ul>
<p>Esto no es asesoramiento legal: para tu caso concreto conviene consultarlo con un profesional. Pero medir con transparencia protege tu marca y genera confianza.</p>
<h2>Errores comunes</h2>
<ul><li><strong>No medir conversiones</strong> y optimizar por clics.</li><li><strong>Medir demasiadas cosas</strong> y no saber cuáles importan.</li><li><strong>Instalar etiquetas duplicadas,</strong> que cuentan cada acción dos veces.</li><li><strong>No probar que funciona</strong> después de instalarlo.</li><li><strong>Mezclar el tráfico propio</strong> (el de tu equipo) con el de clientes: conviene filtrarlo.</li><li><strong>Olvidar el aviso de cookies</strong> y la política de privacidad.</li><li><strong>Mirar el reporte una sola vez</strong> y no volver: la medición sirve para decidir, mes a mes.</li></ul>
<h2>Cuándo conviene pedir ayuda</h2>
<p>La configuración inicial es el momento donde más se nota la diferencia entre un trabajo prolijo y uno improvisado. Si tenés dudas sobre qué medir, si los números de las plataformas no coinciden entre sí o si tu web no registra bien las consultas, conviene que lo revise un especialista antes de seguir invirtiendo.</p>
<p>En Zest dejamos la medición lista desde el primer día, con los eventos que importan para tu negocio y un reporte simple que se entiende. Si querés revisar la tuya, escribinos.</p>
HTML,
    'faq' => [
        ['q' => '¿Es lo mismo el píxel de Meta que Google Analytics?', 'a' => 'No. El píxel alimenta a Meta para optimizar tus anuncios en Instagram y Facebook; Analytics es una herramienta de Google que te muestra el comportamiento general de tu web.'],
        ['q' => '¿Necesito saber programar para instalarlos?', 'a' => 'No siempre. Con Google Tag Manager o los plugins de muchas plataformas se puede hacer sin escribir código, aunque la configuración fina suele convenir dejarla a un especialista.'],
        ['q' => '¿Por qué los números de Meta y de Google no coinciden?', 'a' => 'Cada plataforma cuenta a su manera: usan ventanas de atribución distintas y no ven lo que ocurre en la otra. Lo importante es usar siempre la misma fuente de verdad para comparar períodos.'],
        ['q' => '¿Qué pasa si el visitante rechaza las cookies?', 'a' => 'Si rechaza, las etiquetas de seguimiento no deberían activarse. Por eso las cifras pueden ser algo menores a la realidad, y es normal.'],
    ],
];

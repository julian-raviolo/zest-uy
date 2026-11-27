<?php
// Post nuevo 7. Se publica solo cuando estado = 'revisado' y ya pasó su fecha y hora.
return [
    'slug'        => 'como-crear-una-tarjeta-de-fidelizacion-digital',
    'estado'      => 'borrador', // pasa a 'revisado' cuando se da el OK
    'fecha'       => '2026-12-07',
    'hora'        => '12:00',
    'servicio'    => 'wallet',
    'landing'     => true, // lleva a la landing de Zest Wallet
    'cover'       => 'stampcard',
    'minutos'     => 7,
    'titulo'      => 'Cómo crear una tarjeta de fidelización digital para tu negocio, paso a paso',
    'descripcion' => 'Guía para crear una tarjeta de fidelización digital: cómo definir el programa y el premio, diseñarla con tu marca, ponerla en marcha con un QR y capacitar a tu equipo.',
    'resumen'     => 'Los ocho pasos para armar tu tarjeta de fidelización digital: programa, premio, diseño, QR y equipo.',
    'cuerpo'      => <<<'HTML'
<p>Crear una <a href="blog/tarjeta-de-fidelizacion-digital-que-es-y-como-funciona/">tarjeta de fidelización digital</a> es más simple de lo que parece, pero hay una trampa: la mayoría de la gente empieza por el diseño y deja para después las decisiones que realmente hacen que funcione, como qué se premia, cuántas compras hacen falta y quién la ofrece en la caja.</p>
<p>En esta guía te mostramos <strong>cómo crear una tarjeta de fidelización digital en ocho pasos</strong>, en el orden que conviene, para que quede funcionando en tu negocio y no en un cajón.</p>
<h2>Paso 1: definí qué querés lograr</h2>
<p>Un programa de fidelización sirve para algo concreto. Elegí uno:</p>
<ul><li><strong>Que vuelvan más seguido.</strong></li><li><strong>Que gasten un poco más en cada visita.</strong></li><li><strong>Que te recomienden.</strong></li><li><strong>Recuperar a los que dejaron de venir.</strong></li></ul>
<p>Tener un objetivo claro te ayuda a elegir el programa y después a saber si funcionó.</p>
<h2>Paso 2: elegí el tipo de programa</h2>
<p>La mecánica tiene que encajar con la forma en que compra tu cliente:</p>
<ul><li><strong>Sellos:</strong> ideales si el ticket es parecido y la compra es frecuente (café, peluquería, lavadero).</li><li><strong>Puntos:</strong> convienen si el monto varía mucho entre compras.</li><li><strong>Cashback:</strong> un porcentaje vuelve como saldo para usar en la próxima compra.</li><li><strong>Descuento:</strong> un beneficio fijo para clientes registrados.</li></ul>
<p>Si dudás, empezá por sellos: se entienden en un segundo.</p>
<figure class="fig"><div class="fig__box"><p class="fig__title">Qué programa elegir</p><div class="pillars"><div class="pillar"><b><i>1</i>Sellos</b>Ticket parecido y compra frecuente: café, peluquería, lavadero.</div><div class="pillar"><b><i>2</i>Puntos</b>Monto variable: restaurantes, tiendas, almacenes.</div><div class="pillar"><b><i>3</i>Cashback</b>Un porcentaje vuelve como saldo para la próxima compra.</div><div class="pillar"><b><i>4</i>Descuento</b>Un beneficio fijo para clientes registrados.</div></div></div></figure>
<h2>Paso 3: definí el premio y la meta, con números</h2>
<p>El premio ideal es el que <strong>al cliente le importa y a vos te cuesta poco</strong>. La meta, la que se alcanza en un plazo razonable.</p>
<ul><li><strong>Calculá el costo del premio</strong> como porcentaje de lo que el cliente gasta para ganarlo.</li><li><strong>Pensá en cada cuánto viene tu cliente:</strong> si viene una vez por semana, una meta de ocho a diez visitas se cumple en un par de meses.</li><li><strong>No regales de más:</strong> el programa tiene que cerrar con tus costos.</li></ul>
<p>Un ejemplo ilustrativo: un café gratis cada diez compras equivale a devolver aproximadamente un 10% de lo que gasta el cliente. Si tu margen lo soporta, es una buena meta.</p>
<h2>Paso 4: diseñá la tarjeta con tu marca</h2>
<p>La tarjeta es una pieza de tu marca: tiene que reconocerse a simple vista. Los elementos que importan:</p>
<ul><li><strong>Logo</strong> claro y legible en tamaño chico.</li><li><strong>Colores</strong> de tu identidad.</li><li><strong>Imagen de portada</strong> que muestre lo que vendés.</li><li><strong>Ícono de los sellos,</strong> que puede ser alguno propio de tu rubro.</li><li><strong>Nombre y descripción del beneficio,</strong> en una frase.</li></ul>
<figure class="fig"><div class="fig__box"><p class="fig__title">Así se ve una tarjeta de sellos (ejemplo)</p><div class="lcard"><div class="lcard__top"><div class="lcard__logo">C</div><div class="lcard__name">Café Ejemplo<small>Tarjeta de sellos</small></div></div><div class="lcard__stamps"><i></i><i></i><i></i><i></i><i></i><i></i><i class="off"></i><i class="off"></i><i class="off"></i><i class="off"></i></div><div class="lcard__foot"><span>6 de 10 sellos</span><span>Te faltan 4</span></div></div></div></figure>
<h2>Paso 5: prepará el registro con un código QR</h2>
<p>Que el cliente pueda sumarse en segundos es lo que hace que funcione. Lo ideal es:</p>
<ul><li><strong>Un QR en un lugar visible:</strong> mostrador, caja, mesas o ticket.</li><li><strong>Pocos datos para registrarse:</strong> nombre y celular alcanzan.</li><li><strong>Un cartel claro</strong> que diga qué gana el cliente: "Sumá tus compras y llevate un café".</li></ul>
<p>Si tenés varias sucursales, cada una puede tener su propio QR para saber dónde se registró cada cliente.</p>
<h2>Paso 6: definí cómo registrás las compras</h2>
<p>El momento de la caja tiene que ser rápido. Lo normal es escanear el código de la tarjeta del cliente, o buscarlo por su número de celular, y registrar la compra en segundos desde el celular o la computadora. En programas de puntos y cashback también se puede apoyar en el ticket electrónico para tomar el importe de forma confiable.</p>
<h2>Paso 7: capacitá al equipo</h2>
<p>La tarjeta funciona si cada persona la ofrece. Acordá con el equipo:</p>
<ul><li><strong>Una frase simple</strong> para ofrecerla: "¿querés sumar tu compra y llevarte un beneficio?".</li><li><strong>Cómo registrar</strong> una compra y qué hacer si el cliente no tiene el celular a mano.</li><li><strong>Quién resuelve</strong> los casos especiales.</li></ul>
<h2>Paso 8: medí y ajustá</h2>
<p>A las pocas semanas, mirá los números:</p>
<ul><li><strong>Cuántos clientes se registraron.</strong></li><li><strong>Cuántos volvieron</strong> y cada cuánto.</li><li><strong>Cuántos completaron la meta.</strong></li><li><strong>Qué premios se canjearon.</strong></li></ul>
<p>Si nadie llega a la meta, acortala; si todos llegan en dos semanas, alargala. Ajustar es parte del proceso.</p>
<h2>¿Gratis o de pago?</h2>
<p>Mucha gente busca "crear tarjeta de fidelización online gratis". Hay opciones sin costo, con limitaciones (pocas funciones, sin tu marca, sin avisos a los clientes o con publicidad ajena). Antes de elegir, fijate qué incluye: si la tarjeta lleva tu marca, si se guarda en Apple Wallet y Google Wallet, si podés mandar avisos y si podés ver los números de tu negocio. Zest Wallet, por ejemplo, tiene una prueba gratuita de 15 días para que compruebes si te sirve antes de decidir.</p>
<h2>Errores comunes</h2>
<ul><li><strong>Empezar por el diseño</strong> y dejar el premio para después.</li><li><strong>Metas muy lejanas</strong> que nadie completa.</li><li><strong>Reglas complicadas.</strong></li><li><strong>No ofrecerla en la caja.</strong></li><li><strong>No medir</strong> cuántos vuelven.</li></ul>
<h2>Zest Wallet: tu tarjeta lista para usar</h2>
<p>Con Zest Wallet diseñás tu tarjeta con tu logo y tus colores, elegís sellos, puntos, cashback o descuento, y tus clientes la guardan en Apple Wallet o Google Wallet. Vos registrás las compras desde el celular o la computadora, tenés un cartel imprimible con el QR de registro y podés mandar avisos. Tiene una prueba gratuita de 15 días para que veas si te sirve: mirá cómo funciona en wallet.zest.uy.</p>
HTML,
    'faq' => [
        ['q' => '¿Cuánto tarda en armarse una tarjeta?', 'a' => 'Una tarjeta simple puede estar lista en poco tiempo. Lo que más lleva es definir el premio y la meta.'],
        ['q' => '¿Necesito saber de diseño?', 'a' => 'No: con tu logo, tus colores y una imagen de portada alcanza para una tarjeta prolija.'],
        ['q' => '¿Los clientes tienen que instalar algo?', 'a' => 'No. Guardan la tarjeta en la billetera que ya trae su celular.'],
        ['q' => '¿Puedo cambiar el premio después?', 'a' => 'Sí, conviene hacerlo con aviso y sin perjudicar lo que los clientes ya juntaron.'],
    ],
];

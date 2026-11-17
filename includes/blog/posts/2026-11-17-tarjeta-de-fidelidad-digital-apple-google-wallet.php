<?php
// Artículo 5. Se publica solo cuando estado = 'revisado' y la fecha ya llegó.
return [
    'slug'        => 'tarjeta-de-fidelidad-digital-apple-google-wallet',
    'estado'      => 'revisado',
    'orden'       => 5, // desempate cuando varios salen el mismo día
    'fecha'       => '2026-11-17',
    'servicio'    => 'wallet',
    'cover'       => 'wallet',
    'minutos'     => 7,
    'titulo'      => 'Tarjeta de fidelidad en Apple Wallet y Google Wallet: cómo hacer que tus clientes vuelvan',
    'descripcion' => 'Cómo funciona una tarjeta de fidelidad digital en el celular (sellos, puntos, cashback), por qué reemplaza a la de cartón y cómo implementarla en tu local en Uruguay.',
    'resumen'     => 'Cómo funciona una tarjeta de sellos digital en el celular de tus clientes y por qué reemplaza al cartón.',
    'cuerpo'      => <<<'HTML'
<p>Conseguir un cliente nuevo cuesta más que lograr que uno que ya te conoce vuelva. Lo sabe cualquier dueño de un café, una peluquería o un local de comida. Por eso existen las tarjetas de sellos: "juntá diez y el onceavo es gratis".</p>
<p>El problema es que la tarjeta de cartón se pierde, se olvida en otra billetera o se moja. La buena noticia es que hoy el cliente ya lleva en el bolsillo un lugar seguro donde guardar tarjetas: la <strong>billetera digital del celular</strong>. En esta guía te explicamos cómo funciona una tarjeta de fidelidad digital y cómo ponerla a trabajar en tu negocio.</p>
<h2>Qué es una tarjeta de fidelidad digital</h2>
<p>Es una tarjeta de beneficios que tu cliente guarda en <strong>Apple Wallet</strong> (iPhone) o <strong>Google Wallet</strong> (Android), junto a sus tarjetas de crédito y entradas. En lugar de un cartón, tiene un pase en el celular que se actualiza solo cada vez que compra.</p>
<p>Así funciona en la práctica:</p>
<ol><li>El cliente se registra escaneando un <strong>código QR</strong> en tu local (o con un link que le mandes).</li><li>Elige agregar la tarjeta a su billetera: en segundos queda guardada.</li><li>En cada compra, mostrás o escaneás su código y la tarjeta suma un sello, puntos o saldo.</li><li>Al llegar a la meta, recibe su beneficio.</li></ol>
<figure class="fig"><div class="fig__box"><p class="fig__title">Cómo funciona, de punta a punta</p><ol class="flow flow--4"><li><span><strong>Escanea el QR</strong>En tu local o con un link.</span></li><li><span><strong>Guarda la tarjeta</strong>En Apple Wallet o Google Wallet.</span></li><li><span><strong>Compra y suma</strong>Cada compra se registra sola.</span></li><li><span><strong>Recibe su premio</strong>Al llegar a la meta.</span></li></ol></div></figure>
<h2>Por qué funciona mejor que el cartón</h2>
<ul><li><strong>No se pierde ni se olvida.</strong> El celular siempre está a mano. El cartón queda en otra cartera.</li><li><strong>Es inmediata.</strong> El cliente la tiene en segundos, sin llenar fichas ni formularios largos.</li><li><strong>Se actualiza sola.</strong> No hay que sellar a mano ni confiar en que el cliente la traiga.</li><li><strong>Te conoce a tu cliente.</strong> Sabés quién vuelve, cada cuánto y cuánto compra, algo que el cartón nunca te da.</li><li><strong>Permite comunicarte.</strong> Podés mandar avisos que aparecen en el celular del cliente, sin depender de redes ni algoritmos.</li><li><strong>Evita el fraude.</strong> Un sello digital no se falsifica ni se estampa de más.</li></ul>
<h2>Qué tipos de programa podés hacer</h2>
<p>No todos los negocios necesitan lo mismo. Estas son las modalidades más usadas:</p>
<ul><li><strong>Sellos:</strong> "cada compra suma un sello; con diez, un café gratis". Ideal para cafeterías, panaderías, peluquerías, lavaderos.</li><li><strong>Puntos:</strong> el cliente acumula según lo que gasta y los canjea por premios. Funciona bien con compras de monto variable.</li><li><strong>Cashback:</strong> un porcentaje de cada compra vuelve como saldo para usar en la siguiente.</li><li><strong>Descuento por nivel:</strong> cuanto más compra el cliente, mejor beneficio recibe.</li></ul>
<p>La clave es elegir un programa <strong>simple de entender</strong>. Si el cliente necesita una calculadora para saber cuánto le falta, no lo va a usar.</p>
<figure class="fig"><div class="fig__box"><p class="fig__title">Tipos de programa</p><div class="pillars"><div class="pillar"><b><i>1</i>Sellos</b>"Con diez, un café gratis." Cafeterías, peluquerías, lavaderos.</div><div class="pillar"><b><i>2</i>Puntos</b>Se acumulan según lo que gasta y se canjean por premios.</div><div class="pillar"><b><i>3</i>Cashback</b>Un porcentaje de cada compra vuelve como saldo.</div><div class="pillar"><b><i>4</i>Descuento por nivel</b>Cuanto más compra, mejor beneficio.</div></div></div></figure>
<h2>El efecto en tu negocio</h2>
<p>Un programa de fidelidad bien diseñado ataca tres cosas a la vez:</p>
<ul><li><strong>Frecuencia:</strong> el cliente tiene un motivo concreto para volver antes.</li><li><strong>Ticket promedio:</strong> quien está cerca de un premio suele sumar algo más para llegar.</li><li><strong>Recomendación:</strong> un beneficio tangible da algo para comentar y compartir.</li></ul>
<p>Ojo con las promesas: ninguna tarjeta crea demanda de la nada. Lo que hace es ordenar y premiar la que ya tenés, y darte datos para tomar mejores decisiones.</p>
<h2>Los avisos: la parte que casi nadie aprovecha</h2>
<p>Una ventaja que las tarjetas de cartón nunca tuvieron: podés <strong>comunicarte con tus clientes</strong> a través de la billetera. Algunos usos prácticos:</p>
<ul><li>Avisar una promo o un día especial.</li><li>Saludar en el <strong>cumpleaños</strong> con un beneficio.</li><li>Recordar a quienes hace tiempo que no vienen ("te extrañamos").</li><li>Anunciar una novedad del local.</li></ul>
<p>Un consejo: no abuses. Un aviso cada tanto, relevante y con valor, se agradece; la saturación hace que el cliente elimine la tarjeta.</p>
<h2>Cómo implementarla en tu local</h2>
<p>Para que un programa de fidelidad funcione, importa más la ejecución que la herramienta:</p>
<ol><li><strong>Definí el programa:</strong> qué se premia, cuántas compras hacen falta y cuál es el beneficio.</li><li><strong>Diseñá la tarjeta con tu marca:</strong> colores, logo y estilo coherentes con tu identidad.</li><li><strong>Colocá el QR de alta donde se vea:</strong> en el mostrador, en la caja, en las mesas, en el ticket.</li><li><strong>Capacitá al equipo:</strong> que cada persona sepa ofrecerla ("¿querés sumar tu sello?") y registrar la compra en segundos.</li><li><strong>Mirá los números:</strong> cuántos clientes se registraron, cuántos vuelven y cada cuánto.</li></ol>
<figure class="fig"><div class="fig__box"><p class="fig__title">En el mostrador</p><ol class="flow flow--4"><li><span><strong>Ofrecé la tarjeta</strong>Una pregunta simple en cada caja.</span></li><li><span><strong>Escanean el QR</strong>Con el celular, en segundos.</span></li><li><span><strong>Registrás la compra</strong>Desde tu celular o computadora.</span></li><li><span><strong>El cliente ve su avance</strong>La tarjeta se actualiza sola.</span></li></ol></div></figure>
<p>La frase clave del equipo es una pregunta simple en cada caja. La mayoría de los programas fracasan porque nadie le ofrece la tarjeta al cliente.</p>
<h2>Errores comunes</h2>
<ul><li><strong>Premios demasiado lejanos:</strong> si la meta tarda meses, el cliente se desmotiva.</li><li><strong>Reglas complicadas:</strong> si no se explica en una frase, es demasiado.</li><li><strong>No promocionarla:</strong> una tarjeta que nadie conoce no genera nada.</li><li><strong>Premios que no suman:</strong> regalar algo que no te cuesta pero tampoco le interesa al cliente.</li><li><strong>No usar los datos:</strong> saber quién dejó de venir es la mitad del valor.</li><li><strong>Pedir demasiados datos al registrarse:</strong> cada campo extra espanta registros.</li></ul>
<h2>Para qué tipo de negocio sirve</h2>
<p>Funciona especialmente bien en negocios donde el cliente <strong>compra seguido</strong>: cafeterías, panaderías, heladerías, restaurantes, barberías, peluquerías, centros de estética, gimnasios, lavaderos, almacenes y tiendas de barrio.</p>
<p>Si tu rubro vende cada varios años (por ejemplo, muebles), un programa de sellos no es lo ideal; ahí convienen estrategias de recomendación y contacto posventa.</p>
<h2>Zest Wallet</h2>
<p>Zest Wallet es la plataforma de Zest para armar tu tarjeta de fidelidad digital: diseñás la tarjeta con tu marca, eligís el programa (sellos, puntos, cashback o descuento), tus clientes la guardan en Apple Wallet o Google Wallet y vos registrás cada compra desde el celular o la computadora. Incluye avisos a los clientes y mensajes automáticos de cumpleaños y reactivación.</p>
<p>Si querés ver cómo quedaría en tu negocio, escribinos o probá la demo en wallet.zest.uy.</p>
HTML,
    'faq' => [
        ['q' => '¿Mis clientes necesitan instalar una app?', 'a' => 'No. La tarjeta se guarda en la billetera que ya trae su celular: Apple Wallet en iPhone y Google Wallet en Android.'],
        ['q' => '¿Qué pasa si el cliente cambia de celular?', 'a' => 'Puede volver a agregar su tarjeta desde su link personal, y su progreso se mantiene.'],
        ['q' => '¿Sirve para varias sucursales?', 'a' => 'Sí. Una misma tarjeta puede usarse en todas las sucursales de la cuenta, con el control de cada local por separado.'],
        ['q' => '¿Hace falta un lector especial?', 'a' => 'No. Se registra la compra desde el celular o la computadora, escaneando el QR del cliente o buscándolo por su número.'],
    ],
];

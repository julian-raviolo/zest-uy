<?php
// Post nuevo 11. Se publica solo cuando estado = 'revisado' y ya pasó su fecha y hora.
return [
    'slug'        => 'tarjeta-de-puntos-y-cashback-como-funcionan',
    'estado'      => 'revisado',
    'fecha'       => '2026-12-15',
    'hora'        => '12:00',
    'servicio'    => 'wallet',
    'landing'     => true, // lleva a la landing de Zest Wallet
    'cover'       => 'points',
    'minutos'     => 6,
    'titulo'      => 'Tarjeta de puntos y cashback: cómo funcionan y cuándo elegirlos en lugar de sellos',
    'descripcion' => 'Diferencias entre tarjeta de puntos, cashback y sellos para tu negocio en Uruguay: cómo se calculan, cuándo conviene cada una y cómo evitar que te cueste más de lo que ganas.',
    'resumen'     => 'Cómo funcionan los puntos y el cashback, con ejemplos de cuentas, y cuándo conviene usarlos en lugar de los sellos.',
    'cuerpo'      => <<<'HTML'
<p>Los sellos son la forma más simple de premiar a un cliente, pero no sirven para todos los negocios. Si tus compras son de montos muy distintos (un día lleva algo de $200 y otro día $5.000), darle el mismo sello a las dos es injusto y poco eficaz. Para esos casos existen dos alternativas: <strong>los puntos y el cashback</strong>.</p>
<p>En esta guía te explicamos cómo funciona cada uno, con ejemplos de cuentas, cuándo conviene elegirlos en lugar de los sellos y cómo evitar que te cuesten más de lo que ganan.</p>
<h2>Cómo funciona una tarjeta de puntos</h2>
<p>El cliente suma puntos según lo que gasta, y los canjea por premios cuando llega a cierta cantidad. La clave es la equivalencia: cuántos puntos gana por cada peso y cuántos necesita para cada premio.</p>
<p>Un ejemplo ilustrativo:</p>
<ul><li>Gana <strong>1 punto por cada $100</strong> que gasta.</li><li>Con <strong>50 puntos</strong> (o sea, $5.000 de compras) recibe un premio.</li><li>Si el premio cuesta $400 y se obtiene con $5.000 de compras, el costo es del 8% de lo que gastó el cliente.</li></ul>
<p>Lo bueno de los puntos es que <strong>premian el monto</strong>: quien gasta más, llega antes. Lo difícil es que hay que explicarlo bien.</p>
<figure class="fig"><div class="fig__box"><p class="fig__title">Cómo funcionan los puntos (ejemplo ilustrativo)</p><ol class="flow"><li><span><strong>Compra $5.000</strong>Gana 1 punto por cada $100.</span></li><li><span><strong>Suma 50 puntos</strong>Los ve crecer en su tarjeta.</span></li><li><span><strong>Canjea un premio</strong>Que te cuesta alrededor del 8 % de lo que gastó.</span></li></ol></div></figure>
<h2>Cómo funciona el cashback</h2>
<p>Un porcentaje de cada compra vuelve al cliente como <strong>saldo para usar en la próxima compra</strong>. No hay que juntar puntos ni calcular equivalencias: el cliente ve cuánto saldo tiene y lo usa.</p>
<p>Un ejemplo ilustrativo: con un cashback del 5%, si el cliente compra $2.000 acumula $100 de saldo. En su siguiente visita puede usar esos $100 como parte del pago.</p>
<p>Su gran ventaja es la claridad: "me quedaron $100" se entiende de inmediato. Además, el saldo invita a volver a gastar en tu negocio.</p>
<h2>Sellos, puntos o cashback: cómo elegir</h2>
<figure class="fig"><div class="fig__box"><p class="fig__title">Sellos, puntos y cashback</p><div class="cols3"><div><h4>Sellos</h4><ul><li>Simples y visuales</li><li>Ticket parecido</li><li>Café, panadería, peluquería</li></ul></div><div><h4>Puntos</h4><ul><li>Premian el monto</li><li>Permiten catálogo de premios</li><li>Restaurantes y tiendas</li></ul></div><div><h4>Cashback</h4><ul><li>Se entiende como dinero</li><li>Saldo para la próxima compra</li><li>Requiere margen para devolver</li></ul></div></div></div></figure>
<ul><li><strong>Sellos:</strong> simples y visuales. Conviene si el ticket es parecido entre compras y se compra seguido (café, panadería, peluquería).</li><li><strong>Puntos:</strong> premian el monto. Convienen si el gasto varía mucho (restaurantes, tiendas, almacenes) o si querés armar catálogo de premios.</li><li><strong>Cashback:</strong> es el más directo. Conviene si querés que el beneficio se perciba como dinero y no como un producto, y si tu margen soporta devolver un porcentaje.</li></ul>
<h2>Cuánto conviene devolver</h2>
<p>No hay un número universal: depende de tu margen. La pregunta es cuánto de cada venta podés devolver y seguir ganando.</p>
<ol><li><strong>Calculá tu margen</strong> por venta (lo que queda después de costos).</li><li><strong>Definí qué parte estás dispuesto a ceder:</strong> una fracción chica de ese margen, no todo.</li><li><strong>Considerá que no todo se canjea:</strong> parte del saldo o de los puntos nunca se usa, lo que baja el costo real.</li><li><strong>Probá con un valor conservador</strong> y ajustá con datos reales.</li></ol>
<p>Es mejor empezar con un porcentaje modesto y subirlo, que empezar alto y tener que bajarlo, algo que los clientes perciben como una quita.</p>
<h2>Cuidar el costo: topes y reglas claras</h2>
<p>Para que el programa no se te vaya de las manos:</p>
<ul><li><strong>Poné un tope diario</strong> de puntos o cashback por cliente, si tu rubro lo requiere.</li><li><strong>Definí un vencimiento razonable</strong> para los saldos, avisado con anticipación.</li><li><strong>Explicá las reglas en una línea</strong> y que estén a la vista.</li><li><strong>Revisá el costo real</strong> cada tanto: cuánto se entregó y cuánto se canjeó.</li></ul>
<h2>Registrar el importe de forma confiable</h2>
<p>En los programas de puntos y cashback, el importe de la compra es lo que importa. Una forma confiable de tomarlo es apoyarse en el <strong>ticket electrónico</strong>: se escanea el código QR del e-Ticket y el sistema toma el monto del propio comprobante, en lugar de depender de que alguien lo escriba. Eso reduce errores y evita que se cargue dos veces el mismo ticket.</p>
<h2>Para qué negocios conviene</h2>
<ul><li><strong>Restaurantes y pizzerías,</strong> donde cada cuenta es distinta.</li><li><strong>Tiendas y comercios</strong> con tickets muy variables.</li><li><strong>Almacenes y supermercados de barrio.</strong></li><li><strong>Negocios con venta de productos de distintos precios,</strong> como regalerías o ferreterías.</li></ul>
<p>Si tu ticket es muy parecido en todas las compras, los sellos suelen ser más simples de entender para el cliente.</p>
<h2>Errores comunes</h2>
<ul><li><strong>Equivalencias complicadas</strong> que el cliente no entiende.</li><li><strong>Devolver demasiado</strong> y comerte tu margen.</li><li><strong>No poner tope ni vencimiento.</strong></li><li><strong>No explicar cuánto saldo o cuántos puntos tiene el cliente</strong> en cada visita.</li><li><strong>Cargar los importes a mano</strong> sin ningún control.</li></ul>
<h2>Zest Wallet: puntos y cashback en el celular</h2>
<p>Con Zest Wallet podés armar tu tarjeta con puntos o con cashback (o con sellos, o con un descuento), con tu marca y guardada en Apple Wallet o Google Wallet. Para los importes, la caja puede escanear el e-Ticket y tomar el monto del comprobante. Tiene una prueba gratuita de 15 días: mirá cómo funciona en wallet.zest.uy.</p>
HTML,
    'faq' => [
        ['q' => '¿Sirve más el cashback o los puntos?', 'a' => 'Depende del rubro. El cashback es más simple de entender; los puntos permiten armar un catálogo de premios y dosificar mejor el beneficio.'],
        ['q' => '¿Cuánto cashback es razonable?', 'a' => 'El que tu margen soporte. Conviene empezar con un porcentaje modesto y ajustarlo con datos.'],
        ['q' => '¿Puedo cambiar las reglas después?', 'a' => 'Sí, pero hacelo con aviso y sin perjudicar lo que los clientes ya acumularon.'],
        ['q' => '¿Se puede combinar con sellos?', 'a' => 'Conviene elegir un solo programa para que el cliente lo entienda. Si querés sumar otro beneficio, podés hacerlo con avisos o con el cumpleaños.'],
    ],
];

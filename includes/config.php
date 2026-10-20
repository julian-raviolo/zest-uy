<?php
/**
 * Zest — configuración del sitio.
 * Todo el contenido editable está acá: datos de contacto, textos, servicios, pasos y preguntas.
 */

declare(strict_types=1);

return [
    'site' => [
        'name'        => 'Zest',
        'url'         => 'https://zest.uy',             // sin barra al final
        'title'       => 'Agencia de marketing digital en Uruguay | Zest',
        'description' => 'Zest es una agencia de marketing digital 360 en Uruguay: Google y Meta Ads, redes, branding, diseño web, ventas, automatizaciones con IA y consultoría.',
        'lang'        => 'es-UY',
        'updated'     => '2026-10-19',                  // fecha de la última actualización del contenido
    ],

    // Datos de contacto. Completar antes de publicar.
    'contact' => [
        'email_user'     => 'hola',                     // [completar] parte antes de la @
        'email_domain'   => 'zest.uy',                  // [completar] parte después de la @
        'whatsapp'       => '59899000000',              // [completar] con código de país, sin + ni espacios
        'whatsapp_label' => '+598 99 000 000',          // [completar] como se muestra en pantalla
        'instagram'      => 'zest_uy',                  // [completar] usuario sin @
        'linkedin'       => '',                         // opcional: URL completa de la página de empresa
        'city'           => 'Uruguay',
    ],

    // Envío del formulario
    'mail' => [
        'to'        => 'hola@zest.uy',                  // [completar] destino de los mensajes
        'from'      => 'web@zest.uy',                   // casilla del mismo dominio del hosting
        'subject'   => 'Pedido de diagnóstico desde zest.uy',
        'save_copy' => true,                            // copia en storage/mensajes.csv por si el mail falla
    ],

    'services' => [
        [
            'id'      => 'ads',
            'icon'    => 'ads',
            'pick'    => 'Google y Meta Ads',
            'title'   => 'Google y Meta Ads',
            'name'    => 'Publicidad en Google Ads y Meta Ads',
            'short'   => 'Anuncios que traen consultas, no solo clics.',
            'text'    => 'Campañas en Google, Instagram y Facebook armadas para generar consultas y ventas. Definimos público, presupuesto y mensajes, y ajustamos cada semana según lo que muestran los números.',
            'bullets' => ['Campañas de búsqueda y redes', 'Públicos y remarketing', 'Ajustes semanales y reporte'],
        ],
        [
            'id'      => 'redes',
            'icon'    => 'redes',
            'pick'    => 'Redes sociales',
            'title'   => 'Redes sociales',
            'name'    => 'Gestión de redes sociales',
            'short'   => 'Contenido constante con la voz de tu marca.',
            'text'    => 'Plan de contenidos, diseño, video y respuesta a tu comunidad en Instagram, TikTok, Facebook y LinkedIn, con un calendario que se cumple.',
            'bullets' => ['Calendario mensual', 'Diseño, fotos y video', 'Respuesta a la comunidad'],
        ],
        [
            'id'      => 'branding',
            'icon'    => 'branding',
            'pick'    => 'Branding',
            'title'   => 'Branding',
            'name'    => 'Branding y diseño de marca',
            'short'   => 'Una marca que se reconoce en todos lados.',
            'text'    => 'Logo, colores, tipografías y manual de marca, para que tu negocio se reconozca igual en la vidriera, en la web y en cada publicación.',
            'bullets' => ['Logo e isotipo', 'Paleta y tipografías', 'Manual de marca'],
        ],
        [
            'id'      => 'web',
            'icon'    => 'web',
            'pick'    => 'Web y apps',
            'title'   => 'Web y apps',
            'name'    => 'Diseño web y desarrollo de apps',
            'short'   => 'Sitios rápidos, pensados para el celular.',
            'text'    => 'Sitios rápidos, pensados para el celular y para aparecer en Google. Tiendas online con pagos y envíos, y apps a medida cuando el negocio las necesita.',
            'bullets' => ['Sitios web y landing pages', 'Tiendas online', 'Apps a medida'],
        ],
        [
            'id'      => 'ventas',
            'icon'    => 'ventas',
            'pick'    => 'Ventas y CRM',
            'title'   => 'Ventas y CRM',
            'name'    => 'Estrategia de ventas y CRM',
            'short'   => 'Cada consulta con seguimiento hasta el cierre.',
            'text'    => 'Ordenamos el camino desde la primera consulta hasta el cierre: embudo, CRM, respuestas por WhatsApp y guiones para tu equipo, así ningún interesado queda sin respuesta.',
            'bullets' => ['Embudo de ventas', 'CRM y seguimiento', 'Guiones y capacitación'],
        ],
        [
            'id'      => 'consultoria',
            'icon'    => 'consultoria',
            'pick'    => 'Consultoría',
            'title'   => 'Consultoría',
            'name'    => 'Consultoría de marketing digital',
            'short'   => 'Un plan claro para saber qué hacer primero.',
            'text'    => 'Diagnóstico de lo que ya hacés y una hoja de ruta con prioridades, plazos y responsables, para saber qué hacer primero, qué después y por qué.',
            'bullets' => ['Diagnóstico digital', 'Hoja de ruta', 'Seguimiento mensual'],
        ],
        [
            'id'      => 'ia',
            'icon'    => 'ia',
            'pick'    => 'Automatizaciones con IA',
            'title'   => 'Automatizaciones IA',
            'name'    => 'Automatizaciones con inteligencia artificial',
            'short'   => 'Tareas repetitivas que se resuelven solas.',
            'text'    => 'Asistentes con IA que responden en WhatsApp e Instagram a cualquier hora, seguimientos automáticos y flujos que conectan tu web, tu CRM y tus redes, para que tu equipo dedique el tiempo a vender.',
            'bullets' => ['Chatbots de WhatsApp e Instagram', 'Seguimientos automáticos', 'Flujos conectados con tu CRM'],
        ],
    ],

    'steps' => [
        ['icon' => 'escuchar', 'verb' => 'Escuchamos', 'text' => 'Una reunión para entender tu negocio, tus clientes y lo que ya probaste.'],
        ['icon' => 'planear',  'verb' => 'Planeamos', 'text' => 'Una hoja de ruta con objetivos, canales, presupuesto y fechas.'],
        ['icon' => 'hacer',    'verb' => 'Hacemos',  'text' => 'Marca, web, contenido y campañas, a cargo del mismo equipo.'],
        ['icon' => 'medir',    'verb' => 'Medimos',  'text' => 'Un reporte mensual con lo que funcionó y el próximo paso.'],
    ],

    // Preguntas frecuentes: se muestran en la página y se publican como datos estructurados (FAQPage).
    'faq' => [
        [
            'q' => '¿Qué hace una agencia de marketing digital?',
            'a' => 'Una agencia de marketing digital ayuda a un negocio a conseguir clientes por internet. Define la estrategia, crea la marca y los contenidos, maneja la publicidad en Google y redes sociales, construye el sitio web y mide los resultados. En Zest todo eso lo hace un mismo equipo, con un solo plan.',
        ],
        [
            'q' => '¿Qué es una agencia de marketing 360?',
            'a' => 'Es una agencia que cubre todos los frentes digitales de una marca en lugar de uno solo: identidad, sitio web, redes, anuncios y ventas. La ventaja es que las piezas se piensan juntas y los resultados se miden en un único reporte, sin coordinar varios proveedores.',
        ],
        [
            'q' => '¿Puedo contratar un solo servicio?',
            'a' => 'Sí. Podés empezar por lo que más necesitás, por ejemplo una campaña en Google Ads o un sitio web, y sumar otros servicios después. Lo habitual es arrancar con un diagnóstico para decidir por dónde conviene empezar.',
        ],
        [
            'q' => '¿Cuánto cobra una agencia de marketing digital?',
            'a' => 'Depende de los servicios y del alcance de cada proyecto. Después de la reunión de diagnóstico te enviamos una propuesta con el costo de cada servicio. La inversión en anuncios se paga aparte, directo a Google o Meta, y la definís vos.',
        ],
        [
            'q' => '¿Cómo miden los resultados?',
            'a' => 'Cada acción tiene un objetivo y un número: consultas, ventas, costo por cliente o visitas a la web. Todos los meses recibís un reporte con lo que funcionó, lo que no y qué vamos a cambiar.',
        ],
        [
            'q' => '¿Cómo es la primera reunión?',
            'a' => 'Es una charla de diagnóstico, sin compromiso. Revisamos tu negocio, tus canales actuales y tus objetivos, y te contamos qué haríamos primero y por qué.',
        ],
    ],
];

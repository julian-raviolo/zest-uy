# Zest — sitio web

Sitio de una sola página en PHP para zest.uy: fondo negro con detalles en Mandarina, Beige y Blanco, toque futurista y minimalista, pensado primero para celular y con poco scroll.

## Secciones

1. **Inicio:** "Todo tu marketing digital, en un solo equipo", con la órbita de los siete servicios girando alrededor del isotipo.
2. **Servicios:** siete pestañas con ícono animado; cada una muestra su ilustración, qué incluye y un botón "Quiero este servicio" que lo marca en el formulario.
3. **Proceso:** Escuchamos, Planeamos, Hacemos y Medimos, numerados y con íconos animados y una línea que se completa.
4. **Preguntas frecuentes.**
5. **Contacto:** tarjeta beige para armar tu equipo y pedir el diagnóstico.
6. **Pie:** el email en grande.

## Antes de publicar

Editá **`includes/config.php`**:

1. `contact`: email (separado en usuario y dominio) e Instagram.
2. `mail.to`: la casilla que recibe los mensajes. `mail.from`: una casilla del mismo dominio del hosting.
3. `services` y `steps`: textos de cada servicio y de cada paso.
4. **Ilustraciones:** cada servicio tiene un dibujo propio en los colores de marca (`includes/illustrations.php`): un anuncio en el buscador, un perfil de redes, la construcción de una marca, un sitio en compu y celular, un embudo de ventas y una hoja de ruta. Se animan al aparecer. Cuando tengas trabajos reales, conviene sumar capturas o fotos de esos proyectos.

## SEO incluido

- **Título y descripción** pensados para "agencia de marketing digital en Uruguay" (`includes/config.php`, bloque `site`).
- **Un solo H1** con la palabra clave, títulos H2/H3 por sección y por servicio.
- **Preguntas frecuentes** con las búsquedas reales de Uruguay ("qué hace una agencia de marketing digital", "qué es una agencia de marketing 360", "cuánto cobra una agencia de marketing digital"). Se editan en `config.php` y se publican también como datos estructurados.
- **Datos estructurados (schema.org)**: la agencia con sus 6 servicios, el sitio, la página y las preguntas frecuentes. Probalo en https://search.google.com/test/rich-results
- **Imagen para compartir** (`assets/img/og-zest.png`, 1200×630) para WhatsApp, LinkedIn y redes.
- **`robots.txt`** abierto a Google y a los asistentes de IA (ChatGPT, Claude, Perplexity, Gemini), **`sitemap.xml`** y **`llms.txt`** con el resumen de Zest para IA.
- **`.htaccess`** fuerza HTTPS y una sola versión del dominio, comprime y cachea archivos.

Cada vez que cambies textos, actualizá `site.updated` en `config.php` y `lastmod` en `sitemap.xml`.

### Después de publicar

1. Dar de alta el sitio en **Google Search Console** y enviar `https://zest.uy/sitemap.xml`.
2. Crear el **Perfil de Empresa de Google** (Google Business Profile) de Zest: es lo que más pesa para aparecer en búsquedas locales.
3. Sumar el link de la web en Instagram, LinkedIn y en directorios de agencias (Clutch, DesignRush), que son las fuentes que más consultan los buscadores con IA.
4. Cuando haya clientes, agregar casos con resultados reales: es lo que más ayuda a posicionar y a vender.

## Subir al hosting

PHP 8.1 o superior, sin base de datos. Es un sitio PHP: **no** usa Node.js ni `package.json`.

### Hostinger (desde GitHub)

1. hPanel → **Sitios web** → zest.uy → **Avanzado → GIT** (no uses "Node.js" ni "Importar desde GitHub" para apps: esos piden `package.json`).
2. Repositorio: `https://github.com/julian-raviolo/zest-uy.git`, rama `main`, directorio vacío (se instala en `public_html`, que tiene que estar vacío).
3. **Crear** y después **Desplegar**. Activá **Implementación automática** y pegá el webhook en GitHub (Settings → Webhooks) para que cada cambio se publique solo.
4. En **Configuración de PHP** elegí 8.1 o superior.

### Otro hosting

Subí todo a `public_html` (o la raíz del dominio).
Las carpetas `includes/`, `partials/` y `storage/` tienen un `.htaccess` que bloquea el acceso directo, y el `.htaccess` principal bloquea la carpeta `.git` (Apache y LiteSpeed). Si el hosting usa Nginx, pedí que bloqueen esas carpetas.

## Formulario

`contacto.php` valida nombre y email, acepta solo los servicios que existen en la configuración, frena spam (campo trampa, token por sesión y un envío por minuto), manda el mail y guarda una copia en `storage/mensajes.csv`.

## Probar en tu computadora

```
php -S localhost:8000
```

y abrí http://localhost:8000

## Movimiento

- Íconos de línea que se dibujan al aparecer y tienen su propio gesto: las barras de Ads suben y bajan, late el corazón de Redes, se separan las piezas de Branding, el cursor de Web hace clic, cae una gota en el embudo de Ventas, gira la brújula de Consultoría.
- Órbita del hero girando lento y el isotipo que se arma al cargar.
- Ilustraciones de cada servicio que se arman al elegir la pestaña.
- Botones y opciones responden al tocar; en computadora, al pasar el mouse.

Todo respeta la opción "reducir movimiento" del sistema.

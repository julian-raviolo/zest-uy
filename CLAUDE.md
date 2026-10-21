# Zest — instrucciones para Claude

## Carpeta protegida: `assets/img/firma/`

Contiene las imágenes de la firma de email y archivos delicados del dueño. Vive solo en el servidor
(`public_html/assets/img/firma/`), no en este repositorio.

- **No crear, modificar, mover, renombrar ni borrar** nada dentro de `assets/img/firma/`
  (ni en el repo ni en el servidor por FTP) salvo que Julian lo pida explícitamente en ese mismo mensaje.
- No listar ni abrir su contenido sin que lo pida.
- No agregarla al repositorio: está en `.gitignore` a propósito.
- No hacer cambios que la afecten indirectamente: reglas de `.htaccess` sobre `assets/img/`,
  borrados masivos en `public_html`, ni volver a crear el despliegue GIT de Hostinger
  (exige `public_html` vacío y obligaría a borrar la carpeta).
- Si una tarea parece requerir tocarla, frenar y preguntar primero.

## Carpeta del CRM: `crm/`

`public_html/crm/` es el EspoCRM de crm.zest.uy. Se instala y actualiza aparte (no por este repositorio)
y guarda datos de clientes en `crm/data/`.

- No agregarla al repositorio (está en `.gitignore`) ni borrarla o modificarla sin pedido explícito.
- Cambios en el `.htaccess` principal afectan también a `crm/`: revisarlos pensando en el CRM.
- El tema de la marca se instala como extensión desde Administración → Extensiones.

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

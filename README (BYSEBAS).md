# Proyecto Laravel CRUD Productos  
**Autor:** Sebasthian Jair Silva Lazo  
**Prácticas Universitarias 2025**
Este proyecto fue desarrollado como parte de mis prácticas universitarias 2025.  
Consiste en un sistema CRUD básico de productos con autenticación de usuarios, usando **Laravel 12**.  
La aplicación permite registrar, listar, editar y eliminar productos, protegiendo el acceso mediante autenticación (Laravel Breeze).  
Está pensado como un proyecto de práctica para afianzar conocimientos en PHP, Laravel, migraciones y Blade.  
 ## Requisitos previos
Antes de instalar, asegúrate de tener en tu equipo:
- PHP >= 8.2  
- Composer  
- Node.js y NPM  
- MySQL o SQLite  
##  Instalación y configuración
1. Clonar el repositorio:  
   ```bash
   git clone <url-del-repo>
   cd crud_productos
   ```
2. Instalar dependencias de Laravel:  
   ```bash
   composer install
   ```
3. Instalar dependencias de frontend:  
   ```bash
   npm install
   ```
4. Copiar el archivo de entorno y generar la clave de la aplicación:  
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. Configurar la base de datos en el archivo `.env` (MySQL o SQLite).  
6. Ejecutar migraciones:  
   ```bash
   php artisan migrate
   ```
7. Compilar los assets:  
   ```bash
   npm run dev
   ```
8. Levantar el servidor:  
   ```bash
   php artisan serve
   ```
##  Acceso al sistema
- Primero debes registrarte en la ruta:  
  ```
  http://127.0.0.1:8000/register
  ```
- Una vez logueado, podrás acceder al CRUD en:  
  ```
  http://127.0.0.1:8000/productos
  ```
##  Funcionalidades principales
- Registro y autenticación de usuarios (Laravel Breeze).  
- CRUD completo de productos (crear, listar, editar y eliminar).  
- Validaciones en formularios.  
- Mensajes de éxito y error.  
- Rutas protegidas: solo usuarios registrados pueden acceder al CRUD.  
##  Conclusión
Este proyecto fue realizado como parte de mis prácticas universitarias 2025, con el objetivo de aplicar lo aprendido en Laravel y reforzar mi experiencia en desarrollo web.  

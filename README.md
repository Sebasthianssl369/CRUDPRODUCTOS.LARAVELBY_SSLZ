🛒 CRUD de Productos en Laravel

Este proyecto es una aplicación CRUD (Crear, Leer, Actualizar y Eliminar) de productos desarrollada con Laravel.
Incluye un sistema de autenticación básica y está estructurado para servir como punto de partida en proyectos más grandes.
🚀 Características
Autenticación de usuarios con Laravel Breeze (registro, login, reset de contraseña).
Módulo de gestión de productos:
➕ Crear productos
📖 Listar productos
✏️ Editar productos
❌ Eliminar productos
Migraciones y seeders para base de datos.
Vistas construidas con Blade Templates.
Configuración lista para despliegue en entorno local o en la nube.
🛠️ Tecnologías utilizadas
PHP 8.x
Laravel 10/11
MySQL
Composer (gestión de dependencias)
Node.js + NPM (compilación de frontend con Vite)
📂 Instalación y configuración
Clonar este repositorio:
git clone https://github.com/Sebasthianssl369/CRUDPRODUCTOS.LARAVELBY_SSLZ.git
Entrar en la carpeta del proyecto:
cd CRUDPRODUCTOS.LARAVELBY_SSLZ
Instalar dependencias de PHP:
composer install
Instalar dependencias de Node:
npm install
Copiar el archivo de entorno y configurarlo:
cp .env.example .env
Editar .env con tus credenciales de base de datos.
Generar la clave de aplicación:
php artisan key:generate
Ejecutar migraciones y seeders:
php artisan migrate --seed
Iniciar el servidor local:

php artisan serve
👉 La aplicación estará disponible en http://localhost:8000.

👨‍💻 Autor
Proyecto desarrollado por Sebasthian SSLZ
📧 Contacto: u22200942@utp.edu.pe

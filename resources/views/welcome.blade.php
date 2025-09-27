<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Laravel 12</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gradient-to-br from-gray-100 via-blue-50 to-gray-200">
    <nav class="bg-gray-900 shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center text-white">
            <a href="{{ url('/') }}" class="font-extrabold text-2xl tracking-wide hover:text-blue-400 transition">
                 Mi Proyecto Laravel
            </a>
            <div>
                @auth
                    <a href="{{ route('dashboard') }}" class="ml-6 hover:text-blue-400">Dashboard</a>
                    <a href="{{ route('productos.index') }}" class="ml-6 hover:text-blue-400">Productos</a>
                @else
                    <a href="{{ route('login') }}" class="ml-6 hover:text-blue-400">Login</a>
                    <a href="{{ route('register') }}" class="ml-6 hover:text-blue-400">Registrarse</a>
                @endauth
            </div>
        </div>
    </nav>

    
    <section class="flex items-center justify-center min-h-screen px-6">
        <div class="bg-white/90 backdrop-blur-md p-10 rounded-2xl shadow-2xl max-w-2xl text-center">
            <h1 class="text-5xl font-extrabold text-blue-600 mb-6 animate-bounce">
                 Bienvenido, Sebasthian
            </h1>
            <p class="text-gray-700 text-lg mb-8 leading-relaxed">
                Has iniciado tu primer proyecto en <span class="font-semibold text-blue-500">Laravel 12</span>.  
                <br>
                Gestiona tus productos fácilmente y explora tu dashboard personalizado.
            </p>

            <div class="flex justify-center gap-4 flex-wrap">
                @auth
                    <a href="{{ route('dashboard') }}" 
                       class="flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 0H7m6 0v6m0 0h6m-6 0H7" />
                        </svg>
                        Dashboard
                    </a>
                    <a href="{{ route('productos.index') }}" 
                       class="flex items-center gap-2 bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Ver Productos
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                       class="flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">
                        Login
                    </a>
                    <a href="{{ route('register') }}" 
                       class="flex items-center gap-2 bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
                         Registrarse
                    </a>
                @endauth
            </div>
        </div>
    </section>
</body>
</html>

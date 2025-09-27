<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight flex items-center gap-2">
            📊 {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Bienvenida -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg rounded-lg p-8">
                <h3 class="text-3xl font-bold">
                    ¡Hola, {{ auth()->user()->name }}! 👋
                </h3>
                <p class="mt-2 text-indigo-100">
                    Bienvenido a tu panel de control, aquí tienes un resumen rápido de tus productos.
                </p>
            </div>

            <!-- Resumen general -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white shadow rounded-lg p-6 border-l-4 border-blue-500">
                    <div class="flex items-center gap-3">
                        <span class="text-blue-500 text-3xl">📦</span>
                        <div>
                            <h3 class="font-semibold text-gray-600">Total Productos</h3>
                            <p class="text-3xl font-bold mt-1">{{ \App\Models\Producto::count() }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg p-6 border-l-4 border-green-500">
                    <div class="flex items-center gap-3">
                        <span class="text-green-500 text-3xl">📊</span>
                        <div>
                            <h3 class="font-semibold text-gray-600">Stock Total</h3>
                            <p class="text-3xl font-bold mt-1">{{ \App\Models\Producto::sum('stock') }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg p-6 border-l-4 border-yellow-500">
                    <div class="flex items-center gap-3">
                        <span class="text-yellow-500 text-3xl">⚠️</span>
                        <div>
                            <h3 class="font-semibold text-gray-600">Stock Bajo</h3>
                            <p class="text-3xl font-bold mt-1">{{ \App\Models\Producto::where('stock', '<', 5)->count() }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg p-6 border-l-4 border-indigo-500 flex items-center justify-center">
                    <a href="{{ route('productos.create') }}" 
                       class="px-6 py-3 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                         ➕ Crear Producto
                    </a>
                </div>
            </div>

            <!-- Últimos productos Agregados -->
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="font-semibold text-xl text-gray-700 mb-4 flex items-center gap-2">
                    🆕 Últimos Productos Agregados
                </h3>
                @if(\App\Models\Producto::count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-100 text-left text-gray-700">
                                    <th class="px-4 py-2">Nombre</th>
                                    <th class="px-4 py-2">Precio</th>
                                    <th class="px-4 py-2">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\Producto::latest()->take(5)->get() as $producto)
                                    <tr class="border-t hover:bg-gray-50 transition">
                                        <td class="px-4 py-2 font-medium text-gray-800">{{ $producto->nombre }}</td>
                                        <td class="px-4 py-2 text-blue-600 font-semibold">S/ {{ number_format($producto->precio, 2) }}</td>
                                        <td class="px-4 py-2">
                                            @if($producto->stock > 10)
                                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">{{ $producto->stock }}</span>
                                            @elseif($producto->stock > 0)
                                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm">{{ $producto->stock }}</span>
                                            @else
                                                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">Sin stock</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-gray-500">⚠️ No hay productos registrados todavía.</p>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>


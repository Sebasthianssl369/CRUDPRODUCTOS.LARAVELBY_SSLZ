@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18m-9 5h9" />
            </svg>
            Lista de Productos
        </h1>
        <a href="{{ route('productos.create') }}" 
           class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
            + Crear Producto
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="py-3 px-4 border-b">ID</th>
                    <th class="py-3 px-4 border-b">Nombre</th>
                    <th class="py-3 px-4 border-b">Descripción</th>
                    <th class="py-3 px-4 border-b">Precio</th>
                    <th class="py-3 px-4 border-b">Stock</th>
                    <th class="py-3 px-4 border-b text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($productos as $producto)
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 px-4 border-b">{{ $producto->id }}</td>
                    <td class="py-3 px-4 border-b font-medium text-gray-800">{{ $producto->nombre }}</td>
                    <td class="py-3 px-4 border-b text-gray-600">{{ $producto->descripcion }}</td>
                    <td class="py-3 px-4 border-b text-blue-600 font-semibold">S/ {{ number_format($producto->precio, 2) }}</td>
                    <td class="py-3 px-4 border-b">
                        @if($producto->stock > 10)
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-sm font-medium rounded-full">
                                {{ $producto->stock }}
                            </span>
                        @elseif($producto->stock > 0)
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-sm font-medium rounded-full">
                                {{ $producto->stock }}
                            </span>
                        @else
                            <span class="px-3 py-1 bg-red-100 text-red-700 text-sm font-medium rounded-full">
                                Sin stock
                            </span>
                        @endif
                    </td>
                    <td class="py-3 px-4 border-b text-center space-x-2">
                        <a href="{{ route('productos.edit', $producto) }}" 
                           class="px-3 py-1 bg-yellow-400 text-white rounded-lg hover:bg-yellow-500 transition">
                            Editar
                        </a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="inline-block"
                              onsubmit="return confirm('¿Seguro que deseas eliminar este producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="py-6 px-4 text-center text-gray-500">
                        No hay productos registrados.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

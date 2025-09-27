@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-12">
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-3xl font-bold text-center text-green-600 mb-8 flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2m-1 0v14m7-7H5"/>
            </svg>
            Editar Producto
        </h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-300 text-red-800 px-4 py-3 rounded mb-6">
                <strong class="font-semibold">Errores encontrados:</strong>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.update', $producto) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 font-medium mb-2">Nombre</label>
                <input type="text" name="nombre" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-green-200 px-4 py-2"
                       value="{{ old('nombre', $producto->nombre) }}" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Descripción</label>
                <textarea name="descripcion" rows="3"
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-green-200 px-4 py-2">{{ old('descripcion', $producto->descripcion) }}</textarea>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Precio</label>
                    <input type="number" step="0.01" name="precio"
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-green-200 px-4 py-2"
                           value="{{ old('precio', $producto->precio) }}" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Stock</label>
                    <input type="number" name="stock"
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-green-200 px-4 py-2"
                           value="{{ old('stock', $producto->stock) }}" required>
                </div>
            </div>

            <div class="flex items-center justify-between mt-8">
                <a href="{{ route('productos.index') }}" 
                   class="px-5 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                    Cancelar
                </a>
                <button type="submit" 
                        class="px-6 py-2 bg-green-600 text-white font-semibold rounded-lg shadow hover:bg-green-700 transition">
                    Actualizar Producto
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

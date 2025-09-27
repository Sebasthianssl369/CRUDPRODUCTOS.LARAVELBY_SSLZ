@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-12">
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-8 flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Crear Producto
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

        <form action="{{ route('productos.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-gray-700 font-medium mb-2">Nombre</label>
                <input type="text" name="nombre" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 px-4 py-2"
                       value="{{ old('nombre') }}" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Descripción</label>
                <textarea name="descripcion" rows="3"
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 px-4 py-2">{{ old('descripcion') }}</textarea>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Precio</label>
                    <input type="number" step="0.01" name="precio"
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 px-4 py-2"
                           value="{{ old('precio') }}" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Stock</label>
                    <input type="number" name="stock"
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 px-4 py-2"
                           value="{{ old('stock') }}" required>
                </div>
            </div>

            <div class="flex items-center justify-between mt-8">
                <a href="{{ route('productos.index') }}" 
                   class="px-5 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                    Cancelar
                </a>
                <button type="submit" 
                        class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                    Guardar Producto
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

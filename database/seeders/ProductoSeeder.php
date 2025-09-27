<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        // Crea 10 productos de prueba con datos falsos
        Producto::factory()->count(10)->create();
    }
}

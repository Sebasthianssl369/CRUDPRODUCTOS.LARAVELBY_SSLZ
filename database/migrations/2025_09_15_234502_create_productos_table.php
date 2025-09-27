<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');                // nombre del producto
            $table->text('descripcion')->nullable(); // descripción opcional
            $table->decimal('precio', 8, 2);         // precio con 2 decimales
            $table->integer('stock')->default(0);    // cantidad en stock
            $table->timestamps();                    // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

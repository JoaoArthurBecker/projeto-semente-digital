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
            Schema::create('propriedades', function (Blueprint $table) {
                $table->id(); // id int auto increment
                $table->string('nome'); // Nome, string
                $table->string('email')->unique(); // email string único
                $table->string('telefone'); // telefone
                $table->decimal('latitude', 10, 8); // campo localização (latitude)
                $table->decimal('longitude', 11, 8); // campo localização (longitude)
                $table->decimal('tamanho_propriedade', 8, 2); // tamanho_propriedade (decimal para representar áreas)
                $table->timestamps(); // created_at e updated_at
                });
    }
        
    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
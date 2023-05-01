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
        Schema::create('publicacao', function (Blueprint $table) {
            $table->id();            
            $table->string('titulo');            
            $table->text('conteudo');            
            $table->date('data_entrega')->nullable();            
            $table->foreignId('id_autor')->constrained('usuario');            
            $table->foreignId('id_materia')->constrained('materia');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacao');
    }
};

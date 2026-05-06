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
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->string('localizacion');
            $table->integer('duracion');
            $table->enum('dificultad', ['Baja', 'Media', 'Alta', 'Muy Alta']);
            $table->decimal('distancia', 8, 2);
            $table->string('tipo_de_ruta');
            $table->integer('altitud_maxima');
            $table->string('epoca_recomendada');
            $table->string('imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

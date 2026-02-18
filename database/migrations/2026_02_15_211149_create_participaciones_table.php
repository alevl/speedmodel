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
        Schema::create('participaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrera_id')->constrained();
            $table->foreignId('ejemplar_id')->constrained();
            $table->foreignId('jinete_id')->constrained();
            $table->foreignId('entrenador_id')->constrained();

            $table->decimal('peso_asignado', 5, 2);
            $table->decimal('descargo', 5, 2)->default(0);
            $table->decimal('peso_final', 5, 2);

            $table->decimal('tiempo_real', 8, 2)->nullable();
            $table->integer('posicion')->nullable();

            $table->decimal('speed_rating', 8, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participaciones');
    }
};

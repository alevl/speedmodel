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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reunion_id')->constrained();
            $table->integer('numero');
            $table->integer('distancia_metros');
            $table->string('superficie'); // dirt, turf
            $table->string('condicion_pista')->nullable(); // fast, muddy
            $table->decimal('tiempo_base', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};

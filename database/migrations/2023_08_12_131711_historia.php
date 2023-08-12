<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('historia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPregunta');
            $table->unsignedBigInteger('idSesion');
            $table->integer('numeroPregunta');
            $table->string('respuestaSeleccionada')->nullable();
            $table->string('comodin')->nullable();
            $table->timestamps();
    
            $table->foreign('idPregunta')->references('id')->on('pregunta');
            $table->foreign('idSesion')->references('id')->on('sesion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historia');
    }
};

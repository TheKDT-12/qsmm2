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
        Schema::create('sesion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idParticipante');
            $table->date('fecha_concurso');
            $table->timestamps();
    
            $table->foreign('idParticipante')->references('id')->on('participante');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesion');
    }
};

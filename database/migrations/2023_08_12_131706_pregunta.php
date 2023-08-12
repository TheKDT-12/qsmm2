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
        Schema::create('pregunta', function (Blueprint $table) {
            $table->id();
            $table->text('enunciado');
            $table->integer('dificultad');
            $table->string('correcta');
            $table->string('respuesta1');
            $table->string('respuesta2');
            $table->string('respuesta3');
            $table->string('respuesta4');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregunta');
    }
};

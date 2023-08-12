<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    // Atributos de la tabla 'pregunta'
    protected $fillable = ['enunciado', 'dificultad', 'correcta', 'respuesta1', 'respuesta2', 'respuesta3', 'respuesta4'];

    // Relaciones con otras tablas, si las tienes
}

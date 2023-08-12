<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta; // Importa el modelo Pregunta

class AdminController extends Controller
{
    public function index()
    {
        $preguntas = Pregunta::all();
        return view('admin.index', compact('preguntas'));
    }

    public function agregarPregunta()
    {
        return view('admin.agregar_pregunta');
    }

    public function editarPregunta($id)
    {
        $pregunta = Pregunta::findOrFail($id);
        return view('admin.editar_pregunta', compact('pregunta'));
    }

    public function guardarPregunta(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'enunciado' => 'required',
            'dificultad' => 'required|numeric',
            'correcta' => 'required',
            'respuesta1' => 'required',
            'respuesta2' => 'required',
            'respuesta3' => 'required',
            'respuesta4' => 'required',
        ]);

        // Crea y guarda la nueva pregunta en la base de datos
        $pregunta = new Pregunta();
        $pregunta->enunciado = $request->input('enunciado');
        $pregunta->dificultad = $request->input('dificultad');
        $pregunta->correcta = $request->input('correcta');
        $pregunta->respuesta1 = $request->input('respuesta1');
        $pregunta->respuesta2 = $request->input('respuesta2');
        $pregunta->respuesta3 = $request->input('respuesta3');
        $pregunta->respuesta4 = $request->input('respuesta4');
        $pregunta->save();

        // Redirige a la página deseada
        return redirect()->route('admin.index')->with('success', 'Pregunta agregada correctamente');
    }
}

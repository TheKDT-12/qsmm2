@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Agregar Pregunta</h2>
        <form action="{{ route('admin.guardarPregunta') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="enunciado">Enunciado</label>
                <textarea class="form-control" id="enunciado" name="enunciado" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="dificultad">Dificultad</label>
                <input type="number" class="form-control" id="dificultad" name="dificultad" required>
            </div>
            <div class="form-group">
                <label for="correcta">Respuesta Correcta</label>
                <input type="text" class="form-control" id="correcta" name="correcta" required>
            </div>
            <div class="form-group">
                <label for="respuesta1">Opción de Respuesta 1</label>
                <input type="text" class="form-control" id="respuesta1" name="respuesta1" required>
            </div>
            <div class="form-group">
                <label for="respuesta2">Opción de Respuesta 2</label>
                <input type="text" class="form-control" id="respuesta2" name="respuesta2" required>
            </div>
            <div class="form-group">
                <label for="respuesta3">Opción de Respuesta 3</label>
                <input type="text" class="form-control" id="respuesta3" name="respuesta3" required>
            </div>
            <div class="form-group">
                <label for="respuesta4">Opción de Respuesta 4</label>
                <input type="text" class="form-control" id="respuesta4" name="respuesta4" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Pregunta</button>
        </form>
    </div>
@endsection

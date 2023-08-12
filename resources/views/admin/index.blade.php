@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.agregarPregunta') }}" class="btn btn-primary">Agregar Pregunta</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Enunciado</th>
                <th>Dificultad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($preguntas as $pregunta)
                <tr>
                    <td>{{ $pregunta->id }}</td>
                    <td>{{ $pregunta->enunciado }}</td>
                    <td>{{ $pregunta->dificultad }}</td>
                    <td>
                        <a href="{{ route('admin.editarPregunta', $pregunta->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

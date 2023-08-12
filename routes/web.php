<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/preguntas/agregar', [AdminController::class, 'agregarPregunta'])->name('admin.agregarPregunta');
Route::get('/admin/preguntas/{id}/editar', [AdminController::class, 'editarPregunta'])->name('admin.editarPregunta');
Route::put('/admin/preguntas/{id}', [AdminController::class, 'actualizarPregunta'])->name('admin.actualizarPregunta');
Route::post('/admin/preguntas', [AdminController::class, 'guardarPregunta'])->name('admin.guardarPregunta');

// Agrega aquí otras rutas si es necesario

// Rutas generales de Laravel
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});




<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

Auth::routes();

Route::get('/perros', [App\Http\Controllers\HomeController::class, 'index'])->name('perros');
Route::get('/perros/nuevo', [App\Http\Controllers\AgregarController::class, 'agregarNuevo'])->name('nuevo');
Route::get('/perros/editar', [App\Http\Controllers\EditarController::class, 'editar'])->name('editar');

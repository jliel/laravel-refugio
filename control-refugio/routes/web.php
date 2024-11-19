<?php

use App\Http\Controllers\AgregarController;
use App\Http\Controllers\EditarController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PerrosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

Auth::routes();

Route::get('/perros', [App\Http\Controllers\HomeController::class, 'index'])->name('perros');
Route::get('/perros/nuevo', [AgregarController::class, 'agregarNuevo'])->name('nuevo');
Route::post('/perros/editar/{id}', [EditarController::class, 'store'])->name('perros.edit.store');
Route::get('/perros/editar/{id}', [App\Http\Controllers\EditarController::class, 'editar'])->name('editar');
Route::post('/perros/nuevo', [AgregarController::class, 'store'])->name('perros.store');
Route::delete('/perros/eliminar/{id}', [PerrosController::class,'borrar'])->name('perros.borrar');
Route::get('/perros/perfil/{id}', [PerrosController::class,'perfil'])->name('perros.perfil');
 
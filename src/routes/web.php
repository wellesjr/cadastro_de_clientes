<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::resource('/', ClienteController::class);
Route::post('/criar', [ClienteController::class, 'create'])->name('clientes.create');
Route::put('/editar/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/excluir/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

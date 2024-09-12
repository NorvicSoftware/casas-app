<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ClienteController::class)->group(function(){
    Route::get('/clientes', 'index');
    Route::get('/clientes/crear', 'create');
    Route::post('/clientes/crear', 'store');
    Route::get('/clientes/ver/{id}', 'show');
    Route::get('/cliente/editar/{id}', 'edit');
    Route::put('/clientes/editar/{id}', 'update');
    Route::delete('/clientes/eliminar/{id}', 'destroy');
});



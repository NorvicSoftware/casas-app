<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PropiedadController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\TransaccionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Agrupamos las rutas de Clientes
Route::controller(ClienteController::class)->group(function(){
    Route::get('/clientes','index');
    Route::get('/clientes/crear','create');
    Route::post('/clientes/create', 'store');
    Route::get('/clientes/show/{id}', 'show');
    Route::get('/clientes/editar/{id}', 'edit');
    Route::put('/clientes/update/{id}', 'update');
    Route::delete('/clientes/eliminar/{id}', 'destroy');
});

// Agrupamos las rutas de Propiedades
Route::controller(PropiedadController::class)->group(function(){
    Route::get('/propiedades', 'index');
    Route::get('/propiedades/crear', 'create');
    Route::post('/propiedades/create', 'store');
    Route::get('/propiedades/show/{id}', 'show');
    Route::get('/propiedades/editar/{id}', 'edit');
    Route::put('/propiedades/update/{id}', 'update');
    Route::delete('/propiedades/eliminar/{id}', 'destroy');
});

// Agrupamos las rutas de Propietarios
Route::controller(PropietarioController::class)->group(function(){
    Route::get('/propietarios', 'index');
    Route::get('/propietarios/crear', 'create');
    Route::post('/propietarios/create', 'store');
    Route::get('/propietarios/show/{id}', 'show');
    Route::get('/propietarios/editar/{id}', 'edit');
    Route::put('/propietarios/update/{id}', 'update');
    Route::delete('/propietarios/eliminar/{id}', 'destroy');
});

// Agrupamos las rutas de Vendedores
Route::controller(VendedorController::class)->group(function(){
    Route::get('/vendedores', 'index');
    Route::get('/vendedores/crear', 'create');
    Route::post('/vendedores/create', 'store');
    Route::get('/vendedores/show/{id}', 'show');
    Route::get('/vendedores/editar/{id}', 'edit');
    Route::put('/vendedores/update/{id}', 'update');
    Route::delete('/vendedores/eliminar/{id}', 'destroy');
});

// Agrupamos las rutas de Transacciones
Route::controller(TransaccionController::class)->group(function(){
    Route::get('/transacciones', 'index');
    Route::get('/transacciones/crear', 'create');
    Route::post('/transacciones/create', 'store');
    Route::get('/transacciones/show/{id}', 'show');
    Route::get('/transacciones/editar/{id}', 'edit');
    Route::put('/transacciones/update/{id}', 'update');
    Route::delete('/transacciones/eliminar/{id}', 'destroy');
});
<?php

use Illuminate\Support\Facades\Route;

// Llamamos a todos los controladores que usaremos
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductoController;    
use App\Http\Controllers\CustomerController;

// Creando una ruta para listar clientes
Route::get('/clientes', 
  [CustomerController::class, 'listar']
);








Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', function() {
    return "Aqui van los usuariosxxxxxxx";
});

Route::get('/usuarios2', 
  [UsuariosController::class, 'listar']
);

Route::get('/productos', 
  [ProductoController::class, 'listar']
);

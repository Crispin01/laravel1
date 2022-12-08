<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return redirect('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/clientes',[CustomerController::class, 'index'])->middleware(['auth', 'verified'])->name('clientes');  

Route::get('/clientes/registrar',[CustomerController::class, 'registrar'])
->middleware(['auth', 'verified'])->name('clientes.registrar');

Route::get('/clientes/actualizar/{id}',[CustomerController::class, 'actualizar'])
->middleware(['auth', 'verified'])->name('clientes.actualizar');

Route::post('/clientes/guardar',[CustomerController::class, 'guardar'])
->middleware(['auth', 'verified'])->name('clientes.guardar');

Route::post('/clientes/editar/{id}',[CustomerController::class, 'editar'])
->middleware(['auth', 'verified'])->name('clientes.editar');

Route::get('/empleados',[CustomerController::class, 'index'])->middleware(['auth', 'verified'])->name('empleados');  


Route::get('/ventas', function () {
    return view('ventas');
})->middleware(['auth', 'verified'])->name('ventas');

require __DIR__.'/auth.php';


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\EquipoFotograficoController;
use App\Http\Controllers\SesionFotografiaController;
use App\Http\Controllers\TransaccionFinancieraController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CONTRATOCONTROLLER
Route::get('contrato/create',[ContratoController::class, 'create']);
Route::resource('contrato',ContratoController::class);



//TransaccionFinanciera
Route::get('transaccionFinanciera/create',[TransaccionFinancieraController::class, 'create']);
Route::resource('TransaccionFinanciera',TransaccionFinancieraController::class);

//EquipoFotografico
Route::get('equipoFotografico/create',[EquipoFotograficoController::class, 'create']);
Route::resource('equipoFotografico',EquipoFotograficoController::class);


//EquipoFotografico
Route::get('clientes/create',[ClientesController::class, 'create']);
Route::resource('cliente',ClientesController::class);

<?php

use Illuminate\Support\Facades\Route;

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

Route::get('pedidos/nuevopedido',[App\Http\Controllers\PedidosController::class,'index'])->name('nuevopedido');

Route::post('pedidos/nuevopedido',[App\Http\Controllers\PedidosController::class,'crear'])->name('crearpedido');
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [App\Http\Controllers\PedidosController::class,'index'])->name('index')->middleware('auth');

Route::get('pedidos/nuevopedido',[App\Http\Controllers\PedidosController::class,'index'])->name('nuevopedido')->middleware('auth');;

Route::post('pedidos/nuevopedido',[App\Http\Controllers\PedidosController::class,'crear'])->name('crearpedido')->middleware('auth');;

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\PedidosController::class,'index'])->name('home')->middleware('auth');;

Route::get('/logout', [App\Http\Controllers\LogOutController::class,'perform'])->name('logout')->middleware('auth');;


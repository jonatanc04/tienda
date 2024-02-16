<?php

use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedidoController;

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
    return view('inicio');
})->name('inicio');

Route::get('/resumen', function () {
    return view('resumen');
})->name('resumen');

Route::resource('tienda', TiendaController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware('auth');
Route::resource('carrito', CarritoController::class)->middleware('auth');
Route::get('confirmarPedido', [PedidoController::class, 'confirmarPedido'])->name('confirmar');
Route::get('/carrito/cantidad', 'CarritoController@cantidadProductos')->name('carrito.cantidad');


Route::get('error', function () {
    return view('404');
});

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
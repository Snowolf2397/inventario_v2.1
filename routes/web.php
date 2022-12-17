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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('notebooks', App\Http\Controllers\NotebookController::class);
Route::resource('marcas', App\Http\Controllers\MarcaController::class);
Route::resource('teclados', App\Http\Controllers\TecladoController::class);
Route::resource('ubicaciones', App\Http\Controllers\UbicacioneController::class);
Route::resource('funcionarios', App\Http\Controllers\FuncionarioController::class);
Route::resource('sedes', App\Http\Controllers\SedeController::class);
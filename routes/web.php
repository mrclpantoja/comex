<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;
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

Route::resource('/categorias', CategoriasController::class)
    ->except(['show']);
/*
Route::controller(CategoriasController::class)->group(function(){
    Route::get('/categorias', 'index')->name('categorias.index');
    Route::get('/categorias/criar', 'create')->name('categorias.create');
    Route::post('/categorias/salvar', 'store')->name('categorias.store');
});
*/
Route::resource('/clientes', ClientesController::class)
    ->except(['show']);
/*
Route::controller(ClientesController::class)->group(function(){
    Route::get('/clientes', 'index');
    Route::get('/clientes/criar', 'create');
    Route::post('/clientes/salvar', 'store');
});
*/
Route::resource('/produtos', ProdutosController::class)
    ->except(['show']);
/*
Route::controller(ProdutosController::class)->group(function(){
    Route::get('/produtos', 'index');
    Route::get('/produtos/criar', 'create');
    Route::post('/produtos/salvar', 'store');
});
*/



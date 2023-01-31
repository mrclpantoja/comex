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


Route::get('/categorias', [CategoriasController::class, 'index']);
Route::get('/categorias/criar', [CategoriasController::class, 'create']);
Route::post('/categorias/salvar', [CategoriasController::class, 'store']);

Route::get('/clientes', [ClientesController::class, 'index']);
Route::get('/clientes/criar', [ClientesController::class, 'create']);
Route::post('/clientes/salvar', [ClientesController::class, 'store']);

Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/produtos/criar', [ProdutosController::class, 'create']);
Route::post('/produtos/salvar', [ProdutosController::class, 'store']);


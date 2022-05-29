<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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

Route::get('/produtos', 
    'App\Http\Controllers\ProdutosController@index');

Route::get('/produtos/create', 
    'App\Http\Controllers\ProdutosController@create');

Route::post('/produtos', 
    'App\Http\Controllers\ProdutosController@store');

Route::put('/produtos/{id}', 
    'App\Http\Controllers\ProdutosController@update');

Route::get('/produtos/{id}', 
    'App\Http\Controllers\ProdutosController@destroy');

Route::get('/produtos/{id}/edit', 
    'App\Http\Controllers\ProdutosController@edit');


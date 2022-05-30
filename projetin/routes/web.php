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



Route::get('/estados', 
    'App\Http\Controllers\EstadosController@index');

Route::get('/estados/create', 
    'App\Http\Controllers\EstadosController@create');

Route::post('/estados', 
    'App\Http\Controllers\EstadosController@store');

Route::put('/estados/{id}', 
    'App\Http\Controllers\EstadosController@update');

Route::get('/estados/{id}', 
    'App\Http\Controllers\EstadosController@destroy');

Route::get('/estados/{id}/edit', 
    'App\Http\Controllers\EstadosController@edit');


Route::get('/cidades', 
    'App\Http\Controllers\CidadesController@index');

Route::get('/cidades/create', 
    'App\Http\Controllers\CidadesController@create');

Route::post('/cidades', 
    'App\Http\Controllers\CidadesController@store');

Route::put('/cidades/{id}', 
    'App\Http\Controllers\CidadesController@update');

Route::get('/cidades/{id}', 
    'App\Http\Controllers\CidadesController@destroy');

Route::get('/cidades/{id}/edit', 
    'App\Http\Controllers\CidadesController@edit');
    

Route::get('/pessoas', 
    'App\Http\Controllers\PessoasController@index');

Route::get('/pessoas/create', 
    'App\Http\Controllers\PessoasController@create');

Route::post('/pessoas', 
    'App\Http\Controllers\PessoasController@store');

Route::put('/pessoas/{id}', 
    'App\Http\Controllers\PessoasController@update');

Route::get('/pessoas/{id}', 
    'App\Http\Controllers\PessoasController@destroy');

Route::get('/pessoas/{id}/edit', 
    'App\Http\Controllers\PessoasController@edit');
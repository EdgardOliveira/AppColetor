<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Rotas de autenticação não protegidas
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');

});
//Rotas de autenticação protegidas
Route::group([
    'middleware' => 'apiJwt',
    'prefix' => 'auth'
], function ($router) {
    //colocar essas rotas dentro do apijwt
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user-profile', 'AuthController@userProfile');
});


//Rotas protegidas (Clientes)
Route::group([
    'middleware' => 'apiJwt',
    'prefix' => 'clientes'
], function ($router) {
    Route::get('/', 'ClienteController@index');
    Route::get('/{id}', 'ClienteController@show');
    Route::post('/', 'ClienteController@store');
    Route::put('/', 'ClienteController@update');
    Route::delete('/{id}', 'ClienteController@destroy');
});

//Rotas protegidas (Cidades)
Route::group([
    'middleware' => 'apiJwt',
    'prefix' => 'cidades'
], function ($router) {
    Route::get('/', 'CidadeController@index');
    Route::get('/{id}', 'CidadeController@show');
    Route::post('/', 'CidadeController@store');
    Route::put('/', 'CidadeController@update');
    Route::delete('/{id}', 'CidadeController@destroy');
});

//Rotas protegidas (Endereços)
Route::group([
    'middleware' => 'apiJwt',
    'prefix' => 'enderecos'
], function ($router) {
    Route::get('/', 'EnderecoController@index');
    Route::get('/{id}', 'EnderecoController@show');
    Route::post('/', 'EnderecoController@store');
    Route::put('/', 'EnderecoController@update');
    Route::delete('/{id}', 'EnderecoController@destroy');
});

//Rotas protegidas (Leituras)
Route::group([
    'middleware' => 'apiJwt',
    'prefix' => 'leituras'
], function ($router) {
    Route::get('/', 'LeituraController@index');
    Route::get('/{id}', 'LeituraController@show');
    Route::post('/', 'LeituraController@store');
    Route::put('/', 'LeituraController@update');
    Route::delete('/{id}', 'LeituraController@destroy');
});

//Rotas protegidas (Medidores)
Route::group([
    'middleware' => 'apiJwt',
    'prefix' => 'medidores'
], function ($router) {
    Route::get('/', 'MedidorController@index');
    Route::get('/{id}', 'MedidorController@show');
    Route::post('/', 'MedidorController@store');
    Route::put('/', 'MedidorController@update');
    Route::delete('/{id}', 'MedidorController@destroy');
});

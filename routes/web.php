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

//Route::get('/', function () {return "hola";});
Route::get('/', 'HomeController@Saluda');
Route::post('/puntosRecoleccion', 'HomeController@vistaPuntos');

Route::get('/editar{id}', 'HomeController@Edita');
Route::post('/editar/guardaEditPunto', 'HomeController@guardaEditPunto');
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


Route::get('create', 'PuntoRecoleccionController@create');
// agregar nombre
Route::post('create', 'PuntoRecoleccionController@create')
         ->name('create');//con este llamas en la vista

Route::get('index', 'PuntoRecoleccionController@index');
// agregar nombre
Route::get('index', 'PuntoRecoleccionController@index')
         ->name('index');//con este llamas en la vista

Route::post('store', 'PuntoRecoleccionController@store');
// agregar nombre
Route::post('store', 'PuntoRecoleccionController@store')
         ->name('store');//con este llamas en la vista

Route::delete('destroy', 'PuntoRecoleccionController@destroy');
// agregar nombre
Route::delete('destroy', 'PuntoRecoleccionController@destroy')
         ->name('destroy');//con este llamas en la vista

Route::get('show', 'PuntoRecoleccionController@show');
Route::post('show', 'PuntoRecoleccionController@show')
         ->name('show');//con este llamas en la vista

Route::get('edit', 'PuntoRecoleccionController@edit');
Route::post('edit', 'PuntoRecoleccionController@edit')
         ->name('edit');//con este llamas en la vista 
         
Route::put('update', 'PuntoRecoleccionController@update');
Route::put('update', 'PuntoRecoleccionController@update')
         ->name('update');//con este llamas en la vista 

Route::resource('puntosReciclaje','PuntoRecoleccionController');
Route::resource('recolectores','RecolectoresController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

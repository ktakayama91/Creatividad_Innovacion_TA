<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('landing');
// });

/* HOME */
Route::get('/',['uses'=>'HomeController@index', 'as'=>'home.index']);

/* INFO */
Route::group(['prefix' => 'informacion'], function(){
	Route::get('/',['uses'=>'InformacionController@index', 'as'=>'informacion.index']);
});

/* GUIA */
Route::group(['prefix' => 'guia'], function(){
	Route::get('/',['uses'=>'GuiaController@index', 'as'=>'guia.index']);
});

/* RESTAURANTES */
Route::group(['prefix' => 'restaurante'], function(){
	Route::get('/',['uses'=>'RestauranteController@index', 'as'=>'restaurante.index']);
});

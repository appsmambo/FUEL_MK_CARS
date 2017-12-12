<?php

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/tipo-combustible', 'HomeController@getTipoCombustible')->name('tc_lista');
Route::get('/tipo-vehiculo', 'HomeController@getTipoVehiculo')->name('tv_lista');
Route::get('/vehiculo-marcas', 'HomeController@getVehiculoMarcas')->name('vmar_lista');
Route::get('/vehiculo-modelos', 'HomeController@getVehiculoModelo')->name('vmod_lista');



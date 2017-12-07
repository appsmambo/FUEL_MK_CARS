<?php

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/tipo-combustible', 'HomeController@getTipoCombustible')->name('tipoCombustible');
Route::get('/tipo-vehiculo', 'HomeController@getTipoVehiculo')->name('tipoVehiculo');
Route::get('/vehiculo-marcas', 'HomeController@getVehiculoMarcas')->name('vehiculoMarcas');
Route::get('/vehiculo-modelo', 'HomeController@getVehiculoModelo')->name('vehiculo_Modelo');



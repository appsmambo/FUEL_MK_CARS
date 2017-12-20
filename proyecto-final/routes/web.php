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
Route::post('/tipo-combustible-agregar', 'HomeController@postTipoCombustibleAgregar')->name('tc_agregar');

Route::get('/tipo-vehiculo', 'HomeController@getTipoVehiculo')->name('tv_lista');
Route::post('/tipo-vehiculo-agregar', 'HomeController@postTipoVehiculoAgregar')->name('tv_agregar');

Route::get('/vehiculo-marca', 'HomeController@getVehiculoMarca')->name('vmar_lista');
Route::post('/vehiculo-marca-agregar', 'HomeController@postVehiculoMarcaAgregar')->name('vmar_agregar');

Route::get('/vehiculo-modelos', 'HomeController@getVehiculoModelo')->name('vmod_lista');

Route::get('/estaciones', 'HomeController@getEstaciones')->name('estaciones');

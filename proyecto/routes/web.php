<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('usuarios', 'UserController@index')->name('usuarios');

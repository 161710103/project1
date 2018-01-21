<?php

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

Route::get('/home','TesController@home');
Route::get('/table','TesController@table');
Route::get('/gallery','TesController@gallery');
Route::get('/pelatih','TesController@pelatih');
Route::get('/sejarah','TesController@sejarah');

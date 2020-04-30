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

Route::get('/web/index.html', function () {
    return view('profil');
});


Route::get('/dosen','DosenController@index');
Route::get('/dosen/create','DosenController@create');
Route::get('/dosen/{dosen}','DosenController@show');
Route::post('/dosen','DosenController@store');
route::delete('/dosen/{dosen}','DosenController@destroy');
route::get('/dosen/{dosen}/edit','DosenController@edit');
route::patch('/dosen/{dosen}','DosenController@update');

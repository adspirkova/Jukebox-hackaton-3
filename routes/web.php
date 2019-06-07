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

Route::view('/form-test', 'forms/add-form');

Route::get('/songs', 'SongsController@hi');
Route::get('/list', 'ListMakerController@index');
Route::any('/form-test-edit', 'SongsController@edit');

Route::any('/form-test-edit/edit', 'SongsController@edit');


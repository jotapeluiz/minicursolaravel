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

Auth::routes();

Route::get('/', 'ContactController@index');

Route::group(['prefix' => 'contatos'], function () {
    Route::get('/create', 'ContactController@create');
    Route::post('/store', 'ContactController@store');
    Route::get('/list', 'ContactController@list')->middleware('auth');
});

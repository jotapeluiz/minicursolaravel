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

Route::group(['prefix' => 'contacts'], function () {
    Route::get('/create', 'ContactController@create')->middleware('auth');
    Route::post('/store', 'ContactController@store')->middleware('auth');
    Route::get('/show/{id}', 'ContactController@show')->middleware('auth');
    Route::put('/edit', 'ContactController@edit')->middleware('auth');
    Route::get('/list', 'ContactController@list')->middleware('auth');
});

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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'contacts'], function () {
    Route::get('/', 'ContactController@index');
    Route::get('/create', 'ContactController@create');
    Route::post('/store', 'ContactController@store');
    Route::get('/show/{id}', 'ContactController@show')->where('id', '[0-9]+');
    Route::get('/delete/{id}', 'ContactController@destroy')->where('id', '[0-9]+');
    Route::put('/edit', 'ContactController@edit');
});

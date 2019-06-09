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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'contacts'], function () {
    Route::get('/', 'ContactController@index');
    Route::get('/create', 'ContactController@create');
    Route::post('/store', 'ContactController@store');
    Route::get('/show/{id}', 'ContactController@show')->where('id', '[0-9]+');
    Route::get('/delete/{id}', 'ContactController@destroy')->where('id', '[0-9]+');
    Route::put('/edit', 'ContactController@edit');
});

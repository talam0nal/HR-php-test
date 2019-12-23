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

Route::get('/', 'OrderController@index')->name('orders.index');
Route::get('/orders/{id}/edit', 'OrderController@edit')->name('orders.edit');
Route::put('/orders/{id}/update', 'OrderController@update')->name('orders.update');

Route::get('/weather', 'WeatherController@show')->name('weather');
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

Route::get('/home', 'HomeController@index')->name('home');

Route::get ('/', 'BaseController@getIndex');

Route::get ('categories', 'TovarController@getAll');

Route::get('basket/all','BasketController@getAll');
Route::get ('basket/add/{id}', 'BasketController@getAdd');
Route::get ('basket/del/{id}', 'BasketController@getDelete');
Route::post('order', 'OrderController@postIndex');

Route::get ('/{url}', 'PageController@getIndex'); //default
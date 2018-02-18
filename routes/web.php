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


Route::get('/', ['as' => 'order.create', 'uses' => 'OrderController@index']);
Route::get('/', ['as' => 'index', 'uses' => 'OrderController@index']);
Route::get('/uzsakymu_sarasas', ['as' => 'order.show', 'uses' => 'OrderController@show']);
Route::get('/#uzsakyti', ['as' => 'index#uzsakyti', 'uses' => 'OrderController@index']);
Route::post('order',            ['as' => 'order.store',  'uses' => 'OrderController@store']);
Route::get('/detail/{id}',      ['as' => 'order.detail', 'uses' => 'OrderController@detail']);


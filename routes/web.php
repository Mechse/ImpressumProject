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

Route::get('/', 'UserController@showLogin');
Route::post('/', 'UserController@checkLogin');

Route::get('/register', 'UserController@showRegister');
Route::post('/register', 'UserController@store');


Route::get('/rawindex/{usr}', 'WebRawController@index');

Route::get('/rawindex/{usr}/{webid}', 'WebRawController@show');
Route::post('/rawindex/{usr}/{webid}', 'ImpressumController@store');

Route::get('/dashboard', 'WebRawController@dash');
#Route::get('/getC', 'WebRawController@requestRaws');

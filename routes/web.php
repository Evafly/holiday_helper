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

Route::get('/', 'BladeController@index');
Route::get('/entertainment', 'BladeController@entertainment');
Route::get('/exhibition', 'BladeController@exhibition');
Route::get('/exhibition_detail', 'BladeController@exhibitionDetail');
Route::get('/transport', 'BladeController@transport');
Route::get('/trains', 'BladeController@trains');
Route::get('/weather', 'BladeController@weather');
Route::get('/forecast36', 'BladeController@Forecast36');

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
Route::prefix('customer')->group(function () {
    Route::get('/', ['as'=>'index','uses'=>'CustomerController@index']);
    Route::get('/create', 'CustomerController@create');
    Route::post('/save', ['as'=>'save','uses'=>'CustomerController@save']);
    Route::get('/edit/{id}', 'CustomerController@edit');
    Route::get('/delete/{id}', 'CustomerController@delete');
    Route::get('/detail/{id}', 'CustomerController@detail');
});
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

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'ConsumentController@index');
    Route::get('/create', 'ConsumentController@create');
    Route::post('/', 'ConsumentController@save');
    Route::get('/{id}', 'ConsumentController@edit');
    Route::put('/{id}', 'ConsumentController@update');
    Route::delete('/{id}', 'ConsumentController@destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

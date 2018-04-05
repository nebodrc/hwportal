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

//Logger Routes
Route::group(['prefix'=>'loggers'], function(){
	Route::resource('/','EvvosController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

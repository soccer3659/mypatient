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

Route::group(['prefix' => 'operation'],function(){
    Route::get('patient/create','Operation\UserController@add')->middleware('auth');
    Route::post('patient/create','Operation\UserController@select');
    
    Route::get('patient/select','Operation\UserController@select');
    Route::post('patient/select','Operation\UserController@test2');
    
    Route::get('patient/test','Operation\UserController@test1');
    Route::post('patient/test','Operation\UserController@testresult');
    
    Route::get('patient/testresult','Operation\UserController@testresult');
});    




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

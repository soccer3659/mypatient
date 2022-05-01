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
    Route::get('patient/list','Operation\UserController@list'); //->middleware('auth');
    
    //↓　list.bladeで登録を押すとcontrollerのcreateへ
    Route::get('patient/create','Operation\UserController@create');
    //↓ create.bladeで新規登録を押すとcontrollerのaddへ
    Route::post('patient/','Operation\UserController@add');
    
    //Route::post('patient/create','Operation\UserController@select')->middleware('auth');
    
    Route::get('patient/select','Operation\UserController@select');//->middleware('auth');
    Route::post('patient/select','Operation\UserController@test2');//->middleware('auth');
    
    //↓ select.bladeでテスト開始を押すとcontrollerのtestへ
    Route::get('patient/test','Operation\UserController@test');//->middleware('auth');
    
    Route::post('patient/test','Operation\UserController@testresult');//->middleware('auth');
    
    //↓ selectの履歴delete 
    Route::get('patient/delete','Operation\UserController@delete');//->middleware('auth');
    //↓ listのpatient delete
    Route::get('patient/patientDelete','Operation\UserController@patientDelete');//->middleware('auth');
    
    Route::get('patient/history','Operation\UserController@history');//->middleware('auth');
});    
   
   
    
    




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

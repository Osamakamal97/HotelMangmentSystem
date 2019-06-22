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
    return view('room/index');
});

Route::group(['prefix' => 'hotel'],function (){
    Route::get('/',['as'=>'index','uses'=>'HotelController@index']);
    Route::get('/create',['as' => 'hotel.create', 'uses' => 'HotelController@create']);
    Route::post('/store',['as' => 'hotel.store', 'uses' => 'HotelController@store']);
    Route::get('/edit', ['as' => 'hotel.edit', 'uses' => 'HotelController@edit']);
    Route::post('/update', ['as' => 'hotel.update', 'uses' => 'HotelController@update']);
});

Route::group(['prefix' => 'room'], function () {

    Route::get('/', ['as' => 'index', 'uses' => 'RoomController@index']);
    Route::get('/create', ['as' => 'room.create', 'uses' => 'RoomController@create']);
    Route::post('/store', ['as' => 'room.store', 'uses' => 'RoomController@store']);
    Route::get('/edit', ['as' => 'room.edit', 'uses' => 'RoomController@edit']);
    Route::put('/update', ['as' => 'room.update', 'uses' => 'RoomController@update']);
    Route::get('/delete', ['as' => 'room.delete', 'uses' => 'RoomController@delete']);
    Route::get('/view', ['as' => 'room.view', 'uses' => 'RommController@view']);
});

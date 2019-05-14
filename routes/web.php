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

Route::group(['prefix' => 'hotel'],function (){

    Route::get('/',['as'=>'index','uses'=>'HotelController@index']);
    Route::get('/create',['as' => 'hotel.create', 'uses' => 'HotelController@create']);
    Route::post('/store',['as' => 'hotel.sote', 'uses' => 'HotelController@store']);

});

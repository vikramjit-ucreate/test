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

Auth::routes();

Route::get('/sheet', 'HomeController@index')->name('sheet');

Route::get('/getCode', 'HomeController@getCode')->name('getCode');

Route::get('/home', 'UploadMediaController@index')->name('home');
Route::get('/uploadFile', 'UploadMediaController@create')->name('uploadFile');
Route::post('/uploadFile', 'UploadMediaController@store')->name('storeUploadFile');

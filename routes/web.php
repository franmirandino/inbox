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

Auth::routes();


Route::resource('officials', 'OfficialController');
Route::resource('services', 'ServiceController');
Route::post('services/import', 'ServiceController@import')->name('services.import');

// Route::get('officials/getData', 'OfficialController@datosOfficial')->name('officials/getData');

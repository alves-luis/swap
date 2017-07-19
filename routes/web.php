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

Route::match(['PUT', 'PATCH'], 'settings', 'SettingsController@update')->name('settings.update');

Route::post('/enrollments', 'EnrollmentController@store')->name('enrollments.create');

Route::get('/enrollments/export', 'EnrollmentController@export')->name('enrollments.export');

Route::post('/exchanges', 'ExchangeController@store')->name('exchanges.create');
Route::post('/exchanges/{id}/confirm', 'ExchangeController@storeConfirmation')->name('exchanges.confirm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

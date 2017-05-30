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

Route::get('/', 'skillTestController@index')->name('home');

Route::get('user/{id}/setting', 'skillTestController@setting') ;

Route::post('user/setting', 'skillTestController@register') ;

Route::get('user/{id}/profile', 'skillTestController@profile');

Route::get('user/{id}/testlist', 'skillTestController@testList');

Route::get('user/{userid}/test/{id}', 'skillTestController@question');

Route::post('user/{userid}/profile', 'skillTestController@exam');

Route::post('user/{userid}/profile', 'skillTestController@updatehistory');

Route::post('setting', 'RegistrationController@store') ;

Route::post('login', 'SessionController@create');
Route::get('logout', 'SessionController@destroy');

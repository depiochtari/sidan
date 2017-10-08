<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('nelayan/create', 'NelayanController@create');
Route::get('nelayan', 'NelayanController@index');
Route::post('nelayan', 'NelayanController@store');
Route::get('ahli-waris/create', 'AhliWarisController@create');
Route::get('ahli-waris', 'AhliWarisController@index');
Route::post('ahli-waris', 'AhliWarisController@store');
Route::get('anak/create', 'AnakController@create');
Route::get('anak', 'AnakController@index');
Route::post('anak', 'AnakController@store');
Route::get('kub/create', 'KubController@create');
Route::get('kub', 'KubController@index');
Route::post('kub', 'KubController@store');

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
Route::get('nelayan/{nelayan}', 'NelayanController@show');
Route::get('nelayan/{nelayan}/edit', 'NelayanController@edit');
Route::put('nelayan/{nelayan}', 'NelayanController@update');
Route::delete('nelayan/{nelayan}', 'NelayanController@destroy');
Route::get('nelayan/{nelayan}', 'NelayanController@show');

Route::get('ahli-waris/create', 'AhliWarisController@create');
Route::get('ahli-waris', 'AhliWarisController@index');
Route::post('ahli-waris', 'AhliWarisController@store');
Route::get('ahli-waris/{ahli_waris}', 'AhliWarisController@show');
Route::get('ahli-waris/{ahli_waris}/edit', 'AhliWarisController@edit');
Route::put('ahli-waris/{ahli_waris}', 'AhliWarisController@update');
Route::delete('ahli-waris/{ahli_waris}', 'AhliWarisController@destroy');
Route::get('ahli-waris/{ahli_waris}', 'AhliWarisController@show');

Route::get('anak/create', 'AnakController@create');
Route::get('anak', 'AnakController@index');
Route::post('anak', 'AnakController@store');
Route::get('anak/{anak}', 'AnakController@show');
Route::get('anak/{anak}/edit', 'AnakController@edit');
Route::put('anak/{anak}', 'AnakController@update');
Route::delete('anak/{anak}', 'AnakController@destroy');

Route::get('kub/create', 'KubController@create');
Route::get('kub', 'KubController@index');
Route::post('kub', 'KubController@store');
Route::get('kub/{kub}', 'KubController@show');
Route::get('kub/{kub}/edit', 'KubController@edit');
Route::put('kub/{kub}', 'KubController@update');
Route::delete('kub/{kub}', 'KubController@destroy');

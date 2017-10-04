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

Route::get('/ahli_waris/create', 'Ahli_WarisController@create');
Route::get('/ahli_waris', 'Ahli_WarisController@index');
Route::post('/Ahli_Waris', 'Ahli_WarisController@store');

Route::auth();

Route::get('/home', 'HomeController@index');

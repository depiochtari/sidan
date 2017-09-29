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
<<<<<<< HEAD
<<<<<<< HEAD

Route::get('nelayan/create', 'NelayanController@create');
Route::get('nelayan', 'NelayanController@index');
Route::post('/nelayan', 'NelayanController@store');

=======
>>>>>>> a58cbd7a9dc531e38bc2ec6425bd76ad9ff16c6d
=======

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
>>>>>>> 2b81c7b800cc1a980fac0e39b4906e64adef9705

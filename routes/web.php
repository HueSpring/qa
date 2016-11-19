<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
  });

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/usercontroller/path','UserController@showPath');

Route::resource('my', 'MyController');

class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

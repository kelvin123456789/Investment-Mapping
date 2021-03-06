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

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');

Route::group(['prefix' => 'client'], function () {
  Route::get('/login', 'ClientAuth\LoginController@showLoginForm');
  Route::post('/login', 'ClientAuth\LoginController@login');
  Route::post('/logout', 'ClientAuth\LoginController@logout');

  Route::get('/register', 'ClientAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'ClientAuth\RegisterController@register');

  Route::post('/password/email', 'ClientAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'ClientAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'ClientAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'ClientAuth\ResetPasswordController@showResetForm');
});
Route::resource('products','ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index');

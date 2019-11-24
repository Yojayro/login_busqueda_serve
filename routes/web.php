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

Route::get('cliente', 'ClienteController@index');
Route::get('cliente/{id}', 'ClienteController@show');
Route::post('cliente', 'ClienteController@create');
Route::put('cliente/{id}', 'ClienteController@update');
Route::delete('cliente/{id}', 'ClienteController@destroy');
Route::post('login', 'AuthController@login');
Route::post('signup', 'AuthController@signup');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');
Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
Route::post('resetPassword', 'ChangePasswordController@process');

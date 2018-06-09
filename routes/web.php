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
Route::get('about','WelcomeController@about');
Route::get('photo','WelcomeController@photo');
Route::get('news','WelcomeController@news');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('db','WelcomeController@db');  
Route::get('dbins','WelcomeController@dbins');  

Route::get('movies','MovieController@index');
Route::get('movies/create','MovieController@create');
Route::post('movies/store','MovieController@store');

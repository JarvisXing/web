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
})->name('welcome');

Route::get('about','WelcomeController@about')->name('about');
Route::get('photo','WelcomeController@photo');
Route::get('news','WelcomeController@news');

Auth::routes();

Route::get('home', 'HomeController@home')->name('home');
Route::get('db','WelcomeController@db');  
Route::get('dbins','WelcomeController@dbins');  

Route::get('movies/chart','MovieController@chart');

Route::get('movies','MovieController@index')->name('movies.index');
Route::get('movies/create','MovieController@create')->name('movies.create');
Route::post('movies/store','MovieController@store');

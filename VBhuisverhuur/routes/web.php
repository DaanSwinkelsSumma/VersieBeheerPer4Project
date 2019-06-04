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

//basic page navigation routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Omgeving', ['middleware' => 'auth', 'uses' => 'PageController@Omgeving']);
Route::get('/Verhuur', ['middleware' => 'auth', 'uses' => 'PageController@Verhuur']);
Route::get('/Contact', ['middleware' => 'auth', 'uses' => 'PageController@Contact']);


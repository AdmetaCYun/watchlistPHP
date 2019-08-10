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

Route::get('/', 'AnimeController@index')->name('anime.index');
Route::get('/add', 'AnimeController@create')->name('anime.create');
Route::post('/create', 'AnimeController@store')->name('anime.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

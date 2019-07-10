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
    return view('layout.master');
});
Route::get('movies/create', 'movieController@create');
Route::post('movies'      , 'movieController@store' );

Route::get('movies', 'movieController@index'); //this will list the movies
Route::get('movies/{movie_id}/times/create', 'MovieTimeController@create');
Route::post('movies/{movie_id}/times', 'MovieTimeController@store');

Route::get('customer/view', 'customerController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



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
Route::get('admin','view_moviesController@view');
Route::get('admin/view_info/{id}','view_moviesController@get_info')->middleware('auth');
Route::patch('admin/view_info/{id}', 'view_moviesController@update')->middleware('auth');
Route::get('movies_page/{id}','view_moviesController@index');
Route::get('show_movies','view_moviesController@movies');
Route::get('book_tickets/{id}','view_moviesController@book_tickets')->middleware('guest');



Route::get('movies/create', 'movieController@create')->middleware('auth');
Route::post('movies'      , 'movieController@store' );

Route::get('movies/{movie_id}/times/create', 'MovieTimeController@create')->middleware('auth');
Route::post('movies/{movie_id}/times', 'MovieTimeController@store');

Route::get('customer/view', 'customerController@show')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


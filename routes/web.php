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

Route::get('movies_page/{id}','view_moviesController@index')->name('showMovie');
Route::get('show_movies','view_moviesController@movies');
Route::get('index','view_moviesController@index1')->name('index');
Route::get('contactus','view_moviesController@message');
Route::get('book_tickets/{id}','view_moviesController@book_tickets');
Route::get('type_page/{name}','view_moviesController@type');
Route::post('message','view_moviesController@contactus');
Route::post('book','view_moviesController@store');
Route::post('movies/{movie_id}/times', 'MovieTimeController@store');
Route::post('movies'      , 'movieController@store' );
Route::post('/search'      , 'movieController@search' )->name('movie.search');


//admin routes
Route::middleware('auth')->group(function() {
    Route::get('admin','view_moviesController@view');
    Route::get('admin/view_info/{id}','view_moviesController@get_info');
    Route::patch('admin/view_info/{id}', 'view_moviesController@update');
    Route::get('movies/create', 'movieController@create');
    Route::get('movies/{movie_id}/times/create', 'MovieTimeController@create');
    Route::get('customer/view', 'customerController@show');
    Route::get('admin/message', 'MessagesController@show');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


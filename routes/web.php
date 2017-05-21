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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('users', ['uses' => 'UsersController@index'])->middleware('auth');
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);
Auth::routes();

Route::get('/profile/{username}', 'ProfileController@profile');

Route::resource('events', 'EventsController');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('events', 'EventsController');
});



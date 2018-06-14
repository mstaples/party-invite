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
    return view('index');
})->name('index');

Route::get('index', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', function () {
    return view('index');
})->name('index');

Route::get('/photos', function () {
    return view('photos');
})->name('photos');

Route::get('/rsvp', 'HomeController@getRSVP')->name('rsvp')->middleware('auth');
Route::get('/logout', 'Auth\LoginController@getLogout');

Route::post('/rsvp', 'HomeController@postRSVP')->middleware('auth');

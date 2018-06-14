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
})->name('index')->middleware('auth');

Route::get('index', function () {
    return view('index');
})->name('index')->middleware('auth');

Auth::routes();

Route::get('/home', function () {
    return view('index');
})->name('index')->middleware('auth');

Route::get('/photos', function () {
    return view('photos');
})->name('photos')->middleware('auth');

Route::get('/rsvp', 'HomeController@getRSVP')->name('rsvp')->middleware('auth');

Route::post('/rsvp', 'HomeController@postRSVP')->middleware('auth');

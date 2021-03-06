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

Route::get('/', 'AppController@index');

Route::get('/community', function () {
    return view('community');
});


Route::get('/library', function () {
    return view('library');
});


Route::get('/tracks', function () {
    return view('tracks');
});

Route::get('/support', function () {
    return view('support');
});

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

Route::get('comipems', function () {
    return view('comipems');
});

Route::get('universidad', function () {
    return view('universidad');
});

Route::get('universidad/unam', function () {
    return view('university.unam');
});

Route::get('universidad/ipn', function () {
    return view('university.ipn');
});

Route::get('universidad/uam', function () {
    return view('university.uam');
});

Route::get('universidad/unaem', function () {
    return view('university.unaem');
});

Route::get('universidad/exanii', function () {
    return view('university.exanii');
});

Route::get('universidad/militar', function () {
    return view('university.militar');
});

Route::get('aulud', function () {
    return view('aulaludomatica');
});

Route::get('reg', function () {
    return view('regularizacion');
});

Route::get('ingles', function () {
    return view('ingles');
});

Route::get('computacion', function () {
    return view('computacion');
});

Route::get('gallery', function () {
    return view('gallery');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

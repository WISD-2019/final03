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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('index', function () {
    return view('bootstarap.index');
})->name('index');
Route::get('post', function () {
    return view('bootstarap.post');
})->name('post');
Route::get('about', function () {
    return view('bootstarap.about');
})->name('about');
Route::get('contact', function () {
    return view('bootstarap.contact');
})->name('contact');

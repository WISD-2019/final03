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

Route::pattern('id' , '[0-9]+');

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

//房型
Route::get('room', 'RoomController@index')->name('room');
Route::get('/room/{room}', 'RoomController@show')->name('room.show');

//訂單
Route::post('/reservation/store', 'ReservationController@store')->name('reservation.store');
Route::get('/reservation', 'ReservationController@index')->name('reservation.index');


//購物車
Route::post('/cart/store', 'CartController@store')->name('cart.store');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');


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
Route::get('reservation', function () {
    return view('reservation');
})->name('reservation');
//Route::post('reservation', 'ReservationController@store')->name('reservation');

//購物車
Route::post('/cart/store', 'CartController@store')->name('cart.store');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

// 後台
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('posts'          , ['as' => 'admin.posts.index' , 'uses' => 'UsersController@index']);
    Route::get('posts/create'   , ['as' => 'admin.posts.create', 'uses' => 'UsersController@create']);
    Route::get('posts/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'UsersController@edit']);
    //單元練習< 練習6-4> 設定更新所需的 Route
    Route::patch('posts/{id}',    ['as' => 'admin.posts.update', 'uses' => 'UsersController@update']);
    //單元練習< 練習4-3> 開啟新增的Route
    Route::post('posts',['as'=>'admin.posts.store','uses'=> 'UsersController@store']);
    //單元練習< 練習7-1> 設定所需的 Route
    Route::delete('posts/{id}'  , ['as' => 'admin.posts.destroy', 'uses' => 'UsersController@destroy']);
});

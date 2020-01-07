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

//最新消息
Route::get('post', function () {
    return view('bootstarap.post');
})->name('post');

//關於我們
Route::get('about', function () {
    return view('bootstarap.about');
})->name('about');

//交通
Route::get('traffic', function () {
    return view('bootstarap.traffic');
})->name('traffic');

//房型
Route::get('room', 'RoomController@index')->name('room');
Route::get('/room/{room}', 'RoomController@show')->name('room.show');

//訂單
Route::post('/reservation/store', 'ReservationController@store')->name('reservation.store');
Route::get('/reservation', 'ReservationController@index')->name('reservation.index');
Route::get('/reservation/{reservation}', 'ReservationController@show')->name('reservation.show');


//購物車
Route::post('/cart/store', 'CartController@store')->name('cart.store');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

//留言
Route::get('/comment', 'CommentController@index')->name('comment.index');
Route::post('/comment/store', 'CommentController@store')->name('comment.store');

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

    Route::get('reservation'          , ['as' => 'admin.reservation.index' , 'uses' => 'ReservationsController@index']);
    Route::get('reservation/create'   , ['as' => 'admin.reservation.create', 'uses' => 'ReservationsController@create']);
    Route::get('reservation/{id}/edit', ['as' => 'admin.reservation.edit'  , 'uses' => 'ReservationsController@edit']);
    //單元練習< 練習6-4> 設定更新所需的 Route
    Route::patch('reservation/{id}',    ['as' => 'admin.reservation.update', 'uses' => 'ReservationsController@update']);
    //單元練習< 練習4-3> 開啟新增的Route
    Route::post('reservation',['as'=>'admin.reservation.store','uses'=> 'ReservationsController@store']);
    //單元練習< 練習7-1> 設定所需的 Route
    Route::delete('reservation/{id}'  , ['as' => 'admin.reservation.destroy', 'uses' => 'ReservationsController@destroy']);

    Route::get('comments'          , ['as' => 'admin.comments.index' , 'uses' => 'CommentsController@index']);
    Route::get('comments/create'   , ['as' => 'admin.comments.create', 'uses' => 'CommentsController@create']);
    Route::get('comments/{id}/edit', ['as' => 'admin.comments.edit'  , 'uses' => 'CommentsController@edit']);
    //單元練習< 練習6-4> 設定更新所需的 Route
    Route::patch('comments/{id}',    ['as' => 'admin.comments.update', 'uses' => 'CommentsController@update']);
    //單元練習< 練習4-3> 開啟新增的Route
    Route::post('comments',['as'=>'admin.comments.store','uses'=> 'CommentsController@store']);
    //單元練習< 練習7-1> 設定所需的 Route
    Route::delete('comments/{id}'  , ['as' => 'admin.comments.destroy', 'uses' => 'CommentsController@destroy']);

    Route::get('reservationer'          , ['as' => 'admin.reservationer.index' , 'uses' => 'ReservationerController@index']);
    Route::delete('reservationer/{id}'  , ['as' => 'admin.reservationer.destroy', 'uses' => 'ReservationerController@destroy']);

});

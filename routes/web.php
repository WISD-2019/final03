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
    //主控台後台
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    //管理員管理後台
    //後台管理員管理首頁
    Route::get('posts'          , ['as' => 'admin.posts.index' , 'uses' => 'UsersController@index']);
    //後台新增管理員管理資訊
    Route::get('posts/create'   , ['as' => 'admin.posts.create', 'uses' => 'UsersController@create']);
    //後台編輯管理員管理資訊
    Route::get('posts/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'UsersController@edit']);
    //後台更新管理員管理資訊
    Route::patch('posts/{id}',    ['as' => 'admin.posts.update', 'uses' => 'UsersController@update']);
    //後台儲存管理員管理資訊
    Route::post('posts',['as'=>'admin.posts.store','uses'=> 'UsersController@store']);
    //後台刪除管理員管理資訊
    Route::delete('posts/{id}'  , ['as' => 'admin.posts.destroy', 'uses' => 'UsersController@destroy']);

    //訂房人管理後台
    //後台訂房人管理首頁
    Route::get('reservationer'          , ['as' => 'admin.reservationer.index' , 'uses' => 'ReservationerController@index']);
    //後台刪除訂房人管理資訊
    Route::delete('reservationer/{id}'  , ['as' => 'admin.reservationer.destroy', 'uses' => 'ReservationerController@destroy']);

    //訂房管理後台
    //後台訂房管理首頁
    Route::get('reservation'          , ['as' => 'admin.reservation.index' , 'uses' => 'ReservationsController@index']);
    //後台刪除訂房管理資訊
    Route::delete('reservation/{id}'  , ['as' => 'admin.reservation.destroy', 'uses' => 'ReservationsController@destroy']);

    //留言管理後台
    //後台留言管理首頁
    Route::get('comments'          , ['as' => 'admin.comments.index' , 'uses' => 'CommentsController@index']);
    //後台新增留言管理資訊
    Route::get('comments/create'   , ['as' => 'admin.comments.create', 'uses' => 'CommentsController@create']);
    //後台編輯留言管理資訊
    Route::get('comments/{id}/edit', ['as' => 'admin.comments.edit'  , 'uses' => 'CommentsController@edit']);
    //後台更新留言管理資訊
    Route::patch('comments/{id}',    ['as' => 'admin.comments.update', 'uses' => 'CommentsController@update']);
    //後台儲存留言管理資訊
    Route::post('comments',['as'=>'admin.comments.store','uses'=> 'CommentsController@store']);
    //後台刪除留言管理資訊
    Route::delete('comments/{id}'  , ['as' => 'admin.comments.destroy', 'uses' => 'CommentsController@destroy']);

});

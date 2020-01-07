<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 系統的作用

線上訂房系統

   - 讓使用者透過此系統的簡單操作就可進行線上訂房
   - 讓使用者了解民宿
   - 讓管理者在一套系統裡就可管控所有顧客及訂房資料


## 系統的主要功能
★ 前台

- 最新消息(Route::get('post', function () {return view('bootstarap.post');}))   [3A632068 彭惠昕](https://github.com/3A632068)
- 關於我們(Route::get('about', function () {    return view('bootstarap.about');})   [3A632068 彭惠昕](https://github.com/3A632068)
- 交通(Route::get('traffic', function () { return view('bootstarap.traffic');})   [3A632068 彭惠昕](https://github.com/3A632068)
- 房型 (Route::get('room', 'RoomController@index')) [3A632068 彭惠昕](https://github.com/3A632068)
- 房型詳細資料 (Route::get('/room/{room}', 'RoomController@show'))   [3A632068 彭惠昕](https://github.com/3A632068)
- 留言 (Route::get('/comment', 'CommentController@index'))   [3A632068 彭惠昕](https://github.com/3A632068)
- 購物車 (Route::get('/cart', 'CartController@index'))   [3A632068 彭惠昕](https://github.com/3A632068)

★ 後台

- 主控台     [3A632055 姚佳心](https://github.com/3A632055)
- 管理員管理 [3A632055 姚佳心](https://github.com/3A632055)
- 使用者管理 [3A632055 姚佳心](https://github.com/3A632055)
- 訂房管理   [3A632055 姚佳心](https://github.com/3A632055)
- 留言管理   [3A632055 姚佳心](https://github.com/3A632055)

- // 後台

- Route::group(['prefix' => 'admin'], function() {

   - //主控台後台
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
    //後台新增訂房管理資訊
    Route::get('reservation/create'   , ['as' => 'admin.reservation.create', 'uses' => 'ReservationsController@create']);
    //後台編輯訂房管理資訊
    Route::get('reservation/{id}/edit', ['as' => 'admin.reservation.edit'  , 'uses' => 'ReservationsController@edit']);
    //後台更新訂房管理資訊
    Route::patch('reservation/{id}',    ['as' => 'admin.reservation.update', 'uses' => 'ReservationsController@update']);
    //後台儲存訂房管理資訊
    Route::post('reservation',['as'=>'admin.reservation.store','uses'=> 'ReservationsController@store']);
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


## 初始專案與DB負責的同學


- 初始專案 [3A632068 彭惠昕](https://github.com/3A632068)

- 資料庫及資料表建立、資料表關連  [3A632055 姚佳心](https://github.com/3A632055) [3A632068 彭惠昕](https://github.com/3A632068)

## 額外使用的套件或樣板

- 前台樣板- [Clean Blog](https://startbootstrap.com/themes/clean-blog/)

    使畫面看起來不單調，讓此系統深受使用者喜愛

- 後台樣板-[Side Bar](https://startbootstrap.com/templates/simple-sidebar/)

    為製做簡易操作介面，讓管理者輕鬆使用

## 系統復原步驟

1. 複製https://github.com/WISD-2019/final03.git 本系統在GitHub的專案，打開Source tree，點選clone後，輸入以下資料

    。Source Path:https://github.com/WISD-2019/final03.git
    
    。Destination Path:C:\wagon\uwamp\www\final03

2. 打開cmder，切換至專案所在資料夾，cd final03

3. 在cmder輸入以下命令，以復原此系統：

    。composer install
    
    。composer run‐script post‐root‐package‐install
    
    。composer run‐script post‐create‐project‐cmd

4. 將專案打開 在.env檔案內輸入資料庫主機IP、Port、名稱、與帳密如下：

    。DB_HOST=127.0.0.1

    。DB_PORT=33060

    。DB_DATABASE=final03

    。DB_USERNAME=root

    。DB_PASSWORD=root

5. 在cmder輸入以下命令，將所有資料表產生至final03資料庫內

    。php artisan migrate

6. 開啟UwAmp，點選PHPMyAdmin，輸入以下資料後並點擊登入，進入MySQL後，建立新資料庫，名稱為final03，將專案sql資料夾裡的rooms.sql(C:\wagon\uwamp\www\final03\sql\rooms.sql)和users.sql(C:\wagon\uwamp\www\final03\sql\users.sql)匯入

    。資料庫系統:MYSQL

    。伺服器:localhost:33060

    。帳號:root

    。密碼:root

7. 在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final03/public

## 系統使用帳號

前台-使用者

   - 帳號:s3a632055@gm.student.ncut.edu.tw

   - 密碼:3a632055

   - 帳號:s3a632068@gm.student.ncut.edu.tw

   - 密碼:3a632068

後台-管理者

   - 帳號:test0000@gmail.com
   
   - 密碼:test0000

## 系統開發人員

   -  [3A632055 姚佳心](https://github.com/3A632055)

   -  [3A632068 彭惠昕](https://github.com/3A632068)

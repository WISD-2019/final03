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
前台

- 最新消息(Route::get('post', function () {return view('bootstarap.post');}))   [3A632068 彭惠昕](https://github.com/3A632068)
- 關於我們(Route::get('about', function () {    return view('bootstarap.about');})   [3A632068 彭惠昕](https://github.com/3A632068)
- 交通(Route::get('traffic', function () { return view('bootstarap.traffic');})   [3A632068 彭惠昕](https://github.com/3A632068)
- 房型 (Route::get('room', 'RoomController@index')) [3A632068 彭惠昕](https://github.com/3A632068)
- 房型詳細資料 (Route::get('/room/{room}', 'RoomController@show'))   [3A632068 彭惠昕](https://github.com/3A632068)
- 留言 (Route::get('/comment', 'CommentController@index'))   [3A632068 彭惠昕](https://github.com/3A632068)
- 購物車 (Route::get('/cart', 'CartController@index'))   [3A632068 彭惠昕](https://github.com/3A632068)

前台

- 主控台(Route::get('posts', 'AdminDashboardController@index'))   [3A632055 姚佳心](https://github.com/3A632055)
- 管理員管理(Route::get('posts', 'UsersController@index'))   [3A632055 姚佳心](https://github.com/3A632055)
- 使用者管理(Route::get('reservationer', 'ReservationerController@index'))   [3A632055 姚佳心](https://github.com/3A632055)
- 訂房管理 (Route::get('reservation', 'ReservationsController@index'))   [3A632055 姚佳心](https://github.com/3A632055)
- 留言管理 (Route::get('/comments/{room}', 'CommentsController@show'))   [3A632055 姚佳心](https://github.com/3A632055)


## 初始專案與DB負責的同學


- 初始專案 [3A632068 彭惠昕](https://github.com/3A632068)

- 資料庫及資料表建立、資料表關連  [3A632055 姚佳心](https://github.com/3A632055) [3A632068 彭惠昕](https://github.com/3A632068)

## 額外使用的套件或樣板

- 前台樣板- [Clean Blog](https://startbootstrap.com/themes/clean-blog/)

使畫面看起來不單調，讓此系統深受使用者喜愛

- 後台樣板-[Side Bar](https://startbootstrap.com/templates/simple-sidebar/)

為製做簡易操作介面，讓管理者輕鬆使用

## 系統復原步驟

複製https://github.com/WISD-2019/final03.git本系統在GitHub的專案，打開Source tree，點選clone後，輸入以下資料

Source Path:https://github.com/WISD-2019/final03.git
Destination Path:C:\wagon\uwamp\www\final03
打開cmder，切換至專案所在資料夾，cd final03

在cmder輸入以下命令，以復原此系統：

composer install
composer run‐script post‐root‐package‐install
composer run‐script post‐create‐project‐cmd
將專案打開 在.env檔案內輸入資料庫主機IP、Port、名稱、與帳密如下：

。DB_HOST=127.0.0.1

。DB_PORT=33060

。DB_DATABASE=final03

。DB_USERNAME=root

。DB_PASSWORD=root

在cmder輸入以下命令，將所有資料表產生至final03資料庫內

php artisan migrate
開啟UwAmp，點選PHPMyAdmin，輸入以下資料後並點擊登入，進入MySQL後，建立新資料庫，名稱為final03，將final03.sql(C:\wagon\uwamp\www\final03\database\final03.sql)匯入

。資料庫系統:MYSQL

。伺服器:localhost:33060

。帳號:root

。密碼:root

。在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final03/public

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

-[3A632055 姚佳心](https://github.com/3A632055)
-[3A632068 彭惠昕](https://github.com/3A632068)

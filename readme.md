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


Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## 初始專案與DB負責的同學


初始專案 [3A632068 彭惠昕](https://github.com/3A632068)
資料庫及資料表建立、資料表關連  [3A632055 姚佳心](https://github.com/3A632055) [3A632068 彭惠昕](https://github.com/3A632068)

## 額外使用的套件或樣板

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## 系統復原步驟

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## 系統使用帳號

前台-使用者

●帳號:s3a632055@gm.student.ncut.edu.tw

●密碼:3a632055

●帳號:s3a632068@gm.student.ncut.edu.tw

●密碼:3a632068

後台-管理者

●帳號:test0000@gmail.com
●密碼:test0000

## 系統開發人員

-[3A632055 姚佳心](https://github.com/3A632055)
-[3A632068 彭惠昕](https://github.com/3A632068)

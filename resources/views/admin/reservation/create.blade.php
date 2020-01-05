@extends('admin.layouts.master')

@section('title', '新增管理員')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增訂房 <small>請輸入訂房資料</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 訂房管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<!--單元練習< 練習3-1> 編輯 create.blade.php 及 edit.blade.php-->
<!--單元練習< 練習4-2> 將錯誤訊息區塊做成樣板-->
@include('admin.layouts.partials.validation')
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <!--單元練習< 練習4-5> 開啟 resources/views/admin/posts/create.blade.php將 <form>及 </form>標籤，以HTML的表單改寫-->
        <form action="/admin/reservation" method="POST" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <label>姓名：</label>
                <input name="user_id" class="form-control" placeholder="請輸入訂房人姓名">
            </div>

            <div class="form-group">
                <label>性別：</label><br>
                <input type="radio" name="gender" value="0"> 男<br>
                <input type="radio" name="gender" value="1"> 女<br>
            </div>

            <div class="form-group">
                <label for="bookdate">生日：</label><br>
                <input name="birthday" type="date" id="bookdate" placeholder="2014-09-18">
            </div>

            <div class="form-group">
                <label>身分證號碼：</label>
                <input name="id_number" class="form-control" placeholder="請填入身分證號碼">
            </div>

            <div class="form-group">
                <label>電話號碼：</label>
                <input name="phone" class="form-control" placeholder="請填入電話號碼">
            </div>

            <div class="form-group" action="/admin/reservation/index" method="POST">
                <label>房型：</label><br>
                <input type="checkbox" name="type[]" value="房型1"><label>房型1</label>
                <input type="checkbox" name="type[]" value="房型2"><label>房型2</label>
                <input type="checkbox" name="type[]" value="房型3"><label>房型3</label>
            </div>

            <div class="form-group">
                <label for="bookdate">預定入住日期：</label><br>
                <input name="book_start" type="date" id="bookdate" placeholder="2014-09-18">
            </div>

            <div class="form-group">
                <label for="bookdate">預定退房日期：</label><br>
                <input name="book_end" type="date" id="bookdate" placeholder="2014-09-18">
            </div>

            <div class="form-group">
                <label>特殊需求：</label>
                <textarea name="need" class="form-control" placeholder="請輸入特殊需求" rows="10"></textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color: #6f42c1;border-color: #6f42c1">新增</button>
                <button type="RESET" class="btn btn-success" style="background-color: #6f42c1;border-color: #6f42c1">重新填寫</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection

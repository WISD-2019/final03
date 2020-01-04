@extends('admin.layouts.master')

@section('title', '新增管理員')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增管理員 <small>請輸入管理員</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 管理員管理
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
        <form action="/admin/posts" method="POST" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <label>職位：</label>
                <select name="job_name" class="form-control">
                    <option value="0">總管理員</option>
                    <option value="1">一般管理員</option>
                </select>
            </div>

            <div class="form-group">
                <label>姓名：</label>
                <input name="name" class="form-control" placeholder="請填入管理員姓名">
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

            <div class="form-group">
                <label>帳號（Email）：</label>
                <input name="email" class="form-control" placeholder="請填入管理員帳號">
            </div>

            <div class="form-group">
                <label>密碼</label>
                <input name="password" class="form-control"  placeholder="請填入管理員密碼">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color: #6f42c1;border-color: #6f42c1">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection

@extends('admin.layouts.master')

@section('title', '編輯文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯管理員 <small>編輯管理員內容</small>
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
<!--單元練習< 練習6-2>  修改 edit.blade.php表單-->
<div class="row">
    <div class="col-lg-12">
        <form action="/admin/posts/{{$post->id}}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>職位：</label>
                <input name="job_name" class="form-control" placeholder="請輸入職位" value="{{$post->job_name }}">
            </div>

            <div class="form-group">
                <label>姓名：</label>
                <input name="name" class="form-control" placeholder="請輸入管理員姓名" value="{{$post->name}}">
            </div>

            <div class="form-group">
                <label>性別：</label><br>
                <input type="radio" name="gender" value="0" {{$post->gender?'':'checked' }}> 女<br>
                <input type="radio" name="gender" value="1" {{$post->gender?'checked':'' }}> 男<br>
            </div>

            <div class="form-group">
                <label for="bookdate">生日：</label><br>
                <input name="birthday" type="date" id="bookdate" placeholder="2014-09-18" value="{{$post->birthday}}">
            </div>

            <div class="form-group">
                <label>身分證號碼：</label>
                <input name="id_number" class="form-control" placeholder="請輸入管理員身分證號碼" value="{{$post->id_number}}">
            </div>

            <div class="form-group">
                <label>電話號碼：</label>
                <input name="phone" class="form-control" placeholder="請輸入管理員電話號碼" value="{{$post->phone}}">
            </div>

            <div class="form-group">
                <label>帳號（Email）：</label>
                <input name="email" class="form-control" placeholder="請輸入管理員帳號" value="{{$post->email}}">
            </div>

            <div class="form-group">
                <label>密碼</label>
                <input name="password" class="form-control" placeholder="請輸入管理員密碼" value="{{$post->password}}">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color: #6f42c1;border-color: #6f42c1">更新</button>
                <button type="RESET" class="btn btn-success" style="background-color: #6f42c1;border-color: #6f42c1">重新填寫</button>
            </div>

        </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection

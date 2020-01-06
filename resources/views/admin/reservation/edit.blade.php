@extends('admin.layouts.master')

@section('title', '編輯文章')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                編輯訂房 <small>編輯訂房資料</small>
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
    <!--單元練習< 練習6-2>  修改 edit.blade.php表單-->
    <div class="row">
        <div class="col-lg-12">
            @foreach($reservations as $reservation)
            <form action="/admin/reservation/{{$post->id}}" method="POST" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label>姓名：</label>
                    <input name="user_id" class="form-control" placeholder="請輸入訂房人姓名" value="{{$post->user_id}}">
                </div>


                <div class="form-group">
                    <label>性別：</label><br>
                    <input type="radio" name="gender" value="0" {{$post->gender?'':'SELECTED' }}> 女<br>
                    <input type="radio" name="gender" value="1" {{$post->gender?'SELECTED':'' }}> 男<br>
                </div>

                <div class="form-group">
                    <label for="bookdate">生日：</label><br>
                    <input name="birthday" type="date" id="bookdate" placeholder="2014-09-18">
                    <label style="color: rgba(71,63,74,0.77)">原生日：
                    <span id="name-{{ $reservation->user_id }}">
                                {{ $reservation->user->birthday }}
                            </span></label>
                </div>

                <div class="form-group">
                    <label>身分證號碼：</label>
                    <input name="id_number" class="form-control" placeholder="請填入身分證號碼" value="{{$post->id_number}}">
                </div>

                <div class="form-group">
                    <label>電話號碼：</label>
                    <input name="phone" class="form-control" placeholder="請填入電話號碼" value="{{$post->phone}}">
                </div>

                <div class="form-group" action="" method="POST">
                    <label>房型：</label><br>
                    <input type="checkbox" name="type[]" value="房型1" {{$post->type?'':'checked' }}><label>房型1</label>
                    <input type="checkbox" name="type[]" value="房型2" {{$post->type?'':'checked' }}><label>房型2</label>
                    <input type="checkbox" name="type[]" value="房型3" {{$post->type?'':'checked' }}><label>房型3</label>
                </div>

                <div class="form-group">
                    <label for="bookdate">實際入住日期：</label><br>
                    <input name="checkin" type="date" id="bookdate" placeholder="2014-09-18">
                    <label style="color: rgba(71,63,74,0.77)">原實際入住日期：{{$post->checkin}}</label>
                </div>

                <div class="form-group">
                    <label for="bookdate">實際退房日期：</label><br>
                    <input name="checkout" type="date" id="bookdate" placeholder="2014-09-18">
                    <label style="color: rgba(71,63,74,0.77)">原實際退房日期：{{$post->checkout}}</label>
                </div>

                <div class="form-group">
                    <label for="bookdate">預定入住日期：</label><br>
                    <input name="book_start" type="date" id="bookdate" placeholder="2014-09-18">
                    <label style="color: rgba(71,63,74,0.77)">原預定入住日期：{{$post->book_start}}</label>
                </div>

                <div class="form-group">
                    <label for="bookdate">預定退房日期：</label><br>
                    <input name="book_end" type="date" id="bookdate" placeholder="2014-09-18">
                    <label style="color: rgba(71,63,74,0.77)">原預定退房日期：{{$post->book_end}}</label>
                </div>

                <div class="form-group">
                    <label for="bookdate">取消下訂日期：</label><br>
                    <input name="cancel" type="date" id="bookdate" placeholder="2014-09-18">
                    <label style="color: rgba(71,63,74,0.77)">原取消下訂日期：{{$post->cancel}}</label>
                </div>

                <div class="form-group">
                    <label>特殊需求：</label>
                    <input name="need" class="form-control" placeholder="請輸入特殊需求" value="{{$post->need}}" rows="10" >
                </div>

                <div class="form-group">
                    <label>狀態：</label>
                    <select name="status" class="form-control">
                        <option value="0" {{$post->status?'':'SELECTED' }}>預約中</option>
                        <option value="1" {{$post->status?'SELECTED':'' }}>已取消</option>
                    </select>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-success" style="background-color: #6f42c1;border-color: #6f42c1">更新</button>
                    <button type="RESET" class="btn btn-success" style="background-color: #6f42c1;border-color: #6f42c1">重新填寫</button>
                </div>

            </form>
            @endforeach
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </div>
    </div>
    <!-- /.row -->
@endsection

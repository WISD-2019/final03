@extends('admin.layouts.master')

@section('title', '使用者管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            人員管理 <small>所有使用者</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 使用者管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="200" style="text-align: center">使用者編號</th>
                        <th width="150" style="text-align: center">姓名</th>
                        <th width="100" style="text-align: center">性別</th>
                        <th width="150" style="text-align: center">生日</th>
                        <th width="200" style="text-align: center">身分證號碼</th>
                        <th width="150" style="text-align: center">電話號碼</th>
                        <th width="350" style="text-align: center">帳號（Email）</th>
                        <th width="250" style="text-align: center">密碼</th>
                        <th style="text-align: center">管理</th>>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    @if($user->type == "1")
                    <tr >
                        <td style="text-align: center">{{ $user->id }}</td>
                        <td style="text-align: center">{{ $user->name }}</td>
                        <td style="text-align: center">{{ $user->gender?'男':'女'}}</td>
                        <td style="text-align: center">{{ $user->birthday }}</td>
                        <td style="text-align: center">{{ $user->id_number }}</td>
                        <td style="text-align: center">{{ $user->phone }}</td>
                        <td style="text-align: center">{{ $user->email }}</td>
                        <td style="text-align: center">{{ $user->password }}</td>
                        <td style="text-align: center">
                            <form action="{{ route('admin.reservationer.destroy', $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button class="btn btn-link" style="color: red">刪除</button>
                            </form>
                        </td>
                    </tr>
                                @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection

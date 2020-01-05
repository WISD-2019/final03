@extends('admin.layouts.master')

@section('title', '管理員管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            留言管理 <small>所有留言資料</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 留言管理
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
                        <th width="100" style="text-align: center">留言編號</th>
                        <th width="150" style="text-align: center">留言人姓名</th>
                        <th style="text-align: center">留言內容</th>
                        <th width="300" style="text-align: center">留言人Email</th>
                        <th width="150" style="text-align: center">留言日期</th>
                        <th width="100" style="text-align: center">管理</th>>
                    </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    <tr >
                        <td style="text-align: center">{{ $comment->id }}</td>
                        <td style="text-align: center">{{ $comment->name }}</td>
                        <td style="text-align: center">{{ $comment->comment }}</td>
                        <td style="text-align: center">{{ $comment->email }}</td>
                        <td style="text-align: center">{{ $comment->created_at }}</td>
                        <td style="text-align: center">
                            <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button class="btn btn-link" style="color: red">刪除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection

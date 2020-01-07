@extends('admin.layouts.master')

@section('title', '訂房管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            訂房管理 <small>所有訂房資料</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 訂房管理
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
                        <th width="150" style="text-align: center">訂房<br>編號</th>
                        <th width="200" style="text-align: center">訂房人姓名</th>
                        <th width="200" style="text-align: center">房型</th>
                        <th width="180" style="text-align: center">實際入住<br>日期</th>
                        <th width="180" style="text-align: center">實際退房<br>日期</th>
                        <th width="180" style="text-align: center">預定入住<br>日期</th>
                        <th width="180" style="text-align: center">預定退房<br>日期</th>
                        <th width="150" style="text-align: center">下訂<br>日期</th>
                        <th width="180" style="text-align: center">取消下訂<br>日期</th>
                        <th width="100" style="text-align: center">折扣</th>
                        <th width="150" style="text-align: center">金額</th>
                        <th width="200" style="text-align: center">特殊需求</th>
                        <th width="150" style="text-align: center">預約<br>狀態</th>>
                        <th width="150" style="text-align: center">訂單<br>狀態</th>>
                        <th width="70" style="text-align: center">管理</th>>
                    </tr>
                </thead>
                <tbody>
            @foreach($reservations as $reservation)
                @foreach($items as $item)
                    @if($item->reservation_id == $reservation->id)
                         @foreach($rooms as $room)
                             @if($item->room_id == $room->id)
                                <tr >
                                <td style="text-align: center">{{ $reservation->id }}</td>
                                <td style="text-align: center">
                                    <a href="{{route('admin.reservationer.index',$reservation->user_id)}}" style="color: rgba(124,5,242,0.9)">
                                        {{ $reservation->user->name }}
                                    </a>
                                </td>
                                <td style="text-align: center">{{ $room->type }}</td>
                                <td style="text-align: center">{{ $reservation->checkin }}</td>
                                <td style="text-align: center">{{ $reservation->checkout }}</td>
                                <td style="text-align: center">{{ $reservation->book_start }}</td>
                                <td style="text-align: center">{{ $reservation->book_end }}</td>
                                <td style="text-align: center">{{ $reservation->created_at }}</td>
                                <td style="text-align: center">{{ $reservation->cancel }}</td>
                                <td style="text-align: center">{{ $reservation->discount }}</td>
                                <td style="text-align: center">{{ $reservation->total }}</td>
                                <td style="text-align: center">{{ $reservation->need }}</td>
                                <td style="text-align: center">{{ $reservation->status?'已取消':'預約中'}}</td>
                                <td style="text-align: center">{{ $reservation->closed?'已完成':'處理中'}}</td>
                                    <td style="text-align: center">
                                    <form action="{{ route('admin.reservation.destroy', $reservation->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-link" style="color: red">刪除</button>
                        </form>
                    </td>
                </tr>
                             @endif
                         @endforeach
                    @endif
                @endforeach
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection

@extends('layouts.master')
@section('title', $reservations->id)
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/reservationbg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>訂單編號：00{{ $reservations->id }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <h1>訂單明細</h1>
    <div class="card-header text-white @if($reservations->closed) bg-secondary @else bg-info @endif">
        訂單日期：{{ $reservations->created_at}}
        <span class="float-right">
                        訂單狀態：
                    @if($reservations->closed)
                已完成
            @else
                處理中
            @endif
                        </span>
    </div>
    @foreach($items as $item)
        @if($item->reservation_id == $reservations->id)
            <div class="card @if($reservations->closed) border-secondary @else border-info @endif mb-3">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th colspan=2>房型</th>
                            <th nowrap class="text-right">房間單價</th>
                            <th nowrap class="text-center">預訂房數</th>
                            <th nowrap class="text-right">小計</th>
                        </tr>
                        @foreach($rooms as $room)
                            @if($item->room_id == $room->id)
                                <tr>
                                    <td>
                                        <a target="_blank" href="/product/{{ $item->room_id }}">
                                            <img src="{{ $item->room->photo }}" class="img-thumbnail" style="width: 120px;">
                                        </a>
                                    </td>
                                    <td>
                                        <a target="_blank" href="/product/{{ $item->room_id }}">
                                            <h5>{{ $item->room->type }}</h5>
                                        </a>
                                        @if(!$item->room->shelves)
                                            <div class="warning">该商品已下架</div>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        {{ $item->room->price }} 元
                                    </td>
                                    <td class="text-center">
                                        {{ $item->amount }}
                                    </td>
                                    <td class="text-right">
                                        {{ $item->room->price * $item->amount }} 元
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
        @endif
    @endforeach
    <table align="right">
        <tr >
            <td>共計 {{ $reservations->total }} 元</td>
        </tr>
    </table>
@endsection

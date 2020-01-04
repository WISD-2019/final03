@extends('layouts.master')
@section('title', 'Blue Owl')
@section('content')

    <div class="py-5 text-center">
        <h2>訂單查詢</h2>
    </div>
    {{ csrf_field() }}
    <div class="panel panel-default">


        <div class="panel-body">
            <table class="table table-striped task-table">

                <!-- 表頭 -->
                <thead>
                <th>過去訂單</th>
                <th>&nbsp;</th>
                </thead>

                <!-- 表身 -->
                <tbody>
                @foreach ($reservations as $reservations)
                    <tr>
                        <!-- 任務名稱 -->
                        <td class="table-text">
                            <div>訂單編號:000{{ $reservations->id }}</div>
                            <div>入住日期:{{ $reservations->checkin }}</div>
                            <div>退房日期:{{ $reservations->checkout }}</div>
                            <div>總金額:{{ $reservations->total }}元</div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


    </div>

@endsection

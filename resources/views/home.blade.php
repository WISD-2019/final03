@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">成功登入！</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <font size="5px"><b>工作列表</b></font>
                        <hr>
                        <div class="carts">
                            <a class="reservations" href="{{ route('about') }}"><font size="5px"><b>去逛逛</b></font></a>
                        </div>
                        <div class="carts">
                            <a class="reservations" href="{{ route('room') }}"><font size="5px"><b>線上訂房</b></font></a>
                        </div>
                        <br>

                    <font size="5px"><b>我的資料</b></font>
                        <hr>

                    <div class="carts">
                        <a class="carts" href="{{ route('cart.index') }}"><font size="5px"><b>我的購物車　→</b></font></a>
                    </div>
                    <div class="carts">
                        <a class="reservations" href="{{ route('reservation.index') }}"><font size="5px"><b>我的訂單記錄　→</b></font></a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

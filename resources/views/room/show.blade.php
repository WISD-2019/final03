@extends('layouts.master')
@section('title', $room->type)
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>{{ $room->type }}</h1>
                        <span class="subheading">Room</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--詳細資料-->
    <div class="card">
        <div class="card-body product-info">
            <div class="row">
                <div class="col-sm-5">
                    <img class="img-fluid" src="{{ $room->photo }}" alt="{{ $room->type }}">
                </div>
                <div class="col-sm-7">
                    <div class="h2">{{ $room->type }}</div>
                    <div class="h3">特價 {{ $room->price }}元</div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">數量</span>
                        </div>
                        <input type="text" class="form-control input-sm" value="1">
                        <div class="input-group-append">
                            <span class="input-group-text">件</span>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-add-to-cart">加入購物車</button>
                        </div>
                    </div>
                    {!! $room->description !!}
                </div>
            </div>
        </div>
    </div>

@endsection

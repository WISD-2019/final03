@extends('layouts.master')
@section('title', 'Blue Owl-Room')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>房型一覽</h1>
                        <span class="subheading">Room</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--房型一覽-->
    <div class="card-deck">
        @forelse($rooms as $room)
            <div class="card mb-4">
                <img src="{{ $room->photo }}" class="card-img-top" alt="{{ $room->type }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $room->type }}</h5>
                </div>
                <div class="card-footer text-center">
                    ${{ $room->price }}
                    <a href="#" class="btn btn-primary">詳細資料...</a>
                </div>
            </div>
        @empty
            <div class="card mb-4">
                <div class="card-body">
                    <h1 class="card-title">目前無任何商品</h1>
                </div>
            </div>
        @endforelse
    </div>

@endsection

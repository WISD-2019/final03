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
                <a href="room/{{ $room->id }}">
                <img src="{{ $room->photo }}" class="card-img-top" alt="{{ $room->type }}">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="room/{{ $room->id }}">{{ $room->type }}</a>
                    </h5>
                </div>
                <div class="card-footer text-center">
                    ${{ $room->price }}
                    <button class="btn btn-primary btn-add-to-cart" data-id="{{ $room->id }}">加入購物車</button>
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
        <input type="hidden" name="amount" value="1">

@endsection

@section('scriptsAfterJs')
    <script>
        $(document).ready(function () {
            @include('room.add2cart')
        });
    </script>
@endsection

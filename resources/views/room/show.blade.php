@extends('layouts.master')

@section('title', $room->type)

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ $room->photo }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>{{ $room->type }}</h1>
                        <span class="subheading">Room Type</span>
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
                        {!! $room->description !!}<br><br>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="height: 40px">數量</span>
                            </div>
                            <input type="number" min="1" class="form-control" name="amount" value="1" style="height: 40px">
                            <div class="input-group-append">
                                <span class="input-group-text" style="height: 40px">間</span>
                            </div>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-add-to-cart" data-id="{{ $room->id }}">加入購物車</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('scriptsAfterJs')
    <script>
        $(document).ready(function () {
            @include('room.add2cart')
        });
    </script>
@endsection

@extends('layouts.master')
@section('title', 'Blue Owl')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1></h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--任務
    @if(Auth::check())
        <form action="{{ route('reservation') }}" method="POST">
        @csrf

        <div class="form-group row">
            <label for="checkin" class="col-md-4 col-form-label text-md-right">入住日期：</label>

            <div class="col-md-6">
                <input id="checkin" type="date" class="form-control @error('checkin') is-invalid @enderror" name="checkin" value="{{ old('checkin') }}" required autocomplete="checkin">

                @error('checkin')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="checkout" class="col-md-4 col-form-label text-md-right">退房日期：</label>

            <div class="col-md-6">
                <input id="checkout" type="date" class="form-control @error('checkout') is-invalid @enderror" name="checkout" value="{{ old('checkout') }}" required autocomplete="checkout">

                @error('checkout')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="discount" class="col-md-4 col-form-label text-md-right">優惠碼：</label>

            <div class="col-md-6">
                <input id="discount" type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ old('discount') }}" required autocomplete="discount">

                @error('discount')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </form>
    @else
        <p class="text-center">請先&nbsp;&nbsp;<a href="{{ route('login') }}">登入</a></p>
    @endif-->
@endsection

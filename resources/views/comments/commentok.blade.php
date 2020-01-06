@extends('layouts.master')
@section('title', 'Blue Owl-Comment')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>訪客留言</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>我們已收到您的意見!</p>
                <div class="form-group">
                    <a href="{{ route('about') }}"><button type="submit" class="btn btn-primary" id="sendMessageButton">回首頁</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection


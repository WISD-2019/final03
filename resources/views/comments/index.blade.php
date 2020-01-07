@extends('layouts.master')
@section('title', 'Blue Owl-Comment')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contactbg.jpg')">
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
                <p>歡迎您留下寶貴意見!</p>
                <form action="{{ route('comment.store') }}" method="post" >
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" required data-validation-required-message="Please enter your name.">
                        </div>
                        <div class="form-group floating-label-form-group controls">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email" required data-validation-required-message="Please enter your email.">
                        </div>
                        <div class="form-group floating-label-form-group controls">
                            <label>Message</label>
                            <input type="text" class="form-control" placeholder="Comment" name="comment" required data-validation-required-message="Please enter your comment.">
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


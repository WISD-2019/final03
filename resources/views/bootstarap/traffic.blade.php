@extends('layouts.master')

@section('title', 'Traffic')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/traffic/traffic-01.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>交通資訊</h1>
                        <span class="subheading">Traffic</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <table width="800px" align="center">
                    <tr>
                        <td><img src="img/traffic/traffic-02.jpg" width="550px"></td>
                        <td width="50px"></td>
                        <td>
                            <b>
                                <p>交通方式：</p>
                                <p>1. 可自駕前往，我們有私人停車場，也有路邊停車位~</p>
                                <p>2. 抵達花蓮火車站後，從後站出口租車或者搭乘計程車皆可抵達~</p>
                                <p>我們期待您的光臨~</p>
                            </b>
                        </td>
                    </tr>
                </table>
                <table width="800px" align="center">
                    <tr>
                        <td>
                            <font color="#00008b"><b>
                                    <p>地址：花蓮市中山路一段101號</p>
                                </b></font>
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14579.593780331461!2d121.5917883!3d23.999363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e09c3e72abaf2f8!2z6JeN6Imy6LKT6aCt6be55rCR5a6_!5e0!3m2!1szh-TW!2stw!4v1576601331544!5m2!1szh-TW!2stw" width="700" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection


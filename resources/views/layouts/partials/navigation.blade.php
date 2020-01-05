<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('about') }}">Blue Owl</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">關於我們</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('room') }}">線上訂房</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post') }}">最新消息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('traffic') }}">交通資訊</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">{{ Auth::user()->name }} 您好！</a>
                        @else
                            <a href="{{ route('login') }}">登入</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">註冊</a>
                            @endif
                        @endauth

                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

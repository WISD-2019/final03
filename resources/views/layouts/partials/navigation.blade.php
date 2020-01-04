<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Blue Owl</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}">我的購物車</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservation.index') }}">我的訂單</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">關於我們</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post') }}">最新消息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('traffic') }}">交通資訊</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

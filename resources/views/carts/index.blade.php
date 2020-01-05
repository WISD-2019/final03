@extends('layouts.master')

@section('title', 'Blue Owl-Cart')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/about/about-01.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>我的購物車</h1>
                        <span class="subheading">Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @php
        $total = 0;
    @endphp
    <form action="{{ route('reservation.store') }}" method="post" id="reservation-form">
        @csrf

    <table class="table table-striped">
        <tr>
            <th colspan=2>房型</th>
            <th nowrap class="text-right">房間單價</th>
            <th nowrap class="text-center">預定房數</th>
            <th nowrap class="text-right">小計</th>
            <th>功能</th>
        </tr>
        @forelse($carts as $cart)
            <tr>
                <td>
                    <a target="_blank" href="/room/{{ $cart->room_id }}">
                        <img src="{{ $cart->room->photo }}" class="img-thumbnail" style="width: 120px;">
                    </a>
                </td>
                <td>
                    <a target="_blank" href="/room/{{ $cart->room_id }}"><h5>{{ $cart->room->type }}</h5></a>
                    @if(!$cart->room->shelves)
                        <div class="warning">该商品已下架</div>
                    @endif
                </td>
                <td class="text-right">
                    <span id="price-{{ $cart->id }}">
                        {{ $cart->room->price }}
                    </span>
                </td>
                <td class="text-center">
                    @if($cart->room->shelves)
                        <input type="number" min="1" class="form-control text-center amount" name="amount[{{ $cart->room_id }}]" value="{{ $cart->amount }}" data-cartid="{{ $cart->id }}">
                    @else
                        <div class="warning">该商品已下架</div>
                    @endif
                </td>
                <td class="text-right">
                    <span class="sum" id="sum-{{ $cart->id }}">
                        {{ $cart->room->price * $cart->amount }}
                    </span>
                </td>
                <td><a href="#" class="btn btn-danger btn-sm btn-del-from-cart" data-id="{{ $cart->room_id }}">移除</a></td>
            </tr>
            @php
                $total+= $cart->room->price * $cart->amount
            @endphp
            <tr>
                <th colspan=4 class="text-right">共計</th>
                <th nowrap class="text-right">
                    <span id="total">{{ $total }}</span>
                </th>
                <th>元</th>
            </tr>
        @empty
            <tr>
                <td><h1>購物車空無一物</h1></td>
            </tr>
            <tr>
                <th colspan=4 class="text-right">共計</th>
                <th nowrap class="text-right">
                    <span id="total">{{ $total }}</span>
                </th>
                <th>元</th>
            </tr>
        @endforelse
    </table>
        @if(count(auth()->user()->cart))
            <div class="form-group row">
                <label class="col-form-label col-sm-3 text-md-right">入住日期</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control checkin" name="checkin" id="checkin">
                </div>
                <label class="col-form-label col-sm-3 text-md-right">退房日期</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control checkout" name="checkout" id="checkout">
                </div>
                <label class="col-form-label col-sm-3 text-md-right">需求：</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="need">
                </div>
                <label class="col-form-label col-sm-3 text-md-right">優惠碼：</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="discount">
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">送出訂單</button>
                </div>
            </div>
        @endif
    </form>

@endsection

@section('scriptsAfterJs')
    <script>
        $(document).ready(function () {
            $('.btn-del-from-cart').click(function () {
                var room_id=$(this).data('id');
                swal({
                    title: "確認要將該商品移除？",
                    icon: "warning",
                    buttons: ['取消', '確定'],
                    dangerMode: true,
                }).then(function(willDelete) {
                    // 用戶點擊 確定 按鈕，willDelete 的值就會是 true，否則為 false
                    if (!willDelete) {
                        return;
                    }
                    axios.delete('/cart/' + room_id)
                        .then(function () {
                            location.reload();
                        })
                });
            });
        });
        $('.amount').change(function () {
            var cartid = $(this).data('cartid');
            var sum = $(this).val() * $('#price-'+cartid).text();
            $('#sum-'+cartid).text(sum);

            var total = 0;
            $('.sum').each(function() {
                total += Number($(this).text());
            });
            $('#total').text(total);
        });
    </script>
@endsection

@extends('layouts.master')
@section('content')
    <h1>我的購物車</h1>
    <table class="table table-striped">
        <tr>
            <th colspan=2>商品名稱</th>
            <th nowrap class="text-right">商品單價</th>
            <th nowrap class="text-center">購買數量</th>
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
                <td class="text-right">{{ $cart->room->price }}</td>
                <td class="text-center">{{ $cart->amount }}</td>
                <td class="text-right">{{ $cart->room->price * $cart->amount }}</td>
                <td><a href="#" class="btn btn-danger btn-sm btn-del-from-cart" data-id="{{ $cart->room_id }}">移除</a></td>
            </tr>
        @empty

            <tr>
                <td><h1>購物車空無一物</h1></td>
            </tr>
        @endforelse
    </table>
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
    </script>
@endsection
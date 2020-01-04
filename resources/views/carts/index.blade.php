@extends('layouts.master')

@section('title','購物車')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="30" style="text-align: center"></th>
                        <th>房型</th>
                        <th width="70" style="text-align: center">價錢</th>
                        <th width="70" style="text-align: center">數量</th>
                        <th width="100" style="text-align: center"></th>
                    </tr>
                    </thead>
                    <tbody><?PHP $i=0;?><div style="display: none">{{$total=0}}</div>
                    @foreach ($carts as $cart)

                        <tr>
                            <td style="text-align: center"><img src="{{ $cart->photo}}" style="height: 100px;" ></td>
                            <td ><br><br>{{ $cart->room_type}}</td>
                            <td style="text-align: center"><br><br>{{ $cart->room_price}}</td>
                            <td style="text-align: center"><br><br>{{ $cart->amount}}</td>
                            </td>
                            <td  style="text-align: center; : 20px"><br>
                                <div>
                                    <form action="/carts/{{ $cart->id }}/edit">
                                        <button class="btn btn-default">
                                            <i class="fa fa-plus"></i> 修改
                                        </button>
                                    </form>
                                    <form action="/carts/{{ $cart->id }}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-default">
                                            <i class="fa fa-plus"></i> 刪除
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <div style="display: none">{{$total=$cart->room_price* $cart->amout+$total}}</div>
                        <?PHP $i++;?>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-right">
                <h4 style="color:red">
                    總金額：{{$total}}
                </h4>
            </div>
        </div>
    </div>
    <form action="/checkout">
        <div class="text-right"><button class="btn btn-default" id="post">
                <i class="fa fa-plus"></i> 結帳
            </button>
        </div>
    </form>

@endsection

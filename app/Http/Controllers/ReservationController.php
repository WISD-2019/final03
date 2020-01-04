<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Item;
use App\Room;
use DB;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $reservations = Reservation::where('user_id', $request->user()->id)->get();
        return view('reservation.index', [
            'reservations' => $reservations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = $request->user();
        // 開啟一個資料庫交易
        DB::transaction(function () use ($user, $request) {
            // 建立一個訂單
            $reservation = new Reservation;
            $reservation->address = $user->address;
            $reservation->total = 0;
            $reservation->closed = 0;
            $reservation->user_id = $user->id;
            $reservation-> checkin=$request->checkin;
            $reservation-> checkout=$request->checkout;
            $reservation-> need=$request->need;
            $reservation-> discount=$request->discount;
            $reservation->save();

            $total = 0;
            // 計算所有購物車內容的數量及價格
            foreach ($request->amount as $room_id => $amount) {
                $room = Room::find($room_id);
                $item = new Item;
                $item->reservation_id = $reservation->id;
                $item->room_id = $room_id;
                $item->amount = $amount;
                $item->price = $room->price;
                $item->save();
                $total += $room->price * $amount;
            }

            // 更新訂單總金額
            $reservation->total = $total;
            $reservation->update();

            // 將下單的商品從購物車中移除
            $user->cart()->delete();
        });

        return redirect()->route('reservation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Item;
use App\Room;
use App\Reservations;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;


class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations=Reservations::orderBy('id', 'ASC')->get();
        $items=Item::all();
        $rooms=Room::orderBy('id', 'ASC')->get();

        $data=['reservations'=>$reservations,'items'=>$items,'rooms'=>$rooms];
        return view('admin.reservation.index', $data);    }

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
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function show(Reservations $reservations)
    {
        return view('admin.reservation.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservations::destroy($id);
        return redirect()->route('admin.reservation.index');
    }
}

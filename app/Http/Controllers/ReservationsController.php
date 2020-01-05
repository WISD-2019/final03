<?php

namespace App\Http\Controllers;

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
        $data=['reservations'=>$reservations];
        return view('admin.reservation.index', $data);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reservation.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {
        Reservations::create($request->all());
        $reservations             = new Reservations;
        $reservations->user_id    = $request->user()->id;
        $reservations->id         = $request->item_id;
        $reservations->save();
        return redirect()->route('admin.reservation.index');
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
    public function edit($id)
    {
        $reservations=Reservations::find($id);
        $data=['post'=>$reservations];
        return view('admin.reservation.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationRequest $request,$id)
    {
        $reservations=Reservations::find($id);
        $reservations->update($request->all());
        return redirect()->route('admin.reservation.index');
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

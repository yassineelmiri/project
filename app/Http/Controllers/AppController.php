<?php

namespace App\Http\Controllers;

use App\Models\Auths;
use App\Models\reservations;
use App\Models\room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function panier()
    {
        $reservations = reservations::where('profile_id', Auth::id())->get();
        $PublicationReservations = [];
        foreach ($reservations as $reservation) {
                $PublicationReservations[] = room::where('id', $reservation->rooms_id)->first();
        }
        return view('client.panier',compact('PublicationReservations'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservations $reservations)
    {
        //
    }
}

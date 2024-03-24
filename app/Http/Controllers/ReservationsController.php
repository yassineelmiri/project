<?php

namespace App\Http\Controllers;

use App\Models\reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $room_id = $request->room;
        $profile_id = Auth::id();
        $valider = "Non valider";
        $credentials = ['profile_id' => $profile_id, 'rooms_id' => $room_id, 'valider' => $valider];
        reservations::create($credentials);
        return view('reservation.cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        return view("client.index");
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
    public function destroy(Request $request)
    {
        $delete = reservations::where('rooms_id', $request->rooms_id)->firstOrFail();
        $delete->delete();
        return to_route('panier')->with('success', 'La Réservation a élé bien supprimer');
    }
}

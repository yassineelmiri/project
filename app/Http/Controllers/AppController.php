<?php

namespace App\Http\Controllers;

use App\Models\Auths;
use App\Models\reservations;
use App\Models\room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function panier()
    {
        $reservations = reservations::where('profile_id', Auth::id())->get();
        $PublicationReservations = [];
        foreach ($reservations as $reservation) {
                $PublicationReservations[] = room::where('id', $reservation->rooms_id)->first();
        }
        return view('client.panier',compact('PublicationReservations'));
    }
    public function index()
    {  
        $user = Auths::count();
        $reservation = reservations::count();
        $rooms = room::count();
        return view('admin.analytics',compact('rooms','user','reservation'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
       
    }
    public function show(reservations $reservations)
    {
        //
    }
    public function edit(reservations $reservations)
    {
        //
    }
    public function update(Request $request, reservations $reservations)
    {
        //
    }
    public function destroy(reservations $reservations)
    {
        //
    }
}

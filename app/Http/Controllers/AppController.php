<?php

namespace App\Http\Controllers;

use App\Models\Auths;
use App\Models\categorier;
use App\Models\reclamation;
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
        return view('client.panier', compact('PublicationReservations'));
    }
    public function index()
    {
        $user = Auths::count();
        $reservation = reservations::count();
        $rooms = room::count();
        return view('admin.analytics', compact('rooms', 'user', 'reservation'));
    }
    public function users()
    {
        $users = Auths::all();
        return view('admin.user', compact('users'));
    }
    
    public function categorier()
    {
        $categorier = categorier::all();
        return view('admin.categorier', compact('categorier'));
    }

    public function validation()
    {
        $rooms = room::all();
        $types = categorier::all();
        return view('admin.chamber', compact('rooms', 'types'));

    }
    public function reclamation()
    {
        $reclamations = reclamation::all();
        return view('admin.reclamation', compact('reclamations'));

    }
    public function reservation()
    {
        $user = [];
        $room = [];
        $reservations = reservations::all();
        
        foreach ($reservations as $reservation) {
            $user[] = Auths::where('id', $reservation->profile_id)->first();
            $room[] = room::where('id', $reservation->rooms_id)->first();
        }
        

        return view('admin.reservation', compact('reservations', 'room', 'user'));
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        categorier::create($formFields);
        return redirect()->route('admin.categorier')->with('success', 'Votre categorier a bien été crée.');

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

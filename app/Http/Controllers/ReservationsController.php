<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\ReservationService;

class ReservationsController extends Controller
{
    protected $reservationService;

    public function __construct(ReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('success', 'Veuillez vous connecter pour effectuer une réservation.');
        }

        $room_id = $request->room;
        $profile_id = Auth::id();
        $places = $request->adults + $request->children;
        $valider = "Non valider";

        $response = $this->reservationService->storeReservation($room_id, $profile_id, $places, $request->checkin, $request->checkout);

        if ($response['success']) {
            return view('reservation.cart', compact('profile_id'));
        } else {
            return redirect()->route('rooms.index')->with('error', $response['message']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        return view("client.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $roomId = $request->rooms_id;
        $response = $this->reservationService->deleteReservation($roomId);

        if ($response['success']) {
            return redirect()->route('panier')->with('success', 'La Réservation a été bien supprimée');
        } else {
            return redirect()->route('panier')->with('error', $response['message']);
        }
    }
}

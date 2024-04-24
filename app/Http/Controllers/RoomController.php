<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoomRequest;
use App\Http\Requests\ReclamationRequest;
use App\Models\categorier;
use App\Models\reclamation;
use App\Models\room;
use App\Services\RoomService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoriers = categorier::all();
        $rooms = room::all();
        return view('rooms.index', compact('rooms','categoriers'));
    }

    /**
     * Create a new reclamation.
     */
    public function ReclamationChamber(ReclamationRequest $request)
    {
        $formFields = $request->validated(); // Utilise la méthode validated() pour récupérer les champs validés
        $formFields['profile_id'] = Auth::id();
        reclamation::create($formFields);
    
        return redirect()->route('rooms.index')->with('success', 'La reclamation a été envoyée.');
    }

    /**
     * Filter rooms based on type and number of guests.
     */
    public function filtre(Request $request)
    {
        $type = $request->type;
        $places = $request->adult + $request->child;
        $categoriers = categorier::all();
        $rooms = $this->roomService->filterRooms($type, $places);
        
        return view('rooms.index', compact('rooms','categoriers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRoomRequest $request)
    {
        $formFields = $request->validated(); 
        $this->uploadImage($request, $formFields);
        $formFields['profile_id'] = Auth::id();
        $this->roomService->createRoom($formFields);
        return redirect()->route('rooms.index')->with('success', 'Votre chambre a bien été créée.');
    }
    

    /**
     * Upload image for the room.
     */
    private function uploadImage(Request $request, array &$formFields)
    {
        unset($formFields['image']);
        if ($request->hasfile('image')) {
            $formFields['image'] = $request->file('image')->store('publication', 'public');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(room $room)
    {
        return view('rooms.show', compact('room'));
    }

    /**
     * Delete a room.
     */
    public function destroy(Request $request)
    {
        $this->roomService->deleteRoom($request->room);
        return redirect()->route('admin.validation')->with('success', 'Vous êtes bien supprimé.');
    }
}

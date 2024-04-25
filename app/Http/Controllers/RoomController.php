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

    public function index()
    {
        $categoriers = categorier::all();
        $rooms = room::all();
        return view('rooms.index', compact('rooms','categoriers'));
    }

    public function ReclamationChamber(ReclamationRequest $request)
    {
        $formFields = $request->validated();
        $formFields['profile_id'] = Auth::id();
        reclamation::create($formFields);
    
        return redirect()->route('rooms.index')->with('success', 'La reclamation a été envoyée.');
    }
    public function filtre(Request $request)
    {
        $type = $request->type;
        $places = $request->adult + $request->child;
        $categoriers = categorier::all();
        $rooms = $this->roomService->filterRooms($type, $places);
        
        return view('rooms.index', compact('rooms','categoriers'));
    }


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

    private function uploadImage(Request $request, array &$formFields)
    {
        unset($formFields['image']);
        if ($request->hasfile('image')) {
            $formFields['image'] = $request->file('image')->store('publication', 'public');
        }
    }
    public function show(room $room)
    {
        return view('rooms.show', compact('room'));
    }
    public function destroy(Request $request)
    {
        $this->roomService->deleteRoom($request->room);
        return redirect()->route('admin.validation')->with('success', 'Vous êtes bien supprimé.');
    }
}

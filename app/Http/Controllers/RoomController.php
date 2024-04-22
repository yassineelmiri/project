<?php

namespace App\Http\Controllers;

use App\Models\categorier;
use App\Models\reclamation;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoriers = categorier::all();
        $rooms = Room::all();
        return view('rooms.index', compact('rooms','categoriers'));
    }
    public function ReclamationChamber(Request $request)
    {

        $formFields = $request->validate([
            'description' => 'required|string|max:255',
            'email' => 'required',
        ]);
        $formFields['profile_id'] = Auth::id();
        reclamation::create($formFields);

        return redirect()->route('rooms.index')->with('success', 'La reclamation a été envoier.');
    }



    /**
     * Filter rooms based on type and number of guests.
     */
    public function filtre(Request $request)
    {
        $type = $request->type;
        $places = $request->adult + $request->child;
        $categoriers = categorier::all();
        $rooms = Room::where('type', $type)
            ->where('place', '>=', $places)
            ->get();
        
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
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'surface' => 'required|numeric',
            'place' => 'required|numeric|max:255',
            'etage' => 'required|numeric|max:255',
            'prix' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);
        $this->uploadImage($request, $formFields);
        $formFields['profile_id'] = Auth::id();
        Room::create($formFields);
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
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }
    public function destroy(Request $request){
        $delete = Room::where('id', $request->room)->first();
        $delete->delete();
        return to_route('admin.validation')->with('success', 'Vous étes bien supprimer.');

    }

}

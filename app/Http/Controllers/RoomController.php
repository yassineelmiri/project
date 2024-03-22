<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = room::all();
        return view('rooms.index',compact('rooms'));
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
        return redirect()->route('rooms.index')->with('success', 'Votre chambre a bien été crée.');
    }

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
        return view('rooms.show',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(room $room)
    {
        //
    }
}

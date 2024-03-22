<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NextController extends Controller
{
    public function afficher(room $room)
    {
        return view('rooms.show');
    }
}

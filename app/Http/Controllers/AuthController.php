<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Auths;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|confirmed',
            'role' => 'required|string',
            'date' => 'required|date',
        ]);

        $formFields['password'] = Hash::make($request->password);
        Auths::create($formFields);
        return redirect()->route('homepage')->with('success', 'Votre compte a bien été créé.');
    }

    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $credentials = ['email' => $email, 'password' => $password];
        
        $user = Auths::where('email', $email)->first();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($user === null) {
                return view('404.404');
            }
            switch (auth()->user()->role) {
                case "employe":
                    $request->session()->regenerate();
                    return to_route('homepage')->with('success', 'Vous étes bien connecté ' . $email . " .");


                case 'client':
                    $request->session()->regenerate();
                    return to_route('homepage')->with('success', 'Vous étes bien connecté ' . $email . " .");


                case 'Administrateur':
                    $request->session()->regenerate();
                    return to_route('admin.analytics')->with('success', 'Vous étes bien connecté ' . $email . " .");

                default:
                    return back()->withErrors([
                        'email' => 'Email ou mot de passe incorrect'
                    ])->onlyInput('email');
            }
        } else {
            return back()->withErrors([
                'email' => 'Email ou mot de pass incorrect'
            ])->onlyInput('email');
        }
       

    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return to_route('homepage')->with('success', 'Vous étes bien déconnecté.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Auth $auth)
    {
        return view('auth.lost-password.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $delete = Auths::where('id', $request->user)->firstOrFail();
        $delete->delete();
        return to_route('admin.users')->with('success', 'Vous étes bien supprimer.');
        
    }
}

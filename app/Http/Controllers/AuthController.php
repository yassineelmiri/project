<?php
namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index()
    {
        return view('auth.login');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $formFields = $request->validated();

        $this->authService->register($formFields);

        return redirect()->route('homepage')->with('success', 'Votre compte a bien été créé.');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = $this->authService->login($credentials);
        if ($user) {
            switch ($user->role) {
                case "employe":
                case "client":
                    return redirect()->route('homepage')->with('success', 'Vous êtes bien connecté ' . $user->email . '.');
                case 'Administrateur':
                    return redirect()->route('admin.analytics')->with('success', 'Vous êtes bien connecté ' . $user->email . '.');
            }
        }
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect'
        ])->onlyInput('email');
    }

    public function logout()
    {
        $this->authService->logout();
        return redirect()->route('homepage')->with('success', 'Vous êtes bien déconnecté.');
    }

    public function destroy(Request $request)
    {
        $this->authService->delete($request->user);
        return redirect()->route('admin.users')->with('success', 'Vous êtes bien supprimé.');
    }
    

    public function update(Request $request)
    {
        $this->authService->update($request->all(), $request->id);
        return redirect()->route('admin.users')->with('success', 'Votre compte a bien été modifié.');
    }
}

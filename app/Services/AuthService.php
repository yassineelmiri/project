<?php

namespace App\Services;

use App\Repositories\AuthRepositoryInterface;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    protected $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function register(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        return $this->authRepository->create($data);
    }

    public function login(array $credentials)
    {
        if (auth()->attempt($credentials)) {
            return auth()->user();
        }
        return null;
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
    }
}

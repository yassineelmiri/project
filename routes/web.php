<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NextController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::resource('auth', AuthController::class);
Route::resource('rooms', RoomController::class);
Route::resource('reservation', ReservationsController::class);

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/panier', [AppController::class, 'panier'])->name('panier');

Route::get('/contact', [NextController::class, 'contact'])->name('contact');


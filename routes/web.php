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
Route::get('/admin/analytics', [AppController::class, 'index'])->name('admin.analytics');
Route::get('/admin/users', [AppController::class, 'users'])->name('admin.users');

Route::post('/filtre', [RoomController::class, 'filtre'])->name('filtre');

Route::get('/contact', [NextController::class, 'contact'])->name('contact');
Route::get('/print{profile_id}',[NextController::class,'print'])->name('invoice.print');
Route::get('/pdf{profile_id}',[NextController::class,'pdf'])->name('invoice.pdf');

// routes/web.php
Route::get('facture/{profile_id}', 'NextController@print')->name('invoice.show');


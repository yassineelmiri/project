<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NextController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\RoomController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::resource('auth', AuthController::class);
Route::resource('reservation', ReservationsController::class)->middleware('auth');

Route::middleware(['auth', AuthMiddleware::class])->group(function () {
    Route::resource('rooms', RoomController::class);
    Route::post('/admin/delete', [RoomController::class, 'destroy'])->name('supprimer');
    Route::post('/admin/update', [AuthController::class, 'update'])->name('update.user');
    Route::post('/admin/ajouter', [AppController::class, 'store'])->name('categorier.ajouter');
    Route::get('/admin/analytics', [AppController::class, 'index'])->name('admin.analytics');
    Route::get('/admin/users', [AppController::class, 'users'])->name('admin.users');
    Route::get('/admin/categorier', [AppController::class, 'categorier'])->name('admin.categorier');
    Route::get('/admin/chamber', [AppController::class, 'validation'])->name('admin.validation');
    Route::get('/admin/reclamation', [AppController::class, 'reclamation'])->name('admin.reclamation');
    Route::get('/admin/reservation', [AppController::class, 'reservation'])->name('admin.reservation');
    Route::post('/admin/valider', [AppController::class, 'ModiferValider'])->name('admin.valider');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/filtre', [RoomController::class, 'filtre'])->name('filtre');
Route::post('/Reclamation', [RoomController::class, 'ReclamationChamber'])->name('reclamation.chamber');

Route::get('/contact', [NextController::class, 'contact'])->name('contact');
Route::get('/print{profile_id}',[NextController::class,'print'])->name('invoice.print');
Route::get('/pdf{profile_id}',[NextController::class,'pdf'])->name('invoice.pdf');

Route::get('facture/{profile_id}', 'NextController@print')->name('invoice.show');
Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');

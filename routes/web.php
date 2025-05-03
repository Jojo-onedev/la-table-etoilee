<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[ReservationController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::resource('reservations', ReservationController::class);

// delete button action here 
Route::middleware('auth')->group(function () {
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::patch('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');
    Route::get('delete',[ReservationController::class, 'destroy']);

});


Route::get('/suivi', [ReservationController::class, 'track'])->name('trackings.track');
Route::post('/suivi', [ReservationController::class, 'search'])->name('trackings.search');

require __DIR__.'/auth.php';

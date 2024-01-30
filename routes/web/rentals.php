<?php

use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\DurationController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::post('home/zap-rental', [RentalController::class, 'store'])->name('rental.store');

Route::middleware(['role:zapier'])->group(function() {
    Route::put('team/add-rental', [RentalController::class, 'addRental'])->name('rental.addRental');
});

Route::middleware(['role:admin'])->group(function() {
    Route::get('/admin/rentals/main', [RentalController::class, 'index'])->name('rental.index');
    Route::get('/admin/rentals/main/{booking}', [RentalController::class, 'booking'])->name('rental.booking');
    Route::get('/admin/rentals/{rental}/show', [RentalController::class, 'show'])->name('rental.show');
    Route::put('/admin/rentals/{rental}/update', [RentalController::class, 'updateRental'])->name('rental.updateRental');
    Route::put('/admin/rentals/{rental}/coc-update', [RentalController::class, 'cocUpdate'])->name('rental.cocUpdate');
    Route::put('/admin/rentals/{rental}/rental-coc-update', [RentalController::class, 'rentalCocUpdate'])->name('rental.rentalCocUpdate');
    Route::get('/admin/rentals/cancelled', [RentalController::class, 'cancelled'])->name('rental.cancelled');
    Route::get('/admin/rentals/rental-history', [RentalController::class, 'rentalHistory'])->name('rental.history');
    Route::get('/admin/rentals/rental-settings', [RentalController::class, 'rentalSettings'])->name('rental.settings');




////    // AJAX Rental Modal (office.index)
//    Route::get('rental_checkin/{id}', [RentalController::class, 'rental_checkin'])->name('rental.modal');
});

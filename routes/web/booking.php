<?php


use App\Http\Controllers\AdditionController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['role:office'])->group(function() {

    Route::put('/team/office/booking/{booking}/cancel', [BookingController::class, 'office_cancel'])->name('office.cancel');
    Route::put('/team/office/booking/{booking}/update-customer', [BookingController::class, 'update_booking_customer'])->name('booking.update_booking_customer');

});

Route::middleware(['role:admin'])->group(function() {

    Route::put('/admin/rentals/rental-settings/{booking}/cancel', [BookingController::class, 'cancel'])->name('booking.cancel');

//    Route::put('/admin/rentals/rental-settings/{addition}/update-addition/', [AdditionController::class, 'update'])->name('addition.update');
//    Route::put('/admin/rentals/rental-settings/{addition}/attach-addition/', [AdditionController::class, 'attachAddition'])->name('type.attachAddition');
//    Route::put('/admin/rentals/rental-settings/{addition}/detach-addition/', [AdditionController::class, 'detachAddition'])->name('type.detachAddition');

});

<?php


use App\Http\Controllers\AdditionController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RescheduleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['role:office'])->group(function() {


    Route::put('/team/office/booking/{booking}/reschedule', [RescheduleController::class, 'reschedule_day'])->name('reschedule.day');
    Route::put('/team/office/booking/{reschedule}/reschedule-edit', [RescheduleController::class, 'edit_booking'])->name('reschedule.edit_booking');
    Route::put('/team/office/booking/{reschedule}/reschedule-cancel', [RescheduleController::class, 'reschedule_cancel'])->name('reschedule.reschedule_cancel');
    Route::put('/team/office/booking/{reschedule}/reschedule-date', [RescheduleController::class, 'update_date'])->name('reschedule.update_date');
    Route::put('/team/office/booking/{reschedule}/reschedule-duration', [RescheduleController::class, 'add_duration'])->name('reschedule.add_duration');
    Route::put('/team/office/booking/{reschedule}/reschedule-duration-change', [RescheduleController::class, 'change_duration'])->name('reschedule.change_duration');
    Route::put('/team/office/booking/{reschedule}/reschedule-time', [RescheduleController::class, 'update_time'])->name('reschedule.update_time');
    Route::put('team/office/{reschedule}/reschedule-booking-additions', [RescheduleController::class, 'book_rental_additions'])->name('office.book_rental_additions');
    Route::put('team/office/{reschedule}/reschedule-book', [RescheduleController::class, 'reschedule_book'])->name('office.reschedule_book');
});

Route::middleware(['role:admin'])->group(function() {

//    Route::put('/admin/rentals/rental-settings/{booking}/cancel', [BookingController::class, 'cancel'])->name('booking.cancel');

//    Route::put('/admin/rentals/rental-settings/{addition}/update-addition/', [AdditionController::class, 'update'])->name('addition.update');
//    Route::put('/admin/rentals/rental-settings/{addition}/attach-addition/', [AdditionController::class, 'attachAddition'])->name('type.attachAddition');
//    Route::put('/admin/rentals/rental-settings/{addition}/detach-addition/', [AdditionController::class, 'detachAddition'])->name('type.detachAddition');

});

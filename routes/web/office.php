<?php


use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

Route::middleware('role:office')->group(function() {

//    Route::get('team/office/index', [OfficeController::class, 'index'])->name('office.index');
    Route::get('team/office/index', [OfficeController::class, 'main'])->name('office.index');

    Route::get('team/office/precheckin', [OfficeController::class, 'precheckin'])->name('office.precheckin');
    Route::get('team/office/{rental}/pre-check', [OfficeController::class, 'precheckShow'])->name('office.precheckShow');

    Route::get('team/office/rental-history', [OfficeController::class, 'rentalHistory'])->name('office.rentalHistory');
    Route::get('team/office/rental/{rental}/profile', [OfficeController::class, 'rentalProfile'])->name('office.rentalProfile');

    Route::get('team/office/customers', [OfficeController::class, 'customers'])->name('office.customers');
    Route::get('team/office/coc', [OfficeController::class, 'coc'])->name('office.coc');
    Route::get('team/office/{booking}/update-booking', [OfficeController::class, 'update_booking'])->name('office.update_booking');
    Route::get('team/office/{booking}/checkin', [OfficeController::class, 'checkin_1'])->name('office.show');
    Route::put('team/office/{rental}/checkin-rental', [RentalController::class, 'checkInRental'])->name('office.checkInRental');

    Route::get('team/office/{booking}/reschedule-booking', [OfficeController::class, 'reschedule_booking'])->name('office.reschedule_booking');
    Route::get('team/office/{reschedule}/reschedule-booking-duration', [OfficeController::class, 'reschedule_booking_duration'])->name('office.reschedule_booking_duration');
    Route::get('team/office/{reschedule}/reschedule-booking-time', [OfficeController::class, 'reschedule_booking_time'])->name('office.reschedule_booking_time');
    Route::get('team/office/{reschedule}/reschedule-booking-additions', [OfficeController::class, 'reschedule_booking_additions'])->name('office.reschedule_booking_additions');
    Route::get('team/office/{reschedule}/reschedule-booking-confirmation', [OfficeController::class, 'reschedule_booking_confirmation'])->name('office.reschedule_booking_confirmation');


  // May possibly delete
//    Route::put('team/office/rental/{customer}/attach', [OfficeController::class, 'attachCustomer'])->name('office.customer.attach');
//    Route::put('team/office/rental/{rental}/attach-new', [RentalController::class, 'attachNewCustomer'])->name('office.customer.attachNew');


    Route::put('team/office/rental/{rental}/store', [OfficeController::class, 'store'])->name('office.customer.store');
    Route::put('team/office/rental/{booking}/store-new', [OfficeController::class, 'storeNew'])->name('office.customer.storeNew');

    Route::put('team/office/rental/{booking}/attach', [RentalController::class, 'attachCustomer'])->name('office.customer.attach');
    Route::put('team/office/rental/{booking}/detach', [RentalController::class, 'detachCustomer'])->name('office.customer.detach');


    Route::put('team/office/rental/{rental}/rental-status', [RentalController::class, 'rentalStatus'])->name('office.rentalStatus');
    Route::put('team/office/rental/{rental}/cancel', [RentalController::class, 'cancelRental'])->name('office.cancelRental');
    Route::put('team/office/rental/{rental}/rental-status-precheck', [RentalController::class, 'rentalStatusPreCheck'])->name('office.rentalStatusPreCheck');

    Route::put('team/office/rental/{customer}/update', [OfficeController::class, 'update'])->name('office.customer.update');
    Route::put('team/office/rental/{customer}/update-customer', [CustomerController::class, 'updateCustomer'])->name('office.updateCustomer');


    Route::get('team/office/customer/{customer}/profile', [OfficeController::class, 'customerProfile'])->name('office.customerProfile');
});

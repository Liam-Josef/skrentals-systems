<?php


use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

Route::middleware('role:office')->group(function() {

    Route::get('team/office/index', [OfficeController::class, 'index'])->name('office.index');

    Route::get('team/office/precheckin', [OfficeController::class, 'precheckin'])->name('office.precheckin');
    Route::get('team/office/{rental}/pre-check', [OfficeController::class, 'precheckShow'])->name('office.precheckShow');

    Route::get('team/office/rental-history', [OfficeController::class, 'rentalHistory'])->name('office.rentalHistory');
    Route::get('team/office/rental/{rental}/profile', [OfficeController::class, 'rentalProfile'])->name('office.rentalProfile');

    Route::get('team/office/customers', [OfficeController::class, 'customers'])->name('office.customers');
    Route::get('team/office/coc', [OfficeController::class, 'coc'])->name('office.coc');
    Route::get('team/office/{rental}/checkin', [OfficeController::class, 'show'])->name('office.show');
    Route::put('team/office/{rental}/checkin-rental', [RentalController::class, 'checkInRental'])->name('office.checkInRental');


  // May possibly delete
//    Route::put('team/office/rental/{customer}/attach', [OfficeController::class, 'attachCustomer'])->name('office.customer.attach');
//    Route::put('team/office/rental/{rental}/attach-new', [RentalController::class, 'attachNewCustomer'])->name('office.customer.attachNew');


    Route::put('team/office/rental/{rental}/store', [OfficeController::class, 'store'])->name('office.customer.store');
    Route::put('team/office/rental/{rental}/store-new', [OfficeController::class, 'storeNew'])->name('office.customer.storeNew');

    Route::put('team/office/rental/{rental}/attach', [RentalController::class, 'attachCustomer'])->name('office.customer.attach');
    Route::put('team/office/rental/{rental}/detach', [RentalController::class, 'detachCustomer'])->name('office.customer.detach');


    Route::put('team/office/rental/{rental}/rental-status', [RentalController::class, 'rentalStatus'])->name('office.rentalStatus');
    Route::put('team/office/rental/{rental}/cancel', [RentalController::class, 'cancelRental'])->name('office.cancelRental');
    Route::put('team/office/rental/{rental}/rental-status-precheck', [RentalController::class, 'rentalStatusPreCheck'])->name('office.rentalStatusPreCheck');

    Route::put('team/office/rental/{customer}/update', [OfficeController::class, 'update'])->name('office.customer.update');
    Route::put('team/office/rental/{customer}/update-customer', [CustomerController::class, 'updateCustomer'])->name('office.updateCustomer');


    Route::get('team/office/customer/{customer}/profile', [OfficeController::class, 'customerProfile'])->name('office.customerProfile');
});

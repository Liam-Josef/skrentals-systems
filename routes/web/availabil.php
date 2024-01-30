<?php


use App\Http\Controllers\AvailabilityController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['role:admin'])->group(function() {

    Route::put('/admin/rentals/rental-settings/{duration}/duration-availabil/store', [AvailabilityController::class, 'store'])->name('availabil.store');
    Route::put('/admin/rentals/rental-settings/{duration}/attach-availability/', [AvailabilityController::class, 'attachAvail'])->name('duration.attachAvail');
    Route::put('/admin/rentals/rental-settings/{duration}/detach-availability/', [AvailabilityController::class, 'detachAvail'])->name('duration.detachAvail');
    Route::put('/admin/rentals/rental-settings/{availabil}/update-availability/', [AvailabilityController::class, 'update'])->name('availabil.update');

});

<?php


use App\Http\Controllers\DurationController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:admin'])->group(function() {

    Route::get('/admin/rentals/rental-settings/{duration}/duration', [DurationController::class, 'duration_settings'])->name('rental.duration_settings');
    Route::put('/admin/rentals/rental-settings/rental-duration/store', [DurationController::class, 'store'])->name('duration.store');
    Route::put('/admin/rentals/rental-settings/duration/{duration}/duration-price', [DurationController::class, 'duration_price'])->name('price.store.attach');
    Route::put('/admin/rentals/rental-settings/duration/{duration}/update', [DurationController::class, 'update'])->name('duration.update');
    Route::put('/admin/rentals/rental-settings/duration/{duration}/detach', [DurationController::class, 'detach_duration'])->name('type.detachDuration');

});

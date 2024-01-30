<?php


use App\Http\Controllers\PriceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['role:admin'])->group(function() {

    Route::put('/admin/rentals/rental-settings/price/{price}/update', [PriceController::class, 'update'])->name('price.update');
    Route::put('/admin/rentals/rental-settings/price/{price}/update-note', [PriceController::class, 'note'])->name('price.note');

});

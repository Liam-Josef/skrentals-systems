<?php


use App\Http\Controllers\AdditionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['role:admin'])->group(function() {

    Route::put('/admin/rentals/rental-settings/type-addition/store', [AdditionController::class, 'store'])->name('addition.store');
    Route::put('/admin/rentals/rental-settings/{addition}/update-addition/', [AdditionController::class, 'update'])->name('addition.update');
    Route::put('/admin/rentals/rental-settings/{addition}/attach-addition/', [AdditionController::class, 'attachAddition'])->name('type.attachAddition');
    Route::put('/admin/rentals/rental-settings/{addition}/detach-addition/', [AdditionController::class, 'detachAddition'])->name('type.detachAddition');

});

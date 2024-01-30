<?php


use App\Http\Controllers\SignaturePadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['role:team'])->group(function() {

    Route::post('signature_pad', [SignaturePadController::class, 'store'])->name('signature_pad.store');

});

<?php

use App\Http\Controllers\COCController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:admin'])->group(function() {

    Route::get('admin/coc/index', [COCController::class, 'index'])->name('coc.index');
    Route::get('admin/coc/current', [COCController::class, 'current'])->name('coc.current');
    Route::get('admin/coc/history', [COCController::class, 'history'])->name('coc.history');
    Route::get('admin/coc/create', [COCController::class, 'create'])->name('coc.create');
    Route::get('admin/coc/customers', [COCController::class, 'customers'])->name('coc.customers');

    Route::put('admin/{rental}/intake', [COCController::class, 'intakeCoc'])->name('coc.intakeCoc');
    Route::put('admin/{rental}/attach-rental', [COCController::class, 'attachRental'])->name('coc.attachRental');
    Route::put('admin/{rental}/accept-invoice', [COCController::class, 'acceptInvoice'])->name('coc.acceptInvoice');
    Route::put('admin/{rental}/coc-complete', [COCController::class, 'cocComplete'])->name('coc.cocComplete');

});

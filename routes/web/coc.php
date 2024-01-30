<?php

use App\Http\Controllers\CocController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Auth::routes();

Route::middleware(['role:admin'])->group(function() {

    Route::get('admin/coc/index', [CocController::class, 'index'])->name('coc.index');
    Route::get('admin/coc/current', [CocController::class, 'current'])->name('coc.current');
    Route::get('admin/coc/history', [CocController::class, 'history'])->name('coc.history');
    Route::get('admin/coc/create', [CocController::class, 'create'])->name('coc.create');
    Route::get('admin/coc/customers', [CocController::class, 'customers'])->name('coc.customers');

    Route::put('admin/{rental}/intake', [CocController::class, 'intakeCoc'])->name('coc.intakeCoc');
    Route::put('admin/{rental}/attach-rental', [CocController::class, 'attachRental'])->name('coc.attachRental');
    Route::put('admin/{rental}/accept-invoice', [CocController::class, 'acceptInvoice'])->name('coc.acceptInvoice');
    Route::put('admin/{rental}/coc-complete', [CocController::class, 'cocComplete'])->name('coc.cocComplete');

});

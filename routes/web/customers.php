<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:admin'])->group(function() {

    Route::get('admin/customers/index', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('admin/customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('admin/customers/store', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('admin/customers/coc', [CustomerController::class, 'coc'])->name('customers.coc');
    Route::get('admin/customers/show', [CustomerController::class, 'show'])->name('customers.show');
    Route::get('admin/customers/{customer}/profile', [CustomerController::class, 'view'])->name('customers.profile.view');
    Route::put('admin/customers/{customer}/update', [CustomerController::class, 'update'])->name('customers.profile.update');
    Route::delete('admin/customers/{customer}/delete', [CustomerController::class, 'delete'])->name('customers.delete');


    // Poss Delete
    Route::get('admin/customers/{customer}/profile-update', [CustomerController::class, 'profileUpdate'])->name('customers.profileUpdate');

});

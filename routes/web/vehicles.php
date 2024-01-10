<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:admin'])->group(function() {
    Route::get('admin/vehicles/index', [VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('admin/vehicles/create', [VehicleController::class, 'create'])->name('vehicle.create');
    Route::get('admin/vehicles/service', [VehicleController::class, 'service'])->name('vehicle.service');
    Route::post('admin/vehicles/store', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::get('admin/vehicles/{vehicle}/view', [VehicleController::class, 'view'])->name('vehicle.view');
    Route::get('admin/vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::put('admin/vehicles/{vehicle}/update', [VehicleController::class, 'update'])->name('vehicle.update');
    Route::put('admin/vehicles/{vehicle}/update-hours', [VehicleController::class, 'updateHours'])->name('vehicle.updateHours');
    Route::put('admin/vehicles/{vehicle}/update-location', [VehicleController::class, 'updateLocation'])->name('vehicle.updateLocation');
    Route::delete('admin/vehicles/{vehicle}/delete', [VehicleController::class, 'delete'])->name('vehicle.delete');

});

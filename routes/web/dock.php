<?php


use App\Http\Controllers\CocController;
use App\Http\Controllers\DockController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

Route::middleware('role:dock')->group(function() {

    Route::get('team/dock/index', [DockController::class, 'index'])->name('dock.index');
    Route::get('team/dock/departing', [DockController::class, 'departing'])->name('dock.departing');
    Route::get('team/dock/returning', [DockController::class, 'returning'])->name('dock.returning');
    Route::get('team/dock/hour-counts', [DockController::class, 'hourCounts'])->name('dock.hourCounts');

    Route::put('team/dock/index/{rental}/rental-status', [RentalController::class, 'rentalStatusDock'])->name('dock.rentalStatusDock');
    Route::put('team/dock/index/{rental}/launch-rental', [RentalController::class, 'launchRental'])->name('dock.launchRental');
    Route::put('team/dock/index/{rental}/on-dock', [RentalController::class, 'vehicleOnDock'])->name('dock.vehicleOnDock');
    Route::put('team/dock/index/{rental}/clear', [RentalController::class, 'vehicleClear'])->name('dock.vehicleClear');
    Route::put('team/dock/index/{rental}/clear-multi', [RentalController::class, 'vehicleClearMulti'])->name('dock.vehicleClearMulti');
    Route::put('team/dock/index/{rental}/detach-vehicle-1', [RentalController::class, 'detachVehicleOne'])->name('dock.detachVehicleOne');
    Route::put('team/dock/index/{rental}/detach-coc-1', [RentalController::class, 'detachVehicleCoc'])->name('dock.detachVehicleCoc');
    Route::put('team/dock/index/{rental}/change-vehicle', [RentalController::class, 'changeVehicle'])->name('dock.changeVehicle');
    Route::put('team/dock/index/{rental}/detach-vehicle-change', [RentalController::class, 'detachVehicleChange'])->name('dock.detachVehicleChange');
    Route::put('team/dock/index/{rental}/coc', [RentalController::class, 'vehicleCOC'])->name('dock.vehicleCOC');

    Route::put('team/dock/rental/{rental}/attach-vehicle', [RentalController::class, 'attachVehicle'])->name('dock.attachVehicle');
    Route::put('team/dock/rental/{rental}/detach-vehicle', [RentalController::class, 'detachVehicle'])->name('dock.detachVehicle');
});

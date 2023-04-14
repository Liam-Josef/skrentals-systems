<?php


use App\Http\Controllers\MaintenanceController;
use Illuminate\Support\Facades\Route;

Route::middleware('role:office')->group(function() {
    Route::put('team/submit-request-office', [MaintenanceController::class, 'submitMaintReqOffice'])->name('maintenance.submitMaintReqOffice');
});

Route::middleware('role:dock')->group(function() {
    Route::put('team/submit-request-dock', [MaintenanceController::class, 'submitMaintReqDock'])->name('maintenance.submitMaintReqDock');
});

Route::middleware('role:admin')->group(function() {
    Route::put('maintenance/request', [MaintenanceController::class, 'submitMaintReqAdmin'])->name('maintenance.submitMaintReqAdmin');
    Route::put('maintenance/{maintenance}/accept-invoice', [MaintenanceController::class, 'acceptMaintInvoice'])->name('maintenance.acceptMaintInvoice');
    Route::get('admin/maintenance/index', [MaintenanceController::class, 'index'])->name('maintenance.index');
    Route::get('admin/maintenance/service', [MaintenanceController::class, 'service'])->name('maintenance.service');
    Route::get('admin/maintenance/chart', [MaintenanceController::class, 'chart'])->name('maintenance.chart');
    Route::get('admin/maintenance/hour-counts', [MaintenanceController::class, 'hours'])->name('maintenance.hours');
    Route::put('admin/maintenance/{maintenance}/accept-maint-req-coc', [MaintenanceController::class, 'acceptMaintReqCoc'])->name('maintenance.acceptMaintReqCoc');
    Route::put('admin/maintenance/{maintenance}/attach-invoice', [MaintenanceController::class, 'attachInvoice'])->name('maintenance.attachInvoice');
    Route::put('admin/maintenance/{maintenance}/update-invoice', [MaintenanceController::class, 'updateInvoice'])->name('maintenance.updateInvoice');
    Route::put('admin/maintenance/{maintenance}/accept-invoice', [MaintenanceController::class, 'acceptInvoice'])->name('maintenance.acceptInvoice');
    Route::put('admin/maintenance/{maintenance}/submit-request', [MaintenanceController::class, 'submitServiceReqAdmin'])->name('maintenance.submitServiceReqAdmin');
    Route::put('admin/maintenance/{maintenance}/accept-maint-req-admin', [MaintenanceController::class, 'acceptMaintReqAdmin'])->name('maintenance.acceptMaintReqAdmin');
    Route::put('admin/maintenance/{maintenance}/accept-maint-invoice-admin', [MaintenanceController::class, 'acceptMaintInvoiceAdmin'])->name('maintenance.acceptMaintInvoiceAdmin');
    Route::get('admin/maintenance/{maintenance}/profile', [MaintenanceController::class, 'profileAdmin'])->name('maintenance.profileAdmin');


    Route::put('admin/{maintenance}/attach-invoice', [MaintenanceController::class, 'attachInvoiceAdmin'])->name('maintenance.attachInvoiceAdmin');
    Route::put('admin/{maintenance}/update-invoice', [MaintenanceController::class, 'updateInvoiceAdmin'])->name('maintenance.updateInvoiceAdmin');

});

Route::middleware('role:service')->group(function() {
    Route::get('service/index', [MaintenanceController::class, 'serviceFront'])->name('maintenance.serviceFront');
    Route::put('admin/maintenance/{maintenance}/accept-maint-req-coc', [MaintenanceController::class, 'acceptMaintReqCoc'])->name('maintenance.acceptMaintReqCoc');
    Route::put('service/{maintenance}/attach-invoice', [MaintenanceController::class, 'attachInvoice'])->name('maintenance.attachInvoice');
    Route::put('service/{maintenance}/update-invoice', [MaintenanceController::class, 'updateInvoice'])->name('maintenance.updateInvoice');
});

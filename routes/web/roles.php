<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:dev'])->group(function() {

    Route::get('admin/roles/index', [RoleController::class, 'index'])->name('roles.index');
    Route::post('admin/roles/index', [RoleController::class, 'store'])->name('roles.store');
    Route::get('admin/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::delete('admin/roles/{role}/delete', [RoleController::class, 'delete'])->name('roles.delete');
    Route::get('admin/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('admin/roles/{role}/update', [RoleController::class, 'update'])->name('roles.update');

    Route::get('admin/roles/permissions/index', [RoleController::class, 'permission'])->name('roles.permissions');
//    Route::get('roles/permissions/{permission}/edit', [RoleController::class, 'permission_edit'])->name('roles.permissions.edit');
    Route::put('admin/roles/{role}/attach-permission', [RoleController::class, 'attach_permission'])->name('roles.permission.attach');
    Route::put('admin/roles/{role}/detach-permission', [RoleController::class, 'detach_permission'])->name('roles.permission.detach');

    Route::get('admin/roles/permissions', [PermissionController::class, 'index'])->name('roles.permissions');
    Route::post('admin/roles/permissions', [PermissionController::class, 'store'])->name('roles.permissions.store');
    Route::get('admin/roles/permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('roles.permissions.edit');
    Route::put('admin/roles/permissions/{permission}/update', [PermissionController::class, 'update'])->name('roles.permissions.update');
    Route::delete('admin/roles/permissions/{permission}/delete', [PermissionController::class, 'delete'])->name('roles.permissions.delete');



});

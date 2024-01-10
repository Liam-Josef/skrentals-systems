<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:dev'])->group(function() {

//    Route::get('roles/permissions', [RoleController::class, 'index'])->name('admin.roles.permissions');

});

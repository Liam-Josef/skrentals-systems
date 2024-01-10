<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:admin'])->group(function() {
    Route::get('admin/users/index', [UserController::class, 'index'])->name('users.index');
    Route::get('admin/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('admin/users/{user}/profile-update', [UserController::class, 'profileUpdate'])->name('user.profile.profileUpdate');
//    Route::get('admin/users/{user}/update-password', [UserController::class, 'updatePassword'])->name('user.updatePassword');
    Route::put('admin/users/{user}/update', [UserController::class, 'update'])->name('user.profile.update');
    Route::delete('admin/users/{user}/destroy', [UserController::class, 'destroy'])->name('user.destroy');

    Route::put('/users/{user}/attach', [UserController::class, 'attach'])->name('user.role.attach');
    Route::put('/users/{user}/detach', [UserController::class, 'detach'])->name('user.role.detach');

    Route::get('/team/{user}/profile', [UserController::class, 'profile'])->name('team.profile');
    Route::put('team/{user}/update', [UserController::class, 'updateUser'])->name('team.updateUser');
    Route::put('team/{user}/update-password', [UserController::class, 'updatePassword'])->name('team.updatePassword');

    Route::put('/users/{user}/disable', [UserController::class, 'disable'])->name('user.disable');
    Route::put('/users/{user}/enable', [UserController::class, 'enable'])->name('user.enable');

    Route::post('admin/users/store', [UserController::class, 'store'])->name('user.store');

//    TODO - bug with office/ dock being able to see their profiles


});

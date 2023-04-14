<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\COCController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DockController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Auth::routes();
Route::group(['middleware' => 'guest'], function(){

});
Route::get('/', [App\Http\Controllers\TeamController::class, 'index'])->name('team.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/book-now', [App\Http\Controllers\HomeController::class, 'book_now'])->name('home.book_now');
    Route::get('/our-fleet', [App\Http\Controllers\HomeController::class, 'our_rentals'])->name('home.our_rentals');
    Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('home.about_us');
    Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');





Route::get('/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team.index');



Route::middleware('auth')->group(function() {

//    Route::get('/dashboard', [App\Http\Controllers\TeamController::class, 'index'])->name('team.index');





});

Route::middleware(['auth','role:admin'])->group(function() {

    Route::get('/admin/index', [AdminsController::class, 'index'])->name('admin.index');
    Route::get('/admin', [AdminsController::class, 'master'])->name('admin.master');

    Route::get('admin/users/index', [UserController::class, 'index'])->name('users.index');

    Route::get('admin/users/damage-reports', [UserController::class,'damageReports'])->name('users.damage-reports');

    Route::get('admin/training/index', [TrainingController::class, 'index'])->name('training.index');


});

Route::middleware(['can:view,user'])->group(function() {

    Route::get('admin/users/{user}/profile', [UserController::class, 'show'])->name('user.profile.show');

});

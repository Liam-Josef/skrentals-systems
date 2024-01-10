<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CocController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DockController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\SignaturePadController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');
Route::get('/rentals/sea-doo-rentals', [App\Http\Controllers\HomeController::class, 'seadoo'])->name('home.seadoo');
Route::get('/rentals/boat-rentals', [App\Http\Controllers\HomeController::class, 'boat'])->name('home.boat');
Route::get('/rentals/segway-rentals', [App\Http\Controllers\HomeController::class, 'segway'])->name('home.segway');
Route::get('/rentals/spyder-rentals', [App\Http\Controllers\HomeController::class, 'spyder'])->name('home.spyder');
Route::get('/rentals/snowmobile-rentals', [App\Http\Controllers\HomeController::class, 'snowmobile'])->name('home.snowmobile');
Route::get('/rentals/kayak-paddleboard-rentals', [App\Http\Controllers\HomeController::class, 'kayak'])->name('home.kayak');
Route::get('/operation-info/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('home.about_us');
Route::get('/operation-info/map-hours', [App\Http\Controllers\HomeController::class, 'maps'])->name('home.maps');
Route::get('/customer-corner/photo-gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('home.gallery');
Route::get('/customer-corner/testimonials', [App\Http\Controllers\HomeController::class, 'testimonials'])->name('home.testimonials');
Route::get('/customer-corner/know-before-you-go', [App\Http\Controllers\HomeController::class, 'know'])->name('home.know');
Route::get('/customer-corner/customer-survey', [App\Http\Controllers\HomeController::class, 'survey'])->name('home.survey');
Route::get('/book-now', [App\Http\Controllers\HomeController::class, 'book_now'])->name('home.book_now');
//Route::get('/our-fleet', [App\Http\Controllers\HomeController::class, 'our_rentals'])->name('home.our_rentals');




Auth::routes();
Route::group(['middleware' => 'guest'], function(){

});
Route::post('/receive-peekpro-reservation', [App\Http\Controllers\PeekProController::class, 'receiveReservation'])->name('receiveReservation');


Route::get('/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team.index');
Route::post('signature_pad', [SignaturePadController::class, 'store'])->name('signature_pad.store');







Route::get('/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team.index');



Route::middleware('auth')->group(function() {

//    Route::get('/dashboard', [App\Http\Controllers\TeamController::class, 'index'])->name('team.index');





});

Route::middleware(['auth','role:admin'])->group(function() {

    Route::get('/admin', [AdminsController::class, 'index'])->name('admin.index');

    Route::get('/admin/dev/app-info', [App\Http\Controllers\AdminsController::class, 'siteInfo'])->name('admin.dev.siteInfo');

    Route::patch('/admin/dev/app-info/{website}/update', [App\Http\Controllers\WebsiteController::class, 'update'])->name('admin.dev.siteInfo.update');

    Route::get('admin/users/index', [UserController::class, 'index'])->name('users.index');

    Route::get('admin/users/damage-reports', [UserController::class,'damageReports'])->name('users.damage-reports');

    Route::get('admin/training/index', [TrainingController::class, 'index'])->name('training.index');


});

Route::middleware(['can:view,user'])->group(function() {

    Route::get('admin/users/{user}/profile', [UserController::class, 'show'])->name('user.profile.show');

});

Route::apiResource('clients', \App\Http\Controllers\ClientController::class);

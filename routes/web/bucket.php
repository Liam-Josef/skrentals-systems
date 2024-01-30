<?php


use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\BucketController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::put('/rentals/book-rental-duration', [BucketController::class, 'book_one'])->name('bucket.one');
Route::put('/rentals/{bucket}/update', [BucketController::class, 'update_date'])->name('bucket.update_date');
Route::put('/rentals/{bucket}/update-time', [BucketController::class, 'update_time'])->name('bucket.update_time');
Route::put('/rentals/{bucket}/duration', [BucketController::class, 'addDuration'])->name('bucket.duration');
Route::put('/rentals/{bucket}/change-duration', [BucketController::class, 'changeDuration'])->name('bucket.changeDuration');
Route::put('/rentals/{bucket}/book-rental-additions', [App\Http\Controllers\BucketController::class, 'book_rental_additions'])->name('home.book_rental_additions');
Route::put('/rentals/{bucket}/book-rental-additions', [App\Http\Controllers\BucketController::class, 'book_rental_additions'])->name('home.book_rental_additions');
Route::put('/rentals/{bucket}/make-reservation', [App\Http\Controllers\BucketController::class, 'book_rental_customer'])->name('home.book_rental_customer');


Auth::routes();

Route::middleware(['role:admin'])->group(function() {



});

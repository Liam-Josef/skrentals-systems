<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function() {
    Route::get('/post/{post}', [PostController::class, 'show'])->name('post');
});

Route::middleware('role:admin')->group(function() {
    Route::get('admin/posts/index', [PostController::class, 'index'])->name('post.index');
    Route::post('admin/posts/store', [PostController::class, 'store'])->name('post.store');
    Route::get('admin/posts/create', [PostController::class, 'create'])->name('post.create');
    Route::get('admin/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('admin/posts/{post}/update', [PostController::class, 'update'])->name('post.update');
    Route::delete('admin/posts/{post}/delete', [PostController::class, 'destroy'])->name('post.destroy');


});


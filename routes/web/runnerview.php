<?php

use App\Http\Controllers\RunnerViewController;
use Illuminate\Support\Facades\Route;

Route::get('team/runnerview/index', [RunnerViewController::class, 'index'])->name('runnerview.index');

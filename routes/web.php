<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\WelcomeController;

/**
  * Here are all the routes that are used to map URLS to controllers.
  */

Route::get('/', [WelcomeController::class, 'index']);
Route::resource('/workouts', WorkoutController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

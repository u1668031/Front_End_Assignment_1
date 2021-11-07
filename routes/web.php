<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);
Route::resource('/workouts', WorkoutController::class);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(JobController::class)->group(
        function () {
            Route::get('/jobs', 'index')->name('jobs.list');
            Route::post('/jobs', 'store')->name('jobs.store');
            Route::patch('/jobs/{job}', 'update')->name('jobs.update');
            Route::delete('/jobs/{ids}', 'destroy')->name('jobs.destroy');
        }
    );

    Route::controller(CandidateController::class)->group(
        function () {
            Route::post('/candidates/{job}', 'apply')->name('candidates.apply');
            Route::delete('/candidates/{job}', 'unapply')->name('candidates.unapply');
            Route::patch('/candidates/{candidate}', 'update')->name('candidates.update');
        }
    );
});

require __DIR__ . '/auth.php';
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', function () {
    return view('welcome');
});


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');


// Student Routes
Route::resource('students', StudentController::class)
    ->middleware(['auth']);


// Course Routes
Route::resource('courses', CourseController::class)
    ->middleware(['auth']);


// Authentication Routes (Laravel Breeze)
require __DIR__.'/auth.php';
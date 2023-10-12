<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('grades', GradeController::class);
    Route::resource('students', StudentController::class);
// });

// Route::get('login', [LoginController::class, 'login']);
// Route::post('login', [LoginController::class, 'authenticate'])->name('login');
// Route::get('register', [LoginController::class, 'register']);
// Route::post('register', [LoginController::class, 'store'])->name('register');
// Route::get('logout', [LoginController::class, 'logout'])->name('logout');

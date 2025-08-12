<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/students', [studentController::class, 'index'])->name('students');
    Route::get('/student/create', [studentController::class, 'store'])->name('student.store');
});

Route::resource('students', studentController::class);

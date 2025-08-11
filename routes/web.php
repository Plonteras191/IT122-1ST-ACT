<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\studentController;

Route::get('/students', [studentController::class, 'index'])->name('students');
Route::get('/student/create', [studentController::class, 'store'])->name('student.store');

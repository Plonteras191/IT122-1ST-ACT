<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\SubjectController;

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

    Route::get('subjects', [SubjectController::class, 'index'])->name('subjects.index');
    Route::get('subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
    Route::post('/subject/store', [SubjectController::class, 'store'])->name('subject.store');

    Route::get('students', [studentController::class, 'index'])->name('students.index');
    Route::get('students/create', [studentController::class, 'create'])->name('students.create');
    Route::post('/students/store', [studentController::class, 'store'])->name('students.store');
});


<?php

use App\Http\Controllers\School\DashboardController;
use App\Http\Controllers\School\ClassRoomController;
use App\Http\Controllers\School\StudentController;
use App\Http\Controllers\School\TeacherController;
use Illuminate\Support\Facades\Route;

Route::prefix('school')
    ->name('school.')
    ->middleware(['web', 'auth', 'role:school'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // Class Room Routes
        Route::resource('classrooms', ClassRoomController::class);
        
        // Student Routes
        Route::resource('students', StudentController::class);

        // Teacher Routes
        Route::resource('teachers', TeacherController::class);
    });

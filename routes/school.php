<?php

use App\Http\Controllers\School\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('school')
    ->name('school.')
    ->middleware(['web', 'auth', 'role:school'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // Add more school-specific routes here
    });

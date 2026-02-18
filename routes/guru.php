<?php

use App\Http\Controllers\Guru\DashboardController as GuruDashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('guru')
    ->name('guru.')
    ->middleware(['web', 'auth', 'role:guru'])
    ->group(function () {
        Route::get('/dashboard', [GuruDashboardController::class, 'index'])->name('dashboard');
    });
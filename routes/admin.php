<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;

Route::prefix('admin')->middleware(['auth', 'superadmin'])->group(function () {
    Route::resource('articles', ArticleController::class);
});
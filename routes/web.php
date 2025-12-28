<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\Public\ArticleController;

Route::post('upload',[CKEditorController::class, 'uploadFile'])->name('upload');
Route::get('/', [LandingpageController::class, 'index'])->name('home');

// Public Article Routes
Route::get('/articles', [ArticleController::class, 'index'])->name('public.articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('public.articles.show');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/school.php';

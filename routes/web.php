<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\Public\ArticleController;
use App\Models\Article;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/sitemap', function(){
    $sitemap = Sitemap::create()
    ->add(Url::create('/'))
    ->add(Url::create('/articles'));

    $article = Article::get();
    foreach($article as $item){
        $sitemap->add(Url::create("/articles/{$item->slug}")); 
    }

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return redirect('/sitemap.xml');

});

Route::post('upload',[CKEditorController::class, 'uploadFile'])->name('upload');
Route::get('/', [LandingpageController::class, 'index'])->name('home');

// Public Article Routes
Route::get('/articles', [ArticleController::class, 'index'])->name('public.articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('public.articles.show');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/school.php';

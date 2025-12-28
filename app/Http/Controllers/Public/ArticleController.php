<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of published articles.
     */
    public function index(Request $request)
    {
        $query = Article::with('author')->where('status', 'published');

        // Filter by search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%");
            });
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Get articles with pagination
        $articles = $query->latest()->paginate(9)->withQueryString();

        // Get popular articles (top 5 by views)
        $popularArticles = Article::where('status', 'published')
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        // Get categories with article count
        $categories = Article::where('status', 'published')
            ->selectRaw('category, COUNT(*) as count')
            ->groupBy('category')
            ->get();

        return view('pages.public.articles.index', compact(
            'articles',
            'popularArticles',
            'categories'
        ));
    }

    /**
     * Display the specified article.
     */
    public function show(string $slug)
    {
        $article = Article::with('author')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        // Increment views
        $article->increment('views');

        // Get related articles (same category, limit 3)
        $relatedArticles = Article::where('status', 'published')
            ->where('category', $article->category)
            ->where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.public.articles.show', compact('article', 'relatedArticles'));
    }
}

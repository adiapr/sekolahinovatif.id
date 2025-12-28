<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

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

        // Set SEO
        $title = 'Artikel & Berita - Sekolah Inovatif';
        $description = 'Informasi terbaru seputar digitalisasi pendidikan dan tips untuk sekolah modern';
        
        if ($request->filled('search')) {
            $title = 'Hasil Pencarian: ' . $request->search;
        } elseif ($request->filled('category')) {
            $categoryName = $this->getCategoryName($request->category);
            $title = 'Artikel ' . $categoryName;
            $description = 'Artikel dan informasi seputar ' . $categoryName . ' untuk digitalisasi sekolah';
        }

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::addKeyword(['artikel', 'berita', 'sekolah inovatif', 'digitalisasi pendidikan', 'manajemen sekolah']);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl(route('public.articles.index'));
        OpenGraph::setType('website');
        OpenGraph::addImage(asset('logo/SI_red.png'));

        TwitterCard::setTitle($title);
        TwitterCard::setDescription($description);
        TwitterCard::setType('summary');
        TwitterCard::setImage(asset('logo/SI_red.png'));

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

        // Set SEO
        $title = $article->meta_title ?? $article->title;
        $description = $article->meta_description ?? $article->excerpt ?? strip_tags(\Str::limit($article->content, 160));
        
        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::addKeyword(array_merge(
            ['artikel', 'sekolah inovatif', 'digitalisasi pendidikan'],
            $article->tags ? explode(',', $article->tags) : []
        ));
        SEOMeta::setCanonical(route('public.articles.show', $article->slug));

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl(route('public.articles.show', $article->slug));
        OpenGraph::setType('article');
        // OpenGraph::addProperty('article:published_time', $article->created_at->toIso8601String());
        OpenGraph::addProperty('article:author', $article->author->name ?? 'Sekolah Inovatif');
        OpenGraph::addProperty('article:section', $this->getCategoryName($article->category));
        
        if ($article->featured_image) {
            OpenGraph::addImage(asset('storage/' . $article->featured_image));
        } else {
            OpenGraph::addImage(asset('logo/SI_red.png'));
        }

        TwitterCard::setTitle($title);
        TwitterCard::setDescription($description);
        TwitterCard::setType('summary_large_image');
        if ($article->featured_image) {
            TwitterCard::setImage(asset('storage/' . $article->featured_image));
        } else {
            TwitterCard::setImage(asset('logo/SI_red.png'));
        }

        return view('pages.public.articles.show', compact('article', 'relatedArticles'));
    }

    /**
     * Get category name in Indonesian
     */
    private function getCategoryName($category)
    {
        $categories = [
            'news' => 'Berita',
            'tutorial' => 'Tutorial',
            'announcement' => 'Pengumuman',
            'tips' => 'Tips & Trik',
            'event' => 'Event',
            'application' => 'Aplikasi'
        ];

        return $categories[$category] ?? ucfirst($category);
    }
}

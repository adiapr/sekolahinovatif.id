<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Article::with('author');

        // Filter by search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%")
                  ->orWhereHas('author', function($q) use ($search) {
                      $q->where('name', 'like', "%{$search}%");
                  });
            });
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Get articles with pagination
        $articles = $query->latest()->paginate(10)->withQueryString();

        // Get statistics
        $totalArticles = Article::count();
        $publishedArticles = Article::where('status', 'published')->count();
        $draftArticles = Article::where('status', 'draft')->count();
        $totalViews = Article::sum('views');

        return view('pages.admin.article.index', compact(
            'articles',
            'totalArticles',
            'publishedArticles',
            'draftArticles',
            'totalViews'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.article._form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:articles,slug',
            'category' => 'required|string',
            'status' => 'required|in:draft,published',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'tags' => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('articles', 'public');
        }

        // Add author_id (current logged in user)
        $validated['author_id'] = auth()->id();
        
        // Initialize views
        $validated['views'] = 0;

        // Create article
        Article::create($validated);

        return redirect()->route('articles.index')
            ->with('success', 'Article berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::with('author')->findOrFail($id);
        return view('pages.admin.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        return view('pages.admin.article._form', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:articles,slug,' . $id,
            'category' => 'required|string',
            'status' => 'required|in:draft,published',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'tags' => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($article->featured_image) {
                \Storage::disk('public')->delete($article->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')->store('articles', 'public');
        }

        // Update article
        $article->update($validated);

        return redirect()->route('articles.index')
            ->with('success', 'Article berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        
        // Delete featured image if exists
        if ($article->featured_image) {
            \Storage::disk('public')->delete($article->featured_image);
        }
        
        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Article berhasil dihapus!');
    }
}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }} - Sekolah Inovatif</title>
    <meta name="description" content="{{ $article->excerpt ?? Str::limit(strip_tags($article->content), 160) }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .article-content {
            line-height: 1.8;
        }
        .article-content h1 {
            @apply text-3xl font-bold text-gray-900 mt-8 mb-4;
        }
        .article-content h2 {
            @apply text-2xl font-bold text-gray-900 mt-6 mb-3;
        }
        .article-content h3 {
            @apply text-xl font-bold text-gray-900 mt-4 mb-2;
        }
        .article-content p {
            @apply text-gray-700 mb-4;
        }
        .article-content ul, .article-content ol {
            @apply ml-6 mb-4 space-y-2;
        }
        .article-content ul {
            @apply list-disc;
        }
        .article-content ol {
            @apply list-decimal;
        }
        .article-content a {
            @apply text-red-600 hover:text-red-700 underline;
        }
        .article-content img {
            @apply rounded-lg my-6 mx-auto max-w-full h-auto;
        }
        .article-content blockquote {
            @apply border-l-4 border-red-600 pl-4 italic text-gray-600 my-4;
        }
        .article-content code {
            @apply bg-gray-100 px-2 py-1 rounded text-sm font-mono;
        }
        .article-content pre {
            @apply bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto my-4;
        }
        .article-content table {
            @apply w-full border-collapse my-4;
        }
        .article-content th, .article-content td {
            @apply border border-gray-300 px-4 py-2;
        }
        .article-content th {
            @apply bg-gray-100 font-semibold;
        }
    </style>
</head>
<body class="bg-gray-50">
    @include('partials.navbar')

    <!-- Article Header -->
    <article class="pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Left Sidebar - Sticky Share Buttons (Desktop Only) -->
                <aside class="hidden lg:block lg:col-span-2">
                    <div class="sticky top-24">
                        <div class="flex flex-col space-y-3">
                            <p class="text-sm font-semibold text-gray-900 mb-2">Bagikan:</p>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('public.articles.show', $article->slug)) }}" 
                               target="_blank"
                               title="Share on Facebook"
                               class="flex items-center justify-center w-12 h-12 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition shadow-md">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('public.articles.show', $article->slug)) }}&text={{ urlencode($article->title) }}" 
                               target="_blank"
                               title="Share on Twitter"
                               class="flex items-center justify-center w-12 h-12 bg-sky-500 text-white rounded-lg hover:bg-sky-600 transition shadow-md">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($article->title . ' - ' . route('public.articles.show', $article->slug)) }}" 
                               target="_blank"
                               title="Share on WhatsApp"
                               class="flex items-center justify-center w-12 h-12 bg-green-600 text-white rounded-lg hover:bg-green-700 transition shadow-md">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('public.articles.show', $article->slug)) }}&title={{ urlencode($article->title) }}" 
                               target="_blank"
                               title="Share on LinkedIn"
                               class="flex items-center justify-center w-12 h-12 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition shadow-md">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Content -->
                <main class="lg:col-span-7">
                    <div class="max-w-4xl">
            <!-- Breadcrumb -->
            <nav class="flex items-center space-x-2 text-sm text-gray-500 mb-6">
                <a href="{{ route('home') }}" class="hover:text-red-600">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <a href="{{ route('public.articles.index') }}" class="hover:text-red-600">Artikel</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-gray-900">{{ Str::limit($article->title, 50) }}</span>
            </nav>

            <!-- Category Badge -->
            <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full mb-4
                @if($article->category == 'news') bg-blue-100 text-blue-800
                @elseif($article->category == 'tutorial') bg-purple-100 text-purple-800
                @elseif($article->category == 'announcement') bg-yellow-100 text-yellow-800
                @elseif($article->category == 'tips') bg-green-100 text-green-800
                @elseif($article->category == 'event') bg-pink-100 text-pink-800
                @else bg-gray-100 text-gray-800
                @endif">
                @if($article->category == 'news') Berita
                @elseif($article->category == 'tutorial') Tutorial
                @elseif($article->category == 'announcement') Pengumuman
                @elseif($article->category == 'tips') Tips & Trik
                @elseif($article->category == 'event') Event
                @elseif($article->category == 'application') Aplikasi
                @else {{ ucfirst($article->category) }}
                @endif
            </span>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                {{ $article->title }}
            </h1>

            <!-- Meta Info -->
            <div class="flex items-center space-x-6 text-gray-600 mb-8 pb-8 border-b border-gray-200">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-900">{{ $article->author->name ?? 'Admin' }}</p>
                        <p class="text-xs text-gray-500">Penulis</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-calendar text-red-600"></i>
                    <span class="text-sm">{{ $article->created_at->format('d F Y') }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-eye text-red-600"></i>
                    <span class="text-sm">{{ number_format($article->views) }} views</span>
                </div>
            </div>

            <!-- Featured Image -->
            @if($article->featured_image)
                <div class="mb-10">
                    <img src="{{ asset('storage/'.$article->featured_image) }}" 
                         alt="{{ $article->title }}" 
                         class="w-full rounded-xl shadow-lg">
                </div>
            @endif

            <!-- Excerpt -->
            @if($article->excerpt)
                <div class="bg-gray-100 border-l-4 border-red-600 p-6 rounded-lg mb-8">
                    <p class="text-lg text-gray-700 italic">
                        {{ $article->excerpt }}
                    </p>
                </div>
            @endif

            <!-- Article Content -->
            <div class="article-content prose prose-lg max-w-none">
                {!! $article->content !!}
            </div>

            <!-- Tags -->
            @if($article->tags)
                <div class="mt-10 pt-8 border-t border-gray-200">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3">Tags:</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(explode(',', $article->tags) as $tag)
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full hover:bg-red-100 hover:text-red-600 transition">
                                #{{ trim($tag) }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Share Buttons (Mobile Only) -->
            <div class="mt-8 pt-8 border-t border-gray-200 lg:hidden">
                <h3 class="text-sm font-semibold text-gray-900 mb-4">Bagikan Artikel:</h3>
                <div class="flex space-x-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('public.articles.show', $article->slug)) }}" 
                       target="_blank"
                       class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        <i class="fab fa-facebook-f"></i>
                        <span class="text-sm">Facebook</span>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('public.articles.show', $article->slug)) }}&text={{ urlencode($article->title) }}" 
                       target="_blank"
                       class="flex items-center space-x-2 px-4 py-2 bg-sky-500 text-white rounded-lg hover:bg-sky-600 transition">
                        <i class="fab fa-twitter"></i>
                        <span class="text-sm">Twitter</span>
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($article->title . ' - ' . route('public.articles.show', $article->slug)) }}" 
                       target="_blank"
                       class="flex items-center space-x-2 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                        <i class="fab fa-whatsapp"></i>
                        <span class="text-sm">WhatsApp</span>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('public.articles.show', $article->slug)) }}&title={{ urlencode($article->title) }}" 
                       target="_blank"
                       class="flex items-center space-x-2 px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition">
                        <i class="fab fa-linkedin-in"></i>
                        <span class="text-sm">LinkedIn</span>
                    </a>
                </div>
            </div>
                    </div>
                </main>

                <!-- Right Sidebar - Sticky Categories (Desktop Only) -->
                <aside class="hidden lg:block lg:col-span-3">
                    <div class="sticky top-24">
                        <!-- Categories -->
                        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Kategori</h3>
                            <div class="space-y-2">
                                <a href="{{ route('public.articles.index') }}" 
                                   class="flex items-center justify-between py-2 px-3 rounded hover:bg-gray-100 transition text-gray-700">
                                    <span class="text-sm">Semua Artikel</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="{{ route('public.articles.index', ['category' => 'news']) }}" 
                                   class="flex items-center justify-between py-2 px-3 rounded hover:bg-gray-100 transition {{ $article->category == 'news' ? 'bg-blue-50 text-blue-600' : 'text-gray-700' }}">
                                    <span class="text-sm">Berita</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="{{ route('public.articles.index', ['category' => 'tutorial']) }}" 
                                   class="flex items-center justify-between py-2 px-3 rounded hover:bg-gray-100 transition {{ $article->category == 'tutorial' ? 'bg-purple-50 text-purple-600' : 'text-gray-700' }}">
                                    <span class="text-sm">Tutorial</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="{{ route('public.articles.index', ['category' => 'announcement']) }}" 
                                   class="flex items-center justify-between py-2 px-3 rounded hover:bg-gray-100 transition {{ $article->category == 'announcement' ? 'bg-yellow-50 text-yellow-600' : 'text-gray-700' }}">
                                    <span class="text-sm">Pengumuman</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="{{ route('public.articles.index', ['category' => 'tips']) }}" 
                                   class="flex items-center justify-between py-2 px-3 rounded hover:bg-gray-100 transition {{ $article->category == 'tips' ? 'bg-green-50 text-green-600' : 'text-gray-700' }}">
                                    <span class="text-sm">Tips & Trik</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="{{ route('public.articles.index', ['category' => 'event']) }}" 
                                   class="flex items-center justify-between py-2 px-3 rounded hover:bg-gray-100 transition {{ $article->category == 'event' ? 'bg-pink-50 text-pink-600' : 'text-gray-700' }}">
                                    <span class="text-sm">Event</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="{{ route('public.articles.index', ['category' => 'application']) }}" 
                                   class="flex items-center justify-between py-2 px-3 rounded hover:bg-gray-100 transition {{ $article->category == 'application' ? 'bg-red-50 text-red-600' : 'text-gray-700' }}">
                                    <span class="text-sm">Aplikasi</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Back to Articles Button -->
                        <a href="{{ route('public.articles.index') }}" 
                           class="block w-full text-center px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition shadow-md">
                            <i class="fas fa-arrow-left mr-2"></i>Kembali ke Artikel
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </article>

    <!-- Related Articles -->
    @if($relatedArticles->count() > 0)
        <section class="py-16 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Artikel Terkait</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedArticles as $related)
                        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                            <a href="{{ route('public.articles.show', $related->slug) }}">
                                @if($related->featured_image)
                                    <img src="{{ asset('storage/'.$related->featured_image) }}" 
                                         alt="{{ $related->title }}" 
                                         class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-white text-4xl"></i>
                                    </div>
                                @endif
                            </a>
                            <div class="p-5">
                                <a href="{{ route('public.articles.show', $related->slug) }}">
                                    <h3 class="text-lg font-bold text-gray-900 mb-2 hover:text-red-600 line-clamp-2">
                                        {{ $related->title }}
                                    </h3>
                                </a>
                                <p class="text-sm text-gray-600 mb-4 line-clamp-2">
                                    {{ $related->excerpt ?? strip_tags(Str::limit($related->content, 100)) }}
                                </p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>
                                        <i class="fas fa-calendar mr-1"></i>{{ $related->created_at->format('d M Y') }}
                                    </span>
                                    <span>
                                        <i class="fas fa-eye mr-1"></i>{{ number_format($related->views) }}
                                    </span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="text-center mt-8">
                    <a href="{{ route('public.articles.index') }}" class="inline-block px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                        Lihat Semua Artikel
                    </a>
                </div>
            </div>
        </section>
    @endif

    @include('partials.footer')

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>

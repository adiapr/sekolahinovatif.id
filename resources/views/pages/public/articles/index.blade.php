<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - Sekolah Inovatif</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-red-600 to-red-800 pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Artikel & Berita</h1>
            <p class="text-xl text-red-100 max-w-2xl mx-auto">
                Informasi terbaru seputar digitalisasi pendidikan dan tips untuk sekolah modern
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar -->
                <aside class="lg:col-span-1">
                    <!-- Search -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Cari Artikel</h3>
                        <form method="GET" action="{{ route('public.articles.index') }}">
                            <div class="relative">
                                <input type="text" name="search" value="{{ request('search') }}" 
                                       placeholder="Cari artikel..." 
                                       class="w-full px-4 py-2 pr-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                <button type="submit" class="absolute right-3 top-2.5 text-gray-400 hover:text-red-600">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Kategori</h3>
                        <div class="space-y-2">
                            <a href="{{ route('public.articles.index') }}" 
                               class="flex items-center justify-between py-2 px-3 rounded hover:bg-gray-100 transition {{ !request('category') ? 'bg-red-50 text-red-600' : 'text-gray-700' }}">
                                <span>Semua Artikel</span>
                                <span class="text-sm">{{ $articles->total() }}</span>
                            </a>
                            @foreach($categories as $cat)
                                <a href="{{ route('public.articles.index', ['category' => $cat->category]) }}" 
                                   class="flex items-center justify-between py-2 px-3 rounded hover:bg-gray-100 transition {{ request('category') == $cat->category ? 'bg-red-50 text-red-600' : 'text-gray-700' }}">
                                    <span>
                                        @if($cat->category == 'news') Berita
                                        @elseif($cat->category == 'tutorial') Tutorial
                                        @elseif($cat->category == 'announcement') Pengumuman
                                        @elseif($cat->category == 'tips') Tips & Trik
                                        @elseif($cat->category == 'event') Event
                                        @elseif($cat->category == 'application') Aplikasi
                                        @else {{ ucfirst($cat->category) }}
                                        @endif
                                    </span>
                                    <span class="text-sm">{{ $cat->count }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Popular Articles -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Artikel Popular</h3>
                        <div class="space-y-4">
                            @foreach($popularArticles as $popular)
                                <a href="{{ route('public.articles.show', $popular->slug) }}" class="block group">
                                    <div class="flex space-x-3">
                                        @if($popular->featured_image)
                                            <img src="{{ asset('storage/'.$popular->featured_image) }}" 
                                                 alt="{{ $popular->title }}" 
                                                 class="w-20 h-20 object-cover rounded">
                                        @else
                                            <div class="w-20 h-20 bg-gray-200 rounded flex items-center justify-center">
                                                <i class="fas fa-image text-gray-400 text-2xl"></i>
                                            </div>
                                        @endif
                                        <div class="flex-1">
                                            <h4 class="text-sm font-semibold text-gray-900 group-hover:text-red-600 line-clamp-2 mb-1">
                                                {{ $popular->title }}
                                            </h4>
                                            <p class="text-xs text-gray-500">
                                                <i class="fas fa-eye mr-1"></i>{{ number_format($popular->views) }} views
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </aside>

                <!-- Articles Grid -->
                <main class="lg:col-span-3">
                    @if($articles->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                            @foreach($articles as $article)
                                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                                    <a href="{{ route('public.articles.show', $article->slug) }}">
                                        @if($article->featured_image)
                                            <img src="{{ asset('storage/'.$article->featured_image) }}" 
                                                 alt="{{ $article->title }}" 
                                                 class="w-full h-48 object-cover">
                                        @else
                                            <div class="w-full h-48 bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center">
                                                <i class="fas fa-newspaper text-white text-4xl"></i>
                                            </div>
                                        @endif
                                    </a>
                                    <div class="p-5">
                                        <div class="flex items-center justify-between mb-3">
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full
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
                                            <span class="text-xs text-gray-500">
                                                <i class="fas fa-eye mr-1"></i>{{ number_format($article->views) }}
                                            </span>
                                        </div>
                                        <a href="{{ route('public.articles.show', $article->slug) }}">
                                            <h2 class="text-lg font-bold text-gray-900 mb-2 hover:text-red-600 line-clamp-2">
                                                {{ $article->title }}
                                            </h2>
                                        </a>
                                        <p class="text-sm text-gray-600 mb-4 line-clamp-3">
                                            {{ $article->excerpt ?? strip_tags(Str::limit($article->content, 150)) }}
                                        </p>
                                        <div class="flex items-center justify-between text-xs text-gray-500">
                                            <span>
                                                <i class="fas fa-user mr-1"></i>{{ $article->author->name ?? 'Admin' }}
                                            </span>
                                            <span>
                                                <i class="fas fa-calendar mr-1"></i>{{ $article->created_at->format('d M Y') }}
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="mt-8">
                            {{ $articles->links() }}
                        </div>
                    @else
                        <div class="bg-white rounded-lg shadow-md p-12 text-center">
                            <i class="fas fa-search text-gray-300 text-6xl mb-4"></i>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Artikel Tidak Ditemukan</h3>
                            <p class="text-gray-600 mb-6">Maaf, tidak ada artikel yang sesuai dengan pencarian Anda.</p>
                            <a href="{{ route('public.articles.index') }}" class="inline-block px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                                Lihat Semua Artikel
                            </a>
                        </div>
                    @endif
                </main>
            </div>
        </div>
    </section>

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

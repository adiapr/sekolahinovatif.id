<nav id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300 bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <a href="/" class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-800 rounded-lg flex items-center justify-center shadow-lg">
                            {{-- <i class="fas fa-graduation-cap text-2xl text-white"></i> --}}
                            <img src="{{ asset('logo/SI_white.png') }}" alt="" class="h-8">
                        </div>
                        {{-- <img src="{{ asset('logo/SI_red.png') }}" alt="" class="h-10"> --}}
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">Sekolah <span class="text-red-600">Inovatif</span></h1>
                            <p class="text-xs text-gray-500">Platform Digitalisasi Sekolah</p>
                        </div>
                    </a>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="/#home" class="text-gray-700 hover:text-red-600 font-medium transition-colors">Beranda</a>
                        <a href="/#products" class="text-gray-700 hover:text-red-600 font-medium transition-colors">Produk</a>
                        <a href="/#features" class="text-gray-700 hover:text-red-600 font-medium transition-colors">Fitur</a>
                        <a href="{{ route('public.articles.index') }}" class="text-gray-700 hover:text-red-600 font-medium transition-colors {{ request()->routeIs('public.articles.*') ? 'text-red-600 underline' : '' }}">Artikel</a>
                        <a href="/#testimonials" class="text-gray-700 hover:text-red-600 font-medium transition-colors">Testimoni</a>
                        <a href="/#contact" class="text-gray-700 hover:text-red-600 font-medium transition-colors">Kontak</a>
                        
                        @auth
                            <!-- User Avatar -->
                            <a href="{{ route('school.dashboard') }}" class="flex items-center space-x-2 bg-gray-100 hover:bg-red-50 px-3 py-2 rounded-lg transition-all group">
                                <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-medium text-gray-900 group-hover:text-red-600 transition-colors">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-gray-500">Dashboard</p>
                                </div>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-red-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        @else
                            <!-- Demo Gratis Button -->
                            <a href="/register" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition-all shadow-lg hover:shadow-xl transform hover:scale-105">
                                Demo Gratis
                            </a>
                        @endauth
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-red-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
                <div class="px-4 py-6 space-y-4">
                    <a href="/#home" class="block text-gray-700 hover:text-red-600 font-medium transition-colors">Beranda</a>
                    <a href="/#products" class="block text-gray-700 hover:text-red-600 font-medium transition-colors">Produk</a>
                    <a href="/#features" class="block text-gray-700 hover:text-red-600 font-medium transition-colors">Fitur</a>
                    <a href="{{ route('public.articles.index') }}" class="block text-gray-700 hover:text-red-600 font-medium transition-colors">Artikel</a>
                    <a href="/#testimonials" class="block text-gray-700 hover:text-red-600 font-medium transition-colors">Testimoni</a>
                    <a href="/#contact" class="block text-gray-700 hover:text-red-600 font-medium transition-colors">Kontak</a>
                    
                    @auth
                        <!-- User Profile Mobile -->
                        <div class="border-t border-gray-200 pt-4 mt-4">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-semibold">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">{{ auth()->user()->name }}</p>
                                    <p class="text-sm text-gray-500">{{ auth()->user()->role }}</p>
                                </div>
                            </div>
                            <a href="{{ route('school.dashboard') }}" class="block w-full text-center bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition-all">
                                Dashboard
                            </a>
                        </div>
                    @else
                        <!-- Demo Gratis Mobile -->
                        <a href="/register" class="block w-full text-center bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition-all">
                            Demo Gratis
                        </a>
                    @endauth
                </div>
            </div>
        </nav>
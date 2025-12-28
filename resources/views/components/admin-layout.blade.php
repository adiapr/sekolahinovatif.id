<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin Panel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .dark-mode {
            background-color: #1a1a1a !important;
        }
        .dark-mode .bg-white {
            background-color: #2d2d2d !important;
        }
        .dark-mode .bg-gray-100 {
            background-color: #1a1a1a !important;
        }
        .dark-mode .bg-gray-50 {
            background-color: #252525 !important;
        }
        .dark-mode .text-gray-900 {
            color: #e5e5e5 !important;
        }
        .dark-mode .text-gray-800 {
            color: #d1d1d1 !important;
        }
        .dark-mode .text-gray-700 {
            color: #b5b5b5 !important;
        }
        .dark-mode .text-gray-600 {
            color: #9a9a9a !important;
        }
        .dark-mode .text-gray-500 {
            color: #808080 !important;
        }
        .dark-mode .border-gray-200 {
            border-color: #404040 !important;
        }
        .dark-mode .divide-gray-200 > * + * {
            border-color: #404040 !important;
        }
        .sidebar-collapsed {
            width: 5rem !important;
        }
        .sidebar-collapsed .sidebar-text {
            display: none;
        }
        .sidebar-collapsed .logo-full {
            display: none;
        }
        .sidebar-collapsed .logo-mini {
            display: block !important;
        }
        .logo-mini {
            display: none;
        }        
        @media (max-width: 1023px) {
            #sidebar {
                transform: translateX(-100%);
            }
            #sidebar.mobile-open {
                transform: translateX(0);
            }
            #mainContent {
                margin-left: 0 !important;
            }
        }    </style>
    @stack('scripts')
</head>
<body class="font-sans antialiased bg-gray-100 overflow-x-hidden" id="appBody">
    <div class="flex min-h-screen overflow-x-hidden" id="mainContainer">
        <!-- Mobile Overlay -->
        <div id="mobileOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden lg:hidden"></div>
        
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-900 text-white flex flex-col transition-all duration-300 fixed h-screen z-50 overflow-y-auto lg:translate-x-0" style="transition: transform 0.3s ease, width 0.3s ease;">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-800 flex items-center justify-center">
                <img src="{{ asset('logo/SI_horizontal_white.png') }}" alt="Logo" class="h-12 w-auto logo-full">
                <img src="{{ asset('logo/SI_white.png') }}" alt="Logo" class="h-10 w-auto logo-mini">
            </div>

            <!-- Admin Panel Section -->
            <nav class="flex-1 overflow-y-auto py-6">
                <div class="px-4 mb-4">
                    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider sidebar-text">Admin Panel</h3>
                </div>

                <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="sidebar-text">Admin Dashboard</span>
                </a>

                <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <span class="sidebar-text">Data Members</span>
                </a>

                <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span class="sidebar-text">Calon Member</span>
                </a>

                <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span class="sidebar-text">Data Pengunjung</span>
                </a>

                <a href="{{ route('articles.index') }}" class="flex items-center px-6 py-3 {{ request()->routeIs('articles.*') ? 'bg-red-600 text-white font-medium' : 'text-gray-300 hover:bg-red-600 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                    <span class="sidebar-text">Kelola Article</span>
                </a>

                <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="sidebar-text">Data Frontliner</span>
                </a>

                <!-- Reports Section -->
                <div class="px-4 mt-8 mb-4">
                    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider sidebar-text">Reports</h3>
                </div>

                <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span class="sidebar-text">Laporan Kunjungan</span>
                </a>

                <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    <span class="sidebar-text">Statistik</span>
                </a>
            </nav>

            <!-- Collapse Button -->
            <div class="p-4 border-t border-gray-800">
                <button onclick="toggleSidebar()" class="flex items-center justify-center text-gray-400 hover:text-white w-full transition-colors py-2 hover:bg-red-600 rounded-lg">
                    <svg id="collapseIcon" class="w-5 h-5 mr-2 sidebar-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/>
                    </svg>
                    <svg class="w-5 h-5 hidden" id="expandIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
                    </svg>
                    <span class="sidebar-text">Collapse</span>
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col w-full max-w-full h-screen" id="mainContent" style="margin-left: 0;">
            <!-- Top Header -->
            <header class="bg-white shadow-sm sticky top-0 z-40 w-full flex-shrink-0">
                <div class="flex items-center justify-between px-3 sm:px-4 lg:px-8 py-3 lg:py-4 w-full max-w-full">
                    <div class="flex items-center space-x-2 sm:space-x-4 flex-1 min-w-0 overflow-hidden">
                        <!-- Hamburger Menu Button -->
                        <button onclick="toggleSidebar()" class="flex-shrink-0 text-gray-700 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 rounded-lg p-1.5 sm:p-2 transition-all duration-200 hover:bg-red-50 border border-gray-300">
                            <svg id="hamburgerIcon" class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                        <h1 class="text-base sm:text-lg lg:text-2xl font-semibold text-gray-800 truncate">{{ $title ?? 'Admin Panel' }}</h1>
                    </div>

                    <div class="flex items-center space-x-1 sm:space-x-2 lg:space-x-4 flex-shrink-0">
                        <!-- Full Screen Toggle -->
                        <button onclick="toggleFullscreen()" class="hidden sm:flex text-gray-600 hover:text-gray-800 p-1.5 sm:p-2 hover:bg-gray-100 rounded-lg transition-colors" title="Fullscreen">
                            <svg id="fullscreenIcon" class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                            </svg>
                            <svg id="exitFullscreenIcon" class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9V4.5M9 9H4.5M9 9L3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5l5.25 5.25"/>
                            </svg>
                        </button>

                        <!-- Dark Mode Toggle -->
                        <button onclick="toggleDarkMode()" class="text-gray-600 hover:text-gray-800 p-1.5 sm:p-2 hover:bg-gray-100 rounded-lg transition-colors" title="Dark Mode">
                            <svg id="lightIcon" class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                            </svg>
                            <svg id="darkIcon" class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </button>

                        <!-- User Profile -->
                        <div class="flex items-center space-x-1.5 sm:space-x-2">
                            <div class="w-7 h-7 sm:w-8 sm:h-8 lg:w-10 lg:h-10 rounded-full bg-red-600 flex items-center justify-center text-white font-semibold text-xs sm:text-sm">
                                {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                            </div>
                            <div class="hidden sm:block">
                                <p class="text-xs sm:text-sm font-medium text-gray-700 truncate max-w-[100px] lg:max-w-none">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-500">{{ auth()->user()->role }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto bg-gray-100 p-3 sm:p-4 lg:p-8 w-full">
                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        // Check if mobile
        function isMobile() {
            return window.innerWidth < 1024;
        }

        // Sidebar Toggle
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const collapseIcon = document.getElementById('collapseIcon');
            const expandIcon = document.getElementById('expandIcon');
            const overlay = document.getElementById('mobileOverlay');
            
            if (isMobile()) {
                // Mobile behavior - slide in/out
                sidebar.classList.toggle('mobile-open');
                overlay.classList.toggle('hidden');
            } else {
                // Desktop behavior - collapse/expand
                sidebar.classList.toggle('sidebar-collapsed');
                
                if (sidebar.classList.contains('sidebar-collapsed')) {
                    collapseIcon.classList.add('hidden');
                    expandIcon.classList.remove('hidden');
                    mainContent.style.marginLeft = '5rem';
                    localStorage.setItem('sidebarCollapsed', 'true');
                } else {
                    collapseIcon.classList.remove('hidden');
                    expandIcon.classList.add('hidden');
                    mainContent.style.marginLeft = '16rem';
                    localStorage.setItem('sidebarCollapsed', 'false');
                }
            }
        }

        // Close sidebar when clicking overlay
        document.getElementById('mobileOverlay').addEventListener('click', function() {
            if (isMobile()) {
                toggleSidebar();
            }
        });

        // Dark Mode Toggle
        function toggleDarkMode() {
            const body = document.getElementById('appBody');
            const lightIcon = document.getElementById('lightIcon');
            const darkIcon = document.getElementById('darkIcon');
            
            body.classList.toggle('dark-mode');
            
            if (body.classList.contains('dark-mode')) {
                lightIcon.classList.add('hidden');
                darkIcon.classList.remove('hidden');
                localStorage.setItem('darkMode', 'enabled');
            } else {
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
                localStorage.setItem('darkMode', 'disabled');
            }
        }

        // Load preferences from localStorage
        window.addEventListener('DOMContentLoaded', function() {
            // Load sidebar collapsed state (desktop only)
            if (!isMobile()) {
                const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
                if (isCollapsed) {
                    const sidebar = document.getElementById('sidebar');
                    const mainContent = document.getElementById('mainContent');
                    const collapseIcon = document.getElementById('collapseIcon');
                    const expandIcon = document.getElementById('expandIcon');
                    
                    sidebar.classList.add('sidebar-collapsed');
                    mainContent.style.marginLeft = '5rem';
                    collapseIcon.classList.add('hidden');
                    expandIcon.classList.remove('hidden');
                } else {
                    // Default desktop: sidebar expanded
                    document.getElementById('mainContent').style.marginLeft = '16rem';
                }
            }
            
            // Load dark mode preference
            const darkMode = localStorage.getItem('darkMode');
            if (darkMode === 'enabled') {
                document.getElementById('appBody').classList.add('dark-mode');
                document.getElementById('lightIcon').classList.add('hidden');
                document.getElementById('darkIcon').classList.remove('hidden');
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const overlay = document.getElementById('mobileOverlay');
            
            if (isMobile()) {
                // Reset to mobile mode
                mainContent.style.marginLeft = '0';
                sidebar.classList.remove('sidebar-collapsed');
                if (!sidebar.classList.contains('mobile-open')) {
                    overlay.classList.add('hidden');
                }
            } else {
                // Reset to desktop mode
                overlay.classList.add('hidden');
                sidebar.classList.remove('mobile-open');
                
                const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
                if (isCollapsed) {
                    mainContent.style.marginLeft = '5rem';
                } else {
                    mainContent.style.marginLeft = '16rem';
                }
            }
        });

        // Fullscreen Toggle
        function toggleFullscreen() {
            const fullscreenIcon = document.getElementById('fullscreenIcon');
            const exitFullscreenIcon = document.getElementById('exitFullscreenIcon');
            
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen().then(() => {
                    fullscreenIcon.classList.add('hidden');
                    exitFullscreenIcon.classList.remove('hidden');
                });
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen().then(() => {
                        fullscreenIcon.classList.remove('hidden');
                        exitFullscreenIcon.classList.add('hidden');
                    });
                }
            }
        }

        // Handle fullscreen change events
        document.addEventListener('fullscreenchange', function() {
            const fullscreenIcon = document.getElementById('fullscreenIcon');
            const exitFullscreenIcon = document.getElementById('exitFullscreenIcon');
            
            if (!document.fullscreenElement) {
                fullscreenIcon.classList.remove('hidden');
                exitFullscreenIcon.classList.add('hidden');
            }
        });
    </script>
    @stack('styles')
</body>
</html>

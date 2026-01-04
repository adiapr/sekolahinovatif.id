<div class="px-4 mb-4">
                    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider sidebar-text">Admin Panel</h3>
                </div>
                <a href="{{ route('articles.index') }}" class="flex items-center px-6 py-3 {{ request()->routeIs('articles.*') ? 'bg-red-600 text-white font-medium' : 'text-gray-300 hover:bg-red-600 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                    <span class="sidebar-text">Kelola Article</span>
                </a>
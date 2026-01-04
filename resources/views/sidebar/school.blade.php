<div class="px-4 mb-4">
    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider sidebar-text">Admin Panel</h3>
</div>
<a href="{{ route('school.dashboard') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('school.dashboard') ? 'bg-red-600 text-white font-medium' : 'text-gray-300 hover:bg-red-600 hover:text-white' }} transition-colors">
    <i class="bi bi-grid"></i>
    <span class="sidebar-text">Dashboard Sekolah</span>
</a>
<div class="px-4 mb-4">
    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider sidebar-text">Dashboard Guru</h3>
</div>
<a href="{{ route('guru.dashboard') }}" class="flex items-center gap-3 px-6 py-3 {{ request()->routeIs('guru.dashboard') ? 'bg-red-600 text-white font-medium' : 'text-gray-300 hover:bg-red-600 hover:text-white' }} transition-colors">
    <i class="bi bi-grid"></i>
    <span class="sidebar-text">Dashboard</span>
</a>

<div class="px-4 mt-6 mb-4">
    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider sidebar-text">Pembelajaran</h3>
</div>

<a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
    <i class="bi bi-building"></i>
    <span class="sidebar-text">Kelas Saya</span>
</a>

<a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
    <i class="bi bi-people"></i>
    <span class="sidebar-text">Daftar Siswa</span>
</a>

<a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
    <i class="bi bi-clipboard"></i>
    <span class="sidebar-text">Nilai & Absensi</span>
</a>

<div class="px-4 mt-6 mb-4">
    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider sidebar-text">Profil</h3>
</div>

<a href="#" class="flex items-center gap-3 px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
    <i class="bi bi-person"></i>
    <span class="sidebar-text">Profil Saya</span>
</a>
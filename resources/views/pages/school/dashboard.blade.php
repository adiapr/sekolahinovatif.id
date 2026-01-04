<x-admin-layout>
    <div class="min-h-screen bg-gray-100">
        <div class="py-12">
            <div class="">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h1 class="text-3xl font-bold text-gray-900">Dashboard Sekolah</h1>
                        <p class="text-gray-600 mt-2">Selamat datang di panel administrasi sekolah</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <!-- School Info Card -->
                        <div class="bg-gradient-to-r from-red-500 to-red-600 rounded-lg p-6 text-white">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold">{{ auth()->user()->school_name }}</h3>
                                    <p class="text-red-100">{{ auth()->user()->position }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- User Info Card -->
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg p-6 text-white">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold">{{ auth()->user()->name }}</h3>
                                    <p class="text-blue-100">{{ auth()->user()->email }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Status Card -->
                        <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-lg p-6 text-white">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold">Status Aktif</h3>
                                    <p class="text-green-100">Sistem berjalan normal</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- School Details -->
                        <div class="bg-gray-50 rounded-lg p-6">
                            <h2 class="text-xl font-semibold text-gray-900 mb-4">Informasi Sekolah</h2>
                            <div class="space-y-3">
                                <div>
                                    <label class="text-sm font-medium text-gray-500">Nama Sekolah</label>
                                    <p class="text-gray-900">{{ auth()->user()->school_name }}</p>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-500">Alamat</label>
                                    <p class="text-gray-900">{{ auth()->user()->school_address }}</p>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-500">No WhatsApp</label>
                                    <p class="text-gray-900">{{ auth()->user()->whatsapp_number }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="bg-gray-50 rounded-lg p-6">
                            <h2 class="text-xl font-semibold text-gray-900 mb-4">Menu Cepat</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <a href="#" class="flex flex-col items-center p-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow">
                                    <svg class="h-8 w-8 text-red-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                    <span class="text-sm font-medium text-gray-900">Manajemen Siswa</span>
                                </a>
                                <a href="#" class="flex flex-col items-center p-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow">
                                    <svg class="h-8 w-8 text-blue-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                    </svg>
                                    <span class="text-sm font-medium text-gray-900">Kelas & Jadwal</span>
                                </a>
                                <a href="#" class="flex flex-col items-center p-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow">
                                    <svg class="h-8 w-8 text-green-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                                    <span class="text-sm font-medium text-gray-900">Laporan Nilai</span>
                                </a>
                                <a href="#" class="flex flex-col items-center p-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow">
                                    <svg class="h-8 w-8 text-purple-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span class="text-sm font-medium text-gray-900">Pengaturan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

<x-admin-layout>
    <div class="container mx-auto p-6">
        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg p-6 mb-6">
            <h1 class="text-2xl font-bold mb-2">Selamat datang, {{ $teacher->name }}!</h1>
            <p class="text-blue-100">Dashboard Guru - {{ $teacher->subject ?? 'Mata Pelajaran belum diset' }}</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                        <i class="bi bi-building text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total Kelas</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $classrooms->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                        <i class="bi bi-people text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total Siswa</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $totalStudents }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                        <i class="bi bi-book text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Mata Pelajaran</p>
                        <p class="text-lg font-bold text-gray-900">{{ $teacher->subject ?? 'Belum diset' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelas yang Diampu -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b">
                <h2 class="text-xl font-semibold text-gray-800">Kelas yang Diampu</h2>
            </div>
            <div class="p-6">
                @if($classrooms->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($classrooms as $classroom)
                            <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                                <h3 class="font-semibold text-gray-900 mb-2">{{ $classroom->name }}</h3>
                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <i class="bi bi-people mr-2"></i>
                                        <span>{{ $classroom->students->count() }} siswa</span>
                                    </div>
                                    @if($classroom->description)
                                        <div class="flex items-center">
                                            <i class="bi bi-info-circle mr-2"></i>
                                            <span>{{ Str::limit($classroom->description, 50) }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="mt-3 flex space-x-2">
                                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <i class="bi bi-building text-gray-400 text-6xl mb-4"></i>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada kelas yang diampu</h3>
                        <p class="text-gray-500">Hubungi administrator untuk penugasan kelas</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Informasi Profil -->
        <div class="mt-6 bg-white rounded-lg shadow">
            <div class="p-6 border-b">
                <h2 class="text-xl font-semibold text-gray-800">Informasi Profil</h2>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Nama Lengkap</label>
                        <p class="text-gray-900">{{ $teacher->name }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                        <p class="text-gray-900">{{ $teacher->email }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">NIP</label>
                        <p class="text-gray-900">{{ $teacher->nip ?? 'Belum diisi' }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">No. WhatsApp</label>
                        <p class="text-gray-900">{{ $teacher->whatsapp_number ?? 'Belum diisi' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
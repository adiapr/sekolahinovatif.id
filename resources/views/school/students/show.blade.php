<x-admin-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">{{ $student->name }}</h1>
                        <p class="text-gray-600 mt-1">{{ $student->classroom->name ?? 'Tidak ada kelas' }}</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('school.students.edit', $student) }}" 
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">
                            <i class="bi bi-pencil mr-2"></i>
                            Edit
                        </a>
                        <a href="{{ route('school.students.index') }}" 
                           class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">
                            <i class="bi bi-arrow-left mr-2"></i>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Informasi Personal -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Personal</h3>
                        <div class="space-y-3">
                            <div class="flex">
                                <span class="w-32 text-gray-600 font-medium">Nama Lengkap:</span>
                                <span class="text-gray-800">{{ $student->name }}</span>
                            </div>
                            
                            <div class="flex">
                                <span class="w-32 text-gray-600 font-medium">NIS:</span>
                                <span class="text-gray-800">{{ $student->nis ?? '-' }}</span>
                            </div>
                            
                            <div class="flex">
                                <span class="w-32 text-gray-600 font-medium">Kelas:</span>
                                <span class="text-gray-800">{{ $student->classroom->name ?? '-' }}</span>
                            </div>
                            
                            <div class="flex">
                                <span class="w-32 text-gray-600 font-medium">Jenis Kelamin:</span>
                                <span class="text-gray-800">
                                    @if($student->gender == 'male')
                                        Laki-laki
                                    @elseif($student->gender == 'female')
                                        Perempuan
                                    @else
                                        -
                                    @endif
                                </span>
                            </div>
                            
                            <div class="flex">
                                <span class="w-32 text-gray-600 font-medium">Tanggal Lahir:</span>
                                <span class="text-gray-800">
                                    {{ $student->birth_date ? $student->birth_date->format('d F Y') : '-' }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Kontak -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Kontak</h3>
                        <div class="space-y-3">
                            <div class="flex">
                                <span class="w-32 text-gray-600 font-medium">Email:</span>
                                <span class="text-gray-800">{{ $student->email ?? '-' }}</span>
                            </div>
                            
                            <div class="flex">
                                <span class="w-32 text-gray-600 font-medium">Telepon:</span>
                                <span class="text-gray-800">{{ $student->phone ?? '-' }}</span>
                            </div>
                            
                            <div class="flex items-start">
                                <span class="w-32 text-gray-600 font-medium">Alamat:</span>
                                <span class="text-gray-800 flex-1">{{ $student->address ?? '-' }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informasi Tambahan -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Akademik</h3>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <i class="bi bi-journal-bookmark text-blue-600 text-2xl mr-3"></i>
                                    <div>
                                        <p class="text-sm text-gray-600">Kelas Saat Ini</p>
                                        <p class="text-lg font-semibold text-blue-600">{{ $student->classroom->name ?? 'Belum ada kelas' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Status</h3>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <i class="bi bi-check-circle text-green-600 text-2xl mr-3"></i>
                                    <div>
                                        <p class="text-sm text-gray-600">Status Siswa</p>
                                        <p class="text-lg font-semibold text-green-600">Aktif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Riwayat -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Riwayat</h3>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex justify-between text-sm text-gray-600">
                            <span>Ditambahkan pada: {{ $student->created_at->format('d F Y, H:i') }}</span>
                            <span>Terakhir diperbarui: {{ $student->updated_at->format('d F Y, H:i') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
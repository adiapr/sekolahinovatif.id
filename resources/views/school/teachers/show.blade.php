<x-admin-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow">
            <div class="flex justify-between items-center p-6 border-b">
                <h1 class="text-2xl font-bold text-gray-800">Detail Guru</h1>
                <div class="flex space-x-2">
                    <a href="{{ route('school.teachers.edit', $teacher) }}" 
                       class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg flex items-center">
                        <i class="bi bi-pencil mr-2"></i>
                        Edit
                    </a>
                    <a href="{{ route('school.teachers.index') }}" 
                       class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg flex items-center">
                        <i class="bi bi-arrow-left mr-2"></i>
                        Kembali
                    </a>
                </div>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Informasi Pribadi -->
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="bi bi-person mr-2"></i>
                            Informasi Pribadi
                        </h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600">Nama Lengkap</label>
                                <p class="text-gray-900 font-medium">{{ $teacher->name }}</p>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-600">Email</label>
                                <p class="text-gray-900">{{ $teacher->email }}</p>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-600">NIP</label>
                                <p class="text-gray-900">{{ $teacher->nip ?? 'Belum diisi' }}</p>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-600">No. WhatsApp</label>
                                <p class="text-gray-900">{{ $teacher->whatsapp_number ?? 'Belum diisi' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Akademik -->
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="bi bi-book mr-2"></i>
                            Informasi Akademik
                        </h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600">Mata Pelajaran</label>
                                <p class="text-gray-900 font-medium">{{ $teacher->subject ?? 'Belum diisi' }}</p>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-600">Status</label>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Aktif
                                </span>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-600">Bergabung Sejak</label>
                                <p class="text-gray-900">{{ $teacher->created_at->format('d F Y') }}</p>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-600">Terakhir Diperbarui</label>
                                <p class="text-gray-900">{{ $teacher->updated_at->format('d F Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kelas yang Diampu -->
                <div class="mt-6 bg-gray-50 p-6 rounded-lg">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="bi bi-building mr-2"></i>
                        Kelas yang Diampu
                    </h2>
                    
                    @if($teacher->classRooms && $teacher->classRooms->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($teacher->classRooms as $classroom)
                                <div class="bg-white p-4 rounded-lg border">
                                    <h3 class="font-medium text-gray-900">{{ $classroom->name }}</h3>
                                    <p class="text-sm text-gray-600">{{ $classroom->students_count ?? 0 }} siswa</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500 text-center py-8">
                            Belum ada kelas yang diampu
                        </p>
                    @endif
                </div>

                <!-- Actions -->
                <div class="mt-6 pt-6 border-t flex justify-between">
                    <form action="{{ route('school.teachers.destroy', $teacher) }}" 
                          method="POST" 
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus guru ini? Data yang terhapus tidak dapat dikembalikan.')"
                          class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg flex items-center">
                            <i class="bi bi-trash mr-2"></i>
                            Hapus Guru
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
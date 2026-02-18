<x-admin-layout>
    <div class="container mx-auto p-6">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow mb-6">
            <div class="p-6 border-b">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">{{ $classroom->name }}</h1>
                        <p class="text-gray-600 mt-1">Detail kelas dan daftar siswa</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('school.classrooms.edit', $classroom) }}" 
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">
                            <i class="bi bi-pencil mr-2"></i>
                            Edit
                        </a>
                        <a href="{{ route('school.classrooms.index') }}" 
                           class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">
                            <i class="bi bi-arrow-left mr-2"></i>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="flex items-center">
                            <i class="bi bi-people text-blue-600 text-2xl mr-3"></i>
                            <div>
                                <p class="text-sm text-gray-600">Total Siswa</p>
                                <p class="text-2xl font-bold text-blue-600">{{ $students->count() }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-green-50 p-4 rounded-lg">
                        <div class="flex items-center">
                            <i class="bi bi-bookmark text-green-600 text-2xl mr-3"></i>
                            <div>
                                <p class="text-sm text-gray-600">Kapasitas</p>
                                <p class="text-2xl font-bold text-green-600">{{ $classroom->capacity ?? 'Tidak ada batas' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-purple-50 p-4 rounded-lg">
                        <div class="flex items-center">
                            <i class="bi bi-calendar text-purple-600 text-2xl mr-3"></i>
                            <div>
                                <p class="text-sm text-gray-600">Dibuat</p>
                                <p class="text-lg font-semibold text-purple-600">{{ $classroom->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                @if($classroom->major || $classroom->academic_year)
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Informasi Kelas</h3>
                        <div class="bg-gray-50 p-4 rounded-lg space-y-2">
                            @if($classroom->major)
                                <p class="text-gray-600"><span class="font-medium">Jurusan:</span> {{ $classroom->major }}</p>
                            @endif
                            <p class="text-gray-600"><span class="font-medium">Tingkat:</span> {{ $classroom->grade }}</p>
                            <p class="text-gray-600"><span class="font-medium">Tahun Akademik:</span> {{ $classroom->academic_year }}</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Daftar Siswa -->
        <div class="bg-white rounded-lg shadow">
            <div class="flex justify-between items-center p-6 border-b">
                <h2 class="text-xl font-semibold text-gray-800">Daftar Siswa</h2>
                <a href="{{ route('school.students.create', ['classroom_id' => $classroom->id]) }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                    <i class="bi bi-plus-lg mr-2"></i>
                    Tambah Siswa
                </a>
            </div>

            <div class="p-6">
                @if($students->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Nama</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">NIS</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Email</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Telepon</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach($students as $student)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $student->name }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-600">{{ $student->student_number ?? '-' }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-600">{{ $student->email ?? '-' }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-600">{{ $student->phone ?? '-' }}</td>
                                        <td class="px-4 py-3 text-sm">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('school.students.show', $student) }}" 
                                                   class="text-blue-600 hover:text-blue-800">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a href="{{ route('school.students.edit', $student) }}" 
                                                   class="text-yellow-600 hover:text-yellow-800">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-8">
                        <i class="bi bi-person-plus text-gray-400 text-6xl mb-4"></i>
                        <p class="text-gray-500 text-lg">Belum ada siswa di kelas ini</p>
                        <p class="text-gray-400 text-sm mb-4">Mulai dengan menambah siswa pertama</p>
                        <a href="{{ route('school.students.create', ['classroom_id' => $classroom->id]) }}" 
                           class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg inline-flex items-center">
                            <i class="bi bi-plus-lg mr-2"></i>
                            Tambah Siswa
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
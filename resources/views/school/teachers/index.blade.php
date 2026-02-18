<x-admin-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow">
            <div class="flex justify-between items-center p-6 border-b">
                <h1 class="text-2xl font-bold text-gray-800">Daftar Guru</h1>
                <a href="{{ route('school.teachers.create') }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                    <i class="bi bi-plus-lg mr-2"></i>
                    Tambah Guru
                </a>
            </div>

            <div class="p-6">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                @if($teachers->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Nama</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Email</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Mata Pelajaran</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">NIP</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">No. WhatsApp</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach($teachers as $teacher)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $teacher->name }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-600">{{ $teacher->email }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-600">{{ $teacher->subject ?? '-' }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-600">{{ $teacher->nip ?? '-' }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-600">{{ $teacher->whatsapp_number ?? '-' }}</td>
                                        <td class="px-4 py-3 text-sm">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('school.teachers.show', $teacher) }}" 
                                                   class="text-blue-600 hover:text-blue-800">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a href="{{ route('school.teachers.edit', $teacher) }}" 
                                                   class="text-green-600 hover:text-green-800">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <form action="{{ route('school.teachers.destroy', $teacher) }}" 
                                                      method="POST" class="inline"
                                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus guru ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        {{ $teachers->links() }}
                    </div>
                @else
                    <div class="text-center py-12">
                        <i class="bi bi-person-workspace text-gray-400 text-6xl mb-4"></i>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada data guru</h3>
                        <p class="text-gray-500 mb-4">Mulai dengan menambahkan guru pertama</p>
                        <a href="{{ route('school.teachers.create') }}" 
                           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg inline-flex items-center">
                            <i class="bi bi-plus-lg mr-2"></i>
                            Tambah Guru
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
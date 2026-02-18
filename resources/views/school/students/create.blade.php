<x-admin-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold text-gray-800">Tambah Siswa Baru</h1>
                    <a href="{{ route('school.students.index') }}" 
                       class="text-gray-600 hover:text-gray-800">
                        <i class="bi bi-arrow-left text-xl"></i>
                    </a>
                </div>
            </div>

            <div class="p-6">
                <x-student-form 
                    :action="route('school.students.store')" 
                    :classrooms="$classrooms" />
            </div>
        </div>
    </div>
</x-admin-layout>
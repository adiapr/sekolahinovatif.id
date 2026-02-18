<x-admin-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold text-gray-800">Edit Kelas: {{ $classroom->name }}</h1>
                    <a href="{{ route('school.classrooms.index') }}" 
                       class="text-gray-600 hover:text-gray-800">
                        <i class="bi bi-arrow-left text-xl"></i>
                    </a>
                </div>
            </div>

            <div class="p-6">
                <x-classroom-form 
                    :classroom="$classroom" 
                    :action="route('school.classrooms.update', $classroom)" 
                    method="PUT" />
            </div>
        </div>
    </div>
</x-admin-layout>
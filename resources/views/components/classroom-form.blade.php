@props(['classroom' => null, 'action', 'method' => 'POST'])

<form action="{{ $action }}" method="POST">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Nama Kelas -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                Nama Kelas <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   id="name" 
                   name="name" 
                   value="{{ old('name', $classroom->name ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror"
                   placeholder="Contoh: 10 IPA 1"
                   required>
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tingkat -->
        <div>
            <label for="grade" class="block text-sm font-medium text-gray-700 mb-2">
                Tingkat <span class="text-red-500">*</span>
            </label>
            <select id="grade" 
                    name="grade" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('grade') border-red-500 @enderror"
                    required>
                <option value="">Pilih Tingkat</option>
                @for($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}" {{ old('grade', $classroom->grade ?? '') == $i ? 'selected' : '' }}>
                        Kelas {{ $i }}
                    </option>
                @endfor
            </select>
            @error('grade')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Jurusan -->
        <div>
            <label for="major" class="block text-sm font-medium text-gray-700 mb-2">
                Jurusan
            </label>
            <input type="text" 
                   id="major" 
                   name="major" 
                   value="{{ old('major', $classroom->major ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('major') border-red-500 @enderror"
                   placeholder="Contoh: IPA, IPS, Bahasa, Teknik Informatika, dll">
            @error('major')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Kapasitas -->
        <div>
            <label for="capacity" class="block text-sm font-medium text-gray-700 mb-2">
                Kapasitas
            </label>
            <input type="number" 
                   id="capacity" 
                   name="capacity" 
                   value="{{ old('capacity', $classroom->capacity ?? 30) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('capacity') border-red-500 @enderror"
                   placeholder="Maksimal siswa"
                   min="1">
            @error('capacity')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Tahun Akademik -->
    <div class="mt-6">
        <label for="academic_year" class="block text-sm font-medium text-gray-700 mb-2">
            Tahun Akademik <span class="text-red-500">*</span>
        </label>
        <input type="text" 
               id="academic_year" 
               name="academic_year" 
               value="{{ old('academic_year', $classroom->academic_year ?? '2025/2026') }}"
               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('academic_year') border-red-500 @enderror"
               placeholder="Contoh: 2025/2026"
               required>
        @error('academic_year')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Tombol Submit -->
    <div class="mt-8 flex justify-end space-x-4">
        <a href="{{ route('school.classrooms.index') }}" 
           class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 focus:ring-2 focus:ring-gray-500">
            Batal
        </a>
        <button type="submit" 
                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
            <i class="bi bi-check-lg mr-2"></i>
            {{ $classroom ? 'Perbarui' : 'Simpan' }}
        </button>
    </div>
</form>
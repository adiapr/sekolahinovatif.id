@props(['student' => null, 'action', 'method' => 'POST', 'classrooms' => []])

<form action="{{ $action }}" method="POST">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Nama -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                Nama Lengkap <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   id="name" 
                   name="name" 
                   value="{{ old('name', $student->name ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror"
                   placeholder="Nama lengkap siswa"
                   required>
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- NIS -->
        <div>
            <label for="nis" class="block text-sm font-medium text-gray-700 mb-2">
                NIS (Nomor Induk Siswa) <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   id="nis" 
                   name="nis" 
                   value="{{ old('nis', $student->nis ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('nis') border-red-500 @enderror"
                   placeholder="Nomor Induk Siswa"
                   required>
            @error('nis')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- NISN -->
        <div>
            <label for="nisn" class="block text-sm font-medium text-gray-700 mb-2">
                NISN (Nomor Induk Siswa Nasional)
            </label>
            <input type="text" 
                   id="nisn" 
                   name="nisn" 
                   value="{{ old('nisn', $student->nisn ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('nisn') border-red-500 @enderror"
                   placeholder="Nomor Induk Siswa Nasional">
            @error('nisn')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Kelas -->
        <div>
            <label for="class_room_id" class="block text-sm font-medium text-gray-700 mb-2">
                Kelas <span class="text-red-500">*</span>
            </label>
            <select id="class_room_id" 
                    name="class_room_id" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('class_room_id') border-red-500 @enderror"
                    required>
                <option value="">Pilih Kelas</option>
                @foreach($classrooms as $classroom)
                    <option value="{{ $classroom->id }}" {{ old('class_room_id', $student->class_room_id ?? '') == $classroom->id ? 'selected' : '' }}>
                        {{ $classroom->name }}
                    </option>
                @endforeach
            </select>
            @error('class_room_id')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Jenis Kelamin -->
        <div>
            <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">
                Jenis Kelamin
            </label>
            <select id="gender" 
                    name="gender" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('gender') border-red-500 @enderror">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" {{ old('gender', $student->gender ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('gender', $student->gender ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('gender')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tanggal Lahir -->
        <div>
            <label for="birth_date" class="block text-sm font-medium text-gray-700 mb-2">
                Tanggal Lahir
            </label>
            <input type="date" 
                   id="birth_date" 
                   name="birth_date" 
                   value="{{ old('birth_date', $student && $student->birth_date ? $student->birth_date->format('Y-m-d') : '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('birth_date') border-red-500 @enderror">
            @error('birth_date')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tempat Lahir -->
        <div>
            <label for="birth_place" class="block text-sm font-medium text-gray-700 mb-2">
                Tempat Lahir
            </label>
            <input type="text" 
                   id="birth_place" 
                   name="birth_place" 
                   value="{{ old('birth_place', $student->birth_place ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('birth_place') border-red-500 @enderror"
                   placeholder="Tempat lahir siswa">
            @error('birth_place')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                Email
            </label>
            <input type="email" 
                   id="email" 
                   name="email" 
                   value="{{ old('email', $student->email ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror"
                   placeholder="email@domain.com">
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Telepon -->
        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                Nomor Telepon
            </label>
            <input type="text" 
                   id="phone" 
                   name="phone" 
                   value="{{ old('phone', $student->phone ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('phone') border-red-500 @enderror"
                   placeholder="08xxxxxxxxxx">
            @error('phone')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Alamat -->
    <div class="mt-6">
        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
            Alamat Lengkap
        </label>
        <textarea id="address" 
                  name="address" 
                  rows="3"
                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('address') border-red-500 @enderror"
                  placeholder="Alamat lengkap siswa">{{ old('address', $student->address ?? '') }}</textarea>
        @error('address')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Data Orang Tua -->
    <div class="mt-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Data Orang Tua</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Nama Orang Tua -->
            <div>
                <label for="parent_name" class="block text-sm font-medium text-gray-700 mb-2">
                    Nama Orang Tua
                </label>
                <input type="text" 
                       id="parent_name" 
                       name="parent_name" 
                       value="{{ old('parent_name', $student->parent_name ?? '') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('parent_name') border-red-500 @enderror"
                       placeholder="Nama ayah/ibu">
                @error('parent_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Telepon Orang Tua -->
            <div>
                <label for="parent_phone" class="block text-sm font-medium text-gray-700 mb-2">
                    Telepon Orang Tua
                </label>
                <input type="text" 
                       id="parent_phone" 
                       name="parent_phone" 
                       value="{{ old('parent_phone', $student->parent_phone ?? '') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('parent_phone') border-red-500 @enderror"
                       placeholder="08xxxxxxxxxx">
                @error('parent_phone')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Tahun Masuk -->
    <div class="mt-6">
        <label for="entry_year" class="block text-sm font-medium text-gray-700 mb-2">
            Tahun Masuk
        </label>
        <input type="number" 
               id="entry_year" 
               name="entry_year" 
               value="{{ old('entry_year', $student->entry_year ?? date('Y')) }}"
               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('entry_year') border-red-500 @enderror"
               placeholder="Tahun masuk sekolah"
               min="2000"
               max="{{ date('Y') + 1 }}">
        @error('entry_year')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Tombol Submit -->
    <div class="mt-8 flex justify-end space-x-4">
        <a href="{{ route('school.students.index') }}" 
           class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 focus:ring-2 focus:ring-gray-500">
            Batal
        </a>
        <button type="submit" 
                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
            <i class="bi bi-check-lg mr-2"></i>
            {{ $student ? 'Perbarui' : 'Simpan' }}
        </button>
    </div>
</form>
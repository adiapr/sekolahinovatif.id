<div class="space-y-6">
    <!-- Informasi Dasar -->
    <div class="bg-white p-6 rounded-lg shadow-sm border">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Dasar</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Nama Lengkap -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                    Nama Lengkap <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       id="name" 
                       name="name" 
                       value="{{ old('name', $student->name ?? '') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('name') border-red-500 @enderror"
                       placeholder="Masukkan nama lengkap siswa"
                       required>
                @error('name')
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
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('class_room_id') border-red-500 @enderror"
                        required>
                    <option value="">Pilih Kelas</option>
                    @foreach($classRooms as $classRoom)
                        <option value="{{ $classRoom->id }}" 
                                {{ old('class_room_id', $student->class_room_id ?? '') == $classRoom->id ? 'selected' : '' }}>
                            {{ $classRoom->name }} ({{ $classRoom->academic_year }})
                        </option>
                    @endforeach
                </select>
                @error('class_room_id')
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
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('nis') border-red-500 @enderror"
                       placeholder="Contoh: 12345"
                       required>
                @error('nis')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- NISN -->
            <div>
                <label for="nisn" class="block text-sm font-medium text-gray-700 mb-2">
                    NISN (Nomor Induk Siswa Nasional) <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       id="nisn" 
                       name="nisn" 
                       value="{{ old('nisn', $student->nisn ?? '') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('nisn') border-red-500 @enderror"
                       placeholder="Contoh: 1234567890"
                       required>
                @error('nisn')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Jenis Kelamin -->
            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">
                    Jenis Kelamin <span class="text-red-500">*</span>
                </label>
                <select id="gender" 
                        name="gender" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('gender') border-red-500 @enderror"
                        required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" {{ old('gender', $student->gender ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('gender', $student->gender ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('gender')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tahun Masuk -->
            <div>
                <label for="entry_year" class="block text-sm font-medium text-gray-700 mb-2">
                    Tahun Masuk <span class="text-red-500">*</span>
                </label>
                <input type="number" 
                       id="entry_year" 
                       name="entry_year" 
                       value="{{ old('entry_year', $student->entry_year ?? date('Y')) }}"
                       min="2000" 
                       max="{{ date('Y') + 1 }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('entry_year') border-red-500 @enderror"
                       placeholder="{{ date('Y') }}"
                       required>
                @error('entry_year')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Informasi Personal -->
    <div class="bg-white p-6 rounded-lg shadow-sm border">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Personal</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Tempat Lahir -->
            <div>
                <label for="birth_place" class="block text-sm font-medium text-gray-700 mb-2">
                    Tempat Lahir
                </label>
                <input type="text" 
                       id="birth_place" 
                       name="birth_place" 
                       value="{{ old('birth_place', $student->birth_place ?? '') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('birth_place') border-red-500 @enderror"
                       placeholder="Contoh: Jakarta">
                @error('birth_place')
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
                       value="{{ old('birth_date', $student->birth_date ? $student->birth_date->format('Y-m-d') : '') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('birth_date') border-red-500 @enderror">
                @error('birth_date')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Alamat -->
            <div class="md:col-span-2">
                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                    Alamat
                </label>
                <textarea id="address" 
                          name="address" 
                          rows="3"
                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('address') border-red-500 @enderror resize-none"
                          placeholder="Masukkan alamat lengkap">{{ old('address', $student->address ?? '') }}</textarea>
                @error('address')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- No. Telepon -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                    No. Telepon Siswa
                </label>
                <input type="text" 
                       id="phone" 
                       name="phone" 
                       value="{{ old('phone', $student->phone ?? '') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('phone') border-red-500 @enderror"
                       placeholder="Contoh: 08123456789">
                @error('phone')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email Siswa
                </label>
                <input type="email" 
                       id="email" 
                       name="email" 
                       value="{{ old('email', $student->email ?? '') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('email') border-red-500 @enderror"
                       placeholder="contoh@email.com">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Informasi Orang Tua -->
    <div class="bg-white p-6 rounded-lg shadow-sm border">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Orang Tua/Wali</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Nama Orang Tua -->
            <div>
                <label for="parent_name" class="block text-sm font-medium text-gray-700 mb-2">
                    Nama Orang Tua/Wali
                </label>
                <input type="text" 
                       id="parent_name" 
                       name="parent_name" 
                       value="{{ old('parent_name', $student->parent_name ?? '') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('parent_name') border-red-500 @enderror"
                       placeholder="Nama lengkap orang tua/wali">
                @error('parent_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- No. Telepon Orang Tua -->
            <div>
                <label for="parent_phone" class="block text-sm font-medium text-gray-700 mb-2">
                    No. Telepon Orang Tua/Wali
                </label>
                <input type="text" 
                       id="parent_phone" 
                       name="parent_phone" 
                       value="{{ old('parent_phone', $student->parent_phone ?? '') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent @error('parent_phone') border-red-500 @enderror"
                       placeholder="Contoh: 08123456789">
                @error('parent_phone')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Form Actions -->
    <div class="flex justify-end space-x-3 pt-6">
        <a href="{{ route('school.students.index') }}" 
           class="px-4 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
            <i class="bi bi-arrow-left mr-2"></i>Batal
        </a>
        <button type="submit" 
                class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors">
            <i class="bi bi-check-circle mr-2"></i>{{ isset($student) ? 'Update' : 'Simpan' }}
        </button>
    </div>
</div>
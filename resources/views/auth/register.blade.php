<x-app-layout>
    <!-- Background with Pattern -->
    <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-black mt-20">
        <!-- Decorative Elements -->
        {{-- <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
            <div class="absolute top-20 left-10 w-72 h-72 bg-red-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-red-800 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse delay-700"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-gray-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
        </div> --}}

        <!-- Register Card Container -->
        <div class="relative z-10 w-full max-w-6xl mx-auto grid md:grid-cols-2 gap-0 bg-white shadow-2xl overflow-hidden min-h-screen md:min-h-0">
            
            <!-- Left Side - Branding -->
            <div class="hidden md:block bg-gradient-to-br from-red-600 via-red-700 to-red-900 text-white relative">
                <!-- Pattern Background -->
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>

                <!-- Sticky Content -->
                <div class="sticky top-0 h-screen flex flex-col justify-center items-center p-12">
                    <div class="relative z-10 text-center max-w-sm mx-auto">
                        <div class="mb-8 flex justify-center">
                            <div class="w-24 h-24 bg-white rounded-2xl flex items-center justify-center shadow-2xl transform hover:scale-110 transition-transform duration-300">
                                <img src="{{ asset('logo/SI_red.png') }}" alt="Logo" class="h-16 w-16">
                            </div>
                        </div>
                        
                        <h1 class="text-4xl font-bold mb-4">
                            Bergabunglah dengan <span class="text-gray-100">Kami</span>
                        </h1>
                        <p class="text-red-100 text-lg mb-8 font-light">
                            Mulai perjalanan digitalisasi sekolah Anda
                        </p>
    
                        <!-- Benefits List -->
                        <div class="space-y-4 text-left max-w-sm mx-auto">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mt-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white">Gratis 30 Hari</h3>
                                    <p class="text-sm text-red-100 opacity-90">Trial penuh tanpa biaya di muka</p>
                                </div>
                            </div>
    
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mt-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white">Setup Mudah</h3>
                                    <p class="text-sm text-red-100 opacity-90">Siap digunakan dalam 5 menit</p>
                                </div>
                            </div>
    
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mt-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white">Support 24/7</h3>
                                    <p class="text-sm text-red-100 opacity-90">Tim siap membantu kapan saja</p>
                                </div>
                            </div>
    
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mt-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white">Update Berkala</h3>
                                    <p class="text-sm text-red-100 opacity-90">Fitur baru setiap bulan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Register Form -->
            <div class="bg-white min-h-screen md:min-h-0 md:max-h-screen md:overflow-y-auto">
                <div class="p-8 md:p-12">
                <!-- Mobile Logo -->
                <div class="md:hidden mb-8 flex justify-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-600 to-red-800 rounded-2xl flex items-center justify-center shadow-lg">
                        <img src="{{ asset('logo/SI_white.png') }}" alt="Logo" class="h-12 w-12">
                    </div>
                </div>

                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">
                        Buat Akun Baru 🚀
                    </h2>
                    <p class="text-gray-600">
                        Daftar sekarang dan dapatkan trial gratis 30 hari
                    </p>
                </div>

                <!-- Register Form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Lengkap
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <input id="name" 
                                   type="text" 
                                   name="name" 
                                   value="{{ old('name') }}"
                                   required 
                                   autofocus 
                                   autocomplete="name"
                                   placeholder="Masukkan nama lengkap"
                                   class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200 @error('name') border-red-500 @enderror">
                        </div>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- School Name -->
                    <div>
                        <label for="school_name" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Sekolah
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <input id="school_name" 
                                   type="text" 
                                   name="school_name" 
                                   value="{{ old('school_name') }}"
                                   required 
                                   autocomplete="organization"
                                   placeholder="Masukkan nama sekolah"
                                   class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200 @error('school_name') border-red-500 @enderror">
                        </div>
                        @error('school_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Position -->
                    <div>
                        <label for="position" class="block text-sm font-semibold text-gray-700 mb-2">
                            Jabatan
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 002 2V8a2 2 0 00-2-2zm-8 0V8a2 2 0 00-2 2v6.5A23.93 23.93 0 0112 17c3.183 0 6.22.62 9 1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2"/>
                                </svg>
                            </div>
                            <input id="position" 
                                   type="text" 
                                   name="position" 
                                   value="{{ old('position') }}"
                                   required 
                                   autocomplete="organization-title"
                                   placeholder="Kepala Sekolah, Wakil Kepala Sekolah, dll"
                                   class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200 @error('position') border-red-500 @enderror">
                        </div>
                        @error('position')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- WhatsApp Number -->
                    <div>
                        <label for="whatsapp_number" class="block text-sm font-semibold text-gray-700 mb-2">
                            No WhatsApp
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <input id="whatsapp_number" 
                                   type="tel" 
                                   name="whatsapp_number" 
                                   value="{{ old('whatsapp_number') }}"
                                   required 
                                   autocomplete="tel"
                                   placeholder="08xxxxxxxxxx"
                                   class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200 @error('whatsapp_number') border-red-500 @enderror">
                        </div>
                        @error('whatsapp_number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- School Address -->
                    <div>
                        <label for="school_address" class="block text-sm font-semibold text-gray-700 mb-2">
                            Alamat Lengkap Sekolah
                        </label>
                        <div class="relative">
                            <div class="absolute top-3 left-4 flex items-start pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <textarea id="school_address" 
                                      name="school_address" 
                                      required 
                                      rows="3"
                                      placeholder="Jl. Nama Jalan No. XX, Kelurahan/Desa, Kecamatan, Kabupaten/Kota, Provinsi, Kode Pos"
                                      class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200 @error('school_address') border-red-500 @enderror resize-none">{{ old('school_address') }}</textarea>
                        </div>
                        @error('school_address')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                </svg>
                            </div>
                            <input id="email" 
                                   type="email" 
                                   name="email" 
                                   value="{{ old('email') }}"
                                   required 
                                   autocomplete="username"
                                   placeholder="nama@sekolah.com"
                                   class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200 @error('email') border-red-500 @enderror">
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <input id="password" 
                                   type="password" 
                                   name="password" 
                                   required 
                                   autocomplete="new-password"
                                   placeholder="Minimal 8 karakter"
                                   class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200 @error('password') border-red-500 @enderror">
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">
                            Konfirmasi Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <input id="password_confirmation" 
                                   type="password" 
                                   name="password_confirmation" 
                                   required 
                                   autocomplete="new-password"
                                   placeholder="Ulangi password"
                                   class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200">
                        </div>
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="flex items-start">
                        <div class="flex items-center h-5 mt-1">
                            <input id="terms" 
                                   type="checkbox" 
                                   required
                                   class="rounded border-gray-300 text-red-600 shadow-sm focus:ring-red-500 focus:ring-2">
                        </div>
                        <label for="terms" class="ml-3 text-sm text-gray-600">
                            Saya setuju dengan <a href="#" class="text-red-600 hover:text-red-700 font-semibold">Syarat & Ketentuan</a> dan <a href="#" class="text-red-600 hover:text-red-700 font-semibold">Kebijakan Privasi</a>
                        </label>
                    </div>

                    <!-- Register Button -->
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3.5 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-[1.02] transition-all duration-200 flex items-center justify-center space-x-2">
                        <span>Daftarkan Sekolah</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>

                    <!-- Divider -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-white text-gray-500">atau</span>
                        </div>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            Sudah punya akun? 
                            <a href="{{ route('login') }}" 
                               class="text-red-600 hover:text-red-700 font-semibold transition-colors">
                                Login di sini
                            </a>
                        </p>
                    </div>

                    <!-- Back to Home -->
                    <div class="text-center pt-4 border-t border-gray-200">
                        <a href="{{ url('/') }}" 
                           class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Kembali ke Beranda
                        </a>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
<!-- Hero Section with Slider -->
        <section id="home" class="relative pt-20 overflow-hidden">
            <!-- Slider Container -->
            <div class="slider-container relative min-h-screen">
                <!-- Slide 1 -->
                <div class="slide active absolute inset-0 w-full h-full">
                    <div class="hero-gradient w-full h-full relative">
                        <div class="absolute inset-0 bg-black opacity-20"></div>
                        <div class="absolute inset-0 bg-gradient-to-br from-red-900/50 via-transparent to-gray-900/50"></div>
                        
                        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center py-20">
                            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center w-full">
                                <div class="text-white space-y-4 md:space-y-6 animate-fadeInUp">
                                    <div class="inline-block bg-white/10 backdrop-blur-sm px-3 py-1.5 md:px-4 md:py-2 rounded-full border border-white/20">
                                        <span class="text-xs md:text-sm font-semibold">🚀 Platform #1 untuk Sekolah Modern</span>
                                    </div>
                                    <h1 class="text-3xl md:text-5xl  font-bold leading-tight">
                                        Transformasi Digital untuk <span class="text-yellow-300">Sekolah Masa Depan</span>
                                    </h1>
                                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-100 leading-relaxed">
                                        Kelola seluruh administrasi sekolah dengan mudah, efisien, dan modern dalam satu platform terpadu
                                    </p>
                                    <div class="flex flex-col sm:flex-row gap-3 md:gap-4 pt-2 md:pt-4">
                                        <a href="#" class="bg-white text-red-600 hover:bg-gray-100 px-6 md:px-8 py-3 md:py-4 rounded-lg font-bold text-base md:text-lg transition-all shadow-2xl hover:shadow-xl transform hover:scale-105 text-center">
                                            <i class="fas fa-rocket mr-2"></i> Mulai Sekarang
                                        </a>
                                        <a href="#" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-red-600 px-6 md:px-8 py-3 md:py-4 rounded-lg font-bold text-base md:text-lg transition-all text-center">
                                            <i class="fas fa-play-circle mr-2"></i> Lihat Demo
                                        </a>
                                    </div>
                                    <div class="flex flex-wrap items-center gap-4 sm:gap-6 md:gap-8 pt-4 md:pt-8">
                                        <div class="text-center">
                                            <div class="text-2xl md:text-3xl font-bold">500+</div>
                                            <div class="text-xs md:text-sm text-gray-300">Sekolah</div>
                                        </div>
                                        <div class="w-px h-10 md:h-12 bg-white/20"></div>
                                        <div class="text-center">
                                            <div class="text-2xl md:text-3xl font-bold">50K+</div>
                                            <div class="text-xs md:text-sm text-gray-300">Pengguna</div>
                                        </div>
                                        <div class="w-px h-10 md:h-12 bg-white/20"></div>
                                        <div class="text-center">
                                            <div class="text-2xl md:text-3xl font-bold">99.9%</div>
                                            <div class="text-xs md:text-sm text-gray-300">Puas</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="hidden md:block animate-slideIn">
                                    <div class="relative">
                                        <div class="absolute -inset-4 bg-gradient-to-r from-yellow-400 to-red-600 rounded-3xl blur-2xl opacity-30 animate-pulse"></div>
                                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=800&h=600&fit=crop" alt="Digital School" class="relative rounded-3xl shadow-2xl border-4 border-white/20">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000">
                    <div class="bg-gradient-to-br from-gray-900 via-gray-800 to-red-900 w-full h-full relative">
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                        
                        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center py-20">
                            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center w-full">
                                <div class="hidden md:block">
                                    <div class="relative">
                                        <div class="absolute -inset-4 bg-gradient-to-r from-red-600 to-yellow-400 rounded-3xl blur-2xl opacity-30 animate-pulse"></div>
                                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop" alt="Team Work" class="relative rounded-3xl shadow-2xl border-4 border-white/20">
                                    </div>
                                </div>
                                
                                <div class="text-white space-y-4 md:space-y-6">
                                    <div class="inline-block bg-white/10 backdrop-blur-sm px-3 py-1.5 md:px-4 md:py-2 rounded-full border border-white/20">
                                        <span class="text-xs md:text-sm font-semibold">✨ Solusi Terpadu</span>
                                    </div>
                                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                                        Monitoring <span class="text-yellow-300">Real-Time</span> untuk Semua Aspek
                                    </h1>
                                    <p class="text-base sm:text-lg md:text-xl text-gray-100 leading-relaxed">
                                        Pantau kehadiran siswa, kinerja guru, hingga pelanggaran dalam satu dashboard yang mudah digunakan
                                    </p>
                                    <div class="space-y-3 md:space-y-4 pt-2 md:pt-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 md:w-12 md:h-12 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-check text-lg md:text-xl text-white"></i>
                                            </div>
                                            <span class="text-sm sm:text-base md:text-lg">Absensi PKL & Monitoring Siswa</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 md:w-12 md:h-12 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-check text-lg md:text-xl text-white"></i>
                                            </div>
                                            <span class="text-sm sm:text-base md:text-lg">Dashboard BK & Poin Siswa</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 md:w-12 md:h-12 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-check text-lg md:text-xl text-white"></i>
                                            </div>
                                            <span class="text-sm sm:text-base md:text-lg">Laporan & Analytics Lengkap</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000">
                    <div class="bg-gradient-to-tr from-red-600 via-red-700 to-gray-900 w-full h-full relative">
                        <div class="absolute inset-0 bg-black opacity-20"></div>
                        
                        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center py-20">
                            <div class="text-center text-white space-y-4 sm:space-y-6 md:space-y-8 mx-auto max-w-4xl w-full">
                                <div class="inline-block bg-white/10 backdrop-blur-sm px-3 py-1.5 md:px-4 md:py-2 rounded-full border border-white/20">
                                    <span class="text-xs md:text-sm font-semibold">💡 Mudah & Efisien</span>
                                </div>
                                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight px-2">
                                    Hemat Waktu hingga <span class="text-yellow-300">70%</span><br class="hidden sm:block"> dalam Administrasi
                                </h1>
                                <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-gray-100 leading-relaxed max-w-3xl mx-auto px-4">
                                    Otomatisasi proses manual dan fokus pada pendidikan berkualitas untuk siswa
                                </p>
                                <div class="flex flex-wrap justify-center gap-3 sm:gap-4 md:gap-6 pt-4 sm:pt-6 md:pt-8 px-4">
                                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 px-4 sm:px-6 md:px-8 py-3 sm:py-4 md:py-6 rounded-xl md:rounded-2xl min-w-[90px] sm:min-w-[100px]">
                                        <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-yellow-300">24/7</div>
                                        <div class="text-xs md:text-sm mt-1 md:mt-2 whitespace-nowrap">Support</div>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 px-4 sm:px-6 md:px-8 py-3 sm:py-4 md:py-6 rounded-xl md:rounded-2xl min-w-[90px] sm:min-w-[100px]">
                                        <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-yellow-300">100%</div>
                                        <div class="text-xs md:text-sm mt-1 md:mt-2 whitespace-nowrap">Cloud</div>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 px-4 sm:px-6 md:px-8 py-3 sm:py-4 md:py-6 rounded-xl md:rounded-2xl min-w-[90px] sm:min-w-[100px]">
                                        <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-yellow-300">Aman</div>
                                        <div class="text-xs md:text-sm mt-1 md:mt-2 whitespace-nowrap">Enkripsi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="absolute bottom-6 md:bottom-10 left-1/2 transform -translate-x-1/2 z-10 flex gap-2 md:gap-3">
                <button class="slider-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white shadow-lg transition-all hover:scale-125" data-slide="0"></button>
                <button class="slider-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white/50 shadow-lg transition-all hover:scale-125" data-slide="1"></button>
                <button class="slider-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white/50 shadow-lg transition-all hover:scale-125" data-slide="2"></button>
            </div>

            <!-- Arrow Navigation -->
            <button id="prev-slide" class="absolute left-2 md:left-4 top-1/2 transform -translate-y-1/2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all z-10 border border-white/20">
                <i class="fas fa-chevron-left text-sm md:text-base"></i>
            </button>
            <button id="next-slide" class="absolute right-2 md:right-4 top-1/2 transform -translate-y-1/2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all z-10 border border-white/20">
                <i class="fas fa-chevron-right text-sm md:text-base"></i>
            </button>
        </section>

        <!-- Main Content -->
        <main class="bg-gray-50">
            
            <!-- Trusted By Section -->
            <section class="py-12 bg-white border-y border-gray-200">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <p class="text-center text-gray-600 font-semibold mb-8">Dipercaya oleh 500+ Sekolah di Indonesia</p>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center opacity-50 grayscale hover:grayscale-0 transition-all">
                        <div class="text-center flex flex-col items-center">
                            <img src="https://smkn2wonogiri.sch.id/wp-content/uploads/2023/07/Logo-Skanda_OK.png" alt="SMKN 2 Wonogiri" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                            <p class="text-xs text-gray-500 mt-2">SMKN 2 Wonogiri</p>
                        </div>
                        <div class="text-center flex flex-col items-center">
                            <img src="https://www.smkmuh5purwantoro.sch.id/wp-content/uploads/2022/10/cropped-Logo_3.png" alt="SMAN 1 Slogohimo" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                            <p class="text-xs text-gray-500 mt-2">SMK Muhammadiah 5 Pwo</p>
                        </div>
                        <div class="text-center flex flex-col items-center">
                            <img src="https://upload.wikimedia.org/wikipedia/id/d/d7/Logo_SMA_Batik_1_Surakarta.png" alt="SMAN 1 Slogohimo" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                            <p class="text-xs text-gray-500 mt-2">SMAN Batik 1 Surakarta</p>
                        </div>
                        <div class="text-center flex flex-col items-center">
                            <img src="https://i.smkn5sukoharjo.sch.id/wp-content/uploads/2020/08/cropped-logo-smkn5sukoharjo-2.png" alt="SMAN 1 Slogohimo" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                            <p class="text-xs text-gray-500 mt-2">SMKN 5 Sukoharjo</p>
                        </div>
                        <div class="text-center flex flex-col items-center">
                            <img src="https://sman2wonogiri.sch.id/wp-content/uploads/2022/08/cropped-cropped-SMAN-2-WONOGIRI-copy.png" alt="SMAN 2 Wonogiri" class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                            <p class="text-xs text-gray-500 mt-2">SMAN 2 Wonogiri</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Products Section -->
            <section id="products" class="py-20 bg-gradient-to-b from-gray-50 to-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <div class="inline-block bg-red-100 text-red-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            <i class="fas fa-cube mr-2"></i>Produk Unggulan
                        </div>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                            Solusi <span class="text-gradient">Lengkap</span> untuk Sekolah Anda
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Platform terintegrasi yang memudahkan semua aspek manajemen sekolah modern
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Product 1 -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group border border-gray-100">
                            <div class="bg-gradient-to-br from-red-500 to-red-600 p-8 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                                <div class="relative">
                                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mb-4 shadow-lg">
                                        <i class="fas fa-user-check text-3xl text-red-600"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-2">Absensi PKL Siswa</h3>
                                    <p class="text-red-100">Monitoring kehadiran real-time</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-3 mb-6">
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Absensi digital dengan GPS & foto</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Laporan kehadiran otomatis</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Notifikasi ke orang tua</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Dashboard analytics lengkap</span>
                                    </li>
                                </ul>
                                <a href="#" class="block w-full text-center bg-red-50 hover:bg-red-100 text-red-600 py-3 rounded-lg font-semibold transition-all group-hover:bg-red-600 group-hover:text-white">
                                    Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group border border-gray-100">
                            <div class="bg-gradient-to-br from-gray-700 to-gray-900 p-8 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                                <div class="relative">
                                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mb-4 shadow-lg">
                                        <i class="fas fa-chalkboard-teacher text-3xl text-gray-700"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-2">Monitoring Guru Piket</h3>
                                    <p class="text-gray-300">Kelola jadwal piket efisien</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-3 mb-6">
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Penjadwalan piket otomatis</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Checklist tugas harian</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Reminder otomatis</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Laporan aktivitas lengkap</span>
                                    </li>
                                </ul>
                                <a href="#" class="block w-full text-center bg-gray-50 hover:bg-gray-100 text-gray-700 py-3 rounded-lg font-semibold transition-all group-hover:bg-gray-700 group-hover:text-white">
                                    Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group border border-gray-100">
                            <div class="bg-gradient-to-br from-red-600 to-red-800 p-8 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                                <div class="relative">
                                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mb-4 shadow-lg">
                                        <i class="fas fa-book-open text-3xl text-red-600"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-2">Monitoring Silabus</h3>
                                    <p class="text-red-100">Pantau progress pembelajaran</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-3 mb-6">
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Upload & share silabus digital</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Tracking progress per mata pelajaran</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Kolaborasi antar guru</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Evaluasi kurikulum real-time</span>
                                    </li>
                                </ul>
                                <a href="#" class="block w-full text-center bg-red-50 hover:bg-red-100 text-red-600 py-3 rounded-lg font-semibold transition-all group-hover:bg-red-600 group-hover:text-white">
                                    Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group border border-gray-100">
                            <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                                <div class="relative">
                                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mb-4 shadow-lg">
                                        <i class="fas fa-exclamation-triangle text-3xl text-gray-800"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-2">Sistem Pelanggaran</h3>
                                    <p class="text-gray-300">Catat & kelola pelanggaran siswa</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-3 mb-6">
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Pencatatan pelanggaran digital</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Sistem poin otomatis</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Notifikasi ke wali murid</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">History lengkap per siswa</span>
                                    </li>
                                </ul>
                                <a href="#" class="block w-full text-center bg-gray-50 hover:bg-gray-100 text-gray-700 py-3 rounded-lg font-semibold transition-all group-hover:bg-gray-700 group-hover:text-white">
                                    Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group border border-gray-100">
                            <div class="bg-gradient-to-br from-red-500 to-red-700 p-8 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                                <div class="relative">
                                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mb-4 shadow-lg">
                                        <i class="fas fa-user-tie text-3xl text-red-600"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-2">Dashboard BK</h3>
                                    <p class="text-red-100">Manajemen bimbingan konseling</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-3 mb-6">
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Catatan konseling digital</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Penjadwalan konseling</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Monitoring perkembangan siswa</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Laporan komprehensif</span>
                                    </li>
                                </ul>
                                <a href="#" class="block w-full text-center bg-red-50 hover:bg-red-100 text-red-600 py-3 rounded-lg font-semibold transition-all group-hover:bg-red-600 group-hover:text-white">
                                    Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group border border-gray-100">
                            <div class="bg-gradient-to-br from-gray-700 to-gray-900 p-8 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                                <div class="relative">
                                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mb-4 shadow-lg">
                                        <i class="fas fa-star text-3xl text-yellow-500"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-2">Dashboard Poin Siswa</h3>
                                    <p class="text-gray-300">Tracking prestasi & perilaku</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-3 mb-6">
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Sistem reward & punishment</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Leaderboard prestasi</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Akses untuk siswa & orang tua</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                        <span class="text-gray-700">Analytics perkembangan</span>
                                    </li>
                                </ul>
                                <a href="#" class="block w-full text-center bg-gray-50 hover:bg-gray-100 text-gray-700 py-3 rounded-lg font-semibold transition-all group-hover:bg-gray-700 group-hover:text-white">
                                    Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section id="features" class="py-20 bg-gradient-to-b from-white to-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <div class="inline-block bg-red-100 text-red-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            <i class="fas fa-bolt mr-2"></i>Keunggulan Platform
                        </div>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                            Mengapa Memilih <span class="text-gradient">Sekolah Inovatif</span>?
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Platform yang dirancang khusus untuk memenuhi kebutuhan digitalisasi sekolah modern
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-cloud text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">100% Cloud Based</h3>
                            <p class="text-gray-600">Akses dimana saja, kapan saja tanpa instalasi</p>
                        </div>

                        <div class="text-center group">
                            <div class="w-20 h-20 bg-gradient-to-br from-gray-700 to-gray-900 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-shield-alt text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Keamanan Terjamin</h3>
                            <p class="text-gray-600">Data terenkripsi dengan standar keamanan tinggi</p>
                        </div>

                        <div class="text-center group">
                            <div class="w-20 h-20 bg-gradient-to-br from-red-600 to-red-800 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-mobile-alt text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Mobile Friendly</h3>
                            <p class="text-gray-600">Responsive design untuk semua perangkat</p>
                        </div>

                        <div class="text-center group">
                            <div class="w-20 h-20 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-headset text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Support 24/7</h3>
                            <p class="text-gray-600">Tim support siap membantu kapan saja</p>
                        </div>

                        <div class="text-center group">
                            <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-sync-alt text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Auto Update</h3>
                            <p class="text-gray-600">Fitur baru otomatis tanpa biaya tambahan</p>
                        </div>

                        <div class="text-center group">
                            <div class="w-20 h-20 bg-gradient-to-br from-gray-700 to-gray-900 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-chart-line text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Analytics Real-time</h3>
                            <p class="text-gray-600">Dashboard analytics yang powerful</p>
                        </div>

                        <div class="text-center group">
                            <div class="w-20 h-20 bg-gradient-to-br from-red-600 to-red-800 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-users text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Multi User Role</h3>
                            <p class="text-gray-600">Akses berbeda untuk setiap role pengguna</p>
                        </div>

                        <div class="text-center group">
                            <div class="w-20 h-20 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-download text-3xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Export Data</h3>
                            <p class="text-gray-600">Export laporan ke Excel & PDF</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Statistics Section -->
            <section class="py-20 bg-gradient-to-br from-red-600 via-red-700 to-gray-900 text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-black opacity-20"></div>
                <div class="absolute inset-0">
                    <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
                    <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full translate-x-1/2 translate-y-1/2"></div>
                </div>
                
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl md:text-5xl font-bold mb-4">Dipercaya oleh Ribuan Pengguna</h2>
                        <p class="text-xl text-gray-100">Angka yang membuktikan kualitas platform kami</p>
                    </div>

                    <div class="grid md:grid-cols-4 gap-8">
                        <div class="text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                            <div class="text-5xl font-bold mb-2">500+</div>
                            <div class="text-gray-200 mb-1">Sekolah Terdaftar</div>
                            <div class="text-sm text-gray-300">Di seluruh Indonesia</div>
                        </div>

                        <div class="text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                            <div class="text-5xl font-bold mb-2">50K+</div>
                            <div class="text-gray-200 mb-1">Pengguna Aktif</div>
                            <div class="text-sm text-gray-300">Guru, siswa, orang tua</div>
                        </div>

                        <div class="text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                            <div class="text-5xl font-bold mb-2">1M+</div>
                            <div class="text-gray-200 mb-1">Data Tersimpan</div>
                            <div class="text-sm text-gray-300">Absensi & transaksi</div>
                        </div>

                        <div class="text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                            <div class="text-5xl font-bold mb-2">99.9%</div>
                            <div class="text-gray-200 mb-1">Kepuasan Pengguna</div>
                            <div class="text-sm text-gray-300">Rating & testimoni</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section id="testimonials" class="py-20 bg-gradient-to-b from-gray-50 to-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <div class="inline-block bg-red-100 text-red-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            <i class="fas fa-comments mr-2"></i>Testimoni
                        </div>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                            Apa Kata <span class="text-gradient">Mereka</span>?
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Dengarkan pengalaman sekolah-sekolah yang telah bergabung dengan kami
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Testimonial 1 -->
                        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl transition-all">
                            <div class="flex items-center gap-1 text-yellow-400 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                "Sekolah Inovatif sangat membantu kami dalam digitalisasi administrasi. Hemat waktu hingga 70% dan data lebih terorganisir. Highly recommended!"
                            </p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                                    DA
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900">Dr. Ahmad Santoso</div>
                                    <div class="text-sm text-gray-600">Kepala Sekolah SMAN 1 Jakarta</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl transition-all">
                            <div class="flex items-center gap-1 text-yellow-400 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                "Platform yang sangat user-friendly. Guru-guru tidak kesulitan menggunakan sistem ini. Support team juga sangat responsif!"
                            </p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-gray-700 to-gray-900 rounded-full flex items-center justify-center text-white font-bold text-xl">
                                    SR
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900">Siti Rahmawati, S.Pd</div>
                                    <div class="text-sm text-gray-600">Wakil Kepala SMKN 2 Bandung</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl transition-all">
                            <div class="flex items-center gap-1 text-yellow-400 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                "Monitoring siswa PKL jadi lebih mudah. Orang tua juga merasa terbantu karena bisa memantau anak mereka secara real-time. Excellent!"
                            </p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-800 rounded-full flex items-center justify-center text-white font-bold text-xl">
                                    BP
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900">Budi Prasetyo, M.Pd</div>
                                    <div class="text-sm text-gray-600">Kepala Sekolah SMK IT Surabaya</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Testimonials Row -->
                    <div class="grid md:grid-cols-2 gap-8 mt-8 max-w-5xl mx-auto">
                        <!-- Testimonial 4 -->
                        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl transition-all">
                            <div class="flex items-center gap-1 text-yellow-400 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                "Dashboard BK sangat membantu dalam menangani masalah siswa. Semua data tercatat rapi dan mudah diakses. Game changer untuk kami!"
                            </p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-gray-800 to-gray-900 rounded-full flex items-center justify-center text-white font-bold text-xl">
                                    LM
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900">Lisa Marlina, S.Psi</div>
                                    <div class="text-sm text-gray-600">Guru BK SMA Plus Yogyakarta</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl transition-all">
                            <div class="flex items-center gap-1 text-yellow-400 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                "Sistem poin siswa membuat mereka lebih termotivasi untuk berperilaku baik. Sangat inovatif dan efektif!"
                            </p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-700 rounded-full flex items-center justify-center text-white font-bold text-xl">
                                    RH
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900">Rizky Hermawan, S.Pd</div>
                                    <div class="text-sm text-gray-600">Kepala Sekolah SMA Negeri Semarang</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section id="contact" class="py-20 bg-gradient-to-br from-gray-900 via-gray-800 to-red-900 text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-black opacity-30"></div>
                <div class="absolute inset-0">
                    <div class="absolute top-20 left-20 w-72 h-72 bg-red-500/20 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-600/20 rounded-full blur-3xl"></div>
                </div>

                <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <div class="inline-block bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold mb-6 border border-white/20">
                        <i class="fas fa-rocket mr-2"></i>Mulai Transformasi Digital
                    </div>
                    <h2 class="text-4xl md:text-6xl font-bold mb-6">
                        Siap Membawa Sekolah Anda ke <span class="text-yellow-300">Era Digital</span>?
                    </h2>
                    <p class="text-xl md:text-2xl text-gray-200 mb-12 leading-relaxed">
                        Bergabunglah dengan 500+ sekolah yang telah mempercayai kami. <br class="hidden md:block">
                        Dapatkan demo gratis dan konsultasi tanpa biaya!
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                        <a href="#" class="bg-white text-red-600 hover:bg-gray-100 px-10 py-5 rounded-xl font-bold text-lg transition-all shadow-2xl hover:shadow-xl transform hover:scale-105 inline-flex items-center justify-center">
                            <i class="fas fa-calendar-check mr-3 text-xl"></i>
                            Jadwalkan Demo Gratis
                        </a>
                        <a href="#" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-red-600 px-10 py-5 rounded-xl font-bold text-lg transition-all inline-flex items-center justify-center">
                            <i class="fas fa-phone mr-3 text-xl"></i>
                            Hubungi Kami
                        </a>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6 pt-8 border-t border-white/20">
                        <div class="flex items-center justify-center gap-3">
                            <i class="fas fa-check-circle text-green-400 text-2xl"></i>
                            <span class="text-lg">Setup Gratis</span>
                        </div>
                        <div class="flex items-center justify-center gap-3">
                            <i class="fas fa-check-circle text-green-400 text-2xl"></i>
                            <span class="text-lg">Training Included</span>
                        </div>
                        <div class="flex items-center justify-center gap-3">
                            <i class="fas fa-check-circle text-green-400 text-2xl"></i>
                            <span class="text-lg">Support 24/7</span>
                        </div>
                    </div>
                </div>
            </section>

        </main>
</x-app-layout>
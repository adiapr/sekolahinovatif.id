<link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo/SI_merahputih_kotak01.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo/SI_merahputih_kotak01.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo/SI_merahputih_kotak01.png') }}">
        <link rel="shortcut icon" href="{{ asset('logo/SI_merahputih_kotak01.png') }}">

        <!-- AOS (Animate On Scroll) -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            @keyframes slideIn {
                from {
                    opacity: 0;
                    transform: translateX(-100%);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
            
            .animate-fadeInUp {
                animation: fadeInUp 1s ease-out forwards;
            }
            
            .animate-slideIn {
                animation: slideIn 1.2s ease-out forwards;
            }
            
            .hero-gradient {
                background: linear-gradient(135deg, #dc2626 0%, #991b1b 50%, #450a0a 100%);
            }
            
            .text-gradient {
                background: linear-gradient(135deg, #dc2626 0%, #ef4444 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
        </style>
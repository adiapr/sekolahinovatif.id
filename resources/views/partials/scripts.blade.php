<script>
            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Navbar Scroll Effect
            const navbar = document.getElementById('navbar');
            let lastScroll = 0;
            
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll > 100) {
                    navbar.classList.add('shadow-xl');
                } else {
                    navbar.classList.remove('shadow-xl');
                }
                
                lastScroll = currentScroll;
            });

            // Hero Slider
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            const prevBtn = document.getElementById('prev-slide');
            const nextBtn = document.getElementById('next-slide');
            let currentSlide = 0;
            let slideInterval;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.remove('opacity-0');
                        slide.classList.add('active');
                    } else {
                        slide.classList.add('opacity-0');
                        slide.classList.remove('active');
                    }
                });

                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.remove('bg-white/50');
                        dot.classList.add('bg-white', 'scale-125');
                    } else {
                        dot.classList.add('bg-white/50');
                        dot.classList.remove('bg-white', 'scale-125');
                    }
                });
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            }

            function startSlideShow() {
                slideInterval = setInterval(nextSlide, 5000);
            }

            function stopSlideShow() {
                clearInterval(slideInterval);
            }

            // Event Listeners
            nextBtn.addEventListener('click', () => {
                stopSlideShow();
                nextSlide();
                startSlideShow();
            });

            prevBtn.addEventListener('click', () => {
                stopSlideShow();
                prevSlide();
                startSlideShow();
            });

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    stopSlideShow();
                    currentSlide = index;
                    showSlide(currentSlide);
                    startSlideShow();
                });
            });

            // Start slideshow
            startSlideShow();

            // Pause on hover
            const sliderContainer = document.querySelector('.slider-container');
            sliderContainer.addEventListener('mouseenter', stopSlideShow);
            sliderContainer.addEventListener('mouseleave', startSlideShow);

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        // Close mobile menu if open
                        mobileMenu.classList.add('hidden');
                    }
                });
            });
        </script>
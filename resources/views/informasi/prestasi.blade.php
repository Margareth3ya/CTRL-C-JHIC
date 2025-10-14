@extends('layouts.app')

@section('content')
    <div class="min-h-screen">

        <!-- Hero Section -->
        <section class="pt-4 pb-5 relative overflow-hidden bg-gradient-to-br from-white to-white">
            <div class="container mx-auto flex flex-col items-center text-center gap-4 px-4 md:px-16">

                <!-- Text -->
                <div class="hero-text">
                    <h1 class="text-orange-500 text-5xl md:text-6xl font-bebas leading-tight">
                        SKAriga
                    </h1>
                    <h2 class="text-black text-4xl md:text-5xl font-bebas leading-tight">
                        sekolahnya murid berprestasi
                    </h2>
                </div>

                <div id="image-stack" class="relative flex items-center justify-center w-full h-96 md:h-[26rem]">
                    <img src="{{ asset('assets/Prestasi1.jpg') }}"
                        class="absolute w-3/4 sm:w-1/2 md:w-[30%] h-80 md:h-[26rem] object-cover rounded-xl shadow-lg transition-all duration-500 ease-custom"
                        alt="Prestasi 1">
                    <img src="{{ asset('assets/Prestasi2.jpg') }}"
                        class="absolute w-3/4 sm:w-1/2 md:w-[30%] h-80 md:h-[26rem] object-cover rounded-xl shadow-lg transition-all duration-500 ease-custom"
                        alt="Prestasi 2">
                    <img src="{{ asset('assets/Prestasi3.jpg') }}"
                        class="absolute w-3/4 sm:w-1/2 md:w-[30%] h-80 md:h-[26rem] object-cover rounded-xl shadow-lg transition-all duration-500 ease-custom"
                        alt="Prestasi 3">
                </div>
            </div>
        </section>

        <!-- Achievement Section -->
        <section class="py-16 md:py-20 px-4 relative overflow-hidden bg-gradient-to-b from-gray-50 to-white">
            <div class="container mx-auto">
                <h2
                    class="mb-12 relative text-center w-full block font-bebas text-4xl bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent after:content-[''] after:absolute after:-bottom-2.5 after:left-1/2 after:transform after:-translate-x-1/2 after:w-24 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                    PRESTASI TERBARU
                </h2>
                @foreach ($prestasi as $pres)
                    <div class="achievement-page active" id="page-1">
                        <div class="flex flex-col gap-10 max-w-[1400px] mx-auto">
                            <div class="achievement-pair flex justify-between flex-wrap gap-8 items-start">
                                <div
                                    class="achievement-item left-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[340px] max-h-[360px]">
                                    <div
                                        class="achievement-image-container flex-0 w-[45%] mr-6 relative flex items-center justify-center">
                                        <img src="{{ asset('assets/' . $pres->folder . '/' . $pres->image) }}"
                                            alt="{{ $pres->title }}"
                                            class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                                    </div>
                                    <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                        <h3
                                            class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                            {{ $pres->title }}
                                        </h3>
                                        <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                            {{ $pres->credit }}
                                        </h4>
                                        <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-8">
                                            {{ $pres->body }}
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="achievement-item right-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[280px] max-h-[300px] mt-16">
                                    <div
                                        class="achievement-image-container flex-0 w-[45%] ml-6 relative flex items-center justify-center">
                                        <img src="{{ asset('assets/' . $pres->folder . '/' . $pres->image) }}"
                                            alt="{{ $pres->title }}"
                                            class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                                    </div>
                                    <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                        <h3
                                            class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:right-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                            {{ $pres->title }}
                                        </h3>
                                        <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                            {{ $pres->credit }}
                                        </h4>
                                        <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-4">
                                            {{ $pres->body }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Image stack animation
            const stack = document.querySelectorAll("#image-stack img");
            let index = 0;

            setTimeout(() => cycleImages(), 400);

            function cycleImages() {
                const order = [
                    stack[index % stack.length],
                    stack[(index + 1) % stack.length],
                    stack[(index + 2) % stack.length],
                ];

                stack.forEach(img => {
                    img.style.transition = "all 0.6s cubic-bezier(0.55, 0.085, 0.68, 0.53)";
                    img.style.opacity = 0.7;
                    img.style.zIndex = 10;
                    img.style.transform = "translateY(8px) scale(0.85)";
                });

                const screenWidth = window.innerWidth;
                let offset = screenWidth < 640 ? 6 : screenWidth < 1024 ? 10 : 14;

                order[2].style.transform = `translateX(-${offset}rem) translateY(4px) scale(0.85) rotateY(8deg)`;
                order[2].style.opacity = 0.75;
                order[2].style.zIndex = 15;

                order[1].style.transform = `translateX(${offset}rem) translateY(4px) scale(0.85) rotateY(-8deg)`;
                order[1].style.opacity = 0.75;
                order[1].style.zIndex = 20;

                order[0].style.transition = "all 0.8s cubic-bezier(0.25, 1, 0.5, 1)";
                order[0].style.opacity = 1;
                order[0].style.zIndex = 30;
                order[0].style.transform = "translateX(0) translateY(0) scale(1) rotateY(0deg)";

                index++;
                setTimeout(cycleImages, 2500);
            }

            // Pagination functionality
            const pages = document.querySelectorAll('.achievement-page');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const currentPageEl = document.getElementById('current-page');
            const totalPagesEl = document.getElementById('total-pages');

            let currentPage = 1;
            const totalPages = pages.length;

            totalPagesEl.textContent = totalPages;

            function updatePagination() {
                // Hide all pages
                pages.forEach(page => page.classList.add('hidden'));
                pages.forEach(page => page.classList.remove('active', 'block'));

                // Show current page
                const currentPageElement = document.getElementById(`page-${currentPage}`);
                currentPageElement.classList.remove('hidden');
                currentPageElement.classList.add('active', 'block');

                // Update page indicator
                currentPageEl.textContent = currentPage;

                // Update button states
                prevBtn.disabled = currentPage === 1;
                nextBtn.disabled = currentPage === totalPages;
            }

            prevBtn.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    updatePagination();
                }
            });

            nextBtn.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    updatePagination();
                }
            });

            // Responsive adjustments for cards
            function adjustCardHeights() {
                const achievementItems = document.querySelectorAll('.achievement-item');
                const isTablet = window.innerWidth <= 1024 && window.innerWidth > 768;
                const isMobile = window.innerWidth <= 768;

                if (isTablet) {
                    achievementItems.forEach(item => {
                        item.classList.remove('min-h-[280px]', 'min-h-[340px]', 'max-h-[300px]',
                            'max-h-[360px]', 'mt-16');
                        item.classList.add('min-h-[300px]', 'max-h-[320px]');
                    });
                } else if (isMobile) {
                    achievementItems.forEach(item => {
                        item.classList.remove('min-h-[280px]', 'min-h-[340px]', 'max-h-[300px]',
                            'max-h-[360px]', 'mt-16');
                        item.classList.add('min-h-auto', 'max-h-none');
                    });
                }
            }

            // Initial adjustment
            adjustCardHeights();

            // Adjust on resize
            window.addEventListener('resize', () => {
                adjustCardHeights();
                clearTimeout(cycleImages);
                setTimeout(cycleImages, 300);
            });
        });
    </script>

    <style>
        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }

        /* Custom utility classes for line clamping */
        .line-clamp-4 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-8 {
            display: -webkit-box;
            -webkit-line-clamp: 8;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Custom easing function */
        .ease-custom {
            transition-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
        }

        /* Animation for page transitions */
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

        .achievement-page.active {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Custom styles for pagination button hover effect */
        .pagination-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .pagination-btn:hover:not(:disabled)::before {
            left: 100%;
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {
            .achievement-item {
                min-height: 300px !important;
                max-height: 320px !important;
                margin-top: 0 !important;
            }
        }

        @media (max-width: 768px) {
            .achievement-item {
                flex-direction: column !important;
                text-align: center !important;
                min-height: auto !important;
                max-height: none !important;
                margin-top: 0 !important;
            }

            .achievement-image-container {
                margin: 0 0 1rem 0 !important;
                flex: 0 0 auto !important;
                width: 100% !important;
            }

            .achievement-content h3::after {
                left: 50% !important;
                transform: translateX(-50%);
            }

            .achievement-image {
                width: 200px !important;
                height: 200px !important;
                max-width: none !important;
                max-height: none !important;
            }
        }
    </style>
@endsection

@extends('layouts.app')

@section('content')
    <div class="relative z-[1]">
        <!-- HERO SECTION -->
        <section class="pt-4 pb-5 relative overflow-hidden bg-gradient-to-br from-white to-white">
            <!-- === BACKGROUND CIRCLE HERO === -->
            <div class="absolute inset-0 -z-[1] pointer-events-none overflow-visible">
                <div class="absolute w-[30rem] h-[30rem] bg-[#FFD2A0] rounded-full opacity-60 -top-40 -left-40 ]"></div>
                <div class="absolute w-[25rem] h-[25rem] bg-[#B0E0FF] rounded-full opacity-60 -top-20 -right-32 "></div>
            </div>

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

                <!-- Image Stack -->
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

        <!-- ACHIEVEMENT SECTION -->
        <section class="py-20 px-6 relative overflow-hidden bg-gradient-to-b from-gray-50 via-white to-gray-50">
            <!-- === BACKGROUND ELEMENTS === -->
            <div class="absolute inset-0 -z-[1] pointer-events-none">
                <div class="absolute w-[18rem] h-[18rem] bg-[#FFD2A0]/40 rounded-full blur-3xl -top-10 left-1/4"></div>
                <div class="absolute w-[16rem] h-[16rem] bg-[#B0E0FF]/40 rounded-full blur-3xl top-1/3 right-1/4"></div>
                <div class="absolute w-[14rem] h-[14rem] bg-[#FFE5B4]/40 rounded-full blur-2xl bottom-0 left-1/3"></div>
            </div>

            <div class="container mx-auto">
                <h2
                    class="mb-14 relative text-center font-bebas text-5xl tracking-wide
                   bg-gradient-to-br from-gray-900 to-gray-700 bg-clip-text text-transparent
                   after:content-[''] after:absolute after:-bottom-3 after:left-1/2
                   after:-translate-x-1/2 after:w-28 after:h-1 after:bg-gradient-to-r
                   after:from-orange-500 after:to-yellow-400 after:rounded-full">
                    PRESTASI TERBARU
                </h2>

                @if ($prestasi->isEmpty() && $prestasi2->isEmpty())
                    <p class="text-center text-gray-500 font-poppins text-lg">Belum ada prestasi yang ditambahkan.</p>
                @else
                    <div class="grid lg:grid-cols-2 gap-12 max-w-[1300px] mx-auto">
                        @foreach ($prestasi as $pres)
                            <div
                                class="group flex flex-col md:flex-row bg-white/80 backdrop-blur-md rounded-3xl shadow-lg border border-gray-100 p-8 hover:-translate-y-2 hover:shadow-2xl hover:border-orange-400 transition-all duration-500">
                                <div class="flex items-center justify-center w-full md:w-[45%] mb-6 md:mb-0 md:mr-8">
                                    <img src="{{ asset('assets/' . $pres->folder . '/' . $pres->image) }}"
                                        alt="{{ $pres->title }}"
                                        class="w-full max-w-[280px] max-h-[280px] object-cover rounded-2xl shadow-md transition-transform duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent">
                                        {{ $pres->title }}
                                    </h3>
                                    <h4 class="font-bebas text-2xl text-orange-500 mb-4">{{ $pres->credit }}</h4>
                                    <p class="font-poppins text-gray-600 text-base leading-relaxed line-clamp-6">
                                        {{ $pres->body }}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                        @foreach ($prestasi2 as $pres2)
                            <div
                                class="group flex flex-col md:flex-row bg-white/80 backdrop-blur-md rounded-3xl shadow-lg border border-gray-100 p-8 hover:-translate-y-2 hover:shadow-2xl hover:border-orange-400 transition-all duration-500">
                                <div class="flex items-center justify-center w-full md:w-[45%] mb-6 md:mb-0 md:mr-8">
                                    <img src="{{ asset('assets/' . $pres2->folder . '/' . $pres2->image) }}"
                                        alt="{{ $pres2->title }}"
                                        class="w-full max-w-[280px] max-h-[280px] object-cover rounded-2xl shadow-md transition-transform duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent">
                                        {{ $pres2->title }}
                                    </h3>
                                    <h4 class="font-bebas text-2xl text-orange-500 mb-4">{{ $pres2->credit }}</h4>
                                    <p class="font-poppins text-gray-600 text-base leading-relaxed line-clamp-6">
                                        {{ $pres2->body }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
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
        html,
        body {
            background: transparent !important;
            overflow-x: hidden;
        }

        section,
        footer,
        main,
        div.relative.z-\[1\] {
            position: relative;
            z-index: 1;
        }

        html,
        body {
            position: relative;
            background: transparent !important;
        }

        section,
        main,
        div.relative.min-h-screen {
            position: relative;
            z-index: 10;
        }

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

@extends('layouts.app')

@section('content')
    <div class="min-h-screen">

        <!-- Background Circles -->
        <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
            <div class="absolute w-96 h-96 bg-blue-200 rounded-full opacity-30 -top-40 -left-40"></div>
            <div class="absolute w-72 h-72 bg-orange-200 rounded-full opacity-30 top-40 left-20"></div>
            <div class="absolute w-80 h-80 bg-blue-100 rounded-full opacity-30 bottom-40 right-40"></div>
            <div class="absolute w-64 h-64 bg-orange-100 rounded-full opacity-40 bottom-20 right-10"></div>
            <div class="absolute w-64 h-64 bg-blue-300 rounded-full opacity-20 top-1/3 left-1/3"></div>
            <div class="absolute w-56 h-56 bg-orange-300 rounded-full opacity-20 bottom-1/3 right-1/3"></div>
        </div>

        <!-- Section: Organisasi OSIS -->
        <section class="py-24 md:py-16 px-4 relative overflow-hidden">
            <div
                class="max-w-4xl mx-auto bg-white rounded-3xl p-8 md:p-12 shadow-2xl border border-gray-100 relative overflow-hidden">
                <!-- Animated background gradient -->
                <div
                    class="absolute -top-1/2 -left-1/2 w-full h-full bg-gradient-to-r from-orange-100/20 via-blue-100/20 to-orange-100/20 animate-spin-slow">
                </div>

                <div class="w-48 h-48 mx-auto mb-8 relative z-10">
                    <img src="{{ asset('assets/osis.png') }}" alt="Foto OSIS"
                        class="w-full h-full object-cover rounded-full border-4 border-orange-500 transition-transform duration-300 hover:scale-105">
                </div>

                <h2
                    class="text-4xl md:text-5xl font-bebas text-center mb-4 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative z-10">
                    ORGANISASI OSIS
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed text-center max-w-3xl mx-auto relative z-10 font-poppins">
                    Organisasi Siswa Intra Sekolah (OSIS) SMK PGRI 3 Malang adalah wadah resmi bagi siswa untuk
                    merealisasikan aspirasi, mengembangkan bakat dan minat, serta melatih kepemimpinan dan tanggung jawab.
                    OSIS aktif mengadakan berbagai program sekolah, baik di bidang akademik, olahraga, seni, maupun sosial
                    kemasyarakatan.
                </p>
            </div>
        </section>

        <!-- Section: Ekstrakurikuler -->
        <section class="py-16 md:py-20 px-4">
            <h2
                class="text-4xl md:text-5xl font-bebas text-center mb-12 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative">
                EKSTRAKURIKULER
                <span
                    class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-orange-500 to-orange-300 rounded"></span>
            </h2>

            <!-- Page 1 -->
            <div class="ekskul-page active ">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                    @forelse ($eks as $item)
                        <div class="relative h-64 overflow-hidden">
                            <div class="bg-white rounded-2xl overflow-hidden shadow-xl transition-all duration-400 border border-gray-100 hover:-translate-y-3 hover:shadow-2xl hover:border-orange-500 relative opacity-0 transform translate-y-8 transition-all duration-500 ease-out scroll-reveal">
                                <img src="{{ asset('assets/' . $item->folder . '/' . $item->image) }}"
                                    alt="{{ $item->title }}"
                                    class="w-full h-full object-cover transition-transform duration-400 ease-in-out">
                            </div>
                            <div
                                class="absolute top-4 right-4 bg-gradient-to-br from-orange-500 to-orange-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg shadow-orange-500/30 z-10">
                                EKSTRAKURIKULER
                            </div>
                            <div class="absolute top-24 bottom-0 left-0 right-0 p-8 text-white z-10">
                                <h3 class="text-2xl font-bebas font-bold mb-2">{{ $item->title }}</h3>
                                <p class="text-gray-100 text-sm leading-relaxed opacity-90 font-poppins">{{ $item->body }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-500 col-span-3">Belum ada data ekstrakurikuler.</p>
                    @endforelse
                </div>
                <div class="mt-4">{{ $eks->links('pagination::simple-tailwind') }}</div>
            </div>
        </section>

    </div>

    <script>
        // Data ekstrakurikuler lengkap
        const ekskulData = [{
                name: "Futsal",
                image: "{{ asset('assets/futsal.png') }}",
                description: "Ekstrakurikuler futsal merupakan kegiatan olahraga yang digemari oleh banyak siswa dan menjadi ajang prestasi."
            },
            {
                name: "Sepak Bola",
                image: "{{ asset('assets/sepak-bola.png') }}",
                description: "Sepak bola menjadi salah satu kegiatan ekstrakurikuler unggulan untuk melatih kerja sama tim dan sportivitas."
            },
            {
                name: "Bola Basket",
                image: "{{ asset('assets/basket.png') }}",
                description: "Ekstrakurikuler bola basket membantu siswa mengembangkan fisik dan keterampilan strategi dalam permainan tim."
            },
            {
                name: "English Club",
                image: "{{ asset('assets/english-club.png') }}",
                description: "Meningkatkan kemampuan berbahasa Inggris melalui berbagai kegiatan interaktif dan komunikatif."
            },
            {
                name: "Taekwondo",
                image: "{{ asset('assets/taekwondo.png') }}",
                description: "Belajar seni bela diri Korea yang mengajarkan disiplin, percaya diri, dan teknik pertahanan diri."
            },
            {
                name: "Pencak Silat",
                image: "{{ asset('assets/pencak-silat.png') }}",
                description: "Melestarikan seni bela diri tradisional Indonesia sambil membangun karakter dan fisik yang kuat."
            },
            {
                name: "Pramuka",
                image: "{{ asset('assets/pramuka.png') }}",
                description: "Membentuk karakter kepemimpinan, kemandirian, dan kecintaan terhadap alam melalui kegiatan kepramukaan."
            },
            {
                name: "Badminton",
                image: "{{ asset('assets/badminton.png') }}",
                description: "Mengembangkan keterampilan bermain bulu tangkis dan menjaga kebugaran fisik siswa."
            },
            {
                name: "3D Modeling",
                image: "{{ asset('assets/3d-modeling.png') }}",
                description: "Belajar membuat model 3D digital untuk mengasah kreativitas dan kemampuan teknis di era digital."
            },
            {
                name: "Fotografi",
                image: "{{ asset('assets/fotografi.png') }}",
                description: "Ekskul ini mengajarkan teknik pengambilan dan pengeditan foto. Cocok untuk siswa yang tertarik pada seni visual dan dokumentasi."
            },
            {
                name: "Kerajinan Perca",
                image: "{{ asset('assets/kerajinan-perca.png') }}",
                description: "Ekskul ini mengajarkan cara mengolah kain sisa menjadi produk kreatif dan fungsional. Kegiatan cocok untuk siswa yang menyukai seni dan kerajinan."
            },
            {
                name: "Tari Tradisional",
                image: "{{ asset('assets/tari-tradisional.png') }}",
                description: "Melestarikan budaya Indonesia melalui pembelajaran dan pentas tari tradisional."
            }
        ];

        // Pagination variables
        const CARDS_PER_PAGE = 9;
        let currentPage = 1;
        const totalPages = Math.ceil(ekskulData.length / CARDS_PER_PAGE);

        // Render ekstrakurikuler cards with pagination
        function renderEkskulCards() {
            // Clear all pages first
            for (let i = 1; i <= totalPages; i++) {
                const pageContainer = document.getElementById(`ekskul-page-${i}`);
                if (pageContainer) {
                    const grid = pageContainer.querySelector('.grid');
                    grid.innerHTML = '';
                }
            }

            // Populate each page with cards
            ekskulData.forEach((ekskul, index) => {
                const pageNumber = Math.floor(index / CARDS_PER_PAGE) + 1;
                const pageContainer = document.getElementById(`ekskul-page-${pageNumber}`);

                if (pageContainer) {
                    const grid = pageContainer.querySelector('.grid');

                    const card = document.createElement('div');
                    card.className =
                        'bg-white rounded-2xl overflow-hidden shadow-xl transition-all duration-400 border border-gray-100 hover:-translate-y-3 hover:shadow-2xl hover:border-orange-500 relative opacity-0 transform translate-y-8 transition-all duration-500 ease-out scroll-reveal';
                    card.style.transitionDelay = `${(index % CARDS_PER_PAGE) * 100}ms`;

                    card.innerHTML = `
                    <div class="relative h-64 overflow-hidden">
                        <img src="${ekskul.image}" alt="${ekskul.name}" class="w-full h-full object-cover transition-transform duration-400 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 opacity-80 transition-opacity duration-400 ease-in-out"></div>
                        <div class="absolute top-4 right-4 bg-gradient-to-br from-orange-500 to-orange-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg shadow-orange-500/30 z-10">
                            EKSTRAKURIKULER
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white z-10">
                        <h3 class="text-2xl font-bebas font-bold mb-2">${ekskul.name}</h3>
                        <p class="text-gray-100 text-sm leading-relaxed opacity-90 font-poppins">${ekskul.description}</p>
                    </div>
                `;

                    grid.appendChild(card);

                    // Add hover effect for image
                    const image = card.querySelector('img');
                    card.addEventListener('mouseenter', () => {
                        image.style.transform = 'scale(1.1)';
                    });
                    card.addEventListener('mouseleave', () => {
                        image.style.transform = 'scale(1)';
                    });
                }
            });

            // Initialize scroll reveal
            initScrollReveal();

            // Update pagination info
            updatePaginationInfo();
        }

        // Update pagination information
        function updatePaginationInfo() {
            document.getElementById('current-page').textContent = currentPage;
            document.getElementById('total-pages').textContent = totalPages;

            // Update button states
            document.getElementById('prev-btn').disabled = currentPage === 1;
            document.getElementById('next-btn').disabled = currentPage === totalPages;

            // Show/hide pages
            for (let i = 1; i <= totalPages; i++) {
                const page = document.getElementById(`ekskul-page-${i}`);
                if (page) {
                    if (i === currentPage) {
                        page.classList.remove('hidden');
                        page.classList.add('active');
                    } else {
                        page.classList.add('hidden');
                        page.classList.remove('active');
                    }
                }
            }

            // Animate cards when page changes
            setTimeout(() => {
                const cards = document.querySelectorAll('.scroll-reveal');
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 100);
                });
            }, 100);
        }

        // Scroll reveal animation
        function initScrollReveal() {
            const revealElements = document.querySelectorAll('.scroll-reveal');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, 100);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            revealElements.forEach(element => {
                observer.observe(element);
            });
        }

        // Custom animation for pagination button hover
        function initPaginationButtonEffects() {
            const buttons = document.querySelectorAll('.pagination-btn');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    if (!this.disabled) {
                        const before = document.createElement('div');
                        before.className =
                            'absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent transform -skew-x-12 -translate-x-full';
                        this.appendChild(before);

                        setTimeout(() => {
                            before.style.transform = 'translateX(100%)';
                        }, 10);

                        setTimeout(() => {
                            if (this.contains(before)) {
                                this.removeChild(before);
                            }
                        }, 500);
                    }
                });
            });
        }

        // Initialize when page loads
        document.addEventListener('DOMContentLoaded', function() {
            renderEkskulCards();
            initPaginationButtonEffects();

            // Pagination event listeners
            document.getElementById('prev-btn').addEventListener('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    updatePaginationInfo();
                }
            });

            document.getElementById('next-btn').addEventListener('click', function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    updatePaginationInfo();
                }
            });
        });
    </script>

    <style>
        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }

        /* Custom animations */
        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 20s linear infinite;
        }

        /* Custom styles for pagination button shine effect */
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

        /* Page transition animation */
        .ekskul-page {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }

        .ekskul-page.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
@endsection

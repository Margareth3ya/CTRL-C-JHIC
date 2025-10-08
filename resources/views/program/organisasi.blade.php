@extends('layouts.app')

@section('content')
    <!-- Section: Organisasi OSIS -->
    <section class="text-center my-16 px-4">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('assets/osis.png') }}" alt="Foto OSIS" class="w-48 h-48 object-cover rounded-full">
        </div>
        <h2 class="text-2xl font-bold mb-4">ORGANISASI OSIS</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
            Organisasi Siswa Intra Sekolah (OSIS) SMK PQR 3 Malang adalah wadah resmi bagi siswa untuk merealisasikan aspirasi, mengembangkan bakat dan minat, serta melatih kepemimpinan dan tanggung jawab. OSIS aktif mengadakan berbagai program sekolah, baik di bidang akademik, olahraga, seni, maupun sosial kemasyarakatan.
        </p>
    </section>

    <!-- Section: Ekstrakurikuler -->
    <section class="px-4 mb-20">
        <h2 class="text-2xl font-bold text-center mb-10">EKSTRAKURIKULER</h2>
        
        <!-- Container for rotating cards -->
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6" id="ekskul-container">
                <!-- Cards will be auto-rotated by JavaScript -->
            </div>
        </div>
    </section>

    <script>
        // Data ekstrakurikuler lengkap
        const ekskulData = [
            {
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

        let currentIndex = 0;
        const cardsToShow = 3;
        let rotationInterval;
        let isAnimating = false;

        // Initialize the rotation
        function initEkskulRotation() {
            renderEkskulCards();
            startRotation();
        }

        // Render current set of cards with fade animation
        function renderEkskulCards() {
            if (isAnimating) return;
            isAnimating = true;

            const container = document.getElementById('ekskul-container');
            
            // Fade out current cards
            container.style.opacity = '0';
            container.style.transition = 'opacity 0.5s ease-in-out';

            setTimeout(() => {
                container.innerHTML = '';

                // Get current 3 cards to display
                for (let i = 0; i < cardsToShow; i++) {
                    const ekskulIndex = (currentIndex + i) % ekskulData.length;
                    const ekskul = ekskulData[ekskulIndex];
                    
                    const card = document.createElement('div');
                    card.className = 'ekskul-card bg-white rounded-lg shadow-md overflow-hidden relative group';
                    card.innerHTML = `
                        <div class="w-full h-80 relative overflow-hidden">
                            <img src="${ekskul.image}" alt="${ekskul.name}" 
                                 class="absolute inset-0 w-full h-full object-cover brightness-75 group-hover:brightness-50 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-2xl font-bold mb-2">${ekskul.name}</h3>
                                <p class="text-sm leading-relaxed">${ekskul.description}</p>
                            </div>
                        </div>
                    `;
                    container.appendChild(card);
                }

                // Fade in new cards
                container.style.opacity = '1';
                isAnimating = false;
            }, 500);
        }

        // Rotate to next set of cards
        function rotateCards() {
            currentIndex = (currentIndex + cardsToShow) % ekskulData.length;
            renderEkskulCards();
        }

        // Start automatic rotation
        function startRotation() {
            rotationInterval = setInterval(rotateCards, 3000); // Rotate every 3 seconds
        }

        // Stop rotation (optional, for hover pause)
        function stopRotation() {
            clearInterval(rotationInterval);
        }

        // Initialize when page loads
        document.addEventListener('DOMContentLoaded', initEkskulRotation);

        // Optional: Pause rotation on hover
        document.getElementById('ekskul-container').addEventListener('mouseenter', stopRotation);
        document.getElementById('ekskul-container').addEventListener('mouseleave', startRotation);
    </script>

    <style>
        /* Smooth fade animation for card transitions */
        #ekskul-container {
            min-height: 320px;
            transition: opacity 0.5s ease-in-out;
        }

        .ekskul-card {
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Card hover effects */
        .ekskul-card {
            transition: transform 0.3s ease;
        }

        .ekskul-card:hover {
            transform: translateY(-5px);
        }

        /* Ensure images cover the entire card */
        .ekskul-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            #ekskul-container {
                grid-template-columns: 1fr;
            }
            
            .ekskul-card {
                height: 300px;
            }
        }

        @media (max-width: 1024px) and (min-width: 769px) {
            #ekskul-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Mobile optimization */
        @media (max-width: 480px) {
            .ekskul-card {
                height: 250px;
            }
            
            .ekskul-card .text-2xl {
                font-size: 1.5rem;
            }
            
            .ekskul-card p {
                font-size: 0.875rem;
            }
        }
    </style>
@endsection
@extends('layouts.app')

@push('styles')
<style>
    .font-bebas {
        font-family: 'Bebas Neue', cursive;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    /* === ORGANISASI OSIS SECTION === */
    .organization-section {
        padding: 6rem 1rem 4rem;
        /* background: linear-gradient(135deg, #fff 0%, #fef7ed 50%, #fff 100%); */
        position: relative;
        overflow: hidden;
    }

    .organization-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        /* background: linear-gradient(90deg, #f97316, #fdba74, #f97316); */
    }

    .osis-card {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        border-radius: 1.5rem;
        padding: 3rem 2rem;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border: 1px solid #f3f4f6;
        position: relative;
        overflow: hidden;
    }

    .osis-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        /* background: conic-gradient(from 0deg, transparent, rgba(249, 115, 22, 0.1), transparent); */
        animation: rotate 10s linear infinite;
    }

    @keyframes rotate {
        100% { transform: rotate(360deg); }
    }

    .osis-image-container {
        width: 200px;
        height: 200px;
        margin: 0 auto 2rem;
        position: relative;
        z-index: 2;
    }

    .osis-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #f97316;
        /* box-shadow: 0 10px 30px rgba(249, 115, 22, 0.3); */
        transition: transform 0.3s ease;
    }

    .osis-image:hover {
        transform: scale(1.05);
    }

    .organization-title {
        font-size: 2.5rem;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
        position: relative;
        z-index: 2;
    }

    .organization-description {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #6b7280;
        max-width: 600px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    /* === EKSTRAKURIKULER SECTION === */
    .ekskul-section {
        padding: 4rem 1rem 6rem;
        /* background: linear-gradient(180deg, #fafafa 0%, #fff 100%); */
    }

    .ekskul-title {
        font-size: 2.5rem;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 3rem;
        position: relative;
    }

    .ekskul-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: linear-gradient(90deg, #f97316, #fdba74);
        border-radius: 2px;
    }

    .ekskul-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ekskul-card {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        border: 1px solid #f3f4f6;
        position: relative;
    }

    .ekskul-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        border-color: #f97316;
    }

    .ekskul-image-container {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .ekskul-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .ekskul-card:hover .ekskul-image {
        transform: scale(1.1);
    }

    .ekskul-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.8) 100%);
        opacity: 0.8;
        transition: opacity 0.4s ease;
    }

    .ekskul-card:hover .ekskul-overlay {
        opacity: 0.9;
    }

    .ekskul-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 2rem;
        color: white;
        z-index: 2;
    }

    .ekskul-name {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: white;
    }

    .ekskul-description {
        font-size: 0.95rem;
        line-height: 1.6;
        opacity: 0.9;
        color: #f3f4f6;
    }

    /* .ekskul-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: linear-gradient(135deg, #f97316, #ea580c);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 3;
        box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3);
    } */

    /* === RESPONSIVE DESIGN === */
    @media (max-width: 768px) {
        .organization-section {
            padding: 4rem 1rem 2rem;
        }
        
        .osis-card {
            padding: 2rem 1.5rem;
        }
        
        .osis-image-container {
            width: 150px;
            height: 150px;
        }
        
        .organization-title {
            font-size: 2.5rem;
        }
        
        .ekskul-title {
            font-size: 2.5rem;
        }
        
        .ekskul-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .ekskul-image-container {
            height: 200px;
        }
    }

    @media (max-width: 480px) {
        .organization-title {
            font-size: 2rem;
        }
        
        .ekskul-title {
            font-size: 2rem;
        }
        
        .ekskul-grid {
            grid-template-columns: 1fr;
        }
        
        .osis-card {
            padding: 1.5rem 1rem;
        }
        
        .organization-description {
            font-size: 1rem;
        }
    }

    /* === ANIMATIONS === */
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

    .fade-in-up {
        animation: fadeInUp 0.6s ease-out;
    }

    /* === SCROLL ANIMATIONS === */
    .scroll-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .scroll-reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endpush

@section('content')
<div class="min-h-screen">

    <!-- Section: Organisasi OSIS -->
    <section class="organization-section">
        <div class="osis-card">
            <div class="osis-image-container">
                <img src="{{ asset('assets/osis.png') }}" alt="Foto OSIS" class="osis-image">
            </div>
            <h2 class="organization-title font-bebas text-center">ORGANISASI OSIS</h2>
            <p class="organization-description font-poppins text-center">
                Organisasi Siswa Intra Sekolah (OSIS) SMK PGRI 3 Malang adalah wadah resmi bagi siswa untuk merealisasikan aspirasi, mengembangkan bakat dan minat, serta melatih kepemimpinan dan tanggung jawab. OSIS aktif mengadakan berbagai program sekolah, baik di bidang akademik, olahraga, seni, maupun sosial kemasyarakatan.
            </p>
        </div>
    </section>

    <!-- Section: Ekstrakurikuler -->
    <section class="ekskul-section">
        <h2 class="ekskul-title font-bebas text-center">EKSTRAKURIKULER</h2>
        
        <div class="ekskul-grid" id="ekskul-container">
            <!-- Cards will be generated by JavaScript -->
        </div>
    </section>

</div>

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

    // Render all ekstrakurikuler cards
    function renderAllEkskulCards() {
        const container = document.getElementById('ekskul-container');
        
        ekskulData.forEach((ekskul, index) => {
            const card = document.createElement('div');
            card.className = 'ekskul-card scroll-reveal';
            card.style.animationDelay = `${index * 0.1}s`;
            
            card.innerHTML = `
                <div class="ekskul-image-container">
                    <img src="${ekskul.image}" alt="${ekskul.name}" class="ekskul-image">
                    <div class="ekskul-overlay"></div>
                    <div class="ekskul-badge">EKSTRAKURIKULER</div>
                </div>
                <div class="ekskul-content">
                    <h3 class="ekskul-name font-bebas">${ekskul.name}</h3>
                    <p class="ekskul-description font-poppins">${ekskul.description}</p>
                </div>
            `;
            container.appendChild(card);
        });

        // Initialize scroll reveal
        initScrollReveal();
    }

    // Scroll reveal animation
    function initScrollReveal() {
        const revealElements = document.querySelectorAll('.scroll-reveal');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
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

    // Initialize when page loads
    document.addEventListener('DOMContentLoaded', function() {
        renderAllEkskulCards();
    });
</script>
@endsection
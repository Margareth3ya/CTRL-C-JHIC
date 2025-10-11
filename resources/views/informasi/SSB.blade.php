@extends('layouts.app')

@push('styles')
<style>
    .font-bebas {
        font-family: 'Bebas Neue', cursive;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    /* === BACKGROUND CIRCLES === */
    .bg-circle {
        width: 20rem;
        height: 20rem;
        border-radius: 50%;
        position: absolute;
        pointer-events: none;
    }

    @media (min-width: 1024px) {
        .bg-circle {
            width: 28rem;
            height: 28rem;
        }
    }

    .bg-orange-blur {
        background: rgba(255, 179, 132, 0.32);
    }
    
    .bg-blue-blur {
        background: rgba(174, 219, 228, 0.5);
    }

    /* === HERO SECTION === */
    .hero-section {
        padding: 6rem 1rem 4rem;
        position: relative;
        overflow: hidden;
    }

    .hero-title {
        font-size: 2.5rem;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1.5rem;
        position: relative;
        line-height: 1.2;
    }

    .hero-description {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #6b7280;
        margin-bottom: 2rem;
    }

    .hero-button {
        background: linear-gradient(135deg, #f97316, #ea580c);
        color: white;
        padding: 1rem 2rem;
        border: none;
        border-radius: 0.75rem;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3);
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .hero-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(249, 115, 22, 0.4);
    }

    .hero-button-secondary {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    }

    .hero-button-secondary:hover {
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
    }

    /* === SLIDESHOW === */
    .slideshow-container {
        position: relative;
        width: 100%;
        height: 400px;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    @media (min-width: 768px) {
        .slideshow-container {
            height: 500px;
        }
    }

    @media (min-width: 1024px) {
        .slideshow-container {
            height: 600px;
        }
    }

    .slideshow-slide {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 0.8s ease-in-out;
    }

    .slideshow-slide.active {
        opacity: 1;
    }

    .slideshow-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .slideshow-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);
        display: flex;
        align-items: flex-end;
        padding: 2rem;
        color: white;
    }

    .slideshow-text {
        font-size: 1.25rem;
        font-weight: 600;
        text-align: center;
        width: 100%;
    }

    /* === SECTION STYLES === */
    .section-title {
        font-size: 3rem;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 3rem;
        position: relative;
        text-align: center;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 150px;
        height: 3px;
        background: linear-gradient(90deg, #f97316, #fdba74);
        border-radius: 2px;
    }

    .section-title .accent-orange {
        background: linear-gradient(135deg, #f97316, #ea580c);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .section-title .accent-blue {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* === REGISTRATION CARDS === */
    .registration-card {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        border: 1px solid #f3f4f6;
        position: relative;
    }

    .registration-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
    }

    .registration-image {
        width: 100%;
        height: auto;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .registration-card:hover .registration-image {
        transform: scale(1.05);
    }

    .registration-badge {
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
    }

    .registration-badge.blue {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
    }

    .registration-description {
        padding: 1.5rem;
        text-align: center;
    }

    .registration-description p {
        font-size: 1rem;
        line-height: 1.6;
        color: #6b7280;
    }

    /* === CHART SECTION === */
    .chart-container {
        background: white;
        border-radius: 1.5rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        border: 1px solid #f3f4f6;
        padding: 2rem;
        position: relative;
        overflow: hidden;
    }

    .chart-title {
        font-size: 1.5rem;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1.5rem;
        text-align: center;
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

    /* === RESPONSIVE DESIGN === */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 2.5rem;
        }
        
        .slideshow-container {
            height: 300px;
        }
    }

    @media (max-width: 480px) {
        .hero-title {
            font-size: 1.75rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .hero-button {
            padding: 0.875rem 1.5rem;
            font-size: 0.9rem;
        }
    }
</style>
@endpush

@section('content')
<div class="relative bg-white overflow-hidden min-h-screen">

    <!-- Background Circles -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="bg-blue-blur bg-circle -left-32 -top-20"></div>
        <div class="bg-blue-blur bg-circle -left-28 top-1/3"></div>
        <div class="bg-orange-blur bg-circle -right-32 top-24"></div>
        <div class="bg-orange-blur bg-circle -right-28 bottom-40"></div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Text Content -->
                <div class="text-center lg:text-left">
                    <h1 class="hero-title font-bebas">
                        Pendaftaran Siswa Baru Jalur Makmur<br>
                        <span class="text-orange-500">Tahun Ajaran 2025/2026 Dibuka!</span>
                    </h1>
                    
                    <p class="hero-description font-poppins">
                        SMK PGRI 3 Malang (Skariga) membuka Pendaftaran Peserta Didik Baru (PPDB) Tahun Ajaran 2025/2026 melalui Jalur Makmur. 
                        Segera daftarkan diri Anda untuk menjadi bagian dari sekolah unggulan dengan berbagai program keahlian yang siap mencetak 
                        lulusan berkompeten dan berkarakter.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('kontak') }}" class="hero-button font-poppins">
                            Daftar Sekarang
                        </a>
                        
                        <button onclick="document.getElementById('offline-registration').scrollIntoView({behavior: 'smooth'})" 
                                class="hero-button hero-button-secondary font-poppins">
                            Tata Cara Pendaftaran →
                        </button>
                    </div>
                </div>

                <!-- Slideshow -->
                <div class="slideshow-container scroll-reveal">
                    @foreach (['Daftar.png', 'SSB1.jpg', 'SSB2.jpg', 'SSB3.jpg', 'SSB4.jpg'] as $index => $image)
                        <div class="slideshow-slide {{ $index === 0 ? 'active' : '' }}">
                            <a href="https://www.instagram.com/reel/DPA1T5gilLj/?utm_source=ig_web_copy_link&igsh=cm0xaWYzeTlubXJo"
                               target="_blank"
                               class="block w-full h-full">
                                <img src="{{ asset('assets/' . $image) }}" 
                                     alt="Slide {{ $index + 1 }}" 
                                     class="slideshow-image">
                                <div class="slideshow-overlay">
                                    <span class="slideshow-text font-poppins">Buka di Instagram ↗</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <!-- Offline Registration Steps -->
    <section id="offline-registration" class="relative py-16 lg:py-24">
        <div class="container mx-auto px-4">
            <h2 class="section-title font-bebas">
                Tata Cara Pendaftaran <span class="accent-orange">Offline</span>
            </h2>

            <div class="max-w-4xl mx-auto">
                <div class="registration-card scroll-reveal">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/Steps1.png') }}" 
                             alt="Tata Cara Pendaftaran Offline" 
                             class="registration-image">
                        <div class="registration-badge">OFFLINE</div>
                    </div>
                    <div class="registration-description">
                        <p class="font-poppins">
                            Infografis di atas menjelaskan langkah-langkah lengkap untuk pendaftaran offline di SMK PGRI 3 Malang. 
                            Pastikan Anda mengikuti setiap tahapan dengan benar untuk memastikan pendaftaran berjalan lancar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Online Registration Steps -->
    <section class="relative py-16 lg:py-24">
        <div class="container mx-auto px-4">
            <h2 class="section-title font-bebas">
                Tata Cara Pendaftaran <span class="accent-blue">Online</span>
            </h2>

            <div class="max-w-4xl mx-auto">
                <div class="registration-card scroll-reveal">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/Steps2.png') }}" 
                             alt="Tata Cara Pendaftaran Online" 
                             class="registration-image">
                        <div class="registration-badge blue">ONLINE</div>
                    </div>
                    <div class="registration-description">
                        <p class="font-poppins">
                            Infografis di atas menunjukkan proses pendaftaran online yang lebih sederhana dan dapat dilakukan dari mana saja. 
                            Hubungi customer service kami untuk bantuan selama proses pendaftaran.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="relative py-16 lg:py-24">
        <div class="container mx-auto px-4">
            <h2 class="section-title font-bebas">
                Data Jumlah Peserta Diterima Setiap Tahun
            </h2>

            <div class="max-w-5xl mx-auto">
                <div class="chart-container scroll-reveal">
                    <h3 class="chart-title font-bebas">Statistik Pendaftaran SMK PGRI 3 Malang</h3>
                    <div class="relative w-full h-[300px] sm:h-[400px] md:h-[500px]">
                        <canvas id="myChart" class="w-full h-full"></canvas>
                    </div>
                </div>
                
                <p class="text-center text-gray-600 mt-8 max-w-2xl mx-auto font-poppins text-base sm:text-lg">
                    Grafik di atas menunjukkan jumlah pendaftar dan peserta yang diterima di SMK PGRI 3 Malang setiap tahun.
                    Data ini mencerminkan peningkatan antusiasme calon siswa baru dari waktu ke waktu.
                </p>
            </div>
        </div>
    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Chart initialization
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('myChart');

        const data = {
            labels: ["2021", "2022", "2023", "2024", "2025"],
            datasets: [
                {
                    label: "Data Pendaftar",
                    data: [800, 700, 860, 870, 980],
                    backgroundColor: "rgba(253, 136, 58, 0.8)",
                    borderRadius: 10,
                    borderWidth: 2,
                    borderColor: "rgba(253, 136, 58, 1)"
                },
                {
                    label: "Data Peserta Diterima",
                    data: [750, 680, 820, 830, 920],
                    backgroundColor: "rgba(54, 162, 235, 0.8)",
                    borderRadius: 10,
                    borderWidth: 2,
                    borderColor: "rgba(54, 162, 235, 1)"
                }
            ]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            font: {
                                family: "'Poppins', sans-serif",
                                size: 14
                            },
                            color: '#374151'
                        }
                    },
                    title: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        suggestedMax: 1100,
                        ticks: {
                            font: {
                                family: "'Poppins', sans-serif"
                            },
                            color: '#6b7280'
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.1)'
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                family: "'Poppins', sans-serif"
                            },
                            color: '#6b7280'
                        },
                        grid: {
                            display: false
                        }
                    }
                },
                animation: {
                    duration: 1200,
                    easing: 'easeOutQuart'
                }
            }
        };

        new Chart(ctx, config);
    });

    // Slideshow functionality
    document.addEventListener("DOMContentLoaded", function () {
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slideshow-slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            slides[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        // Change slide every 3 seconds
        setInterval(nextSlide, 3000);
    });

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
        initScrollReveal();
    });
</script>
@endsection
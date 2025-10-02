@extends('layouts.app')

@push('styles')
    <style>
        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
        
        .bg-orange-blur {
            background: rgba(255, 179.25, 132.16, 0.32);
        }
        
        .bg-blue-blur {
            background: #AEDBE4;
            opacity: 0.50;
        }
        
        .step-card {
            background: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
        }
        
        .registration-image {
            width: 100%;
            max-width: 800px;
            height: auto;
            border-radius: 20px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
            display: block;
        }
        
        /* Styling untuk chart section */
        .chart-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            overflow: hidden;
        }
        
        .chart-image {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }
        
        /* Media queries untuk responsivitas */
        @media (max-width: 1024px) {
            .chart-image {
                max-height: 500px;
            }
        }
        
        @media (max-width: 768px) {
            .chart-image {
                max-height: 400px;
            }
        }
        
        @media (max-width: 640px) {
            .chart-image {
                max-height: 300px;
            }
        }
                /* Supaya ukuran lingkaran konsisten di semua layar */
        .bg-circle {
        width: 20rem;   /* default (320px) → besar untuk mobile */
        height: 20rem;
        }

        @media (min-width: 1024px) {
        .bg-circle {
            width: 28rem;   /* perbesar lagi di desktop */
            height: 28rem;
        }
        }


    </style>
@endpush

@section('content')
<div class="relative bg-white overflow-hidden">
<!-- Background Circles -->
<div class="absolute inset-0 pointer-events-none">
    <!-- Kiri Atas -->
    <div class="absolute -left-32 -top-20 bg-blue-blur rounded-full bg-circle"></div>

    <!-- Kiri Tengah -->
    <div class="absolute -left-28 top-1/3 bg-blue-blur rounded-full bg-circle"></div>

    <!-- Kanan Atas -->
    <div class="absolute -right-32 top-24 bg-orange-blur rounded-full bg-circle"></div>

    <!-- Kanan Bawah -->
    <div class="absolute -right-28 bottom-40 bg-orange-blur rounded-full bg-circle"></div>
</div>





<!-- Hero Section -->
    <div class="relative container mx-auto px-4 py-12 lg:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <!-- Text Content -->
            <div class="space-y-6">
                <h1 class="text-3xl lg:text-4xl font-poppins font-semibold text-black">
                    Pendaftaran Siswa Baru Jalur Makmur Tahun Ajaran 2025/2026 Dibuka!
                </h1>
                <p class="text-lg lg:text-xl text-gray-700 leading-relaxed">
                    SMK PGRI 3 Malang (Skariga) membuka Pendaftaran Peserta Didik Baru (PPDB) Tahun Ajaran 2025/2026 melalui Jalur Makmur. Segera daftarkan diri Anda untuk menjadi bagian dari sekolah unggulan dengan berbagai program keahlian yang siap mencetak lulusan berkompeten dan berkarakter.
                </p>
                <a href="{{ route('kontak') }}" 
       class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-4 rounded-3xl text-lg lg:text-xl font-poppins font-bold transition-colors inline-flex items-center justify-center">
        Daftar Sekarang
    </a>
                <button onclick="document.getElementById('offline-registration').scrollIntoView({behavior: 'smooth'});" 
                    class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-3xl text-lg lg:text-xl font-poppins font-bold transition-colors">
                    Tata Cara Pendaftaran →
                </button>
                    

            </div>
            <!-- Slideshow -->
            <div class="order-first lg:order-last relative w-full h-[500px] rounded-2xl overflow-hidden shadow-2xl">
                <div id="slider" class="flex h-full transition-transform duration-1000 ease-in-out">
                    <img src="{{ asset('assets/Daftar.png') }}" class="w-full h-full object-cover flex-shrink-0">
                    <img src="{{ asset('assets/Kegiatan1.png') }}" class="w-full h-full object-cover flex-shrink-0">
                    <img src="{{ asset('assets/Kegiatan2.png') }}" class="w-full h-full object-cover flex-shrink-0">
                    <img src="{{ asset('assets/Kegiatan3.png') }}" class="w-full h-full object-cover flex-shrink-0">
                </div>
            </div>

        </div>
    </div>


    <!-- Offline Registration Steps -->
    <div id="offline-registration" class="relative py-16 lg:py-24">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl lg:text-6xl font-bebas text-black text-center mb-12 lg:mb-20">
                Tata Cara Pendaftaran <span class="text-orange-500">Offline</span>
            </h2>

            <!-- Single Large Image for Offline Steps -->
            <div class="flex justify-center">
                <img src="{{ asset('assets/Steps1.png') }}" 
                     alt="Tata Cara Pendaftaran Offline" class="registration-image">
            </div>
            
            <!-- Optional: Description below the image -->
            <div class="mt-8 text-center max-w-3xl mx-auto">
                <p class="text-lg text-gray-700 font-poppins">
                    Infografis di atas menjelaskan langkah-langkah lengkap untuk pendaftaran offline di SMK PGRI 3 Malang. 
                    Pastikan Anda mengikuti setiap tahapan dengan benar untuk memastikan pendaftaran berjalan lancar.
                </p>
            </div>
        </div>
    </div>

    <!-- Online Registration Steps -->
    <div class="relative py-16 lg:py-24">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl lg:text-6xl font-bebas text-black text-center mb-12 lg:mb-20">
                Tata Cara Pendaftaran <span class="text-blue-400">ONLINE</span>
            </h2>

            <!-- Single Large Image for Online Steps -->
            <div class="flex justify-center">
                <img src="{{ asset('assets/Steps2.png') }}" 
                     alt="Tata Cara Pendaftaran Online" class="registration-image">
            </div>
            
            <!-- Optional: Description below the image -->
            <div class="mt-8 text-center max-w-3xl mx-auto">
                <p class="text-lg text-gray-700 font-poppins">
                    Infografis di atas menunjukkan proses pendaftaran online yang lebih sederhana dan dapat dilakukan dari mana saja. 
                    Hubungi customer service kami untuk bantuan selama proses pendaftaran.
                </p>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
<div class="relative py-16 lg:py-24">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl lg:text-6xl font-bebas text-black text-center mb-12 lg:mb-20">
            Data jumlah peserta diterima setiap tahun
        </h2>
        
        <!-- Chart/Graph dengan container responsif -->
        <div class="chart-container bg-transparent rounded-2xl p-4 lg:p-8">
            <canvas id="myChart" class="chart-image rounded-lg w-full max-w-2xl mx-auto"></canvas>
        </div>
    </div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

        document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById('myChart');

    const data = {
        labels: ["2021", "2022", "2023", "2024", "2025"],
        datasets: [
            {
                label: "Data Pendaftar",
                data: [800, 700, 860, 870, 980], // nanti bisa diganti dari backend
                backgroundColor: "rgba(253, 136, 58, 0.8)",
                borderRadius: 10
            },
            {
                label: "Data Peserta Diterima",
                data: [750, 680, 820, 830, 920],
                backgroundColor: "rgba(54, 162, 235, 0.8)",
                borderRadius: 10
            }
        ]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: 1100
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

    let currentIndex = 0;
    const slider = document.getElementById('slider');
    const totalSlides = slider.children.length;

    setInterval(() => {
        currentIndex = (currentIndex + 1) % totalSlides;
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }, 3000); // ganti slide setiap 3 detik
</script>

@endsection
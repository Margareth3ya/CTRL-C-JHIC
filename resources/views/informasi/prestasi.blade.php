@extends('layouts.app')

@push('styles')
    <style>
        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }
        .font-league-spartan {
            font-family: 'League Spartan', sans-serif;
        }
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
        
        /* Tambahan styling untuk layout yang lebih stabil */
        .hero-section {
            min-height: auto; /* biar sesuai konten saja */
            position: relative;
            padding-top: 2rem; /* bisa diatur sesuai kebutuhan */
        }

        
        .achievement-section {
            padding: 4rem 1rem;
        }
        
        .achievement-card {
            transition: transform 0.3s ease;
        }
        
        .achievement-card:hover {
            transform: translateY(-5px);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-text {
                position: static !important;
                text-align: center;
                margin-top: 2rem;
            }
            
            .hero-image {
                position: static !important;
                width: 100% !important;
                height: auto !important;
                margin-top: 2rem;
            }
        }

        .bg-orange-blur {
            background: rgba(255, 179.25, 132.16, 0.32);
        }
        
        .bg-blue-blur {
            background: #AEDBE4;
            opacity: 0.50;
        }
        .bg-circle {
            width: 20rem;
            height: 20rem;
            position: absolute;
        }

        @media (min-width: 1024px) {
            .bg-circle {
                width: 28rem;
                height: 28rem;
            }
        }

        /* wrapper khusus background */
        .bg-circles-wrapper {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: -1; /* semua circle otomatis di belakang */
        }


    </style>
@endpush

@section('content')
<div class="relative min-h-screen">

  <!-- Background Circles -->
  <div class="bg-circles-wrapper">
    <div class="grid grid-cols-2 grid-rows-2 w-full h-full">
      <div class="flex items-start justify-start">
        <div class="bg-blue-blur rounded-full bg-circle -translate-x-1/3 -translate-y-1/3"></div>
      </div>
      <div class="flex items-start justify-end">
        <div class="bg-orange-blur rounded-full bg-circle translate-x-1/3 -translate-y-1/3"></div>
      </div>
      <div class="flex items-end justify-start">
        <div class="bg-blue-blur rounded-full bg-circle -translate-x-1/3 translate-y-1/3"></div>
      </div>
      <div class="flex items-end justify-end">
        <div class="bg-orange-blur rounded-full bg-circle translate-x-1/3 translate-y-1/3"></div>
      </div>
    </div>
  </div>





<!-- Hero Section -->
<section class="hero-section flex items-center justify-center px-4 md:px-16 py-8">
  <div class="container mx-auto flex flex-col items-center text-center gap-2">
      
      <!-- Text -->
      <div class="hero-text">
          <h1 class="text-orange-500 text-5xl md:text-6xl font-bebas leading-tight">
              SKAriga
          </h1>
          <h2 class="text-black text-4xl md:text-5xl font-bebas leading-tight">
              sekolahnya murid berprestasi
          </h2>
      </div>

      <!-- Image (slideshow) -->
      <div class="hero-image flex justify-center">
          <div class="w-full max-w-lg h-[28rem] md:h-[32rem] overflow-hidden rounded-lg">
              <img id="hero-slideshow" 
                  class="w-full h-full object-cover transition-opacity duration-700 opacity-100" 
                  src="{{ asset('assets/PrestasiA.png') }}"
                  alt="Hero Slideshow">
          </div>
      </div>

  </div>
</section>



<!-- Achievement Section Zig Zag -->
<section class="achievement-section bg-white-50 relative py-16">
  <div class="container mx-auto px-4 md:px-16">
    <h2 class="text-4xl md:text-5xl font-bebas text-center mb-12">Prestasi Terbaru</h2>

    <!-- Item 1 -->
    <div class="flex flex-col md:flex-row items-center mb-16">
      <!-- Gambar -->
      <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden 
                  hover:shadow-2xl transition-all duration-500 
                  transform hover:-translate-y-2 max-w-sm w-full">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/LKS.png') }}" alt="Juara 2 LKS Nasional"
               class="w-full h-[30rem] object-cover transform 
                      group-hover:scale-110 transition-transform duration-700 ease-out">
        </div>
      </div>

      <!-- Teks -->
      <div class="ml-6 mt-6 md:mt-0 max-w-md"> 
        <h3 class="text-6xl font-bebas  mb-2">Juara 2 LKS Nasional</h3>
        <h4 class="text-4xl text-orange-500 font-bebas  mb-4">Industrial Control</h4>
        <p class="text-gray-700 leading-relaxed">
          MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
          <u>medali</u> emas di LKS Nasional.
        </p>
      </div>
    </div>

<!-- Item 2 (dibalik, mepet kanan) -->
<div class="flex flex-col md:flex-row items-center justify-end mb-16">
  <!-- Teks -->
  <div class="max-w-md md:order-1 mr-4"> 
    <h3 class="text-6xl font-bebas  mb-2">Juara 1 LKS Nasional</h3>
    <h4 class="text-4xl text-orange-500 font-bebas  mb-4">Robot Manufacturing System</h4>
    <p class="text-gray-700 leading-relaxed">
      MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
      <u>medali</u> emas di LKS Nasional.
    </p>
  </div>

  <!-- Gambar -->
  <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden 
              hover:shadow-2xl transition-all duration-500 
              transform hover:-translate-y-2 max-w-sm w-full md:order-2">
    <div class="overflow-hidden">
      <img src="{{ asset('assets/Prestasi2.png') }}" alt="Juara 1 LKS Nasional"
           class="w-full h-[30rem] object-cover transform 
                  group-hover:scale-110 transition-transform duration-700 ease-out">
    </div>
  </div>
</div>





    <!-- Item 3 -->
    <div class="flex flex-col md:flex-row items-center mb-16">
      <!-- Gambar -->
      <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden 
                  hover:shadow-2xl transition-all duration-500 
                  transform hover:-translate-y-2 max-w-sm w-full">
        <div class="overflow-hidden">
          <img src="{{ asset('assets/Prestasi1.png') }}" alt="Juara 2 LKS Nasional"
               class="w-full h-[30rem] object-cover transform 
                      group-hover:scale-110 transition-transform duration-700 ease-out">
        </div>
      </div>

      <!-- Teks -->
      <div class="ml-6 mt-6 md:mt-0 max-w-md"> 
        <h3 class="text-6xl font-bebas  mb-2">Juara 2 LKS Nasional</h3>
        <h4 class="text-4xl text-orange-500 font-bebas mb-4">Industrial Control</h4>
        <p class="text-gray-700 leading-relaxed">
          MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
          <u>medali</u> emas di LKS Nasional.
        </p>
      </div>
    </div>

  </div>
</section>





</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const images = [
            "{{ asset('assets/PrestasiA.png') }}",
            "{{ asset('assets/PrestasiB.png') }}",
            "{{ asset('assets/Berita3.png') }}"
        ];

        let index = 0;
        const imgEl = document.getElementById("hero-slideshow");

        setInterval(() => {
            // Fade out
            imgEl.classList.add("opacity-0");

            setTimeout(() => {
                // Ganti gambar setelah fade out
                index = (index + 1) % images.length;
                imgEl.src = images[index];

                // Fade in
                imgEl.classList.remove("opacity-0");
            }, 700); // sesuai duration-700
        }, 3000);
    });
</script>
@endpush


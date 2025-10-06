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

        @media (max-width: 640px) {
  #image-stack img {
    border-radius: 1rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  }
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
  <div class="container mx-auto flex flex-col items-center text-center gap-4">
      
      <!-- Text -->
      <div class="hero-text">
          <h1 class="text-orange-500 text-5xl md:text-6xl font-bebas leading-tight">
              SKAriga
          </h1>
          <h2 class="text-black text-4xl md:text-5xl font-bebas leading-tight">
              sekolahnya murid berprestasi
          </h2>
      </div>

      <div id="image-stack" 
     class="relative flex items-center justify-center w-full h-[26rem] md:h-[30rem] perspective-[1000px]">
  <img src="{{ asset('assets/Prestasi1.jpg') }}"
       class="absolute object-cover rounded-2xl shadow-2xl transition-all duration-700 ease-in-out 
              w-[65%] sm:w-[50%] md:w-[30%] h-[22rem] md:h-[26rem]"
       alt="Prestasi 1">
  <img src="{{ asset('assets/Prestasi2.jpg') }}"
       class="absolute object-cover rounded-2xl shadow-xl transition-all duration-700 ease-in-out 
              w-[65%] sm:w-[50%] md:w-[30%] h-[22rem] md:h-[26rem]"
       alt="Prestasi 2">
  <img src="{{ asset('assets/Prestasi3.jpg') }}"
       class="absolute object-cover rounded-2xl shadow-lg transition-all duration-700 ease-in-out 
              w-[65%] sm:w-[50%] md:w-[30%] h-[22rem] md:h-[26rem]"
       alt="Prestasi 3">
</div>




      </div>
  </div>
</section>





<!-- Achievement Section Zig Zag -->
<section class="achievement-section bg-white relative py-12">
  <div class="container mx-auto px-4 md:px-16">
    <h2 class="text-4xl md:text-5xl font-bebas text-center mb-10">
      Prestasi Terbaru
    </h2>

    <div class="space-y-10 md:space-y-12"> <!-- jarak antar prestasi dikontrol di sini -->

      <!-- Item 1 -->
      <div class="flex flex-col md:flex-row items-center md:gap-10">
        <!-- Gambar -->
        <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden 
                    hover:shadow-2xl transition-all duration-500 
                    transform hover:-translate-y-2 max-w-sm w-full">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/LKS.png') }}" alt="Juara 2 LKS Nasional"
                 class="w-full h-[24rem] object-cover transform 
                        group-hover:scale-110 transition-transform duration-700 ease-out">
          </div>
        </div>

        <!-- Teks -->
        <div class="md:ml-6 mt-6 md:mt-0 max-w-md">
          <h3 class="text-5xl md:text-6xl font-bebas mb-2">Juara 2 LKS Nasional</h3>
          <h4 class="text-3xl md:text-4xl text-orange-500 font-bebas mb-3">
            Industrial Control
          </h4>
          <p class="text-gray-700 leading-relaxed text-base md:text-lg">
            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
            <u>medali</u> emas di LKS Nasional.
          </p>
        </div>
      </div>

      <!-- Item 2 (gambar di kanan, teks rata kanan) -->
      <div class="flex flex-col md:flex-row items-center md:gap-10 justify-end">
        <!-- Teks -->
        <div class="max-w-md md:order-1 mt-6 md:mt-0 text-right"> 
          <h3 class="text-5xl md:text-6xl font-bebas mb-2">Juara 1 LKS Nasional</h3>
          <h4 class="text-3xl md:text-4xl text-orange-500 font-bebas mb-3">
            Robot Manufacturing System
          </h4>
          <p class="text-gray-700 leading-relaxed text-base md:text-lg">
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
                 class="w-full h-[24rem] object-cover transform 
                        group-hover:scale-110 transition-transform duration-700 ease-out">
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="flex flex-col md:flex-row items-center md:gap-10">
        <!-- Gambar -->
        <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden 
                    hover:shadow-2xl transition-all duration-500 
                    transform hover:-translate-y-2 max-w-sm w-full">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/Prestasi1.png') }}" alt="Juara 2 LKS Nasional"
                 class="w-full h-[24rem] object-cover transform 
                        group-hover:scale-110 transition-transform duration-700 ease-out">
          </div>
        </div>

        <!-- Teks -->
        <div class="md:ml-6 mt-6 md:mt-0 max-w-md">
          <h3 class="text-5xl md:text-6xl font-bebas mb-2">Juara 2 LKS Nasional</h3>
          <h4 class="text-3xl md:text-4xl text-orange-500 font-bebas mb-3">
            Industrial Control
          </h4>
          <p class="text-gray-700 leading-relaxed text-base md:text-lg">
            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
            <u>medali</u> emas di LKS Nasional.
          </p>
        </div>
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


document.addEventListener("DOMContentLoaded", function () {
  const stack = document.querySelectorAll("#image-stack img");
  let index = 0;

  // Start cepat setelah halaman tampil
  setTimeout(() => cycleImages(), 400);

  function cycleImages() {
    const order = [
      stack[index % stack.length],
      stack[(index + 1) % stack.length],
      stack[(index + 2) % stack.length],
    ];

    // Reset posisi semua gambar
    stack.forEach(img => {
      img.style.transition = "all 0.6s cubic-bezier(0.55, 0.085, 0.68, 0.53)";
      img.style.opacity = 0.7;
      img.style.zIndex = 10;
      img.style.transform = "translateY(8px) scale(0.85)";
    });

    // Ambil lebar layar (buat responsif)
    const screenWidth = window.innerWidth;
    let offset = screenWidth < 640 ? 6 : screenWidth < 1024 ? 10 : 14; // rem offset

    // 🔹 Kiri (mundur)
    order[2].style.transform = `translateX(-${offset}rem) translateY(4px) scale(0.85) rotateY(8deg)`;
    order[2].style.opacity = 0.75;
    order[2].style.zIndex = 15;

    // 🔹 Kanan (mundur)
    order[1].style.transform = `translateX(${offset}rem) translateY(4px) scale(0.85) rotateY(-8deg)`;
    order[1].style.opacity = 0.75;
    order[1].style.zIndex = 20;

    // 🔹 Tengah (utama, maju)
    order[0].style.transition = "all 0.8s cubic-bezier(0.25, 1, 0.5, 1)";
    order[0].style.opacity = 1;
    order[0].style.zIndex = 30;
    order[0].style.transform = "translateX(0) translateY(0) scale(1) rotateY(0deg)";

    index++;
    setTimeout(cycleImages, 2500);
  }

  // Update posisi saat resize layar
  window.addEventListener("resize", () => {
    clearTimeout(cycleImages);
    setTimeout(cycleImages, 300);
  });
});

</script>
@endpush


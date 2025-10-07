@extends('layouts.app')

@push('styles')
<style>
    /* === FONT === */
    .font-bebas {
        font-family: 'Bebas Neue', cursive;
    }
    .font-league-spartan {
        font-family: 'League Spartan', sans-serif;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    /* === HERO SECTION === */
    .hero-section {
        padding-top: 1rem;   /* lebih rapat */
        padding-bottom: 1.25rem; 
    }

    .hero-text h1 {
        margin-bottom: 0.2rem;
    }
    .hero-text h2 {
        margin-top: 0.2rem;
    }

    /* === PRESTASI SECTION === */
    .achievement-section {
        padding-top: 1.25rem;   /* semula 4rem */
        padding-bottom: 1.25rem;
    }

    .achievement-section h2 {
        margin-bottom: 0.75rem;
    }

    .achievement-section .space-y-4,
    .achievement-section .space-y-6 {
        row-gap: 0.75rem !important; 
    }

    .achievement-section .flex.md\\:flex-row {
        gap: 1rem !important; 
    }

    .achievement-section h3,
    .achievement-section h4 {
        margin-bottom: 0.25rem;
    }
    .achievement-section p {
        margin-top: 0.25rem;
    }

    .achievement-section .md\\:ml-6 {
        margin-left: 0.75rem !important;
    }
    .achievement-section .mt-3 {
        margin-top: 0.25rem !important;
    }

    /* === BACKGROUND CIRCLES === */
    .bg-orange-blur {
        background: rgba(255, 179.25, 132.16, 0.32);
    }
    .bg-blue-blur {
        background: #AEDBE4;
        opacity: 0.50;
    }

    .bg-circle {
        width: 18rem;
        height: 18rem;
        position: absolute;
    }
    @media (min-width: 1024px) {
        .bg-circle {
            width: 24rem;
            height: 24rem;
        }
    }

    .bg-circles-wrapper {
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: -1;
    }

    /* === RESPONSIVE === */
    @media (max-width: 768px) {
        .hero-text {
            position: static !important;
            text-align: center;
            margin-top: 0.75rem;
        }

        .hero-image {
            position: static !important;
            width: 100% !important;
            height: auto !important;
            margin-top: 1rem;
        }
    }

    @media (max-width: 640px) {
        #image-stack img {
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
    }

    /* === CARD HOVER === */
    .achievement-card {
        transition: transform 0.3s ease;
    }
    .achievement-card:hover {
        transform: translateY(-3px);
    }

    /* === ATUR JARAK ANTAR SECTION (FULL) === */
    section {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
    }

    section + section {
        margin-top: -3.5rem !important;  /* tarik lebih rapat antar section */
    }

    /* Jika ingin lebih rapat lagi, ubah -2.5rem → -3rem */
    /* === PERBAIKI JARAK ANTAR TEKS & GAMBAR DI SECTION PRESTASI === */
.achievement-section .flex {
    align-items: flex-start;           /* pastikan gambar & teks sejajar atas */
    gap: 2rem !important;              /* jarak horizontal gambar-teks (default konsisten) */
}

@media (max-width: 768px) {
    .achievement-section .flex {
        flex-direction: column !important;
        gap: 1rem !important;          /* jarak vertikal antar gambar dan teks di HP */
    }
}

/* Jarak antar elemen teks di dalam deskripsi */
.achievement-section h3 {
    margin-bottom: 0.3rem !important;
}

.achievement-section h4 {
    margin-top: 0rem !important;
    margin-bottom: 0.4rem !important;
}

.achievement-section p {
    margin-top: 0rem !important;
    line-height: 1.5;
}

/* Pastikan jarak kiri-kanan teks konsisten */
.achievement-section .md\:ml-4,
.achievement-section .md\:ml-6 {
    margin-left: 2rem !important;
}

.achievement-section .max-w-md {
    max-width: 32rem; /* biar lebar teks seragam */
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
<section class="achievement-section bg-white relative py-4">
  <div class="container mx-auto px-4 md:px-12">
    <h2 class="text-4xl md:text-5xl font-bebas text-center mb-4">
      Prestasi Terbaru
    </h2>

    <div class="space-y-2 md:space-y-4">

      <!-- Item 1 (gambar kiri) -->
      <div class="flex flex-col md:flex-row items-center md:gap-4">
        <!-- Gambar -->
        <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden 
                    hover:shadow-2xl transition-all duration-500 
                    transform hover:-translate-y-1 max-w-sm w-full">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/LKS.png') }}" alt="Juara 2 LKS Nasional"
                 class="w-full h-[20rem] object-cover transform 
                        group-hover:scale-110 transition-transform duration-700 ease-out">
          </div>
        </div>

        <!-- Teks -->
        <div class="md:ml-4 mt-2 md:mt-0 max-w-md">
          <h3 class="text-4xl md:text-5xl font-bebas mb-0.5">Juara 2 LKS Nasional</h3>
          <h4 class="text-2xl md:text-3xl text-orange-500 font-bebas mb-1">
            Industrial Control
          </h4>
          <p class="text-gray-700 leading-relaxed text-base md:text-lg">
            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
            <u>medali</u> emas di LKS Nasional.
          </p>
        </div>
      </div>

      <!-- Item 2 (gambar kanan) -->
      <div class="flex flex-col md:flex-row items-center md:gap-4 justify-end">
        <!-- Teks -->
        <div class="max-w-md md:order-1 mt-2 md:mt-0 text-right md:mr-4"> 
          <!-- 🔹 Tambahkan md:mr-4 agar jarak ke gambar konsisten -->
          <h3 class="text-4xl md:text-5xl font-bebas mb-0.5">Juara 1 LKS Nasional</h3>
          <h4 class="text-2xl md:text-3xl text-orange-500 font-bebas mb-1">
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
                    transform hover:-translate-y-1 max-w-sm w-full md:order-2">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 1 LKS Nasional"
                 class="w-full h-[20rem] object-cover transform 
                        group-hover:scale-110 transition-transform duration-700 ease-out">
          </div>
        </div>
      </div>

      <!-- Item 3 (gambar kiri lagi) -->
      <div class="flex flex-col md:flex-row items-center md:gap-4">
        <!-- Gambar -->
        <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden 
                    hover:shadow-2xl transition-all duration-500 
                    transform hover:-translate-y-1 max-w-sm w-full">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 2 LKS Nasional"
                 class="w-full h-[20rem] object-cover transform 
                        group-hover:scale-110 transition-transform duration-700 ease-out">
          </div>
        </div>

        <!-- Teks -->
        <div class="md:ml-4 mt-2 md:mt-0 max-w-md">
          <h3 class="text-4xl md:text-5xl font-bebas mb-0.5">Juara 2 LKS Nasional</h3>
          <h4 class="text-2xl md:text-3xl text-orange-500 font-bebas mb-1">
            Industrial Control
          </h4>
          <p class="text-gray-700 leading-relaxed text-base md:text-lg">
            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
            <u>medali</u> emas di LKS Nasional.
          </p>
        </div>
      </div>
      <!-- Item 2 (gambar kanan) -->
      <div class="flex flex-col md:flex-row items-center md:gap-4 justify-end">
        <!-- Teks -->
        <div class="max-w-md md:order-1 mt-2 md:mt-0 text-right md:mr-4"> 
          <!-- 🔹 Tambahkan md:mr-4 agar jarak ke gambar konsisten -->
          <h3 class="text-4xl md:text-5xl font-bebas mb-0.5">Juara 1 LKS Nasional</h3>
          <h4 class="text-2xl md:text-3xl text-orange-500 font-bebas mb-1">
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
                    transform hover:-translate-y-1 max-w-sm w-full md:order-2">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 1 LKS Nasional"
                 class="w-full h-[20rem] object-cover transform 
                        group-hover:scale-110 transition-transform duration-700 ease-out">
          </div>
        </div>
      </div>

      <!-- Item 3 (gambar kiri lagi) -->
      <div class="flex flex-col md:flex-row items-center md:gap-4">
        <!-- Gambar -->
        <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden 
                    hover:shadow-2xl transition-all duration-500 
                    transform hover:-translate-y-1 max-w-sm w-full">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 2 LKS Nasional"
                 class="w-full h-[20rem] object-cover transform 
                        group-hover:scale-110 transition-transform duration-700 ease-out">
          </div>
        </div>

        <!-- Teks -->
        <div class="md:ml-4 mt-2 md:mt-0 max-w-md">
          <h3 class="text-4xl md:text-5xl font-bebas mb-0.5">Juara 2 LKS Nasional</h3>
          <h4 class="text-2xl md:text-3xl text-orange-500 font-bebas mb-1">
            Industrial Control
          </h4>
          <p class="text-gray-700 leading-relaxed text-base md:text-lg">
            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
            <u>medali</u> emas di LKS Nasional.
          </p>
        </div>
      </div>
      <!-- Item 2 (gambar kanan) -->
      <div class="flex flex-col md:flex-row items-center md:gap-4 justify-end">
        <!-- Teks -->
        <div class="max-w-md md:order-1 mt-2 md:mt-0 text-right md:mr-4"> 
          <!-- 🔹 Tambahkan md:mr-4 agar jarak ke gambar konsisten -->
          <h3 class="text-4xl md:text-5xl font-bebas mb-0.5">Juara 1 LKS Nasional</h3>
          <h4 class="text-2xl md:text-3xl text-orange-500 font-bebas mb-1">
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
                    transform hover:-translate-y-1 max-w-sm w-full md:order-2">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 1 LKS Nasional"
                 class="w-full h-[20rem] object-cover transform 
                        group-hover:scale-110 transition-transform duration-700 ease-out">
          </div>
        </div>
      </div>

      <!-- Item 3 (gambar kiri lagi) -->
      <div class="flex flex-col md:flex-row items-center md:gap-4">
        <!-- Gambar -->
        <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden 
                    hover:shadow-2xl transition-all duration-500 
                    transform hover:-translate-y-1 max-w-sm w-full">
          <div class="overflow-hidden">
            <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 2 LKS Nasional"
                 class="w-full h-[20rem] object-cover transform 
                        group-hover:scale-110 transition-transform duration-700 ease-out">
          </div>
        </div>

        <!-- Teks -->
        <div class="md:ml-4 mt-2 md:mt-0 max-w-md">
          <h3 class="text-4xl md:text-5xl font-bebas mb-0.5">Juara 2 LKS Nasional</h3>
          <h4 class="text-2xl md:text-3xl text-orange-500 font-bebas mb-1">
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


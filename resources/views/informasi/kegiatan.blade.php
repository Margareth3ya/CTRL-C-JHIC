@extends('layouts.app')

@push('styles')
<style>

    .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

.bg-circle {
    position: absolute;
    width: 20rem;
    height: 20rem;
    border-radius: 50%; /* lingkaran sempurna */
}
@media (min-width: 1024px) {
    .bg-circle {
        width: 28rem;
        height: 28rem;
    }
}

        .bg-orange-blur {
            background: rgba(255, 179, 132, 0.32); /* perbaikan angka */
        }
        
        .bg-blue-blur {
            background: rgba(174, 219, 228, 0.5);
        }
    .slideshow-container {
        position: relative;
        width: 100%;
        height: 28rem; /* konsisten dengan card lain */
        overflow: hidden;
    }
    .slideshow-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .fade {
        animation: fadeEffect 1s ease-in-out;
    }
    @keyframes fadeEffect {
        from { opacity: 0.3; }
        to { opacity: 1; }
    }
</style>
@endpush

@section('content')
<div class="relative w-full min-h-screen overflow-hidden bg-gray-50">

    <!-- Background Circles -->
<div class="absolute inset-0 pointer-events-none z-0">
    <div class="bg-blue-blur bg-circle -left-32 -top-20"></div>
    <div class="bg-blue-blur bg-circle -left-28 top-1/3"></div>
    <div class="bg-orange-blur bg-circle -right-32 top-24"></div>
    <div class="bg-orange-blur bg-circle -right-28 bottom-40"></div>
</div>


        <div class="absolute inset-0 bg-white bg-opacity-35 -z-0"></div>


    <div class="relative container mx-auto px-4 pt-10 md:pt-32 lg:pt-20 pb-12 z-20">

        <!-- === Section 1 === -->
        <div class="flex justify-center">
            <div class="grid grid-cols-1 lg:grid-cols-[300px_700px_300px] gap-6">

                <!-- Left Card -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/Kegiatan2.png') }}" alt="Berita 2" 
                             class="w-full h-[28rem] object-cover transform 
                                    group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-lg md:text-xl font-semibold text-white mb-1">
                            Upacara memperingati hari pendidikan nasional
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base">- 2 Agustus 2025</p>
                    </div>
                </div>

                <!-- Center Slideshow Card -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="slideshow-container">
                        <img id="slideImage" src="{{ asset('assets/Kegiatan1.png') }}" alt="Slide 1" class="fade">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <h3 id="slideTitle" class="text-xl md:text-2xl lg:text-3xl font-semibold text-white mb-2">
                            Kegiatan acara demonstrasi ekstrakurikuler
                        </h3>
                        <p id="slideDate" class="text-gray-200 text-sm md:text-base">- 2 Agustus 2025</p>
                    </div>
                </div>

                <!-- Right Card -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/Kegiatan3.png') }}" alt="Berita 3"
                             class="w-full h-[28rem] object-cover transform 
                                    group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-lg md:text-xl font-semibold text-white mb-1">
                            Event tahunan Skariga LebaRun
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base">- 14 Juni 2025</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Judul -->
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-center font-bebas text-black mt-20 mb-8 md:mb-16">
            Galeri Kegiatan
        </h1>

        <!-- === Gallery Section (4 kolom) === -->
        <div class="container mx-auto px-4 py-6 md:py-8 lg:py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/Kegiatan4.png') }}" alt="Halal Bihalal"
                             class="w-full h-[28rem] object-cover transform 
                                    group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-lg md:text-xl font-semibold text-white mb-1">
                            Acara Halal Bihalal Skariga
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base">- 2 Mei 2025</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/Kegiatan5.png') }}" alt="Halal Bihalal"
                             class="w-full h-[28rem] object-cover transform 
                                    group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-lg md:text-xl font-semibold text-white mb-1">
                            Acara Halal Bihalal Skariga
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base">- 2 Mei 2025</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/Kegiatan6.png') }}" alt="Halal Bihalal"
                             class="w-full h-[28rem] object-cover transform 
                                    group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-lg md:text-xl font-semibold text-white mb-1">
                            Acara Halal Bihalal Skariga
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base">- 2 Mei 2025</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/Kegiatan7.png') }}" alt="Kegiatan Lain"
                             class="w-full h-[28rem] object-cover transform 
                                    group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-lg md:text-xl font-semibold text-white mb-1">
                            Kegiatan Lain
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base">- 10 Mei 2025</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
        <!-- === Gallery Section (4 kolom) === -->
        <div class="container mx-auto px-4 py-6 md:py-8 lg:py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/Kegiatan4.png') }}" alt="Halal Bihalal"
                             class="w-full h-[28rem] object-cover transform 
                                    group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-lg md:text-xl font-semibold text-white mb-1">
                            Acara Halal Bihalal Skariga
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base">- 2 Mei 2025</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/Kegiatan5.png') }}" alt="Halal Bihalal"
                             class="w-full h-[28rem] object-cover transform 
                                    group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-lg md:text-xl font-semibold text-white mb-1">
                            Acara Halal Bihalal Skariga
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base">- 2 Mei 2025</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/Kegiatan6.png') }}" alt="Halal Bihalal"
                             class="w-full h-[28rem] object-cover transform 
                                    group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-lg md:text-xl font-semibold text-white mb-1">
                            Acara Halal Bihalal Skariga
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base">- 2 Mei 2025</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="group relative bg-white rounded-xl shadow-md overflow-hidden 
                            hover:shadow-2xl transition-all duration-500 
                            w-full mx-auto transform hover:-translate-y-2">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/Kegiatan7.png') }}" alt="Kegiatan Lain"
                             class="w-full h-[28rem] object-cover transform 
                                    group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-lg md:text-xl font-semibold text-white mb-1">
                            Kegiatan Lain
                        </h3>
                        <p class="text-gray-200 text-sm md:text-base">- 10 Mei 2025</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    let slideIndex = 0;
    const slideData = [
        { image: "{{ asset('assets/Kegiatan1.png') }}", title: "Kegiatan acara demonstrasi ekstrakurikuler", date: "- 2 Agustus 2025" },
        { image: "{{ asset('assets/Kegiatan2.png') }}", title: "Upacara memperingati hari pendidikan nasional", date: "- 17 Agustus 2025" },
        { image: "{{ asset('assets/Kegiatan3.png') }}", title: "Event tahunan Skariga LebaRun", date: "- 14 Juni 2025" },
    ];

    function showSlides() {
        slideIndex++;
        if (slideIndex >= slideData.length) slideIndex = 0;

        const imgEl = document.getElementById("slideImage");
        const titleEl = document.getElementById("slideTitle");
        const dateEl = document.getElementById("slideDate");

        // Tambahkan efek fade
        imgEl.classList.remove("fade");
        void imgEl.offsetWidth; // trigger reflow
        imgEl.classList.add("fade");

        // Update konten
        imgEl.src = slideData[slideIndex].image;
        titleEl.innerText = slideData[slideIndex].title;
        dateEl.innerText = slideData[slideIndex].date;

        setTimeout(showSlides, 4000);
    }

    // jalankan pertama kali
    window.addEventListener("load", () => {
        setTimeout(showSlides, 4000);
    });
</script>
@endpush

@extends('layouts.app')

@push('styles')
    <style>
        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <div class="relative w-full min-h-screen overflow-hidden bg-gray-50">
        <div class="absolute inset-0 bg-white bg-opacity-35"></div>
        
        <!-- Main Content -->
        <div class="relative container mx-auto px-4 pt-24 md:pt-32 lg:pt-40 pb-12">
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl text-center font-bebas text-black mb-8 md:mb-16">
                Galeri Kegiatan
            </h1>

            <!-- === Gallery Grid - Section 1 === -->
            <div class="flex justify-center">
                <div class="grid grid-cols-1 lg:grid-cols-[300px_700px_300px] gap-6">
                    
                    <!-- Left Image (Small) -->
                    <div>
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <img src="{{ asset('assets/Kegiatan2.png') }}" alt="Berita 2" 
                                 class="w-full h-48 md:h-56 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg md:text-xl font-semibold text-black mb-2">
                                    Upacara memperingati hari pendidikan nasional
                                </h3>
                                <p class="text-gray-600 text-sm md:text-base">- 2 Agustus 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- Center Image (Large, fixed 700px) -->
                    <div>
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ asset('assets/Kegiatan1.png') }}" alt="Berita 1"
                                 class="w-full h-64 md:h-80 lg:h-96 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-black mb-3">
                                    Kegiatan acara demonstrasi ekstrakurikuler
                                </h3>
                                <p class="text-gray-600 text-base md:text-lg">- 2 Agustus 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Image (Small, fixed 300px) -->
                    <div>
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <img src="{{ asset('assets/Kegiatan3.png') }}" alt="Berita 3"
                                 class="w-full h-48 md:h-56 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg md:text-xl font-semibold text-black mb-2">
                                    Event tahunan 5kariga LebaRun
                                </h3>
                                <p class="text-gray-600 text-sm md:text-base">- 14 Juni 2025</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

<!-- === Gallery Section === -->
<div class="container mx-auto px-4 py-6 md:py-8 lg:py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
        
        <!-- Card 1 -->
        <div class="group rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 max-w-sm w-full">
            <img src="{{ asset('assets/Kegiatan4.png') }}" alt="Halal Bihalal"
                 class="w-full h-80 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300">
            <div class="p-4">
                <h3 class="text-lg md:text-xl font-semibold text-black mb-1">
                    Acara Halal Bihalal Skariga
                </h3>
                <p class="text-gray-600 text-sm md:text-base">- 2 Mei 2025</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="group rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 max-w-sm w-full">
            <img src="{{ asset('assets/Kegiatan5.png') }}" alt="Halal Bihalal"
                 class="w-full h-80 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300">
            <div class="p-4">
                <h3 class="text-lg md:text-xl font-semibold text-black mb-1">
                    Acara Halal Bihalal Skariga
                </h3>
                <p class="text-gray-600 text-sm md:text-base">- 2 Mei 2025</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="group rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 max-w-sm w-full">
            <img src="{{ asset('assets/Kegiatan6.png') }}" alt="Halal Bihalal"
                 class="w-full h-80 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300">
            <div class="p-4">
                <h3 class="text-lg md:text-xl font-semibold text-black mb-1">
                    Acara Halal Bihalal Skariga
                </h3>
                <p class="text-gray-600 text-sm md:text-base">- 2 Mei 2025</p>
            </div>
        </div>

    </div>

    <!-- === Gallery Section === -->
<div class="container mx-auto px-4 py-6 md:py-8 lg:py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
        
        <!-- Card 1 -->
        <div class="group rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 max-w-sm w-full">
            <img src="{{ asset('assets/Kegiatan4.png') }}" alt="Halal Bihalal"
                 class="w-full h-80 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300">
            <div class="p-4">
                <h3 class="text-lg md:text-xl font-semibold text-black mb-1">
                    Acara Halal Bihalal Skariga
                </h3>
                <p class="text-gray-600 text-sm md:text-base">- 2 Mei 2025</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="group rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 max-w-sm w-full">
            <img src="{{ asset('assets/Kegiatan5.png') }}" alt="Halal Bihalal"
                 class="w-full h-80 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300">
            <div class="p-4">
                <h3 class="text-lg md:text-xl font-semibold text-black mb-1">
                    Acara Halal Bihalal Skariga
                </h3>
                <p class="text-gray-600 text-sm md:text-base">- 2 Mei 2025</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="group rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 max-w-sm w-full">
            <img src="{{ asset('assets/Kegiatan6.png') }}" alt="Halal Bihalal"
                 class="w-full h-80 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300">
            <div class="p-4">
                <h3 class="text-lg md:text-xl font-semibold text-black mb-1">
                    Acara Halal Bihalal Skariga
                </h3>
                <p class="text-gray-600 text-sm md:text-base">- 2 Mei 2025</p>
            </div>
        </div>

    </div>
</div>

</div>

    </div>
@endsection

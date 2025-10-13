@extends('layouts.app')

@section('content')
<div class="min-h-screen">

    <!-- Hero Section -->
    <section class="pt-4 pb-5 relative overflow-hidden bg-gradient-to-br from-white to-white">
        <div class="container mx-auto flex flex-col items-center text-center gap-4 px-4 md:px-16">
            
            <!-- Text -->
            <div class="hero-text">
                <h1 class="text-orange-500 text-5xl md:text-6xl font-bebas leading-tight">
                    SKAriga
                </h1>
                <h2 class="text-black text-4xl md:text-5xl font-bebas leading-tight">
                    sekolahnya murid berprestasi
                </h2>
            </div>

            <div id="image-stack" class="relative flex items-center justify-center w-full h-96 md:h-[26rem]">
                <img src="{{ asset('assets/Prestasi1.jpg') }}"
                     class="absolute w-3/4 sm:w-1/2 md:w-[30%] h-80 md:h-[26rem] object-cover rounded-xl shadow-lg transition-all duration-500 ease-custom"
                     alt="Prestasi 1">
                <img src="{{ asset('assets/Prestasi2.jpg') }}"
                     class="absolute w-3/4 sm:w-1/2 md:w-[30%] h-80 md:h-[26rem] object-cover rounded-xl shadow-lg transition-all duration-500 ease-custom"
                     alt="Prestasi 2">
                <img src="{{ asset('assets/Prestasi3.jpg') }}"
                     class="absolute w-3/4 sm:w-1/2 md:w-[30%] h-80 md:h-[26rem] object-cover rounded-xl shadow-lg transition-all duration-500 ease-custom"
                     alt="Prestasi 3">
            </div>
        </div>
    </section>

    <!-- Achievement Section -->
    <section class="py-16 md:py-20 px-4 relative overflow-hidden bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto">
            <h2 class="mb-12 relative text-center w-full block font-bebas text-4xl bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent after:content-[''] after:absolute after:-bottom-2.5 after:left-1/2 after:transform after:-translate-x-1/2 after:w-24 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                PRESTASI TERBARU
            </h2>

            <!-- Page 1 -->
            <div class="achievement-page active" id="page-1">
                <div class="flex flex-col gap-10 max-w-[1400px] mx-auto">
                    
                    <!-- Pair 1: KIRI BESAR, Kanan kecil -->
                    <div class="achievement-pair flex justify-between flex-wrap gap-8 items-start">
                        <!-- Achievement 1 - Kiri (BESAR) -->
                        <div class="achievement-item left-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[340px] max-h-[360px]">
                            <div class="achievement-image-container flex-0 w-[45%] mr-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/LKS.png') }}" alt="Juara 1 LKS Nasional"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 1 LKS Nasional
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Industrial Control
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-8">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali emas</u> di LKS Nasional dengan prestasi luar biasa di bidang Industrial Control.
                                    Tim kami menunjukkan keahlian teknis yang exceptional dalam merancang sistem kontrol industri.
                                    Prestasi ini merupakan bukti nyata kualitas pendidikan vokasi di SKARIGA.
                                    Siswa berhasil mengalahkan puluhan peserta dari seluruh Indonesia.
                                    Inovasi yang ditampilkan mendapat apresiasi tinggi dari para juri.
                                    Prestasi ini membuka peluang kerjasama dengan industri nasional.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 2 - Kanan (kecil) -->
                        <div class="achievement-item right-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[280px] max-h-[300px] mt-16">
                            <div class="achievement-image-container flex-0 w-[45%] ml-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 2 LKS Nasional"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:right-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 2 LKS Nasional
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Robot Manufacturing System
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-4">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
                                    <u>medali perak</u> di LKS Nasional dengan inovasi di bidang Robot Manufacturing System.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pair 2: Kanan besar, Kiri kecil -->
                    <div class="achievement-pair flex justify-between flex-wrap gap-8 items-start">
                        <!-- Achievement 3 - Kiri (kecil) -->
                        <div class="achievement-item left-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[280px] max-h-[300px] mt-16">
                            <div class="achievement-image-container flex-0 w-[45%] mr-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 3 LKS Nasional"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 3 LKS Nasional
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Teknik Komputer
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-4">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali perunggu</u> di LKS Nasional dengan performa konsisten di bidang Teknik Komputer.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 4 - Kanan (besar) -->
                        <div class="achievement-item right-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[340px] max-h-[360px]">
                            <div class="achievement-image-container flex-0 w-[45%] ml-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Juara 1 Olimpiade Sains"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:right-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 1 Olimpiade Sains
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Fisika Terapan
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-8">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali emas</u> di Olimpiade Sains Nasional dengan keunggulan di bidang Fisika Terapan.
                                    Siswa menunjukkan pemahaman mendalam tentang konsep fisika dalam aplikasi industri.
                                    Prestasi ini membuktikan bahwa pendidikan vokasi juga unggul dalam bidang sains.
                                    Tim berhasil menyelesaikan semua tantangan dengan solusi kreatif dan inovatif.
                                    Prestasi ini menjadi inspirasi bagi siswa lainnya untuk terus berprestasi.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pair 3: Kiri besar, Kanan kecil -->
                    <div class="achievement-pair flex justify-between flex-wrap gap-8 items-start">
                        <!-- Achievement 5 - Kiri (besar) -->
                        <div class="achievement-item left-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[340px] max-h-[360px]">
                            <div class="achievement-image-container flex-0 w-[45%] mr-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 1 Kompetisi Programming"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 1 Kompetisi Programming
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Web Development
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-8">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali emas</u> di Kompetisi Programming Nasional dengan karya inovatif di bidang Web Development.
                                    Aplikasi web yang dikembangkan berhasil memecahkan masalah nyata di masyarakat.
                                    Tim programming menunjukkan kemampuan coding yang sangat mumpuni.
                                    Prestasi ini membuktikan kesiapan siswa SKARIGA menghadapi era digital.
                                    Inovasi yang dibuat mendapat perhatian dari perusahaan teknologi ternama.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 6 - Kanan (kecil) -->
                        <div class="achievement-item right-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[280px] max-h-[300px] mt-16">
                            <div class="achievement-image-container flex-0 w-[45%] ml-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 2 Lomba Desain"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:right-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 2 Lomba Desain
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Graphic Design
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-4">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali perak</u> di Lomba Desain Grafis Nasional dengan kreativitas luar biasa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page 2 -->
            <div class="achievement-page hidden" id="page-2">
                <div class="flex flex-col gap-10 max-w-[1400px] mx-auto">
                    
                    <!-- Pair 1: Kanan besar, Kiri kecil -->
                    <div class="achievement-pair flex justify-between flex-wrap gap-8 items-start">
                        <!-- Achievement 7 - Kiri (kecil) -->
                        <div class="achievement-item left-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[280px] max-h-[300px] mt-16">
                            <div class="achievement-image-container flex-0 w-[45%] mr-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Juara 3 Lomba Bahasa Inggris"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 3 Lomba Bahasa Inggris
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Public Speaking
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-4">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali perunggu</u> di Lomba Bahasa Inggris Nasional dengan kemampuan public speaking.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 8 - Kanan (besar) -->
                        <div class="achievement-item right-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[340px] max-h-[360px]">
                            <div class="achievement-image-container flex-0 w-[45%] ml-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 1 Lomba Elektronika"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:right-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 1 Lomba Elektronika
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Elektronika Dasar
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-8">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali emas</u> di Lomba Elektronika Nasional dengan penguasaan konsep yang mendalam.
                                    Siswa mendemonstrasikan kemampuan troubleshooting dan desain sirkuit yang excellent.
                                    Prestasi ini menunjukkan kualitas laboratorium dan pengajaran elektronika di sekolah.
                                    Tim berhasil menyelesaikan semua tantangan teknis dengan solusi yang efisien.
                                    Prestasi ini membuka peluang kerjasama dengan industri elektronika nasional.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pair 2: Kiri besar, Kanan kecil -->
                    <div class="achievement-pair flex justify-between flex-wrap gap-8 items-start">
                        <!-- Achievement 9 - Kiri (besar) -->
                        <div class="achievement-item left-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[340px] max-h-[360px]">
                            <div class="achievement-image-container flex-0 w-[45%] mr-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 1 Lomba Jaringan"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 1 Lomba Jaringan
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Network Security
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-8">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali emas</u> di Lomba Jaringan Komputer dengan keahlian di bidang keamanan jaringan.
                                    Tim jaringan menunjukkan kemampuan mengamankan sistem dari berbagai ancaman cyber.
                                    Prestasi ini membuktikan kesiapan siswa menghadapi tantangan keamanan digital.
                                    Solusi yang diberikan mendapat apresiasi dari pakar keamanan siber.
                                    Prestasi ini meningkatkan reputasi sekolah di bidang teknologi informasi.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 10 - Kanan (kecil) -->
                        <div class="achievement-item right-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[280px] max-h-[300px] mt-16">
                            <div class="achievement-image-container flex-0 w-[45%] ml-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Juara 2 Lomba Matematika"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:right-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 2 Lomba Matematika
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Matematika Terapan
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-4">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali perak</u> di Lomba Matematika Nasional dengan solusi kreatif.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pair 3: Kanan besar, Kiri kecil -->
                    <div class="achievement-pair flex justify-between flex-wrap gap-8 items-start">
                        <!-- Achievement 11 - Kiri (kecil) -->
                        <div class="achievement-item left-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[280px] max-h-[300px] mt-16">
                            <div class="achievement-image-container flex-0 w-[45%] mr-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 3 Lomba Otomotif"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 3 Lomba Otomotif
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Teknik Kendaraan
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-4">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali perunggu</u> di Lomba Otomotif Nasional dengan keahlian di bidang teknik kendaraan.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 12 - Kanan (besar) -->
                        <div class="achievement-item right-layout flex items-stretch flex-1 min-w-[48%] bg-white rounded-2xl shadow-xl p-8 transition-all duration-400 ease-in-out border border-gray-100 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:border-orange-500 min-h-[340px] max-h-[360px]">
                            <div class="achievement-image-container flex-0 w-[45%] ml-6 relative flex items-center justify-center">
                                <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 1 Lomba Kewirausahaan"
                                     class="achievement-image w-full h-full max-w-[260px] max-h-[260px] min-w-[220px] min-h-[220px] object-cover rounded-xl shadow-lg transition-all duration-400 ease-in-out border-2 border-white relative z-10 hover:scale-105 hover:shadow-xl">
                            </div>
                            <div class="achievement-content flex-1 relative z-10 flex flex-col justify-center">
                                <h3 class="font-bebas text-3xl mb-2 bg-gradient-to-br from-gray-800 to-gray-700 bg-clip-text text-transparent relative after:content-[''] after:absolute after:-bottom-1 after:right-0 after:w-12 after:h-0.5 after:bg-gradient-to-r after:from-orange-500 after:to-orange-300 after:rounded">
                                    Juara 1 Lomba Kewirausahaan
                                </h3>
                                <h4 class="font-bebas text-2xl text-orange-500 mb-3">
                                    Business Plan
                                </h4>
                                <p class="font-poppins text-sm text-gray-600 leading-relaxed mt-3 line-clamp-8">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali emas</u> di Lomba Kewirausahaan Nasional dengan business plan yang inovatif.
                                    Tim kewirausahaan berhasil menciptakan model bisnis yang sustainable dan profitable.
                                    Prestasi ini menunjukkan bahwa siswa SKARIGA tidak hanya terampil teknis tapi juga entrepreneurial.
                                    Business plan yang dibuat mendapat perhatian dari investor potensial.
                                    Prestasi ini membuktikan komitmen sekolah dalam mencetak lulusan yang mandiri dan kreatif.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination Controls -->
            <div class="pagination-container flex justify-center items-center mt-16 mb-8 gap-4 flex-wrap">
                <button class="pagination-btn px-7 py-3.5 bg-gradient-to-br from-orange-500 to-orange-600 text-white border-none rounded-xl font-poppins font-semibold cursor-pointer transition-all duration-300 shadow-lg shadow-orange-500/30 relative overflow-hidden hover:-translate-y-1 hover:shadow-xl hover:shadow-orange-500/40 disabled:bg-gradient-to-br disabled:from-gray-300 disabled:to-gray-400 disabled:cursor-not-allowed disabled:transform-none disabled:shadow disabled:shadow-gray-300/30" id="prev-btn" disabled>
                    ← Sebelumnya
                </button>
                
                <div class="page-info font-poppins font-semibold text-gray-700 bg-gray-50 px-6 py-3 rounded-xl border border-gray-200 min-w-[120px] text-center">
                    Halaman <span id="current-page">1</span> dari <span id="total-pages">2</span>
                </div>
                
                <button class="pagination-btn px-7 py-3.5 bg-gradient-to-br from-orange-500 to-orange-600 text-white border-none rounded-xl font-poppins font-semibold cursor-pointer transition-all duration-300 shadow-lg shadow-orange-500/30 relative overflow-hidden hover:-translate-y-1 hover:shadow-xl hover:shadow-orange-500/40 disabled:bg-gradient-to-br disabled:from-gray-300 disabled:to-gray-400 disabled:cursor-not-allowed disabled:transform-none disabled:shadow disabled:shadow-gray-300/30" id="next-btn">
                    Selanjutnya →
                </button>
            </div>
        </div>
    </section>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Image stack animation
        const stack = document.querySelectorAll("#image-stack img");
        let index = 0;

        setTimeout(() => cycleImages(), 400);

        function cycleImages() {
            const order = [
                stack[index % stack.length],
                stack[(index + 1) % stack.length],
                stack[(index + 2) % stack.length],
            ];

            stack.forEach(img => {
                img.style.transition = "all 0.6s cubic-bezier(0.55, 0.085, 0.68, 0.53)";
                img.style.opacity = 0.7;
                img.style.zIndex = 10;
                img.style.transform = "translateY(8px) scale(0.85)";
            });

            const screenWidth = window.innerWidth;
            let offset = screenWidth < 640 ? 6 : screenWidth < 1024 ? 10 : 14;

            order[2].style.transform = `translateX(-${offset}rem) translateY(4px) scale(0.85) rotateY(8deg)`;
            order[2].style.opacity = 0.75;
            order[2].style.zIndex = 15;

            order[1].style.transform = `translateX(${offset}rem) translateY(4px) scale(0.85) rotateY(-8deg)`;
            order[1].style.opacity = 0.75;
            order[1].style.zIndex = 20;

            order[0].style.transition = "all 0.8s cubic-bezier(0.25, 1, 0.5, 1)";
            order[0].style.opacity = 1;
            order[0].style.zIndex = 30;
            order[0].style.transform = "translateX(0) translateY(0) scale(1) rotateY(0deg)";

            index++;
            setTimeout(cycleImages, 2500);
        }

        // Pagination functionality
        const pages = document.querySelectorAll('.achievement-page');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const currentPageEl = document.getElementById('current-page');
        const totalPagesEl = document.getElementById('total-pages');
        
        let currentPage = 1;
        const totalPages = pages.length;
        
        totalPagesEl.textContent = totalPages;
        
        function updatePagination() {
            // Hide all pages
            pages.forEach(page => page.classList.add('hidden'));
            pages.forEach(page => page.classList.remove('active', 'block'));
            
            // Show current page
            const currentPageElement = document.getElementById(`page-${currentPage}`);
            currentPageElement.classList.remove('hidden');
            currentPageElement.classList.add('active', 'block');
            
            // Update page indicator
            currentPageEl.textContent = currentPage;
            
            // Update button states
            prevBtn.disabled = currentPage === 1;
            nextBtn.disabled = currentPage === totalPages;
        }
        
        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                updatePagination();
            }
        });
        
        nextBtn.addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                updatePagination();
            }
        });

        // Responsive adjustments for cards
        function adjustCardHeights() {
            const achievementItems = document.querySelectorAll('.achievement-item');
            const isTablet = window.innerWidth <= 1024 && window.innerWidth > 768;
            const isMobile = window.innerWidth <= 768;
            
            if (isTablet) {
                achievementItems.forEach(item => {
                    item.classList.remove('min-h-[280px]', 'min-h-[340px]', 'max-h-[300px]', 'max-h-[360px]', 'mt-16');
                    item.classList.add('min-h-[300px]', 'max-h-[320px]');
                });
            } else if (isMobile) {
                achievementItems.forEach(item => {
                    item.classList.remove('min-h-[280px]', 'min-h-[340px]', 'max-h-[300px]', 'max-h-[360px]', 'mt-16');
                    item.classList.add('min-h-auto', 'max-h-none');
                });
            }
        }
        
        // Initial adjustment
        adjustCardHeights();
        
        // Adjust on resize
        window.addEventListener('resize', () => {
            adjustCardHeights();
            clearTimeout(cycleImages);
            setTimeout(cycleImages, 300);
        });
    });
</script>

<style>

    .font-bebas {
        font-family: 'Bebas Neue', cursive;
    }
    /* Custom utility classes for line clamping */
    .line-clamp-4 {
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-8 {
        display: -webkit-box;
        -webkit-line-clamp: 8;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Custom easing function */
    .ease-custom {
        transition-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
    }
    
    /* Animation for page transitions */
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
    
    .achievement-page.active {
        animation: fadeInUp 0.6s ease-out;
    }
    
    /* Custom styles for pagination button hover effect */
    .pagination-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }
    
    .pagination-btn:hover:not(:disabled)::before {
        left: 100%;
    }
    
    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .achievement-item {
            min-height: 300px !important;
            max-height: 320px !important;
            margin-top: 0 !important;
        }
    }
    
    @media (max-width: 768px) {
        .achievement-item {
            flex-direction: column !important;
            text-align: center !important;
            min-height: auto !important;
            max-height: none !important;
            margin-top: 0 !important;
        }
        
        .achievement-image-container {
            margin: 0 0 1rem 0 !important;
            flex: 0 0 auto !important;
            width: 100% !important;
        }
        
        .achievement-content h3::after {
            left: 50% !important;
            transform: translateX(-50%);
        }
        
        .achievement-image {
            width: 200px !important;
            height: 200px !important;
            max-width: none !important;
            max-height: none !important;
        }
    }
</style>
@endsection
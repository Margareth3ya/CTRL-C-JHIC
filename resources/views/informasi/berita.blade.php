@extends('layouts.app')
@section('content')
<!-- ===== Section 1 ===== -->
<section class="py-12 md:py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-black mb-8 md:mb-12 text-center">
            BERITA TERBARU
        </h2>

        <div class="flex flex-col lg:flex-row gap-6 md:gap-8">
            <!-- Gambar Besar Kiri -->
            <a href="/informasi/berita/berita"
                class="lg:w-2/3 group relative rounded-xl overflow-hidden cursor-pointer">
                <div class="relative w-full h-64 md:h-[500px]">
                    <img src="{{ asset('assets/Berita1.png') }}" alt="Berita 1"
                        class="absolute inset-0 w-full h-full object-cover" />
                    <!-- Overlay muncul saat hover -->
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300 p-6 flex flex-col justify-end">
                        <h3 class="text-white text-xl md:text-2xl font-semibold mb-2">
                            SMK PGRI 3 Malang Raih Emas & Perak LKS Nasional 2025
                        </h3>
                        <p class="text-gray-200 text-sm mb-2 line-clamp-2">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil
                            mempertahankan medali emas di Lomba Kompetensi Siswa (LKS) Nasional.
                        </p>
                        <span class="text-blue-400 font-medium text-sm mt-1 inline-block">
                            Baca Selengkapnya →
                        </span>
                    </div>
                </div>
            </a>

            <!-- Dua Card di Kanan -->
            <div class="lg:w-1/3 flex flex-col gap-6">
                <!-- Card 1 -->
                <div
                    class="flex flex-1 bg-white rounded-xl shadow-md overflow-hidden hover:scale-105 hover:shadow-lg transition-transform transition-shadow duration-300">
                    <img class="w-1/3 h-full object-cover" src="{{ asset('assets/Berita2.png') }}" alt="Berita 2" />
                    <div class="p-4 flex flex-col justify-between">
                        <div>
                            <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-1 line-clamp-2">
                                Gubernur Jatim Apresiasi Skariga Bentuk Karakter
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-2">
                                Gubernur Jawa Timur, Khofifah Indar Parawansa menyatakan
                                keyakinannya bahwa dunia pendidikan Sekolah Menengah
                                Kejuruan (SMK)…
                            </p>
                        </div>
                        <a href="/berita-2" class="text-blue-500 font-medium text-sm mt-2 inline-block">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="flex flex-1 bg-white rounded-xl shadow-md overflow-hidden hover:scale-105 hover:shadow-lg transition-transform transition-shadow duration-300">
                    <img class="w-1/3 h-full object-cover" src="{{ asset('assets/Berita3.png') }}" alt="Berita 3" />
                    <div class="p-4 flex flex-col justify-between">
                        <div>
                            <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-1 line-clamp-2">
                                Pembekalan PKL Kelas XI Skariga, Tanamkan Disiplin
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-2">
                                Ratusan siswa kelas XI SMK PGRI 3 Malang siap berangkat
                                melaksanakan tugas Praktik Kerja Lapangan (PKL).
                            </p>
                        </div>
                        <a href="/berita-3" class="text-blue-500 font-medium text-sm mt-2 inline-block">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 md:py-16">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-6 md:gap-8">
            <!-- Gambar Besar Kiri -->
            <a href="/berita-lengkap" class="lg:w-2/3 group relative rounded-xl overflow-hidden cursor-pointer">
                <div class="relative w-full h-64 md:h-[500px]">
                    <img src="{{ asset('assets/Berita1.png') }}" alt="Berita 1"
                        class="absolute inset-0 w-full h-full object-cover" />
                    <!-- Overlay muncul saat hover -->
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300 p-6 flex flex-col justify-end">
                        <h3 class="text-white text-xl md:text-2xl font-semibold mb-2">
                            SMK PGRI 3 Malang Raih Emas & Perak LKS Nasional 2025
                        </h3>
                        <p class="text-gray-200 text-sm mb-2 line-clamp-2">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil
                            mempertahankan medali emas di Lomba Kompetensi Siswa (LKS) Nasional.
                        </p>
                        <span class="text-blue-400 font-medium text-sm mt-1 inline-block">
                            Baca Selengkapnya →
                        </span>
                    </div>
                </div>
            </a>

            <!-- Dua Card di Kanan -->
            <div class="lg:w-1/3 flex flex-col gap-6">
                <!-- Card 1 -->
                <div
                    class="flex flex-1 bg-white rounded-xl shadow-md overflow-hidden hover:scale-105 hover:shadow-lg transition-transform transition-shadow duration-300">
                    <img class="w-1/3 h-full object-cover" src="{{ asset('assets/Berita2.png') }}" alt="Berita 2" />
                    <div class="p-4 flex flex-col justify-between">
                        <div>
                            <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-1 line-clamp-2">
                                Gubernur Jatim Apresiasi Skariga Bentuk Karakter
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-2">
                                Gubernur Jawa Timur, Khofifah Indar Parawansa menyatakan
                                keyakinannya bahwa dunia pendidikan Sekolah Menengah
                                Kejuruan (SMK)…
                            </p>
                        </div>
                        <a href="/berita-2" class="text-blue-500 font-medium text-sm mt-2 inline-block">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="flex flex-1 bg-white rounded-xl shadow-md overflow-hidden hover:scale-105 hover:shadow-lg transition-transform transition-shadow duration-300">
                    <img class="w-1/3 h-full object-cover" src="{{ asset('assets/Berita3.png') }}" alt="Berita 3" />
                    <div class="p-4 flex flex-col justify-between">
                        <div>
                            <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-1 line-clamp-2">
                                Pembekalan PKL Kelas XI Skariga, Tanamkan Disiplin
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-2">
                                Ratusan siswa kelas XI SMK PGRI 3 Malang siap berangkat
                                melaksanakan tugas Praktik Kerja Lapangan (PKL).
                            </p>
                        </div>
                        <a href="/berita-3" class="text-blue-500 font-medium text-sm mt-2 inline-block">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
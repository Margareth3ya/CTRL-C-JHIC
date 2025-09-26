@extends('layouts.app')

@section('content')
    <!-- Section: Organisasi OSIS -->
    <section class="text-center my-16 px-4">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('assets/osis.png') }}" alt="Foto OSIS" class="w-48 h-48 object-cover rounded-full">
        </div>
        <h2 class="text-2xl font-bold mb-4">ORGANISASI OSIS</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
            Organisasi Siswa Intra Sekolah (OSIS) SMK PQR 3 Malang adalah wadah resmi bagi siswa untuk merealisasikan aspirasi, mengembangkan bakat dan minat, serta melatih kepemimpinan dan tanggung jawab. OSIS aktif mengadakan berbagai program sekolah, baik di bidang akademik, olahraga, seni, maupun sosial kemasyarakatan.
        </p>
    </section>

    <!-- Section: Ekstrakurikuler -->
    <section class="px-4 mb-20">
        <h2 class="text-2xl font-bold text-center mb-10">EKSTRAKURIKULER</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Futsal -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative group">
                <img src="{{ asset('assets/futsal.png') }}" alt="Futsal" class="w-full h-60 object-cover brightness-75 group-hover:brightness-50 transition duration-300">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-xl font-bold">Futsal</h3>
                    <p class="text-sm max-w-xs">
                        Ekstrakurikuler futsal merupakan kegiatan olahraga yang digemari oleh banyak siswa dan menjadi ajang prestasi.
                    </p>
                </div>
            </div>

            <!-- Sepak Bola -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative group">
                <img src="{{ asset('assets/sepak-bola.png') }}" alt="Sepak Bola" class="w-full h-60 object-cover brightness-75 group-hover:brightness-50 transition duration-300">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-xl font-bold">Sepak Bola</h3>
                    <p class="text-sm max-w-xs">
                        Sepak bola menjadi salah satu kegiatan ekstrakurikuler unggulan untuk melatih kerja sama tim dan sportivitas.
                    </p>
                </div>
            </div>

            <!-- Bola Basket -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative group">
                <img src="{{ asset('assets/basket.png') }}" alt="Bola Basket" class="w-full h-60 object-cover brightness-75 group-hover:brightness-50 transition duration-300">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-xl font-bold">Bola Basket</h3>
                    <p class="text-sm max-w-xs">
                        Ekstrakurikuler bola basket membantu siswa mengembangkan fisik dan keterampilan strategi dalam permainan tim.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

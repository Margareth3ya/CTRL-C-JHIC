<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terbaru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-white min-h-screen">

    <section class="py-12 md:py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- ===== Kiri: Berita Utama ===== -->
                <div class="lg:w-7/12">
                    <!-- Gambar utama -->
                    <div class="rounded-2xl overflow-hidden mb-4">
                        <img
                            src="{{ asset('assets/Berita1.png') }}"
                            alt="Berita Utama"
                            class="w-full h-72 md:h-[500px] object-cover"
                        />
                    </div>

                    <!-- Teks berita utama -->
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
                        80 Siswa SMK PGRI 3 Malang Terima Bantuan PIP dari dr. Gamal, Komisi X DPR RI
                    </h2>
                    <p class="text-gray-700 text-base leading-relaxed space-y-4">
                        TIMESINDONESIA, MALANG – Komisi  X DPR RI  dr Gamal Albinsaid Serahkan Bantuan PIP bagi 80 siswa siswi SMK PGRI 3 Kota Malang untuk menunjang pendidikan, Kamis (7/8/2025). dr Gamal Albinsaid  Komisi X  DPR -RI mengatakan, bantuan PIP ini adalah salah satu bentuk  kepedulian pemerintah dalam membantu masyarakat dalam menunjang pendidikan. 
                        Wakil rakyat dari Fraksi PKS ini juga berpesan kepada penerima PIP untuk rajin belajar dan selalu fokus dalam belajar dan berbakti kepada orang tua. 

                        dr Gamal mengaku, dalam meraih sukses dalam hidup dan karir untuk memegang teguh enam prinsip ini yang disampaikan antara lain  Passion akan menjadi bahan bakar utama dalam menjalani segala tantangan hidup. Jika siswa SMK PGRI 3 Kota Malang memiliki passion yang kuat dalam studi agama dan kemanusiaan, maka mereka akan lebih mampu menghadapi berbagai rintangan yang muncul di masa depan.

                        Menurutnya, pointer kedu Kesedihan adalah bagian alami dari hidup. Namun, kesedihan ini harus dijadikan motivasi untuk bangkit dan mencapai hal-hal yang lebih besar. Ia mendorong  siswa siswi SMK PGRI 3 Kota Malang untuk tidak takut menghadapi kegagalan, karena kegagalan adalah guru terbaik yang bisa membantu mereka tumbuh.
                    </p>
                </div>

                <!-- ===== Kanan: Berita Lain ===== -->
                <div class="lg:w-1/3 flex flex-col gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:scale-105 hover:shadow-lg transition-transform transition-shadow duration-300">
                        <img
                            class="w-full h-40 object-cover"
                            src="{{ asset('assets/Berita2.png') }}"
                            alt="Berita 2"
                        />
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
                            <a
                                href="/berita-2"
                                class="text-blue-500 font-medium text-sm mt-2 inline-block"
                            >
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:scale-105 hover:shadow-lg transition-transform transition-shadow duration-300">
                        <img
                            class="w-full h-40 object-cover"
                            src="{{ asset('assets/Berita3.png') }}"
                            alt="Berita 3"
                        />
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
                            <a
                                href="/berita-3"
                                class="text-blue-500 font-medium text-sm mt-2 inline-block"
                            >
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
@extends('layouts.app')
@push('styles')
    <style>
        .card-active {
            transform: translateX(0) scale(1);
            opacity: 1;
            transition: all 0.4s ease;
        }

        .card-behind {
            transform: translateX(80px) scale(0.9);
            opacity: 0.9;
            transition: all 0.4s ease;
        }

        .card-far-behind {
            transform: translateX(160px) scale(0.8);
            opacity: 0.7;
            transition: all 0.4s ease;
        }

        .card-more-behind {
            transform: translateX(240px) scale(0.7);
            opacity: 0.5;
            transition: all 0.4s ease;
        }
    </style>
@endpush
@section('content')
    <div class="relative overflow-hidden">
        <div class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white">
            <div class="absolute inset-0 z-0">
                <div class="swiper-container h-full w-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="w-full h-full bg-cover bg-center"
                                style="background-image: url('https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full h-full bg-cover bg-center"
                                style="background-image: url('https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full h-full bg-cover bg-center"
                                style="background-image: url('https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 bg-black opacity-40"></div>
            </div>

            <div class="relative z-10 container mx-auto px-4 py-16 md:py-24">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="text-center md:text-left">
                        <div class="mb-6">
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight text-orange-500">
                                SUCCESS BY<br>
                                <span class="text-white">DISCIPLINE</span>
                            </h1>
                            <p class="text-xl md:text-2xl text-blue-100 mb-6">
                                Membentuk siswa cerdas, terampil, dan berkarakter
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <a href="/profile">
                                <button
                                    class="border-2 border-white text-white hover:bg-orange-600 hover:text-white hover:scale-105 hover:shadow-lg px-8 py-3 rounded-lg font-semibold transition-all flex items-center justify-center">
                                    Profile
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 text-center border border-white border-opacity-20 hover:scale-105 hover:shadow-xl">
                            <div class="text-3xl md:text-4xl font-bold text-orange-500 mb-2">1000+</div>
                            <div class="text-gray-100">Siswa Aktif</div>
                        </div>
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 text-center border border-white border-opacity-20 hover:scale-105 hover:shadow-xl">
                            <div class="text-3xl md:text-4xl font-bold text-orange-500 mb-2">50+</div>
                            <div class="text-gray-100">Guru Berpengalaman</div>
                        </div>
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 text-center border border-white border-opacity-20 hover:scale-105 hover:shadow-xl">
                            <div class="text-3xl md:text-4xl font-bold text-orange-500 mb-2">10+</div>
                            <div class="text-gray-100">Program Jurusan</div>
                        </div>
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 text-center border border-white border-opacity-20 hover:scale-105 hover:shadow-xl">
                            <div class="text-3xl md:text-4xl font-bold text-orange-500 mb-2">COMINGSOON</div>
                            <div class="text-gray-100">LOREM IPSUM</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==Rekomendasi Jurusan== -->
        <section class="w-full py-16 bg-white flex justify-center">
            <div class="w-full max-w-6xl px-4 flex flex-col lg:flex-row gap-12">
                <!-- Kiri -->
                <div class="w-full lg:w-1/2 flex flex-col justify-center">
                    <div id="leftContent">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                            TEMUKAN JURUSAN
                        </h2>
                        <div class="text-3xl md:text-4xl font-bebas text-orange-400 mb-6">
                            TEPAT UNTUKMU
                        </div>
                        <p class="text-lg text-gray-700 mb-8">
                            Belum tahu jurusan apa yang cocok?<br />
                            Masih bingung pilih jurusan?<br />
                            Tenang, kita bantu.<br />
                            Isi form di samping dan dapatkan rekomendasi jurusan.
                        </p>
                    </div>

                    <div id="resultContainer"
                        class="hidden bg-gradient-to-br from-blue-50 to-orange-50 p-8 rounded-2xl shadow-lg">
                        <h2 class="text-3xl font-bold text-gray-900 mb-2">
                            REKOMENDASI KAMI
                        </h2>
                        <div class="w-20 h-1 bg-orange-500 mb-6"></div>
                        <div id="resultContent" class="space-y-6">
                        </div>
                    </div>
                </div>

                <!-- Form Kanan -->
                <div class="w-full lg:w-1/2 flex flex-col items-center">
                    <form id="recommendationForm"
                        class="w-full max-w-md bg-white rounded-2xl shadow-lg hover:shadow-2xl p-8 mb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                            LOREM <span class="text-orange text-4xl font-bold text-orange-500">IPSUM</span>
                        </h3>

                        <div class="mb-6 relative">
                            <label class="block text-gray-700 mb-2">Keyword</label>
                            <input type="text" id="keywordInput" name="keyword"
                                placeholder="Keyword yang sering didengar..."
                                class="w-full p-4 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                                required />
                            <ul id="keywordDropdown"
                                class="absolute z-10 w-full bg-white border border-gray-200 mt-1 rounded-lg shadow-md hidden">
                                <!-- <li class="px-4 py-2 hover:bg-orange-100 cursor-pointer">Programming</li>
                                        <li class="px-4 py-2 hover:bg-orange-100 cursor-pointer">Desain Grafis</li>
                                        <li class="px-4 py-2 hover:bg-orange-100 cursor-pointer">Mesin</li>
                                        <li class="px-4 py-2 hover:bg-orange-100 cursor-pointer">Multimedia</li>
                                        <li class="px-4 py-2 hover:bg-orange-100 cursor-pointer">Jaringan</li>
                                        <li class="px-4 py-2 hover:bg-orange-100 cursor-pointer">Animasi</li> -->
                            </ul>
                        </div>

                        <button type="submit" id="submitButton"
                            class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white px-1 py-1 rounded-lg font-medium text-lg hover:from-orange-600 hover:to-orange-700 transition-all duration-300 flex items-center justify-center">
                            LOREM IPSUM
                        </button>
                    </form>

                    <div id="resetContainer" class="w-full max-w-md text-center animate-fade-in hidden">
                        <div class="bg-gradient-to-br from-green-50 to-blue-50 p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Rekomendasi Lainnya</h3>
                            <p class="text-gray-600 mb-6">
                                Ingin menjelajahi opsi jurusan lainnya? Klik tombol di bawah untuk mencoba lagi.
                            </p>
                            <button id="resetButton"
                                class="px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg font-medium hover:from-blue-600 hover:to-blue-700 transition-all duration-300">
                                Cari Rekomendasi Baru
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-white py-16">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        <span class="text-blue-900">SKARIGA</span>?
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Sekolah Kejuruan Unggulan yang berfokus pada pengembangan potensi siswa
                        melalui pendidikan berkualitas dan pembentukan karakter disiplin.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-8 border-blue-500">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-book-open text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Kurikulum Modern</h3>
                        <p class="text-gray-600">Kurikulum terupdate yang sesuai dengan kebutuhan industri masa kini.</p>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-8 border-orange-500">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-laptop-code text-orange-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Fasilitas Lengkap</h3>
                        <p class="text-gray-600">Laboratorium dan peralatan modern untuk mendukung pembelajaran praktis.</p>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-8 border-blue-500">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-graduate text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Bimbingan Karir</h3>
                        <p class="text-gray-600">Program bimbingan karir untuk mempersiapkan siswa memasuki dunia kerja.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 py-16">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        PEMBELAJARAN <span class="text-orange-500">PRAKTIS</span>
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Metode pembelajaran yang mengutamakan praktek langsung dan pengalaman nyata.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-8 border-blue-500">
                        <i class="fas fa-tools text-4xl text-blue-600 mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Workshop</h3>
                        <p class="text-gray-600">Sesi praktik langsung dengan alat dan materi nyata.</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-8 border-orange-500">
                        <i class="fas fa-industry text-4xl text-orange-600 mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Industry Visit</h3>
                        <p class="text-gray-600">Kunjungan langsung ke industri untuk belajar praktik terbaik.</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-8 border-green-500">
                        <i class="fas fa-handshake text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Magang</h3>
                        <p class="text-gray-600">Program magang untuk pengalaman kerja langsung.</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-8 border-purple-500">
                        <i class="fas fa-project-diagram text-4xl text-purple-600 mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Project Based</h3>
                        <p class="text-gray-600">Pembelajaran melalui proyek nyata yang menantang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function redirect() {
            window.location.href = "/program/jurusan";
        }

        document.addEventListener('DOMContentLoaded', function () {

            // Elemen DOM
            const form = document.getElementById('recommendationForm');
            const keywordInput = document.getElementById('keywordInput');
            const keywordDropdown = document.getElementById('keywordDropdown');
            const submitButton = document.getElementById('submitButton');
            const resetButton = document.getElementById('resetButton');
            const leftContent = document.getElementById('leftContent');
            const resultContainer = document.getElementById('resultContainer');
            const resultContent = document.getElementById('resultContent');
            const resetContainer = document.getElementById('resetContainer');

            keywordInput.addEventListener('focus', function () {
                keywordDropdown.classList.remove('hidden');
            });

            keywordInput.addEventListener('blur', function () {
                setTimeout(() => {
                    keywordDropdown.classList.add('hidden');
                }, 200);
            });

            form.addEventListener('submit', async function (e) {
                e.preventDefault();

                submitButton.disabled = true;
                submitButton.innerHTML = `
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Memproses...
            `;

                try {
                    const response = await fetch("/api/gemini", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                        },
                        body: JSON.stringify({ keyword: keywordInput.value }),
                    });

                    const data = await response.json();

                    // UNCOMMENT JIKA SEDANG TROUBLESHOOTING
                    // console.log('API Response:', data);
                    if (!response.ok) {
                        throw new Error(data.error || 'Terjadi kesalahan');
                    }
                    if (data.jurusan_utama && data.jurusan_utama.name === "Tidak ditemukan") {
                        resultContent.innerHTML = `
                        <div class="p-6 bg-red-50 border border-red-200 rounded-lg mb-4">
                            <h3 class="text-xl font-semibold text-red-800 mb-2">${data.jurusan_utama.name}</h3>
                            <p class="text-red-700">${data.jurusan_utama.description}</p>
                        </div>
                    `;
                    } else if (data.jurusan_utama && data.jurusan_alternatif) {
                        resultContent.innerHTML = `
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-blue-800 mb-2">Jurusan Utama:</h3>
                            <div class="p-4 bg-blue-50 border border-blue-200 rounded-lg">
                                <h4 class="text-xl font-bold text-gray-900">${data.jurusan_utama.name}</h4>
                                <span class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm mt-2">
                                    ${data.jurusan_utama.department}
                                </span>
                                <p class="text-gray-700 mt-3">${data.jurusan_utama.description}</p>
                                <button onclick="redirect()" class="bg-orange-500 text-white font-medium px-4 py-2 mt-4 rounded-xl shadow-md hover:bg-orange-600 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">Lihat Selengkapnya ></button>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-green-800 mb-2">Jurusan Alternatif:</h3>
                            <div class="p-4 bg-green-50 border border-green-200 rounded-lg">
                                <h4 class="text-xl font-bold text-gray-900">${data.jurusan_alternatif.name}</h4>
                                <span class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm mt-2">
                                    ${data.jurusan_alternatif.department}
                                </span>
                                <p class="text-gray-700 mt-3">${data.jurusan_alternatif.description}</p>
                                <button onclick="redirect()" class="bg-gradient-to-r from-orange-500 to-red-500 text-white font-semibold px-5 py-2 mt-4 rounded-xl shadow-md hover:from-orange-600 hover:to-red-600 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">Lihat Selengkapnya ></button>
                            </div>
                        </div>
                    `;
                    } else {
                        resultContent.innerHTML = `
                        <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                            <h3 class="text-lg font-semibold text-yellow-800">Format Response Tidak Dikenal</h3>
                            <p class="text-yellow-700 mt-2">Silakan coba lagi dengan kata kunci yang berbeda.</p>
                            <details class="mt-3">
                                <summary class="cursor-pointer text-sm">Debug Info</summary>
                                <pre class="text-xs mt-2">${JSON.stringify(data, null, 2)}</pre>
                            </details>
                        </div>
                    `;
                    }

                    leftContent.classList.add('hidden');
                    resultContainer.classList.remove('hidden');
                    form.classList.add('hidden');
                    resetContainer.classList.remove('hidden');

                } catch (error) {
                    console.error('Error:', error);
                    alert("Terjadi kesalahan: " + error.message);
                } finally {
                    submitButton.disabled = false;
                    submitButton.textContent = 'DAPATKAN REKOMENDASI';
                }
            });

            // Reset button
            resetButton.addEventListener('click', function () {
                leftContent.classList.remove('hidden');
                resultContainer.classList.add('hidden');
                form.classList.remove('hidden');
                resetContainer.classList.add('hidden');
                keywordInput.value = '';
            });
        });
    </script>
    <!-- ==Carousel Departemen== -->
    <section class="w-full py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-2">
                    <span class="text-black">4 Departemen Unggulan</span>
                    <span class="text-orange-500"> SKARIGA</span>
                </h2>
            </div>

            <!-- Carousel Container -->
            <div class="relative w-full max-w-4xl mx-auto">
                <div class="overflow-hidden h-96">
                    <div class="card-container relative h-full">
                        <!-- Data Departments -->
                        <div class="card absolute top-0 left-0 w-full bg-white rounded-2xl shadow-lg overflow-hidden h-80"
                            data-index="0" style="z-index: 40;">
                            <div class="flex flex-col md:flex-row h-full">
                                <!-- Image -->
                                <div class="md:w-2/5">
                                    <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?auto=format&fit=crop&w=538&q=80"
                                        alt="TIK (Teknologi Informasi & Komunikasi)"
                                        class="w-full h-40 md:h-full object-cover">
                                </div>

                                <!-- Content -->
                                <div class="md:w-3/5 p-6 flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-2xl font-bold text-gray-900">TIK</h3>
                                            <span
                                                class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                                                TIK (Teknologi Informasi & Komunikasi)
                                            </span>
                                        </div>
                                        <p class="text-gray-600 mb-6 line-clamp-3">
                                            Departemen TIK membekali siswa dengan keterampilan di bidang teknologi
                                            informasi,
                                            meliputi pemrograman, desain web, jaringan komputer, dan manajemen data.
                                            Lulusan diharapkan mampu bersaing di industri IT maupun menjadi wirausaha
                                            digital yang kreatif dan inovatif.
                                        </p>
                                    </div>
                                    <a href="/jurusan"
                                        class="self-start bg-orange-500 text-white px-6 py-2 rounded-lg text-sm font-semibold hover:bg-orange-600 transition-colors">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card absolute top-0 left-0 w-full bg-white rounded-2xl shadow-lg overflow-hidden h-80"
                            data-index="1" style="z-index: 30;">
                            <div class="flex flex-col md:flex-row h-full">
                                <!-- Image -->
                                <div class="md:w-2/5">
                                    <img src="https://images.unsplash.com/photo-1581094288338-231b058b38b8?auto=format&fit=crop&w=453&q=80"
                                        alt="Pemesinan" class="w-full h-40 md:h-full object-cover">
                                </div>

                                <!-- Content -->
                                <div class="md:w-3/5 p-6 flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-2xl font-bold text-gray-900">Pemesinan</h3>
                                            <span
                                                class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                                                Pemesinan
                                            </span>
                                        </div>
                                        <p class="text-gray-600 mb-6 line-clamp-3">
                                            Departemen Pemesinan mempersiapkan siswa menguasai teknik pengoperasian mesin
                                            konvensional maupun CNC,
                                            membaca gambar teknik, dan proses manufaktur. Lulusan memiliki kompetensi untuk
                                            bekerja di industri manufaktur dan permesinan.
                                        </p>
                                    </div>
                                    <a href="/jurusan"
                                        class="self-start bg-orange-500 text-white px-6 py-2 rounded-lg text-sm font-semibold hover:bg-orange-600 transition-colors">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card absolute top-0 left-0 w-full bg-white rounded-2xl shadow-lg overflow-hidden h-80"
                            data-index="2" style="z-index: 20;">
                            <div class="flex flex-col md:flex-row h-full">
                                <!-- Image -->
                                <div class="md:w-2/5">
                                    <img src="https://images.unsplash.com/photo-1581093458791-9d33f465dea5?auto=format&fit=crop&w=368&q=80"
                                        alt="Kelistrikan" class="w-full h-40 md:h-full object-cover">
                                </div>

                                <!-- Content -->
                                <div class="md:w-3/5 p-6 flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-2xl font-bold text-gray-900">Kelistrikan</h3>
                                            <span
                                                class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                                                Kelistrikan
                                            </span>
                                        </div>
                                        <p class="text-gray-600 mb-6 line-clamp-3">
                                            Departemen Kelistrikan mengajarkan keterampilan instalasi, perawatan, dan
                                            perbaikan sistem kelistrikan,
                                            baik untuk bangunan maupun industri. Siswa juga dibekali pemahaman sistem
                                            kontrol dan otomasi.
                                        </p>
                                    </div>
                                    <a href="/jurusan"
                                        class="self-start bg-orange-500 text-white px-6 py-2 rounded-lg text-sm font-semibold hover:bg-orange-600 transition-colors">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card absolute top-0 left-0 w-full bg-white rounded-2xl shadow-lg overflow-hidden h-80"
                            data-index="3" style="z-index: 10;">
                            <div class="flex flex-col md:flex-row h-full">
                                <!-- Image -->
                                <div class="md:w-2/5">
                                    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=336&q=80"
                                        alt="Otomotif" class="w-full h-40 md:h-full object-cover">
                                </div>

                                <!-- Content -->
                                <div class="md:w-3/5 p-6 flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-2xl font-bold text-gray-900">Otomotif</h3>
                                            <span
                                                class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                                                Otomotif
                                            </span>
                                        </div>
                                        <p class="text-gray-600 mb-6 line-clamp-3">
                                            Departemen Otomotif berfokus pada pembelajaran teknologi kendaraan bermotor,
                                            perawatan, dan perbaikan mesin.
                                            Siswa dilatih secara praktis dengan peralatan modern untuk memenuhi kebutuhan
                                            industri.
                                        </p>
                                    </div>
                                    <a href="/jurusan"
                                        class="self-start bg-orange-500 text-white px-6 py-2 rounded-lg text-sm font-semibold hover:bg-orange-600 transition-colors">
                                        Selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dots Indicator -->
            <div class="flex justify-center mt-12 space-x-2">
                <button class="dot-indicator w-6 h-3 rounded-full bg-orange-500" data-index="0"></button>
                <button class="dot-indicator w-3 h-3 rounded-full bg-gray-300" data-index="1"></button>
                <button class="dot-indicator w-3 h-3 rounded-full bg-gray-300" data-index="2"></button>
                <button class="dot-indicator w-3 h-3 rounded-full bg-gray-300" data-index="3"></button>
            </div>

            <div class="text-center mt-4 text-gray-500">
                Geser kartu untuk melihat departemen lainnya
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.card');
            const dots = document.querySelectorAll('.dot-indicator');
            let currentIndex = 0;
            let isDragging = false;
            let startX = 0;
            let currentX = 0;
            let dragThreshold = 50;

            // Initialize carousel dengan tumpukan kartu
            updateCarousel();

            // Dot indicators
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => navigateTo(index));
            });

            // Add event listeners to all cards
            cards.forEach(card => {
                // Touch events for mobile
                card.addEventListener('touchstart', handleTouchStart, { passive: false });
                card.addEventListener('touchmove', handleTouchMove, { passive: false });
                card.addEventListener('touchend', handleTouchEnd);

                // Mouse events for desktop
                card.addEventListener('mousedown', handleMouseDown);
                card.addEventListener('mousemove', handleMouseMove);
                card.addEventListener('mouseup', handleMouseUp);
                card.addEventListener('mouseleave', handleMouseUp);
            });

            function handleTouchStart(e) {
                startX = e.touches[0].clientX;
                isDragging = true;
                cards.forEach(card => card.classList.add('card-dragging'));
                e.preventDefault();
            }

            function handleTouchMove(e) {
                if (!isDragging) return;
                currentX = e.touches[0].clientX;
                updateDragPosition();
                e.preventDefault();
            }

            function handleTouchEnd() {
                if (!isDragging) return;
                finishDrag();
            }

            function handleMouseDown(e) {
                startX = e.clientX;
                isDragging = true;
                cards.forEach(card => card.classList.add('card-dragging'));
                document.body.style.cursor = 'grabbing';
                e.preventDefault();
            }

            function handleMouseMove(e) {
                if (!isDragging) return;
                currentX = e.clientX;
                updateDragPosition();
            }

            function handleMouseUp() {
                if (!isDragging) return;
                finishDrag();
            }

            function updateDragPosition() {
                const diffX = currentX - startX;

                // Apply temporary transform during drag
                cards.forEach((card, index) => {
                    const cardIndex = parseInt(card.getAttribute('data-index'));
                    const position = (cardIndex - currentIndex + cards.length) % cards.length;

                    if (position === 0) {
                        // Main card being dragged
                        card.style.transform = `translateX(${diffX}px) scale(1)`;
                        card.style.opacity = `${1 - Math.abs(diffX) / 500}`;
                    } else if (position === 1) {
                        // Next card
                        const scale = 0.9 + (Math.min(Math.abs(diffX), 200) * 0.1 / 200);
                        card.style.transform = `translateX(${80 + diffX * 0.8}px) scale(${scale})`;
                    } else if (position === 2) {
                        // Second next card
                        const scale = 0.8 + (Math.min(Math.abs(diffX), 200) * 0.1 / 200);
                        card.style.transform = `translateX(${160 + diffX * 0.6}px) scale(${scale})`;
                    }
                });
            }

            function finishDrag() {
                isDragging = false;
                document.body.style.cursor = '';

                const diffX = currentX - startX;

                // Remove temporary drag styles
                cards.forEach(card => {
                    card.classList.remove('card-dragging');
                    card.style.transform = '';
                    card.style.opacity = '';
                });

                // Determine if we should change slide based on drag distance
                if (Math.abs(diffX) > dragThreshold) {
                    if (diffX > 0) {
                        navigateTo(currentIndex - 1); // Swipe right
                    } else {
                        navigateTo(currentIndex + 1); // Swipe left
                    }
                } else {
                    // If not enough drag, return to current position
                    updateCarousel();
                }
            }

            function navigateTo(index) {
                // Ensure index is within bounds
                if (index < 0) index = cards.length - 1;
                if (index >= cards.length) index = 0;

                currentIndex = index;
                updateCarousel();
            }

            function updateCarousel() {
                // Update card positions dengan animasi
                cards.forEach((card, index) => {
                    const cardIndex = parseInt(card.getAttribute('data-index'));
                    const position = (cardIndex - currentIndex + cards.length) % cards.length;

                    // Reset semua kelas posisi
                    card.classList.remove('card-active', 'card-behind', 'card-far-behind', 'card-hidden');

                    if (position === 0) {
                        // Kartu utama
                        card.classList.add('card-active');
                        card.style.zIndex = 40;
                    } else if (position === 1) {
                        // Di belakang 1
                        card.classList.add('card-behind');
                        card.style.zIndex = 30;
                    } else if (position === 2) {
                        // Di belakang 2
                        card.classList.add('card-far-behind');
                        card.style.zIndex = 20;
                    } else {
                        // Sisanya sembunyikan
                        card.classList.add('card-hidden');
                        card.style.zIndex = 10;
                    }
                });

                // Update dots
                dots.forEach((dot, i) => {
                    if (i === currentIndex) {
                        dot.classList.remove('w-3', 'bg-gray-300');
                        dot.classList.add('w-6', 'bg-orange-500');
                    } else {
                        dot.classList.remove('w-6', 'bg-orange-500');
                        dot.classList.add('w-3', 'bg-gray-300');
                    }
                });
            }
        });
    </script>
@endsection
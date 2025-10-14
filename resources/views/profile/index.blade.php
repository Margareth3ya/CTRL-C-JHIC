@extends('layouts.app')

@section('title', 'Profil SKARIGA')

@section('content')
<link rel="stylesheet" href="css/style.css">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    {{-- === SAMBUTAN KEPALA SEKOLAH === --}}
    <section class="relative bg-transparent py-20 overflow-visible">
        {{-- Background Circle --}}
        <div class="absolute inset-0 -z-10 overflow-visible">
            <div class="absolute w-80 h-80 bg-orange-100 rounded-full opacity-40 -top-20 -left-20"></div>
            <div class="absolute w-64 h-64 bg-blue-100 rounded-full opacity-40 bottom-10 right-10"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center">
            <div class="flex justify-center md:justify-start relative">
                <div class="w-48 h-48 md:w-64 md:h-64 rounded-full overflow-hidden shadow-xl relative z-10 bg-orange-200">
    <img src="{{ asset('https://i.ibb.co.com/hJjdrSXg/Lukman-removebg-preview-2.png') }}"
         alt="Kepala Sekolah" class="object-cover w-full h-full">
</div>

            </div>

            <div class="md:col-span-2">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 relative inline-block">
                    Sambutan Kepala Sekolah
                    <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-orange-400"></span>
                </h2>
                <div class="space-y-4 text-gray-700 leading-relaxed text-justify max-w-2xl">
                    <p>
                        Selamat datang di SMK PGRI 3 Malang. Sekolah kami menanamkan budaya disiplin
                        yang berbeda dari lembaga pendidikan lainnya — tidak sekadar aturan, melainkan
                        prinsip hidup yang membentuk karakter profesional, tangguh, dan bertanggung jawab.
                    </p>
                    <p>
                        Sebagai sekolah berbasis industri, kurikulum kami disesuaikan dengan
                        kebutuhan pasar kerja melalui kerja sama luas dengan berbagai perusahaan dan
                        institusi. Ini memberi kesempatan siswa untuk mengikuti magang dan pelatihan nyata.
                    </p>
                </div>
                <p class="mt-6 font-semibold text-gray-800">
                    Moch. Lukman Hakim, S.T., M.M
                </p>
            </div>
        </div>
    </section>

    {{-- === VISI === --}}
    <section class="relative bg-transparent-to-br from-orange-50 to-amber-50 py-20 rounded-3xl my-12">
        <div class="absolute inset-0 -z-10">
            <div class="absolute w-72 h-72 bg-orange-200 rounded-full opacity-30 -top-24 left-12"></div>
            <div class="absolute w-64 h-64 bg-blue-200 rounded-full opacity-30 bottom-10 right-16"></div>
        </div>

        <div class="max-w-4xl mx-auto text-center px-6 relative z-10">
            <h3 class="text-3xl font-bold text-orange-600 mb-6">Visi</h3>
            <p class="text-gray-700 text-lg italic leading-relaxed bg-white/70 backdrop-blur-sm rounded-2xl p-8 shadow-md">
                "Menjadi SMK yang unggul dalam prestasi dengan dilandasi Iman & Taqwa serta menghasilkan
                tamatan yang mampu bersaing di tingkat Nasional maupun Internasional."
            </p>
        </div>
    </section>

    {{-- === MISI === --}}
    <section class="relative bg-transparent py-20 rounded-3xl my-12">
        <div class="absolute inset-0 -z-10">
            <div class="absolute w-72 h-72 bg-sky-100 rounded-full opacity-30 -top-16 right-20"></div>
            <div class="absolute w-64 h-64 bg-orange-100 rounded-full opacity-30 bottom-16 left-20"></div>
        </div>

        <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
            <h3 class="text-3xl font-bold text-sky-600 mb-10">Misi</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $misi = [
                        ['icon' => 'fas fa-bullseye', 'color' => 'orange', 'title' => 'Semangat Kompetitif', 'text' => 'Menumbuhkan semangat keunggulan kompetitif.'],
                        ['icon' => 'fas fa-graduation-cap', 'color' => 'sky', 'title' => 'Pembelajaran Standar', 'text' => 'Pembelajaran berbasis standar nasional & internasional.'],
                        ['icon' => 'fas fa-book-open', 'color' => 'orange', 'title' => 'Penguatan Agama', 'text' => 'Memperkuat ajaran agama dan budaya bangsa.'],
                        ['icon' => 'fas fa-school', 'color' => 'sky', 'title' => 'Manajemen Sekolah', 'text' => 'Pengelolaan sekolah berstandar nasional & internasional.'],
                    ];
                @endphp
                @foreach ($misi as $item)
                    <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-{{ $item['color'] }}-500">
                        <div class="flex justify-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-{{ $item['color'] }}-100">
                                <i class="{{ $item['icon'] }} text-{{ $item['color'] }}-500 text-xl"></i>
                            </div>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">{{ $item['title'] }}</h4>
                        <p class="text-gray-600 text-sm">{{ $item['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

        {{-- ====== APA KATA ALUMNI ====== --}}
        <section class="relative bg-transparent py-20 overflow-visible rounded-3xl my-12"> {{-- tambah section dan styling --}}
            {{-- Background Circle untuk Alumni --}}
            <div class="absolute inset-0 -z-10 overflow-visible">
                <div class="absolute w-80 h-80 bg-orange-100 rounded-full opacity-30 top-10 left-10"></div>
                <div class="absolute w-72 h-72 bg-blue-100 rounded-full opacity-30 bottom-10 right-10"></div>
            </div>

            <div class="relative z-10">
                <h3 class="text-3xl font-bold text-center mb-12">Apa Kata Alumni?</h3>
                
                <!-- Content Wrapper -->
                <div class="alumni-content-wrapper pb-8" id="alumniContent">
                    @php
                        $itemsPerPage = 3;
                        $alumniArray = $alumnis->toArray();
                        $totalPages = ceil(count($alumniArray) / $itemsPerPage);
                    @endphp

                    @if(count($alumniArray) > 0)
                        @for($i = 0; $i < $totalPages; $i++)
                            <div class="alumni-page {{ $i === 0 ? 'alumni-page--active' : 'hidden' }}" 
                                 data-page="{{ $i + 1 }}"
                                 id="alumniPage{{ $i + 1 }}">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                    @foreach(array_slice($alumniArray, $i * $itemsPerPage, $itemsPerPage) as $alumni)
                                        <div
                                            class="flex relative h-96 bg-white rounded-2xl shadow-lg overflow-hidden group hover:scale-105 transition-transform hover:shadow-orange-300">
                                            <img src="{{ asset('assets/alumni/' . $alumni['image']) }}" alt="{{ $alumni['title'] }}"
                                                class="w-full object-cover group-hover:scale-105 transition-transform duration-500">
                                            <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-4">
                                                <h4 class="text-lg font-bold text-white">{{ $alumni['title'] }}</h4>
                                                <p class="text-gray-200 text-sm">{{ $alumni['body'] }}</p>
                                                <span class="text-xs text-gray-300 mt-1">{{ $alumni['credit'] }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endfor
                    @else
                        <div class="alumni-page alumni-page--active">
                            <p class="text-center text-gray-500 col-span-3">Belum ada data alumni.</p>
                        </div>
                    @endif
                </div>

                <!-- Navigation - Only show if there are multiple pages -->
                @if($totalPages > 1)
                    <div class="alumni-navigation">
                        <button 
                            id="alumniPrevButton" 
                            data-action="prev"
                            class="nav-button nav-button--disabled"
                            disabled
                        >
                            ← Sebelumnya
                        </button>

                        <div class="page-indicator">
                            <div class="page-numbers">
                                <span class="current-page" id="alumniCurrentPage">1</span>
                                <span class="page-slash">/</span>
                                <span class="total-pages" id="alumniTotalPages">{{ $totalPages }}</span>
                            </div>
                        </div>

                        <button 
                            id="alumniNextButton" 
                            data-action="next"
                            class="nav-button"
                        >
                            Selanjutnya →
                        </button>
                    </div>
                @endif
            </div>
        </section>

        {{-- ================= SECTION: PROFIL VIDEO ================= --}}
        <section class="relative bg-transparent-to-br from-sky-50 to-blue-50 py-20 overflow-visible rounded-3xl my-12"> {{-- tambah rounded dan margin --}}
            {{-- Background Circle untuk Video --}}
            <div class="absolute inset-0 -z-10 overflow-visible">
                <div class="absolute w-80 h-80 bg-sky-200 rounded-full opacity-30 -top-20 left-20"></div>
                <div class="absolute w-72 h-72 bg-orange-200 rounded-full opacity-30 bottom-10 right-20"></div>
            </div>

            <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
                <h3 class="text-3xl font-bold text-gray-800 mb-8">Profil Lengkap SKARIGA</h3>
                <div id="videoContainer"
                    class="relative w-full mx-auto rounded-2xl overflow-hidden shadow-xl group">
                    <img id="thumbnailImage" src="https://img.youtube.com/vi/FAwdUR9SFRU/maxresdefault.jpg"
                        alt="Profil SKARIGA"
                        class="group-hover:scale-105 transition-transform duration-500 w-full h-96 object-cover">

                    <div id="playButton" class="absolute inset-0 flex items-center justify-center">
                        <button onclick="playVideo()"
                            class="w-20 h-20 flex items-center justify-center rounded-full bg-white/80 hover:bg-white transition duration-300 shadow-lg">
                            <i class="fas fa-play text-3xl text-orange-500 ml-1"></i>
                        </button>
                    </div>

                    <div id="videoCaption"
                        class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black/60 via-black/30 to-transparent">
                        <h4 class="text-lg font-bold text-white">PROFIL SMK PGRI 3 MALANG</h4>
                        <p class="text-sm text-gray-200">Sekolah Vokasi Inovatif Menuju Masa Depan Gemilang</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
   

    <style>
        /* === PAGINATION SYSTEM FOR ALUMNI === */
        .alumni-navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        /* Reset dan styling dasar dengan specificity tinggi */
        .alumni-navigation .nav-button {
            /* Reset semua style default */
            all: initial;
            font-family: inherit;
            
            /* Style dasar */
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            background: linear-gradient(135deg, #f97316, #ea580c);
            color: white;
            border: none;
            border-radius: 12px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(249, 115, 22, 0.25);
            position: relative;
            overflow: hidden;
            min-width: 120px;
            text-align: center;
            line-height: 1.5;
            text-decoration: none;
        }

        /* Hover effects */
        .alumni-navigation .nav-button:hover:not(.nav-button--disabled):not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(249, 115, 22, 0.35);
        }

        /* Shine effect */
        .alumni-navigation .nav-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 255, 255, 0.3), 
                transparent);
            transition: left 0.6s ease;
        }

        .alumni-navigation .nav-button:hover:not(.nav-button--disabled):not(:disabled)::after {
            left: 100%;
        }

        /* Disabled state */
        .alumni-navigation .nav-button.nav-button--disabled,
        .alumni-navigation .nav-button:disabled {
            background: linear-gradient(135deg, #e5e7eb, #d1d5db);
            color: #9ca3af;
            cursor: not-allowed;
            transform: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .alumni-navigation .nav-button.nav-button--disabled:hover,
        .alumni-navigation .nav-button:disabled:hover {
            transform: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .alumni-navigation .nav-button.nav-button--disabled::after,
        .alumni-navigation .nav-button:disabled::after {
            display: none;
        }

        .page-indicator {
            display: flex;
            align-items: center;
            gap: 1rem;
            background: #f8fafc;
            padding: 10px 20px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #475569;
        }

        .page-numbers {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .current-page {
            color: #f97316;
            font-size: 1.1rem;
        }

        .total-pages {
            color: #64748b;
        }

        .page-slash {
            color: #cbd5e1;
        }

        /* Page Transitions */
        .alumni-content-wrapper {
            position: relative;
        }

        .alumni-page {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            pointer-events: none;
        }

        .alumni-page.alumni-page--active {
            opacity: 1;
            transform: translateY(0);
            position: relative;
            pointer-events: all;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .alumni-navigation {
                gap: 1rem;
                flex-direction: column;
            }

            .nav-button {
                min-width: 140px;
                padding: 10px 20px;
            }

            .page-indicator {
                order: -1;
            }
        }

        @media (max-width: 480px) {
            .nav-button {
                font-size: 0.9rem;
                padding: 8px 16px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elements for Alumni Pagination
            const alumniContent = document.getElementById('alumniContent');
            const alumniPrevButton = document.getElementById('alumniPrevButton');
            const alumniNextButton = document.getElementById('alumniNextButton');
            const alumniCurrentPageEl = document.getElementById('alumniCurrentPage');
            const alumniTotalPagesEl = document.getElementById('alumniTotalPages');
            
            // State
            let alumniCurrentPage = 1;
            const alumniTotalPages = {{ $totalPages ?? 1 }};
            let alumniIsAnimating = false;

            console.log('Alumni Pagination initialized - Total pages:', alumniTotalPages);

            // Initialize
            function initAlumniPagination() {
                if (alumniTotalPages <= 1) {
                    console.log('Only one alumni page, hiding navigation');
                    if (alumniPrevButton) alumniPrevButton.style.display = 'none';
                    if (alumniNextButton) alumniNextButton.style.display = 'none';
                    return;
                }

                updateAlumniNavigation();
            }

            // Navigation functions
            function goToAlumniPage(page) {
                if (alumniIsAnimating || page < 1 || page > alumniTotalPages) return;
                
                alumniIsAnimating = true;

                // Hide current page
                const currentPageElement = document.querySelector('.alumni-page--active');
                if (currentPageElement) {
                    currentPageElement.classList.remove('alumni-page--active');
                    currentPageElement.classList.add('hidden');
                }

                // Update current page
                alumniCurrentPage = page;

                // Show new page after a short delay for smooth transition
                setTimeout(() => {
                    const newPageElement = document.getElementById(`alumniPage${page}`);
                    if (newPageElement) {
                        newPageElement.classList.add('alumni-page--active');
                        newPageElement.classList.remove('hidden');
                    }
                    
                    updateAlumniNavigation();
                    alumniIsAnimating = false;
                }, 300);
            }

            function updateAlumniNavigation() {
                // Update page indicator
                if (alumniCurrentPageEl) {
                    alumniCurrentPageEl.textContent = alumniCurrentPage;
                }

                // Update button states menggunakan disabled attribute dan class
                if (alumniPrevButton) {
                    if (alumniCurrentPage === 1) {
                        alumniPrevButton.disabled = true;
                        alumniPrevButton.classList.add('nav-button--disabled');
                    } else {
                        alumniPrevButton.disabled = false;
                        alumniPrevButton.classList.remove('nav-button--disabled');
                    }
                }
                
                if (alumniNextButton) {
                    if (alumniCurrentPage === alumniTotalPages) {
                        alumniNextButton.disabled = true;
                        alumniNextButton.classList.add('nav-button--disabled');
                    } else {
                        alumniNextButton.disabled = false;
                        alumniNextButton.classList.remove('nav-button--disabled');
                    }
                }

                // Update total pages
                if (alumniTotalPagesEl) {
                    alumniTotalPagesEl.textContent = alumniTotalPages;
                }
            }

            // Event listeners
            if (alumniPrevButton) {
                alumniPrevButton.addEventListener('click', function() {
                    if (!this.classList.contains('nav-button--disabled')) {
                        goToAlumniPage(alumniCurrentPage - 1);
                    }
                });
            }

            if (alumniNextButton) {
                alumniNextButton.addEventListener('click', function() {
                    if (!this.classList.contains('nav-button--disabled')) {
                        goToAlumniPage(alumniCurrentPage + 1);
                    }
                });
            }

            // Keyboard navigation
            document.addEventListener('keydown', function(event) {
                if (event.key === 'ArrowLeft' && alumniCurrentPage > 1) {
                    goToAlumniPage(alumniCurrentPage - 1);
                } else if (event.key === 'ArrowRight' && alumniCurrentPage < alumniTotalPages) {
                    goToAlumniPage(alumniCurrentPage + 1);
                }
            });

            // Initialize alumni pagination
            initAlumniPagination();
        });

        function playVideo() {
            let container = document.getElementById('videoContainer');
            container.innerHTML = `
                <iframe class="w-full h-96 rounded-2xl"
                    src="https://www.youtube.com/embed/FAwdUR9SFRU?autoplay=1"
                    title="Profil SKARIGA"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>`;
        }
    </script>
@endsection
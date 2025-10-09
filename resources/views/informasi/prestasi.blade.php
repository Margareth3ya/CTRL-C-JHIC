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
        padding-top: 1rem;
        padding-bottom: 1.25rem; 
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #ffffffff 0%, #ffffffff 100%);
    }

    .hero-text h1 {
        margin-bottom: 0.2rem;
    }
    .hero-text h2 {
        margin-top: 0.2rem;
    }

    /* === PRESTASI SECTION === */
.achievement-section {
    padding-top: 8rem; /* ⬅️ UBAH NILAI INI jadi lebih besar */
    padding-bottom: 2rem;
    position: relative;
    overflow: hidden;
    background: linear-gradient(180deg, #fff 0%, #fafafa 100%);
}

.achievement-section h2 {
    margin-bottom: 3rem;
    position: relative;
    text-align: center;
    width: 100%;
    display: block;
}

.achievement-section h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, #f97316, #fdba74);
    border-radius: 2px;
}

    /* === DUAL ACHIEVEMENT LAYOUT (REDESAIN) === */
    .achievement-pair {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-bottom: 5rem;
        gap: 3rem;
        position: relative;
    }

    .achievement-item {
        flex: 1 1 48%;
        min-width: 300px;
        display: flex;
        flex-direction: column;
        background: white;
        border-radius: 1rem;
        padding: 1.5rem;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: 1px solid #f3f4f6;
    }

    .achievement-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        border-color: #f97316;
    }

    /* Layout untuk item kiri (normal position) */
    .achievement-item.left-layout {
        flex-direction: row;
        align-items: flex-start;
    }

    /* Layout untuk item kanan (posisi lebih rendah + teks rata kanan) */
    .achievement-item.right-layout {
        flex-direction: row-reverse;
        align-items: flex-start;
        margin-top: 4rem;
        background: linear-gradient(135deg, #fff 0%, #fff9f5 100%);
    }

    .achievement-image-container {
        flex: 0 0 45%;
        margin-right: 1.5rem;
        position: relative;
    }

    .achievement-item.right-layout .achievement-image-container {
        margin-right: 0;
        margin-left: 1.5rem;
    }

    .achievement-image-container::before {
        content: '';
        position: absolute;
        top: -8px;
        left: -8px;
        right: -8px;
        bottom: -8px;
        background: linear-gradient(135deg, #f97316, #fdba74);
        border-radius: 1rem;
        opacity: 0.1;
        z-index: 0;
    }

    .achievement-image {
        width: 100%;
        height: 280px;
        object-fit: cover;
        border-radius: 0.75rem;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .achievement-image:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 30px rgba(0,0,0,0.2);
    }

    .achievement-content {
        flex: 1;
        padding: 0.5rem 0;
    }

    /* Teks rata kiri untuk item kiri */
    .achievement-item.left-layout .achievement-content {
        text-align: left;
    }

    /* Teks rata kanan untuk item kanan */
    .achievement-item.right-layout .achievement-content {
        text-align: right;
    }

    .achievement-content h3 {
        margin-bottom: 0.5rem;
        font-size: 2.25rem;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .achievement-content h4 {
        margin-bottom: 1rem;
        font-size: 1.5rem;
        color: #f97316;
        position: relative;
        display: inline-block;
    }

    .achievement-content h4::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 40px;
        height: 2px;
        background: #f97316;
    }

    .achievement-item.right-layout .achievement-content h4::after {
        left: auto;
        right: 0;
    }

    .achievement-content p {
        color: #6b7280;
        line-height: 1.7;
        font-size: 0.95rem;
        margin-top: 1rem;
    }

    /* === PAGINATION STYLES === */
    .pagination-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 4rem;
        margin-bottom: 2rem;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .pagination-btn {
        padding: 0.875rem 1.75rem;
        background: linear-gradient(135deg, #f97316, #ea580c);
        color: white;
        border: none;
        border-radius: 0.75rem;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3);
        position: relative;
        overflow: hidden;
    }

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

    .pagination-btn:hover:not(:disabled) {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(249, 115, 22, 0.4);
    }

    .pagination-btn:hover:not(:disabled)::before {
        left: 100%;
    }

    .pagination-btn:disabled {
        background: linear-gradient(135deg, #d1d5db, #9ca3af);
        cursor: not-allowed;
        transform: none;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .page-info {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: #4b5563;
        background: #f9fafb;
        padding: 0.75rem 1.5rem;
        border-radius: 0.75rem;
        border: 1px solid #e5e7eb;
        min-width: 120px;
        text-align: center;
    }

    /* === SECTION HIDDEN FOR PAGINATION === */
    .achievement-page {
        display: none;
    }

    .achievement-page.active {
        display: block;
        animation: fadeInUp 0.6s ease-out;
    }

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

    /* === RESPONSIVE DESIGN === */
    @media (max-width: 768px) {
        .achievement-pair {
            flex-direction: column;
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .achievement-item {
            flex: 1 1 100%;
            margin-top: 0 !important;
        }

        .achievement-item.left-layout,
        .achievement-item.right-layout {
            flex-direction: column;
        }

        .achievement-image-container {
            flex: 0 0 auto;
            margin-right: 0;
            margin-left: 0;
            margin-bottom: 1.5rem;
            width: 100%;
        }

        .achievement-item.right-layout .achievement-image-container {
            margin-left: 0;
        }

        /* Di mobile, semua teks rata kiri */
        .achievement-item.right-layout .achievement-content {
            text-align: left;
        }

        .achievement-item.right-layout .achievement-content h4::after {
            left: 0;
            right: auto;
        }

        .achievement-image {
            height: 220px;
        }

        .pagination-container {
            gap: 0.75rem;
        }

        .pagination-btn {
            padding: 0.75rem 1.25rem;
            font-size: 0.9rem;
        }

        .page-info {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
    }

    /* === SECTION SPACING === */
    section {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
    }

    /* section + section {
        margin-top: -3.5rem !important;
    } */

    @media (max-width: 640px) {
        #image-stack img {
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        
        .achievement-image {
            height: 200px;
        }
    }
</style>
@endpush

@section('content')
<div class="relative min-h-screen">

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
</section>

<!-- Achievement Section -->
<section class="achievement-section bg-white relative py-4">
    <div class="container mx-auto px-4 md:px-12">
        <h2 class="text-4xl md:text-5xl font-bebas text-center mb-8">
            Prestasi Terbaru
        </h2>

        <!-- Page 1 -->
        <div class="achievement-page active" id="page-1">
            <!-- Pair 1 -->
            <div class="achievement-pair">
                <!-- Achievement 1 - Kiri -->
                <div class="achievement-item left-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/LKS.png') }}" alt="Juara 2 LKS Nasional"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 2 LKS Nasional</h3>
                        <h4 class="font-bebas">Industrial Control</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
                            <u>medali</u> emas di LKS Nasional dengan prestasi membanggakan di bidang Industrial Control.
                        </p>
                    </div>
                </div>

                <!-- Achievement 2 - Kanan -->
                <div class="achievement-item right-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 1 LKS Nasional"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 1 LKS Nasional</h3>
                        <h4 class="font-bebas">Robot Manufacturing System</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
                            <u>medali</u> emas di LKS Nasional dengan inovasi di bidang Robot Manufacturing System.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pair 2 -->
            <div class="achievement-pair">
                <!-- Achievement 3 - Kiri -->
                <div class="achievement-item left-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 2 LKS Nasional"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 2 LKS Nasional</h3>
                        <h4 class="font-bebas">Teknik Komputer</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
                            <u>medali</u> emas di LKS Nasional dengan performa konsisten di bidang Teknik Komputer.
                        </p>
                    </div>
                </div>

                <!-- Achievement 4 - Kanan -->
                <div class="achievement-item right-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Juara 3 LKS Nasional"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 3 LKS Nasional</h3>
                        <h4 class="font-bebas">Teknik Elektronika</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
                            <u>medali</u> emas di LKS Nasional dengan keahlian di bidang Teknik Elektronika.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pair 3 -->
            <div class="achievement-pair">
                <!-- Achievement 5 - Kiri -->
                <div class="achievement-item left-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 1 Olimpiade Sains"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 1 Olimpiade Sains</h3>
                        <h4 class="font-bebas">Fisika Terapan</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                            <u>medali</u> emas di Olimpiade Sains Nasional dengan keunggulan di bidang Fisika Terapan.
                        </p>
                    </div>
                </div>

                <!-- Achievement 6 - Kanan -->
                <div class="achievement-item right-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 2 Kompetisi Robotik"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 2 Kompetisi Robotik</h3>
                        <h4 class="font-bebas">Robotika Industri</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
                            <u>medali</u> perak di Kompetisi Robotik Nasional dengan inovasi di bidang Robotika Industri.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page 2 -->
        <div class="achievement-page" id="page-2">
            <!-- Pair 4 -->
            <div class="achievement-pair">
                <!-- Achievement 7 - Kiri -->
                <div class="achievement-item left-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Juara 1 Lomba Programming"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 1 Lomba Programming</h3>
                        <h4 class="font-bebas">Web Development</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                            <u>medali</u> emas di Lomba Programming Nasional dengan karya inovatif di bidang Web Development.
                        </p>
                    </div>
                </div>

                <!-- Achievement 8 - Kanan -->
                <div class="achievement-item right-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 2 Lomba Desain"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 2 Lomba Desain</h3>
                        <h4 class="font-bebas">Graphic Design</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
                            <u>medali</u> perak di Lomba Desain Grafis Nasional dengan kreativitas luar biasa.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pair 5 -->
            <div class="achievement-pair">
                <!-- Achievement 9 - Kiri -->
                <div class="achievement-item left-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 1 Lomba Bahasa Inggris"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 1 Lomba Bahasa Inggris</h3>
                        <h4 class="font-bebas">Public Speaking</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                            <u>medali</u> emas di Lomba Bahasa Inggris Nasional dengan kemampuan public speaking yang memukau.
                        </p>
                    </div>
                </div>

                <!-- Achievement 10 - Kanan -->
                <div class="achievement-item right-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Juara 3 Lomba Matematika"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 3 Lomba Matematika</h3>
                        <h4 class="font-bebas">Matematika Terapan</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
                            <u>medali</u> perunggu di Lomba Matematika Nasional dengan solusi kreatif.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pair 6 -->
            <div class="achievement-pair">
                <!-- Achievement 11 - Kiri -->
                <div class="achievement-item left-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 1 Lomba Elektronika"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 1 Lomba Elektronika</h3>
                        <h4 class="font-bebas">Elektronika Dasar</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                            <u>medali</u> emas di Lomba Elektronika Nasional dengan penguasaan konsep yang mendalam.
                        </p>
                    </div>
                </div>

                <!-- Achievement 12 - Kanan -->
                <div class="achievement-item right-layout">
                    <div class="achievement-image-container">
                        <div class="overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 2 Lomba Jaringan"
                                 class="achievement-image">
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3 class="font-bebas">Juara 2 Lomba Jaringan</h3>
                        <h4 class="font-bebas">Network Security</h4>
                        <p class="font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
                            <u>medali</u> perak di Lomba Jaringan Komputer dengan keahlian di bidang keamanan jaringan.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination Controls -->
        <div class="pagination-container">
            <button class="pagination-btn" id="prev-btn" disabled>
                ← Sebelumnya
            </button>
            
            <div class="page-info">
                Halaman <span id="current-page">1</span> dari <span id="total-pages">2</span>
            </div>
            
            <button class="pagination-btn" id="next-btn">
                Selanjutnya →
            </button>
        </div>
    </div>
</section>

</div>
@endsection

@push('scripts')
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
            pages.forEach(page => page.classList.remove('active'));
            
            // Show current page
            document.getElementById(`page-${currentPage}`).classList.add('active');
            
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

        window.addEventListener("resize", () => {
            clearTimeout(cycleImages);
            setTimeout(cycleImages, 300);
        });
    });
</script>
@endpush
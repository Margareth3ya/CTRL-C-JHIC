@extends('layouts.app')

@push('styles')
<style>
    .font-bebas {
        font-family: 'Bebas Neue', cursive;
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
        padding: 4rem 1rem;
        position: relative;
        overflow: hidden;
        background: linear-gradient(180deg, #fafafa 0%, #fff 100%);
    }

    .achievement-section h2 {
        margin-bottom: 3rem;
        position: relative;
        text-align: center;
        width: 100%;
        display: block;
        font-family: 'Bebas Neue', cursive;
        font-size: 2.5rem;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .achievement-section h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: linear-gradient(90deg, #f97316, #fdba74);
        border-radius: 2px;
    }

    /* === DUAL ACHIEVEMENT LAYOUT === */
    .achievement-container {
        display: flex;
        flex-direction: column;
        gap: 2.5rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .achievement-pair {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 2rem;
        align-items: flex-start; /* Pastikan semua card mulai dari atas */
    }

    /* Card dasar */
    .achievement-item {
        display: flex;
        align-items: stretch;
        flex: 1 1 48%;
        background: white;
        border-radius: 1.5rem;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        transition: all 0.4s ease;
        border: 1px solid #f3f4f6;
        position: relative;
        overflow: hidden;
    }

    .achievement-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #f97316, #fdba74);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .achievement-item:hover::before {
        opacity: 1;
    }

    .achievement-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        border-color: #f97316;
    }

    /* TINGGI CARD BERGANDA - PAGE 1 */
    /* Pair 1: KIRI BESAR, Kanan kecil (sejajar bawah) */
    #page-1 .achievement-pair:nth-child(1) .achievement-item.left-layout {
        min-height: 340px; /* Sangat besar untuk prestasi pertama */
        max-height: 360px;
    }
    
    #page-1 .achievement-pair:nth-child(1) .achievement-item.right-layout {
        min-height: 280px; /* Lebih kecil, sejajar bawah */
        max-height: 300px;
        margin-top: 60px; /* Diturunkan agar sejajar bawah dengan card besar */
    }

    /* Pair 2: Kanan besar, Kiri kecil (sejajar bawah) */
    #page-1 .achievement-pair:nth-child(2) .achievement-item.left-layout {
        min-height: 280px;
        max-height: 300px;
        margin-top: 60px; /* Diturunkan */
    }
    
    #page-1 .achievement-pair:nth-child(2) .achievement-item.right-layout {
        min-height: 340px; /* Besar */
        max-height: 360px;
    }

    /* Pair 3: Kiri besar, Kanan kecil (sejajar bawah) */
    #page-1 .achievement-pair:nth-child(3) .achievement-item.left-layout {
        min-height: 340px; /* Besar */
        max-height: 360px;
    }
    
    #page-1 .achievement-pair:nth-child(3) .achievement-item.right-layout {
        min-height: 280px; /* Kecil, sejajar bawah */
        max-height: 300px;
        margin-top: 60px; /* Diturunkan */
    }

    /* TINGGI CARD BERGANDA - PAGE 2 */
    /* Pair 1: Kanan besar, Kiri kecil (sejajar bawah) */
    #page-2 .achievement-pair:nth-child(1) .achievement-item.left-layout {
        min-height: 280px;
        max-height: 300px;
        margin-top: 60px; /* Diturunkan */
    }
    
    #page-2 .achievement-pair:nth-child(1) .achievement-item.right-layout {
        min-height: 340px; /* Besar */
        max-height: 360px;
    }

    /* Pair 2: Kiri besar, Kanan kecil (sejajar bawah) */
    #page-2 .achievement-pair:nth-child(2) .achievement-item.left-layout {
        min-height: 340px; /* Besar */
        max-height: 360px;
    }
    
    #page-2 .achievement-pair:nth-child(2) .achievement-item.right-layout {
        min-height: 280px; /* Kecil, sejajar bawah */
        max-height: 300px;
        margin-top: 60px; /* Diturunkan */
    }

    /* Pair 3: Kanan besar, Kiri kecil (sejajar bawah) */
    #page-2 .achievement-pair:nth-child(3) .achievement-item.left-layout {
        min-height: 280px;
        max-height: 300px;
        margin-top: 60px; /* Diturunkan */
    }
    
    #page-2 .achievement-pair:nth-child(3) .achievement-item.right-layout {
        min-height: 340px; /* Besar */
        max-height: 360px;
    }

    /* Layout kiri */
    .achievement-item.left-layout {
        flex-direction: row;
        text-align: left;
    }

    .achievement-item.left-layout .achievement-image-container {
        margin-right: 1.5rem;
    }

    /* Layout kanan */
    .achievement-item.right-layout {
        flex-direction: row-reverse;
        text-align: right;
    }

    .achievement-item.right-layout .achievement-image-container {
        margin-left: 1.5rem;
    }

    /* CONTAINER GAMBAR BESAR */
    .achievement-image-container {
        flex: 0 0 45%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* GAMBAR BESAR */
    .achievement-image {
        width: 100%;
        height: 100%;
        max-width: 260px;
        max-height: 260px;
        min-width: 220px;
        min-height: 220px;
        object-fit: cover;
        border-radius: 1rem;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        transition: all 0.4s ease;
        border: 3px solid white;
        position: relative;
        z-index: 2;
    }

    .achievement-image:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 30px rgba(0,0,0,0.2);
    }

    /* Konten teks */
    .achievement-content {
        flex: 1;
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .achievement-content h3 {
        font-family: 'Bebas Neue', cursive;
        font-size: 2rem;
        margin-bottom: 0.5rem;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
        letter-spacing: 1px;
        line-height: 1.2;
    }

    .achievement-content h3::after {
        content: "";
        position: absolute;
        bottom: -0.4rem;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, #f97316, #fdba74);
        border-radius: 2px;
    }

    .achievement-item.right-layout .achievement-content h3::after {
        left: auto;
        right: 0;
    }

    .achievement-content h4 {
        font-family: 'Bebas Neue', cursive;
        font-size: 1.5rem;
        color: #f97316;
        margin-bottom: 0.8rem;
        letter-spacing: 0.5px;
        line-height: 1.2;
    }

    .achievement-content p {
        font-family: 'Poppins', sans-serif;
        font-size: 0.95rem;
        color: #6b7280;
        line-height: 1.6;
        margin-top: 0.8rem;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Jumlah baris teks berdasarkan tinggi card */
    .achievement-item[min-height="280px"] .achievement-content p,
    .achievement-item[min-height="300px"] .achievement-content p {
        -webkit-line-clamp: 4; /* Untuk card kecil */
    }

    .achievement-item[min-height="340px"] .achievement-content p,
    .achievement-item[min-height="360px"] .achievement-content p {
        -webkit-line-clamp: 8; /* Untuk card besar */
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
    @media (max-width: 1200px) {
        .achievement-container {
            max-width: 1100px;
        }
        
        .achievement-image {
            max-width: 240px;
            max-height: 240px;
        }
    }

    @media (max-width: 1024px) {
        .achievement-container {
            gap: 2rem;
            max-width: 900px;
        }

        .achievement-pair {
            gap: 1.5rem;
        }

        .achievement-image {
            max-width: 220px;
            max-height: 220px;
        }
        
        /* Di tablet, buat semua card sama tinggi dan hapus margin top */
        #page-1 .achievement-pair .achievement-item,
        #page-2 .achievement-pair .achievement-item {
            min-height: 300px !important;
            max-height: 320px !important;
            margin-top: 0 !important;
        }
        
        .achievement-item[min-height="300px"] .achievement-content p {
            -webkit-line-clamp: 6;
        }
    }

    @media (max-width: 768px) {
        .achievement-section {
            padding: 3rem 1rem;
        }

        .achievement-section h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .achievement-container {
            gap: 2rem;
        }

        .achievement-pair {
            flex-direction: column;
            gap: 1.5rem;
        }

        .achievement-item {
            flex-direction: column !important;
            text-align: center !important;
            padding: 1.5rem;
            min-height: auto !important;
            max-height: none !important;
            margin-top: 0 !important;
        }

        .achievement-item .achievement-image-container {
            margin: 0 0 1rem 0 !important;
            flex: 0 0 auto;
        }

        .achievement-content h3::after {
            left: 50% !important;
            transform: translateX(-50%);
        }

        .achievement-image {
            width: 200px;
            height: 200px;
            max-width: none;
            max-height: none;
        }
        
        .achievement-content {
            padding: 0;
        }
        
        .achievement-content p {
            -webkit-line-clamp: 4;
        }

        .pagination-container {
            gap: 0.75rem;
            margin-top: 3rem;
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

    @media (max-width: 480px) {
        .achievement-section {
            padding: 2rem 1rem;
        }

        .achievement-section h2 {
            font-size: 1.75rem;
        }

        .achievement-item {
            padding: 1.25rem;
        }

        .achievement-content h3 {
            font-size: 1.7rem;
        }

        .achievement-content h4 {
            font-size: 1.3rem;
        }

        .achievement-image {
            width: 180px;
            height: 180px;
        }
    }

    /* Image Stack Styles */
    #image-stack {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 26rem;
    }

    #image-stack img {
        position: absolute;
        object-fit: cover;
        border-radius: 1rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        transition: all 0.6s cubic-bezier(0.55, 0.085, 0.68, 0.53);
    }

    @media (max-width: 768px) {
        #image-stack {
            height: 20rem;
        }
        
        #image-stack img {
            border-radius: 0.75rem;
        }
    }

    @media (max-width: 480px) {
        #image-stack {
            height: 16rem;
        }
    }
</style>
@endpush

@section('content')
<div class="min-h-screen">

    <!-- Hero Section -->
    <section class="hero-section">
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

            <div id="image-stack">
                <img src="{{ asset('assets/Prestasi1.jpg') }}"
                     class="w-[65%] sm:w-[50%] md:w-[30%] h-[22rem] md:h-[26rem]"
                     alt="Prestasi 1">
                <img src="{{ asset('assets/Prestasi2.jpg') }}"
                     class="w-[65%] sm:w-[50%] md:w-[30%] h-[22rem] md:h-[26rem]"
                     alt="Prestasi 2">
                <img src="{{ asset('assets/Prestasi3.jpg') }}"
                     class="w-[65%] sm:w-[50%] md:w-[30%] h-[22rem] md:h-[26rem]"
                     alt="Prestasi 3">
            </div>
        </div>
    </section>

    <!-- Achievement Section -->
    <section class="achievement-section">
        <div class="container mx-auto">
            <h2 class="font-bebas">PRESTASI TERBARU</h2>

            <!-- Page 1 -->
            <div class="achievement-page active" id="page-1">
                <div class="achievement-container">
                    <!-- Pair 1: KIRI BESAR (prestasi pertama), Kanan kecil sejajar bawah -->
                    <div class="achievement-pair">
                        <!-- Achievement 1 - Kiri (SANGAT BESAR - prestasi utama) -->
                        <div class="achievement-item left-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/LKS.png') }}" alt="Juara 1 LKS Nasional"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 1 LKS Nasional</h3>
                                <h4 class="font-bebas">Industrial Control</h4>
                                <p class="font-poppins">
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

                        <!-- Achievement 2 - Kanan (kecil, sejajar bawah) -->
                        <div class="achievement-item right-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 2 LKS Nasional"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 2 LKS Nasional</h3>
                                <h4 class="font-bebas">Robot Manufacturing System</h4>
                                <p class="font-poppins">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan 
                                    <u>medali perak</u> di LKS Nasional dengan inovasi di bidang Robot Manufacturing System.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pair 2: Kanan besar, Kiri kecil sejajar bawah -->
                    <div class="achievement-pair">
                        <!-- Achievement 3 - Kiri (kecil, sejajar bawah) -->
                        <div class="achievement-item left-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 3 LKS Nasional"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 3 LKS Nasional</h3>
                                <h4 class="font-bebas">Teknik Komputer</h4>
                                <p class="font-poppins">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali perunggu</u> di LKS Nasional dengan performa konsisten di bidang Teknik Komputer.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 4 - Kanan (besar) -->
                        <div class="achievement-item right-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Juara 1 Olimpiade Sains"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 1 Olimpiade Sains</h3>
                                <h4 class="font-bebas">Fisika Terapan</h4>
                                <p class="font-poppins">
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

                    <!-- Pair 3: Kiri besar, Kanan kecil sejajar bawah -->
                    <div class="achievement-pair">
                        <!-- Achievement 5 - Kiri (besar) -->
                        <div class="achievement-item left-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 1 Kompetisi Programming"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 1 Kompetisi Programming</h3>
                                <h4 class="font-bebas">Web Development</h4>
                                <p class="font-poppins">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali emas</u> di Kompetisi Programming Nasional dengan karya inovatif di bidang Web Development.
                                    Aplikasi web yang dikembangkan berhasil memecahkan masalah nyata di masyarakat.
                                    Tim programming menunjukkan kemampuan coding yang sangat mumpuni.
                                    Prestasi ini membuktikan kesiapan siswa SKARIGA menghadapi era digital.
                                    Inovasi yang dibuat mendapat perhatian dari perusahaan teknologi ternama.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 6 - Kanan (kecil, sejajar bawah) -->
                        <div class="achievement-item right-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 2 Lomba Desain"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 2 Lomba Desain</h3>
                                <h4 class="font-bebas">Graphic Design</h4>
                                <p class="font-poppins">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali perak</u> di Lomba Desain Grafis Nasional dengan kreativitas luar biasa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page 2 -->
            <div class="achievement-page" id="page-2">
                <div class="achievement-container">
                    <!-- Pair 1: Kanan besar, Kiri kecil sejajar bawah -->
                    <div class="achievement-pair">
                        <!-- Achievement 7 - Kiri (kecil, sejajar bawah) -->
                        <div class="achievement-item left-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Juara 3 Lomba Bahasa Inggris"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 3 Lomba Bahasa Inggris</h3>
                                <h4 class="font-bebas">Public Speaking</h4>
                                <p class="font-poppins">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali perunggu</u> di Lomba Bahasa Inggris Nasional dengan kemampuan public speaking.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 8 - Kanan (besar) -->
                        <div class="achievement-item right-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 1 Lomba Elektronika"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 1 Lomba Elektronika</h3>
                                <h4 class="font-bebas">Elektronika Dasar</h4>
                                <p class="font-poppins">
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

                    <!-- Pair 2: Kiri besar, Kanan kecil sejajar bawah -->
                    <div class="achievement-pair">
                        <!-- Achievement 9 - Kiri (besar) -->
                        <div class="achievement-item left-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 1 Lomba Jaringan"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 1 Lomba Jaringan</h3>
                                <h4 class="font-bebas">Network Security</h4>
                                <p class="font-poppins">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali emas</u> di Lomba Jaringan Komputer dengan keahlian di bidang keamanan jaringan.
                                    Tim jaringan menunjukkan kemampuan mengamankan sistem dari berbagai ancaman cyber.
                                    Prestasi ini membuktikan kesiapan siswa menghadapi tantangan keamanan digital.
                                    Solusi yang diberikan mendapat apresiasi dari pakar keamanan siber.
                                    Prestasi ini meningkatkan reputasi sekolah di bidang teknologi informasi.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 10 - Kanan (kecil, sejajar bawah) -->
                        <div class="achievement-item right-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Juara 2 Lomba Matematika"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 2 Lomba Matematika</h3>
                                <h4 class="font-bebas">Matematika Terapan</h4>
                                <p class="font-poppins">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali perak</u> di Lomba Matematika Nasional dengan solusi kreatif.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pair 3: Kanan besar, Kiri kecil sejajar bawah -->
                    <div class="achievement-pair">
                        <!-- Achievement 11 - Kiri (kecil, sejajar bawah) -->
                        <div class="achievement-item left-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Juara 3 Lomba Otomotif"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 3 Lomba Otomotif</h3>
                                <h4 class="font-bebas">Teknik Kendaraan</h4>
                                <p class="font-poppins">
                                    MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil meraih 
                                    <u>medali perunggu</u> di Lomba Otomotif Nasional dengan keahlian di bidang teknik kendaraan.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement 12 - Kanan (besar) -->
                        <div class="achievement-item right-layout">
                            <div class="achievement-image-container">
                                <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Juara 1 Lomba Kewirausahaan"
                                     class="achievement-image">
                            </div>
                            <div class="achievement-content">
                                <h3 class="font-bebas">Juara 1 Lomba Kewirausahaan</h3>
                                <h4 class="font-bebas">Business Plan</h4>
                                <p class="font-poppins">
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
@endsection
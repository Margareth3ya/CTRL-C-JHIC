@extends('layouts.app')

@push('styles')
<style>
    .font-bebas {
        font-family: 'Bebas Neue', cursive;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    /* === BERITA SECTION === */
    .berita-section {
        padding: 4rem 1rem;
        background: linear-gradient(180deg, #fafafa 0%, #fff 100%);
        position: relative;
    }

    .berita-title {
        font-size: 2.5rem;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 3rem;
        position: relative;
        text-align: center;
    }

    .berita-title::after {
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

    .berita-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Layout Utama */
    .berita-layout {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem;
        align-items: start;
    }

    /* Card Besar Kiri */
    .berita-main-card {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        border: 1px solid #f3f4f6;
        height: fit-content;
    }

    .berita-main-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        border-color: #f97316;
    }

    .berita-main-image {
        width: 100%;
        height: 280px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .berita-main-card:hover .berita-main-image {
        transform: scale(1.05);
    }

    .berita-main-content {
        padding: 1.5rem;
    }

    .berita-main-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #1f2937;
        line-height: 1.3;
    }

    .berita-main-excerpt {
        color: #6b7280;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
    }

    /* Container Card Kanan */
    .berita-side-container {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        height: 100%;
    }

    /* Card Kecil Kanan */
    .berita-side-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: 1px solid #f3f4f6;
        flex: 1;
        display: flex;
        height: 50%; /* Setengah dari container */
    }

    .berita-side-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        border-color: #f97316;
    }

    .berita-side-image {
        width: 140px;
        height: 100%; /* Full height card */
        object-fit: cover;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }

    .berita-side-card:hover .berita-side-image {
        transform: scale(1.05);
    }

    .berita-side-content {
        padding: 1.25rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .berita-side-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #1f2937;
        line-height: 1.4;
    }

    .berita-side-excerpt {
        color: #6b7280;
        line-height: 1.5;
        font-size: 0.875rem;
        margin-bottom: 1rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .berita-read-more {
        display: inline-flex;
        align-items: center;
        color: #f97316;
        font-weight: 600;
        text-decoration: none;
        font-size: 0.875rem;
        transition: all 0.3s ease;
    }

    .berita-read-more:hover {
        color: #ea580c;
        transform: translateX(3px);
    }

    .berita-badge {
        position: absolute;
        top: 1rem;
        left: 1rem;
        background: linear-gradient(135deg, #f97316, #ea580c);
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 1.5rem;
        font-size: 0.75rem;
        font-weight: 600;
        z-index: 3;
        box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3);
    }

    .berita-date {
        color: #9ca3af;
        font-size: 0.8rem;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }

    /* Section Kedua */
    .berita-section:nth-child(2) {
        padding-top: 0;
    }

    .berita-section:nth-child(2) .berita-title {
        margin-bottom: 2rem;
    }

    /* Animations */
    .scroll-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .scroll-reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    /* === RESPONSIVE DESIGN === */
    @media (max-width: 1024px) {
        .berita-layout {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .berita-side-container {
            flex-direction: row;
            gap: 1rem;
        }

        .berita-side-card {
            flex: 1;
            height: auto;
        }

        .berita-side-image {
            width: 120px;
            height: 100%;
        }
    }

    @media (max-width: 768px) {
        .berita-section {
            padding: 3rem 1rem;
        }
        
        .berita-title {
            font-size: 2rem;
            margin-bottom: 2rem;
        }
        
        .berita-main-image {
            height: 220px;
        }
        
        .berita-main-title {
            font-size: 1.3rem;
        }
        
        .berita-main-content {
            padding: 1.25rem;
        }

        .berita-side-container {
            flex-direction: column;
        }

        .berita-side-card {
            flex-direction: row;
            height: auto;
        }

        .berita-side-image {
            width: 100px;
            height: 100%;
        }

        .berita-side-content {
            padding: 1rem;
        }

        .berita-side-title {
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .berita-section {
            padding: 2rem 1rem;
        }
        
        .berita-title {
            font-size: 1.75rem;
        }
        
        .berita-main-image {
            height: 180px;
        }

        .berita-side-card {
            flex-direction: row;
        }

        .berita-side-image {
            width: 80px;
            height: 100%;
        }
    }

    /* === MENGURANGI GAP UNTUK SEMUA SECTION SETELAH SECTION PERTAMA === */
.berita-section ~ .berita-section {
    padding-top: 0; /* Hilangkan padding atas untuk semua section setelah section pertama */
    padding-bottom: 2rem; /* Kurangi padding bawah */
}

.berita-section ~ .berita-section .berita-title {
    margin-bottom: 2rem; /* Kurangi margin bawah judul */
}

/* Section pertama tetap normal */
.berita-section:first-child {
    padding-top: 4rem;
    padding-bottom: 4rem;
}

.berita-section:first-child .berita-title {
    margin-bottom: 3rem;
}
</style>
@endpush

@section('content')
<div class="min-h-screen">

    <!-- Section 1: Berita Terbaru -->
    <section class="berita-section">
        <h2 class="berita-title font-bebas">BERITA TERBARU</h2>
        
        <div class="berita-container">
            <div class="berita-layout">
                <!-- Card Besar Kiri -->
                <div class="berita-main-card scroll-reveal">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/Berita1.png') }}" alt="SMK PGRI 3 Malang Raih Emas & Perak LKS Nasional 2025" class="berita-main-image">
                        <div class="berita-badge">TERBARU</div>
                    </div>
                    <div class="berita-main-content">
                        <div class="berita-date">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            15 Januari 2025
                        </div>
                        <h3 class="berita-main-title font-poppins">SMK PGRI 3 Malang Raih Emas & Perak LKS Nasional 2025</h3>
                        <p class="berita-main-excerpt font-poppins">
                            MALANG POSCO MEDIA, MALANG – SMK PGRI 3 Malang (SKARIGA) berhasil mempertahankan medali emas di Lomba Kompetensi Siswa (LKS) Nasional dengan prestasi membanggakan di bidang Industrial Control dan Robot Manufacturing System.
                        </p>
                        <a href="/informasi/berita/berita" class="berita-read-more font-poppins">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>

                <!-- Dua Card Kecil Kanan -->
                <div class="berita-side-container">
                    <!-- Card 1 -->
                    <div class="berita-side-card scroll-reveal" style="animation-delay: 0.1s">
                        <img src="{{ asset('assets/Berita2.png') }}" alt="Gubernur Jatim Apresiasi Skariga Bentuk Karakter" class="berita-side-image">
                        <div class="berita-side-content">
                            <div>
                                <div class="berita-date">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    10 Januari 2025
                                </div>
                                <h4 class="berita-side-title font-poppins">Gubernur Jatim Apresiasi Skariga Bentuk Karakter</h4>
                                <p class="berita-side-excerpt font-poppins">
                                    Gubernur Jawa Timur, Khofifah Indar Parawansa menyatakan keyakinannya bahwa dunia pendidikan SMK mampu membentuk karakter siswa yang unggul.
                                </p>
                            </div>
                            <a href="/berita-2" class="berita-read-more font-poppins">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="berita-side-card scroll-reveal" style="animation-delay: 0.2s">
                        <img src="{{ asset('assets/Berita3.png') }}" alt="Pembekalan PKL Kelas XI Skariga, Tanamkan Disiplin" class="berita-side-image">
                        <div class="berita-side-content">
                            <div>
                                <div class="berita-date">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    5 Januari 2025
                                </div>
                                <h4 class="berita-side-title font-poppins">Pembekalan PKL Kelas XI Skariga, Tanamkan Disiplin</h4>
                                <p class="berita-side-excerpt font-poppins">
                                    Ratusan siswa kelas XI SMK PGRI 3 Malang siap berangkat melaksanakan tugas Praktik Kerja Lapangan (PKL) dengan pembekalan yang matang.
                                </p>
                            </div>
                            <a href="/berita-3" class="berita-read-more font-poppins">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Berita Lainnya -->
    <section class="berita-section">
        <h2 class="berita-title font-bebas">BERITA LAINNYA</h2>
        
        <div class="berita-container">
            <div class="berita-layout">
                <!-- Card Besar Kiri -->
                <div class="berita-main-card scroll-reveal">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/Berita2.png') }}" alt="Inovasi Teknologi di SMK PGRI 3 Malang" class="berita-main-image">
                        <div class="berita-badge">INOVASI</div>
                    </div>
                    <div class="berita-main-content">
                        <div class="berita-date">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            28 Desember 2024
                        </div>
                        <h3 class="berita-main-title font-poppins">Inovasi Teknologi di SMK PGRI 3 Malang</h3>
                        <p class="berita-main-excerpt font-poppins">
                            SMK PGRI 3 Malang terus berkomitmen dalam pengembangan teknologi pendidikan. Dengan fasilitas laboratorium yang lengkap dan kurikulum yang selalu update, sekolah ini mencetak lulusan yang siap bersaing di industri 4.0.
                        </p>
                        <a href="/berita-inovasi" class="berita-read-more font-poppins">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>

                <!-- Dua Card Kecil Kanan -->
                <div class="berita-side-container">
                    <!-- Card 1 -->
                    <div class="berita-side-card scroll-reveal" style="animation-delay: 0.1s">
                        <img src="{{ asset('assets/Berita3.png') }}" alt="Workshop Kewirausahaan untuk Siswa" class="berita-side-image">
                        <div class="berita-side-content">
                            <div>
                                <div class="berita-date">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    20 Desember 2024
                                </div>
                                <h4 class="berita-side-title font-poppins">Workshop Kewirausahaan untuk Siswa</h4>
                                <p class="berita-side-excerpt font-poppins">
                                    Program kewirausahaan untuk siswa SMK PGRI 3 Malang berhasil mencetak young entrepreneur yang siap bersaing di pasar global dengan inovasi bisnis.
                                </p>
                            </div>
                            <a href="/berita-workshop" class="berita-read-more font-poppins">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="berita-side-card scroll-reveal" style="animation-delay: 0.2s">
                        <img src="{{ asset('assets/Berita1.png') }}" alt="Kolaborasi dengan Industri Terkemuka" class="berita-side-image">
                        <div class="berita-side-content">
                            <div>
                                <div class="berita-date">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    15 Desember 2024
                                </div>
                                <h4 class="berita-side-title font-poppins">Kolaborasi dengan Industri Terkemuka</h4>
                                <p class="berita-side-excerpt font-poppins">
                                    SMK PGRI 3 Malang menjalin kerjasama dengan berbagai perusahaan terkemuka untuk meningkatkan kualitas pendidikan dan peluang kerja lulusan.
                                </p>
                            </div>
                            <a href="/berita-kolaborasi" class="berita-read-more font-poppins">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section 3: Berita Lainnya -->
    <section class="berita-section">
        
        <div class="berita-container">
            <div class="berita-layout">
                <!-- Card Besar Kiri -->
                <div class="berita-main-card scroll-reveal">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/Berita2.png') }}" alt="Inovasi Teknologi di SMK PGRI 3 Malang" class="berita-main-image">
                        <div class="berita-badge">INOVASI</div>
                    </div>
                    <div class="berita-main-content">
                        <div class="berita-date">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            28 Desember 2024
                        </div>
                        <h3 class="berita-main-title font-poppins">Inovasi Teknologi di SMK PGRI 3 Malang</h3>
                        <p class="berita-main-excerpt font-poppins">
                            SMK PGRI 3 Malang terus berkomitmen dalam pengembangan teknologi pendidikan. Dengan fasilitas laboratorium yang lengkap dan kurikulum yang selalu update, sekolah ini mencetak lulusan yang siap bersaing di industri 4.0.
                        </p>
                        <a href="/berita-inovasi" class="berita-read-more font-poppins">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>

                <!-- Dua Card Kecil Kanan -->
                <div class="berita-side-container">
                    <!-- Card 1 -->
                    <div class="berita-side-card scroll-reveal" style="animation-delay: 0.1s">
                        <img src="{{ asset('assets/Berita3.png') }}" alt="Workshop Kewirausahaan untuk Siswa" class="berita-side-image">
                        <div class="berita-side-content">
                            <div>
                                <div class="berita-date">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    20 Desember 2024
                                </div>
                                <h4 class="berita-side-title font-poppins">Workshop Kewirausahaan untuk Siswa</h4>
                                <p class="berita-side-excerpt font-poppins">
                                    Program kewirausahaan untuk siswa SMK PGRI 3 Malang berhasil mencetak young entrepreneur yang siap bersaing di pasar global dengan inovasi bisnis.
                                </p>
                            </div>
                            <a href="/berita-workshop" class="berita-read-more font-poppins">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="berita-side-card scroll-reveal" style="animation-delay: 0.2s">
                        <img src="{{ asset('assets/Berita1.png') }}" alt="Kolaborasi dengan Industri Terkemuka" class="berita-side-image">
                        <div class="berita-side-content">
                            <div>
                                <div class="berita-date">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    15 Desember 2024
                                </div>
                                <h4 class="berita-side-title font-poppins">Kolaborasi dengan Industri Terkemuka</h4>
                                <p class="berita-side-excerpt font-poppins">
                                    SMK PGRI 3 Malang menjalin kerjasama dengan berbagai perusahaan terkemuka untuk meningkatkan kualitas pendidikan dan peluang kerja lulusan.
                                </p>
                            </div>
                            <a href="/berita-kolaborasi" class="berita-read-more font-poppins">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
    // Scroll reveal animation
    document.addEventListener('DOMContentLoaded', function() {
        const revealElements = document.querySelectorAll('.scroll-reveal');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(element => {
            observer.observe(element);
        });
    });
</script>
@endsection
@extends('layouts.app')

@push('styles')
<style>
    .font-bebas {
        font-family: 'Bebas Neue', cursive;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    /* === BERITA LENGKAP SECTION === */
    .berita-lengkap-section {
        padding: 4rem 1rem;
        background: linear-gradient(180deg, #fafafa 0%, #fff 100%);
        position: relative;
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

    /* Konten Berita Utama */
    .berita-utama {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        border: 1px solid #f3f4f6;
        height: fit-content;
    }

    .berita-gambar-utama {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 1rem;
        margin-bottom: 2rem;
    }

    .berita-judul {
        font-size: 2rem;
        font-weight: 700;
        color: #1f2937;
        line-height: 1.3;
        margin-bottom: 1.5rem;
        font-family: 'Poppins', sans-serif;
    }

    .berita-meta {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 2rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid #e5e7eb;
    }

    .berita-date {
        color: #9ca3af;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .berita-kategori {
        background: linear-gradient(135deg, #f97316, #ea580c);
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 1.5rem;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .berita-konten {
        color: #374151;
        line-height: 1.8;
        font-size: 1.1rem;
        text-align: justify;
        font-family: 'Poppins', sans-serif;
    }

    .berita-konten p {
        margin-bottom: 1.5rem;
    }

    /* Sidebar Berita Lain - STYLE BARU MIRIP HALAMAN BERITA */
    .berita-sidebar {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        height: 100%;
    }

    .sidebar-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 1rem;
        font-family: 'Bebas Neue', cursive;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Card Berita Sidebar - STYLE BARU DENGAN GAMBAR LEBIH LEBAR */
    .berita-side-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: 1px solid #f3f4f6;
        display: flex;
        height: 140px;
        align-items: stretch;
    }

    .berita-side-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        border-color: #f97316;
    }

    /* GAMBAR LEBIH LEBAR - UKURAN DIPERBESAR */
    .berita-side-image-container {
        width: 180px; /* DIPERBESAR dari 140px - LEBIH LEBAR KE SAMPING */
        height: 100%;
        flex-shrink: 0;
        position: relative;
        display: flex;
        align-items: stretch;
    }

    .berita-side-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.3s ease;
        display: block;
        flex-shrink: 0;
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
        font-family: 'Poppins', sans-serif;
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
        font-family: 'Poppins', sans-serif;
    }

    .berita-read-more:hover {
        color: #ea580c;
        transform: translateX(3px);
    }

    .berita-date-small {
        color: #9ca3af;
        font-size: 0.8rem;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }

    /* Breadcrumb */
    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 2rem;
        font-family: 'Poppins', sans-serif;
        font-size: 0.9rem;
        color: #6b7280;
    }

    .breadcrumb a {
        color: #f97316;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .breadcrumb a:hover {
        color: #ea580c;
    }

    /* Container untuk card samping - mengikuti tinggi konten */
    .side-cards-container {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        position: sticky;
        top: 2rem;
    }

    /* === STYLE BARU UNTUK CARD SAMPING YANG LEBIH BESAR === */
    /* Container untuk card samping dengan ukuran lebih besar */
    .berita-side-container {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        height: 100%;
    }

    /* Card Kecil Kanan - UKURAN DIPERBESAR DENGAN GAMBAR LEBIH LEBAR */
    .berita-side-card-large {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: 1px solid #f3f4f6;
        flex: 1;
        display: flex;
        height: 160px; /* DIPERBESAR dari 140px */
    }

    .berita-side-card-large:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        border-color: #f97316;
    }

    /* GAMBAR LEBIH LEBAR - UKURAN DIPERBESAR */
    .berita-side-image-large {
        width: 200px; /* DIPERBESAR dari 160px - LEBIH LEBAR KE SAMPING */
        height: 100%;
        object-fit: cover;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }

    .berita-side-card-large:hover .berita-side-image-large {
        transform: scale(1.05);
    }

    .berita-side-content-large {
        padding: 1.5rem; /* DIPERBESAR padding */
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .berita-side-title-large {
        font-size: 1.2rem; /* DIPERBESAR dari 1.1rem */
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #1f2937;
        line-height: 1.4;
        font-family: 'Poppins', sans-serif;
    }

    .berita-side-excerpt-large {
        color: #6b7280;
        line-height: 1.5;
        font-size: 0.9rem; /* DIPERBESAR dari 0.875rem */
        margin-bottom: 1rem;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* DIPERBESAR dari 2 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Badge untuk card samping */
    .berita-badge-side {
        position: absolute;
        top: 0.75rem;
        left: 0.75rem;
        background: linear-gradient(135deg, #f97316, #ea580c);
        color: white;
        padding: 0.3rem 0.6rem;
        border-radius: 1rem;
        font-size: 0.7rem;
        font-weight: 600;
        z-index: 3;
        box-shadow: 0 2px 10px rgba(249, 115, 22, 0.3);
    }

    /* === RESPONSIVE DESIGN === */
    @media (max-width: 1024px) {
        .berita-layout {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .berita-side-card,
        .berita-side-card-large {
            height: 140px;
        }

        /* Sesuaikan ukuran gambar untuk tablet */
        .berita-side-image-container {
            width: 160px; /* Sedikit dikurangi untuk tablet */
        }

        .berita-side-image-large {
            width: 180px; /* Sedikit dikurangi untuk tablet */
        }

        .side-cards-container {
            position: static;
        }

        .berita-side-container {
            flex-direction: row;
            gap: 1rem;
        }

        .berita-side-card-large {
            flex: 1;
            height: auto;
        }
    }

    @media (max-width: 768px) {
        .berita-lengkap-section {
            padding: 2rem 1rem;
        }

        .berita-utama {
            padding: 1.5rem;
        }

        .berita-gambar-utama {
            height: 250px;
        }

        .berita-judul {
            font-size: 1.5rem;
        }

        .berita-meta {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }

        .berita-side-card,
        .berita-side-card-large {
            height: 140px;
        }

        /* Sesuaikan ukuran gambar untuk mobile */
        .berita-side-image-container {
            width: 140px; /* Dikurangi untuk mobile */
        }

        .berita-side-image-large {
            width: 160px; /* Dikurangi untuk mobile */
        }

        .berita-side-content,
        .berita-side-content-large {
            padding: 1rem;
        }

        .berita-side-title,
        .berita-side-title-large {
            font-size: 1rem;
        }

        .berita-side-container {
            flex-direction: column;
        }
    }

    @media (max-width: 480px) {
        .berita-lengkap-section {
            padding: 1.5rem 1rem;
        }

        .berita-utama {
            padding: 1rem;
        }

        .berita-gambar-utama {
            height: 200px;
        }

        .berita-judul {
            font-size: 1.3rem;
        }

        .berita-konten {
            font-size: 1rem;
        }

        .berita-side-card,
        .berita-side-card-large {
            height: 120px;
            flex-direction: column;
        }

        /* Untuk mobile kecil, gambar mengambil lebar penuh */
        .berita-side-image-container {
            width: 100%;
            height: 80px;
        }

        .berita-side-image-large {
            width: 100%;
            height: 80px;
        }

        .berita-side-content,
        .berita-side-content-large {
            padding: 0.75rem;
        }

        .berita-side-title-large {
            font-size: 1rem;
        }

        .berita-side-excerpt-large {
            -webkit-line-clamp: 2;
        }
    }
</style>
@endpush

@section('content')
<div class="min-h-screen">

    <!-- Section: Berita Lengkap -->
    <section class="berita-lengkap-section">
        <div class="berita-container">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <a href="/">Beranda</a>
                <span>></span>
                <a href="/berita">Berita</a>
                <span>></span>
                <span>Berita Lengkap</span>
            </div>

            <div class="berita-layout">
                <!-- Konten Berita Utama -->
                <div class="berita-utama">
                    <img src="{{ asset('assets/Berita1.png') }}" alt="80 Siswa SMK PGRI 3 Malang Terima Bantuan PIP" class="berita-gambar-utama">
                    
                    <div class="berita-meta">
                        <div class="berita-date">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            7 Agustus 2025
                        </div>
                        <div class="berita-kategori">PENDIDIKAN</div>
                    </div>

                    <h1 class="berita-judul">
                        80 Siswa SMK PGRI 3 Malang Terima Bantuan PIP dari dr. Gamal, Komisi X DPR RI
                    </h1>

                    <div class="berita-konten">
                        <p>
MALANG – Ratusan pendaftar di SMK PGRI 3 Kota Malang antri untuk ikut seleksi pendaftaran siswa baru karena khawatir tidak mendapatkan kuota masuk di SMK favorit itu, Jumat (10/10/2025). 




                        <p>
Moch. Lukman Hakim, S.T., MM., Kepala SMK PGRI 3 Kota Malang menjelaskan pendaftaran siswa baru gelombang pertama dibuka tanggal 10 Oktober 2025. "Gemombang pertama memang sudah kami buka, karena tingginya animo masyarakat, orang tua dan siswa sendiri yang ingin bersekolah di SMK PGRI 3 Kota Malang. 

                        </p>

                        <p>
"Memang tidak seperti kebanyakan seperti sekolah lain, kami melakukan seleksi terlebih dahulu dengan harapan mendapatkan siswa yang benar-benar ingin masuk di SMK PGRI 3 Kota Malang secara kompetensi akademis dan non akademik sekaligus mempunyai komitmen menjadi SMK yang terbaik di Indonesia. 

                        </p>

                        <p>
"Seleksi seperti ini paling tidak memiliki semacam resources yang benar-benar pada anak SMP/ MTS yang ingin masuk di sekolah berbasis industri, mengedepankan kedisiplinan sekaligus membentuk akhlakul karimah," ungkapnya. 

                        </p>

                        <p>
Pada pembukaan seleksi pertama, dibuka kuota 500 pendaftar.  "Seleksi saat ini hanya 500 ,di SMK PGRI 3 Malang ada 12 jurusan dengan memiliki eksistensi masing-masing," tegasnya. 

                        </p>

                        <p>
Di SMK PGRI 3 Kota Malang siswa bisa mengeksplorasi melalui kemampuannya menuju Grand School menuju SDGS sesuai dengan WHO, termasuk memaksimalkan calon lulusan sekolah grand industrial.



---
Sumber: TIMES INDONESIA
https://timesindonesia.co.id/indonesia-positif/559327/animo-pendaftar-smk-pgri-3-kota-malang-cukup-tinggi-kuota-dibatasi-500-pendaftar
                        </p>
                    </div>
                </div>

                <!-- Sidebar Berita Lain - STYLE BARU DENGAN GAMBAR LEBIH LEBAR -->
                <div class="side-cards-container">
                    <h3 class="sidebar-title">BERITA LAINNYA</h3>
                    
                    <!-- Container untuk card samping dengan ukuran lebih besar -->
                    <div class="berita-side-container">
                        <!-- Card 1 - STYLE BARU DENGAN GAMBAR LEBIH LEBAR -->
                        <div class="berita-side-card-large">
                            <div class="relative">
                                <img src="{{ asset('assets/Berita2.png') }}" alt="Gubernur Jatim Apresiasi Skariga Bentuk Karakter" class="berita-side-image-large">
                                <div class="berita-badge-side">TERBARU</div>
                            </div>
                            <div class="berita-side-content-large">
                                <div>
                                    <div class="berita-date-small">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        10 Januari 2025
                                    </div>
                                    <h4 class="berita-side-title-large">Gubernur Jatim Apresiasi Skariga Bentuk Karakter</h4>
                                    <p class="berita-side-excerpt-large">
                                        Gubernur Jawa Timur, Khofifah Indar Parawansa menyatakan keyakinannya bahwa dunia pendidikan SMK mampu membentuk karakter siswa yang unggul dan berdaya saing global.
                                    </p>
                                </div>
                                <a href="/berita-2" class="berita-read-more">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>

                        <!-- Card 2 - STYLE BARU DENGAN GAMBAR LEBIH LEBAR -->
                        <div class="berita-side-card-large">
                            <div class="relative">
                                <img src="{{ asset('assets/Berita3.png') }}" alt="Pembekalan PKL Kelas XI Skariga, Tanamkan Disiplin" class="berita-side-image-large">
                                <div class="berita-badge-side">PENDIDIKAN</div>
                            </div>
                            <div class="berita-side-content-large">
                                <div>
                                    <div class="berita-date-small">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        5 Januari 2025
                                    </div>
                                    <h4 class="berita-side-title-large">Pembekalan PKL Kelas XI Skariga, Tanamkan Disiplin</h4>
                                    <p class="berita-side-excerpt-large">
                                        Ratusan siswa kelas XI SMK PGRI 3 Malang siap berangkat melaksanakan tugas Praktik Kerja Lapangan (PKL) dengan pembekalan yang matang dan penanaman nilai-nilai disiplin.
                                    </p>
                                </div>
                                <a href="/berita-3" class="berita-read-more">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>

                        <!-- Card 3 - STYLE BARU DENGAN GAMBAR LEBIH LEBAR -->
                        <div class="berita-side-card-large">
                            <div class="relative">
                                <img src="{{ asset('assets/Berita1.png') }}" alt="Workshop Kewirausahaan untuk Siswa" class="berita-side-image-large">
                                <div class="berita-badge-side">WORKSHOP</div>
                            </div>
                            <div class="berita-side-content-large">
                                <div>
                                    <div class="berita-date-small">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        20 Desember 2024
                                    </div>
                                    <h4 class="berita-side-title-large">Workshop Kewirausahaan untuk Siswa</h4>
                                    <p class="berita-side-excerpt-large">
                                        Program kewirausahaan untuk siswa SMK PGRI 3 Malang berhasil mencetak young entrepreneur yang siap bersaing di pasar global dengan inovasi bisnis yang kreatif.
                                    </p>
                                </div>
                                <a href="/berita-workshop" class="berita-read-more">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>

                        <!-- Card 4 - STYLE BARU DENGAN GAMBAR LEBIH LEBAR -->
                        <div class="berita-side-card-large">
                            <div class="relative">
                                <img src="{{ asset('assets/Berita2.png') }}" alt="Kolaborasi dengan Industri Terkemuka" class="berita-side-image-large">
                                <div class="berita-badge-side">KOLABORASI</div>
                            </div>
                            <div class="berita-side-content-large">
                                <div>
                                    <div class="berita-date-small">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        15 Desember 2024
                                    </div>
                                    <h4 class="berita-side-title-large">Kolaborasi dengan Industri Terkemuka</h4>
                                    <p class="berita-side-excerpt-large">
                                        SMK PGRI 3 Malang menjalin kerjasama dengan berbagai perusahaan terkemuka untuk meningkatkan kualitas pendidikan dan peluang kerja lulusan di berbagai sektor industri.
                                    </p>
                                </div>
                                <a href="/berita-kolaborasi" class="berita-read-more">
                                    Baca Selengkapnya →
                                </a>
                            </div>
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
        const revealElements = document.querySelectorAll('.berita-side-card-large');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        revealElements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'all 0.6s ease';
            observer.observe(element);
        });
    });
</script>
@endsection
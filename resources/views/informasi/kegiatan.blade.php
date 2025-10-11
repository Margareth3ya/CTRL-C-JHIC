@extends('layouts.app')

@push('styles')
<style>
    .font-bebas {
        font-family: 'Bebas Neue', cursive;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    .bg-circle {
        position: absolute;
        width: 20rem;
        height: 20rem;
        border-radius: 50%;
    }
    
    @media (min-width: 1024px) {
        .bg-circle {
            width: 28rem;
            height: 28rem;
        }
    }

    .bg-orange-blur {
        background: rgba(255, 179, 132, 0.32);
    }
    
    .bg-blue-blur {
        background: rgba(174, 219, 228, 0.5);
    }

    .slideshow-container {
        position: relative;
        width: 100%;
        height: 28rem;
        overflow: hidden;
    }
    
    .slideshow-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .fade {
        animation: fadeEffect 1s ease-in-out;
    }
    
    @keyframes fadeEffect {
        from { opacity: 0.3; }
        to { opacity: 1; }
    }

    /* === JUDUL GALERI KEGIATAN === */
    .gallery-title {
        font-size: 3.5rem;
        background: linear-gradient(135deg, #1f2937, #374151);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 2rem;
        position: relative;
        text-align: center;
    }

    .gallery-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 200px;
        height: 3px;
        background: linear-gradient(90deg, #f97316, #fdba74);
        border-radius: 2px;
    }

    /* === CARD STYLING BARU === */
    .gallery-card {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        border: 1px solid #f3f4f6;
        position: relative;
    }

    .gallery-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        border-color: #f97316;
    }

    .gallery-image-container {
        position: relative;
        height: 28rem;
        overflow: hidden;
    }

    .gallery-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .gallery-card:hover .gallery-image {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
        padding: 2rem;
        color: white;
        z-index: 2;
    }

    .gallery-card-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: white;
        font-family: 'Bebas Neue', cursive;
    }

    .gallery-card-date {
        font-size: 1rem;
        opacity: 0.9;
        color: #f3f4f6;
        font-family: 'Poppins', sans-serif;
    }

    .gallery-badge {
        position: absolute;
        /* top: 1rem;
        right: 1rem; */
        /* background: linear-gradient(135deg, #f97316, #ea580c); */
        /* color: white; */
        /* padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 3; */
        /* box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3); */
        /* font-family: 'Poppins', sans-serif; */
    }

    /* === SLIDESHOW CARD === */
    .slideshow-card {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        border: 1px solid #f3f4f6;
        position: relative;
    }

    .slideshow-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        border-color: #f97316;
    }

    .slideshow-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
        padding: 2rem;
        color: white;
        z-index: 2;
    }

    .slideshow-title {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: white;
        font-family: 'Bebas Neue', cursive;
    }

    .slideshow-date {
        font-size: 1rem;
        opacity: 0.9;
        color: #f3f4f6;
        font-family: 'Poppins', sans-serif;
    }

    /* === RESPONSIVE DESIGN === */
    @media (max-width: 768px) {
        .gallery-title {
            font-size: 2.5rem;
        }
        
        .gallery-card-title {
            font-size: 1.25rem;
        }
        
        .slideshow-title {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 480px) {
        .gallery-title {
            font-size: 2rem;
        }
    }
</style>
@endpush

@section('content')
<div class="relative w-full min-h-screen overflow-hidden bg-gray-50">

    <!-- Background Circles -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="bg-blue-blur bg-circle -left-32 -top-20"></div>
        <div class="bg-blue-blur bg-circle -left-28 top-1/3"></div>
        <div class="bg-orange-blur bg-circle -right-32 top-24"></div>
        <div class="bg-orange-blur bg-circle -right-28 bottom-40"></div>
    </div>

    <div class="absolute inset-0 bg-white bg-opacity-35 -z-0"></div>

    <div class="relative container mx-auto px-4 pt-10 md:pt-32 lg:pt-20 pb-12 z-20">

        <!-- === Section 1 === -->
        <div class="flex justify-center">
            <div class="grid grid-cols-1 lg:grid-cols-[300px_700px_300px] gap-6">

                <!-- Left Card -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan2.png') }}" alt="Berita 2" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Upacara memperingati hari pendidikan nasional</h3>
                            <p class="gallery-card-date">- 2 Agustus 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

                <!-- Center Slideshow Card -->
                <div class="slideshow-card">
                    <div class="slideshow-container">
                        <img id="slideImage" src="{{ asset('assets/Kegiatan1.png') }}" alt="Slide 1" class="fade">
                    </div>
                    <div class="slideshow-overlay">
                        <h3 id="slideTitle" class="slideshow-title">Kegiatan acara demonstrasi ekstrakurikuler</h3>
                        <p id="slideDate" class="slideshow-date">- 2 Agustus 2025</p>
                    </div>
                    <div class="gallery-badge">SLIDESHOW</div>
                </div>

                <!-- Right Card -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan3.png') }}" alt="Berita 3" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Event tahunan Skariga LebaRun</h3>
                            <p class="gallery-card-date">- 14 Juni 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Judul -->
        <h1 class="gallery-title font-bebas mt-20">
            GALERI KEGIATAN
        </h1>

        <!-- === Gallery Section (4 kolom) === -->
        <div class="container mx-auto px-4 py-6 md:py-8 lg:py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan4.png') }}" alt="Halal Bihalal" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Acara Halal Bihalal Skariga</h3>
                            <p class="gallery-card-date">- 2 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan5.png') }}" alt="Halal Bihalal" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Acara Halal Bihalal Skariga</h3>
                            <p class="gallery-card-date">- 2 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan6.png') }}" alt="Halal Bihalal" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Acara Halal Bihalal Skariga</h3>
                            <p class="gallery-card-date">- 2 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Apel.jpg') }}" alt="Kegiatan Lain" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Kegiatan Lain</h3>
                            <p class="gallery-card-date">- 10 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- === Gallery Section (4 kolom) === -->
        <div class="container mx-auto px-4 py-6 md:py-8 lg:py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan4.png') }}" alt="Halal Bihalal" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Acara Halal Bihalal Skariga</h3>
                            <p class="gallery-card-date">- 2 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan5.png') }}" alt="Halal Bihalal" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Acara Halal Bihalal Skariga</h3>
                            <p class="gallery-card-date">- 2 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan6.png') }}" alt="Halal Bihalal" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Acara Halal Bihalal Skariga</h3>
                            <p class="gallery-card-date">- 2 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Pondok.jpg') }}" alt="Kegiatan Lain" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Kegiatan Lain</h3>
                            <p class="gallery-card-date">- 10 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- === Gallery Section (4 kolom) === -->
        <div class="container mx-auto px-4 py-6 md:py-8 lg:py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan4.png') }}" alt="Halal Bihalal" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Acara Halal Bihalal Skariga</h3>
                            <p class="gallery-card-date">- 2 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan5.png') }}" alt="Halal Bihalal" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Acara Halal Bihalal Skariga</h3>
                            <p class="gallery-card-date">- 2 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Kegiatan6.png') }}" alt="Halal Bihalal" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Acara Halal Bihalal Skariga</h3>
                            <p class="gallery-card-date">- 2 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="gallery-card">
                    <div class="gallery-image-container">
                        <img src="{{ asset('assets/Pondok.jpg') }}" alt="Kegiatan Lain" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-card-title">Kegiatan Lain</h3>
                            <p class="gallery-card-date">- 10 Mei 2025</p>
                        </div>
                        <div class="gallery-badge">KEGIATAN</div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    let slideIndex = 0;
    const slideData = [
        { image: "{{ asset('assets/Kegiatan1.png') }}", title: "Kegiatan acara demonstrasi ekstrakurikuler", date: "- 2 Agustus 2025" },
        { image: "{{ asset('assets/Kegiatan2.png') }}", title: "Upacara memperingati hari pendidikan nasional", date: "- 17 Agustus 2025" },
        { image: "{{ asset('assets/Kegiatan3.png') }}", title: "Event tahunan Skariga LebaRun", date: "- 14 Juni 2025" },
    ];

    function showSlides() {
        slideIndex++;
        if (slideIndex >= slideData.length) slideIndex = 0;

        const imgEl = document.getElementById("slideImage");
        const titleEl = document.getElementById("slideTitle");
        const dateEl = document.getElementById("slideDate");

        // Tambahkan efek fade
        imgEl.classList.remove("fade");
        void imgEl.offsetWidth; // trigger reflow
        imgEl.classList.add("fade");

        // Update konten
        imgEl.src = slideData[slideIndex].image;
        titleEl.innerText = slideData[slideIndex].title;
        dateEl.innerText = slideData[slideIndex].date;

        setTimeout(showSlides, 4000);
    }

    // jalankan pertama kali
    window.addEventListener("load", () => {
        setTimeout(showSlides, 4000);
    });
</script>
@endpush
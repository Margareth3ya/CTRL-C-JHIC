@extends('layouts.app')

@push('styles')
    <style>
        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        /* === ORGANISASI OSIS SECTION === */
        .organization-section {
            padding: 6rem 1rem 4rem;
            position: relative;
            overflow: hidden;
        }

        .organization-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
        }

        .osis-card {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 1.5rem;
            padding: 3rem 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid #f3f4f6;
            position: relative;
            overflow: hidden;
        }

        .osis-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            animation: rotate 10s linear infinite;
        }

        @keyframes rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        .osis-image-container {
            width: 200px;
            height: 200px;
            margin: 0 auto 2rem;
            position: relative;
            z-index: 2;
        }

        .osis-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #f97316;
            transition: transform 0.3s ease;
        }

        .osis-image:hover {
            transform: scale(1.05);
        }

        .organization-title {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #1f2937, #374151);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            position: relative;
            z-index: 2;
        }

        .organization-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #6b7280;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        /* === EKSTRAKURIKULER SECTION === */
        .ekskul-section {
            padding: 4rem 1rem 6rem;
        }

        .ekskul-title {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #1f2937, #374151);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 3rem;
            position: relative;
        }

        .ekskul-title::after {
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

        .ekskul-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .ekskul-card {
            background: white;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 1px solid #f3f4f6;
            position: relative;
        }

        .ekskul-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            border-color: #f97316;
        }

        .ekskul-image-container {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .ekskul-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .ekskul-card:hover .ekskul-image {
            transform: scale(1.1);
        }

        .ekskul-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.8) 100%);
            opacity: 0.8;
            transition: opacity 0.4s ease;
        }

        .ekskul-card:hover .ekskul-overlay {
            opacity: 0.9;
        }

        .ekskul-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            color: white;
            z-index: 2;
        }

        .ekskul-name {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: white;
        }

        .ekskul-description {
            font-size: 0.95rem;
            line-height: 1.6;
            opacity: 0.9;
            color: #f3f4f6;
        }

        /* .ekskul-badge {
                position: absolute;
                top: 1rem;
                right: 1rem;
                background: linear-gradient(135deg, #f97316, #ea580c);
                color: white;
                padding: 0.5rem 1rem;
                border-radius: 2rem;
                font-size: 0.8rem;
                font-weight: 600;
                z-index: 3;
                box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3);
            } */

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
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
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
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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

        /* === PAGINATION PAGES === */
        .ekskul-page {
            display: none;
        }

        .ekskul-page.active {
            display: block;
            animation: fadeInUp 0.6s ease-out;
        }

        /* === RESPONSIVE DESIGN === */
        @media (max-width: 768px) {
            .organization-section {
                padding: 4rem 1rem 2rem;
            }

            .osis-card {
                padding: 2rem 1.5rem;
            }

            .osis-image-container {
                width: 150px;
                height: 150px;
            }

            .organization-title {
                font-size: 2.5rem;
            }

            .ekskul-title {
                font-size: 2.5rem;
            }

            .ekskul-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .ekskul-image-container {
                height: 200px;
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

        @media (max-width: 480px) {
            .organization-title {
                font-size: 2rem;
            }

            .ekskul-title {
                font-size: 2rem;
            }

            .ekskul-grid {
                grid-template-columns: 1fr;
            }

            .osis-card {
                padding: 1.5rem 1rem;
            }

            .organization-description {
                font-size: 1rem;
            }
        }

        /* === ANIMATIONS === */
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

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        /* === SCROLL ANIMATIONS === */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
@endpush

@section('content')
    <div class="min-h-screen">

        <!-- Section: Organisasi OSIS -->
        <section class="organization-section">
            <div class="osis-card">
                <div class="osis-image-container">
                    <img src="{{ asset('assets/osis.png') }}" alt="Foto OSIS" class="osis-image">
                </div>
                <h2 class="organization-title font-bebas text-center">ORGANISASI OSIS</h2>
                <p class="organization-description font-poppins text-center">
                    Organisasi Siswa Intra Sekolah (OSIS) SMK PGRI 3 Malang adalah wadah resmi bagi siswa untuk
                    merealisasikan aspirasi, mengembangkan bakat dan minat, serta melatih kepemimpinan dan tanggung jawab.
                    OSIS aktif mengadakan berbagai program sekolah, baik di bidang akademik, olahraga, seni, maupun sosial
                    kemasyarakatan.
                </p>
            </div>
        </section>

        <!-- Section: Ekstrakurikuler -->
        <!-- NOTE OJOL PAKE NATIVE CSS, GAMBAR E ILANG ANJIRR -->
        <section class="">
            <h2 class="font-bebas text-center">EKSTRAKURIKULER</h2>
            <div class="">
                @forelse ($eks as $item)
                    <div class="">
                        <div class="">
                            <img src="{{ asset('assets/' . $item->folder . '/' . $item->image) }}" alt="{{ $item->title }}"
                                alt="{{ $item->title }}" class="">
                            <div class=""></div>
                        </div>
                        <div class="">
                            <h3 class="font-bebas">{{ $item->title }}</h3>
                            <p class="font-poppins">{{ $item->body }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500 col-span-3">Belum ada data ekstrakurikuler.</p>
                @endforelse
            </div>
        </section>
    </div>
@endsection
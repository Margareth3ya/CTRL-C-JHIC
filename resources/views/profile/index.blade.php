@extends('layouts.app')

@section('title', 'Profil SKARIGA')

@section('content')
    <link rel="stylesheet" href="css/style.css">

    <section class="relative bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- ====== SAMBUTAN KEPALA SEKOLAH ====== --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center">
                <div class="relative flex justify-center md:justify-start overflow-hidden">
                    <div class="absolute -top-6 left-0 w-56 h-56 md:w-64 md:h-64 rounded-full bg-orange-200 -z-10"></div>
                    <div class="kepalas w-48 h-48 md:w-64 md:h-64 rounded-full overflow-hidden shadow-xl relative z-10">
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
                            yang berbeda dari lembaga pendidikan lainnya—tidak sekadar aturan, melainkan
                            prinsip hidup yang membentuk karakter profesional, tangguh, dan bertanggung jawab.
                        </p>
                        <p>
                            Sebagai sekolah berbasis industri, kurikulum kami senantiasa disesuaikan dengan
                            kebutuhan pasar kerja melalui kerja sama yang luas dengan berbagai perusahaan dan
                            institusi. Jaringan kerja yang luas ini memberikan kesempatan bagi siswa untuk
                            mengikuti program magang, pelatihan, dan pengalaman langsung, sehingga mereka
                            memiliki kompetensi dan kesiapan yang optimal untuk berkontribusi secara nyata
                            di dunia profesional.
                        </p>
                    </div>
                    <p class="mt-6 font-semibold text-gray-800">
                        Moch. Lukman Hakim, S.T., M.M
                    </p>
                </div>a
            </div>

            {{-- ====== VISI ====== --}}
            <div class="mt-24 mb-16 relative">
                <div
                    class="absolute -top-10 left-1/2 transform -translate-x-1/2 w-24 h-24 bg-orange-400 opacity-10 rounded-full">
                </div>
                <div class="text-center relative z-10">
                    <div class="inline-block mb-4">
                        <span class="text-orange-500 text-4xl mb-2"><i class="fas fa-binoculars"></i></span>
                        <h3 class="text-3xl font-bold text-orange-500 mb-4">Visi</h3>
                    </div>
                    <div
                        class="bg-gradient-to-r from-orange-50 to-amber-50 p-8 rounded-2xl shadow-md max-w-4xl mx-auto border-l-4 border-orange-400">
                        <p class="text-gray-800 text-xl italic leading-relaxed">
                            "Menjadi SMK yang unggul dalam prestasi dengan dilandasi Iman & Taqwa serta menghasilkan
                            tamatan yang mampu bersaing di tingkat Nasional maupun Internasional."
                        </p>
                    </div>
                </div>
            </div>

            {{-- ====== MISI ====== --}}
            <div class="mt-16 mb-10">
                <div class="text-center mb-12">
                    <span class="text-sky-500 text-4xl mb-2"><i class="fas fa-bullseye"></i></span>
                    <h3 class="text-3xl font-bold text-sky-500">Misi</h3>
                    <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
                        Komitmen kami dalam mewujudkan visi sekolah melalui empat pilar utama
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-8 border-orange-500">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-orange-100">
                                <i class="fas fa-bullseye text-orange-500 text-2xl"></i>
                            </div>
                        </div>
                        <h4 class="font-bold text-gray-800 text-lg mb-3">Menumbuhkan Semangat</h4>
                        <p class="text-gray-600 text-sm">
                            Menumbuhkan semangat keunggulan yang kompetitif di seluruh warga sekolah.
                        </p>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-8 border-sky-500">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-sky-100">
                                <i class="fas fa-graduation-cap text-sky-500 text-2xl"></i>
                            </div>
                        </div>
                        <h4 class="font-bold text-gray-800 text-lg mb-3">Pembelajaran Berstandar</h4>
                        <p class="text-gray-600 text-sm">
                            Pembelajaran berbasis standar nasional & internasional dengan mempertingkatkan kemampuan siswa.
                        </p>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-8 border-orange-500">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-orange-100">
                                <i class="fas fa-book-open text-orange-500 text-2xl"></i>
                            </div>
                        </div>
                        <h4 class="font-bold text-gray-800 text-lg mb-3">Penguatan Agama & Budaya</h4>
                        <p class="text-gray-600 text-sm">
                            Penguatan ajaran agama dan budaya bangsa sebagai pedoman sikap.
                        </p>
                    </div>
                    <!-- Card 4 -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-8 border-sky-500">
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-sky-100">
                                <i class="fas fa-school text-sky-500 text-2xl"></i>
                            </div>
                        </div>
                        <h4 class="font-bold text-gray-800 text-lg mb-3">Pengelolaan Sekolah</h4>
                        <p class="text-gray-600 text-sm">
                            Pengelolaan sekolah berstandar nasional & internasional dengan partisipasi warga dan
                            stakeholder.
                        </p>
                    </div>
                </div>
            </div>

            {{-- ====== APA KATA ALUMNI ====== --}}
            <div class="mt-24 mb-16">
                <h3 class="text-3xl font-bold text-center mb-12">Apa Kata Alumni?</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @forelse ($alumnis as $alumni)
                        <div
                            class="flex relative h-96 bg-white rounded-2xl shadow-lg overflow-hidden group hover:scale-105 transition-transform hover:shadow-orange-300">
                            <img src="{{ asset('assets/alumni/' . $alumni->image) }}" alt="{{ $alumni->title }}"
                                class="w-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-4">
                                <h4 class="text-lg font-bold text-white">{{ $alumni->title }}</h4>
                                <p class="text-gray-200 text-sm">{{ $alumni->body }}</p>
                                <span class="text-xs text-gray-300 mt-1">{{ $alumni->credit }}</span>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-500 col-span-3">Belum da data alumni.</p>
                    @endforelse
                </div>
                <div class="mt-4">{{ $alumnis->links('pagination::simple-tailwind') }}</div>
            </div>

            {{-- ====== PROFIL LENGKAP SKARIGA ====== --}}
            <div class="mb-20">
                <h3 class="text-3xl font-bold text-center mb-8">Profil Lengkap SKARIGA</h3>

                <div id="videoContainer"
                    class="relative w-full max-w-5xl mx-auto rounded-2xl overflow-hidden shadow-lg group">
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

            <script>
                function playVideo() {
                    let container = document.getElementById('videoContainer');
                    container.innerHTML = `
                                        <iframe class="w-full h-96 rounded-2xl"
                                            src="https://www.youtube.com/embed/FAwdUR9SFRU?autoplay=1"
                                            title="Profil SKARIGA"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    `;
                }
            </script>

        </div>
    </section>
@endsection

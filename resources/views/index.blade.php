@extends('layouts.app')

@section('content')
    <div class="relative overflow-hidden">
        <div class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white">
            <div class="absolute inset-0 z-0">
                <div class="swiper-container h-full w-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="w-full h-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')">
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
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                                SUCCESS BY<br>
                                <span class="text-orange-500">DISCIPLINE</span>
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
                            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 text-center border border-white border-opacity-20">
                            <div class="text-3xl md:text-4xl font-bold text-orange-500 mb-2">1000+</div>
                            <div class="text-blue-100">Siswa Aktif</div>
                        </div>
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 text-center border border-white border-opacity-20">
                            <div class="text-3xl md:text-4xl font-bold text-orange-500 mb-2">50+</div>
                            <div class="text-blue-100">Guru Berpengalaman</div>
                        </div>
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 text-center border border-white border-opacity-20">
                            <div class="text-3xl md:text-4xl font-bold text-orange-500 mb-2">10+</div>
                            <div class="text-blue-100">Program Jurusan</div>
                        </div>
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 text-center border border-white border-opacity-20">
                            <div class="text-3xl md:text-4xl font-bold text-orange-500 mb-2">98%</div>
                            <div class="text-blue-100">Tingkat Kelulusan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                    <div class="text-center p-6 rounded-lg hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-book-open text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Kurikulum Modern</h3>
                        <p class="text-gray-600">Kurikulum terupdate yang sesuai dengan kebutuhan industri masa kini.</p>
                    </div>
                    <div class="text-center p-6 rounded-lg hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-laptop-code text-orange-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Fasilitas Lengkap</h3>
                        <p class="text-gray-600">Laboratorium dan peralatan modern untuk mendukung pembelajaran praktis.</p>
                    </div>
                    <div class="text-center p-6 rounded-lg hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-graduate text-green-600 text-2xl"></i>
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
                    <div class="bg-white rounded-lg p-6 text-center shadow-md hover:shadow-xl transition-shadow">
                        <i class="fas fa-tools text-4xl text-blue-600 mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Workshop</h3>
                        <p class="text-gray-600">Sesi praktik langsung dengan alat dan materi nyata.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 text-center shadow-md hover:shadow-xl transition-shadow">
                        <i class="fas fa-industry text-4xl text-orange-600 mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Industry Visit</h3>
                        <p class="text-gray-600">Kunjungan langsung ke industri untuk belajar praktik terbaik.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 text-center shadow-md hover:shadow-xl transition-shadow">
                        <i class="fas fa-handshake text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Magang</h3>
                        <p class="text-gray-600">Program magang untuk pengalaman kerja langsung.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 text-center shadow-md hover:shadow-xl transition-shadow">
                        <i class="fas fa-project-diagram text-4xl text-purple-600 mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Project Based</h3>
                        <p class="text-gray-600">Pembelajaran melalui proyek nyata yang menantang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <section class="py-8 bg-gray-100">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-center text-xl font-semibold text-gray-700 mb-6">DEPARTEMEN UNGGULAN SKARIGA</h2>

            <div class="space-y-6">
                @foreach($departments as $deptKey => $dept)
                    <div
                        class="relative bg-white rounded-lg overflow-hidden shadow-lg transition-all duration-500 min-h-[300px]">

                        {{-- COVER DEPARTEMEN --}}
                        <div id="cover-{{ $deptKey }}"
                            class="absolute inset-0 z-10 transition-all duration-500 ease-in-out opacity-100 translate-x-0">
                            <div onclick="showJurusan('{{ $deptKey }}')" class="cursor-pointer">
                                <img src="{{ $dept['cover'] }}" alt="{{ $dept['title'] }}" class="w-full h-72 object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-start px-6">
                                    <span class="text-white text-sm mb-1">Daftar Jurusan</span>
                                    <h3 class="text-white text-2xl font-bold">{{ strtoupper($dept['title']) }}</h3>
                                    <p class="text-white text-xs">Klik untuk lihat jurusan →</p>
                                </div>
                            </div>
                        </div>

                        {{-- LIST JURUSAN --}}
                        <div id="list-{{ $deptKey }}"
                            class="opacity-0 translate-x-full absolute inset-0 z-20 transition-all duration-500 ease-in-out pointer-events-none">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6 bg-white h-full overflow-y-auto">
                                @foreach($dept['majors'] as $major)
                                    {{-- COVER JURUSAN --}}
                                    <div id="cover-{{ $major['id'] }}" onclick="showDetail('{{ $major['id'] }}')"
                                        class="relative cursor-pointer border rounded-lg overflow-hidden shadow transition hover:scale-[1.02]">
                                        <img src="{{ $major['image'] }}" class="w-full h-40 object-cover">
                                        <div
                                            class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white">
                                            <h3 class="text-lg font-bold">{{ $major['emoji'] }} {{ $major['name'] }}</h3>
                                            <p class="text-sm">{{ $major['desc'] }}</p>
                                        </div>
                                    </div>

                                    {{-- DETAIL JURUSAN --}}
                                    <div id="detail-{{ $major['id'] }}"
                                        class="opacity-0 translate-x-full absolute inset-0 z-30 transition-all duration-500 ease-in-out pointer-events-none bg-white p-6">
                                        <h3 class="text-2xl font-bold mb-2">{{ $major['emoji'] }} {{ $major['name'] }}</h3>
                                        <p class="text-gray-700 mb-4">{{ $major['desc'] }}</p>
                                        <img src="{{ $major['image'] }}" class="w-full h-48 object-cover rounded shadow mb-4">
                                        <button onclick="hideDetail('{{ $major['id'] }}')"
                                            class="px-4 py-2 bg-gray-700 text-white rounded">Kembali</button>
                                    </div>
                                @endforeach
                            </div>
                            <button onclick="hideJurusan('{{ $deptKey }}')"
                                class="absolute bottom-4 right-4 px-4 py-2 bg-red-600 text-white rounded">Kembali ke
                                Departemen</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        function showJurusan(id) {
            document.getElementById(`cover-${id}`).classList.add('opacity-0', '-translate-x-full');
            document.getElementById(`list-${id}`).classList.remove('opacity-0', 'translate-x-full', 'pointer-events-none');
            document.getElementById(`list-${id}`).classList.add('opacity-100', 'translate-x-0');
        }
        function hideJurusan(id) {
            document.getElementById(`list-${id}`).classList.add('opacity-0', 'translate-x-full', 'pointer-events-none');
            document.getElementById(`cover-${id}`).classList.remove('opacity-0', '-translate-x-full');
            document.getElementById(`cover-${id}`).classList.add('opacity-100', 'translate-x-0');
        }
        function showDetail(id) {
            document.getElementById(`cover-${id}`).classList.add('opacity-0', '-translate-x-full');
            document.getElementById(`detail-${id}`).classList.remove('opacity-0', 'translate-x-full', 'pointer-events-none');
            document.getElementById(`detail-${id}`).classList.add('opacity-100', 'translate-x-0');
        }
        function hideDetail(id) {
            document.getElementById(`detail-${id}`).classList.add('opacity-0', 'translate-x-full', 'pointer-events-none');
            document.getElementById(`cover-${id}`).classList.remove('opacity-0', '-translate-x-full');
            document.getElementById(`cover-${id}`).classList.add('opacity-100', 'translate-x-0');
        }
    </script>
@endsection
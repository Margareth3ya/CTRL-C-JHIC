@extends('layouts.app')
<title>@yield('title', 'KONTAK - SMK PGRI 3')</title>

@push('styles')
    <style>
        section,
        body {
            background: url('assets/backgroundMain.png') lightgray 50% / cover no-repeat;
        }
    </style>
@endpush

@section('content')
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-center items-start gap-10">
            <div class="mt-36 text-center px-4 text-white">
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Kirimkan Pesan kepada kami</h1>
                <p class="text-lg max-w-2xl mx-auto">Jangan ragu untuk menghubungi kami melalui formulir di bawah ini.
                    Kami siap menjawab pertanyaan Anda dan membantu dalam hal apapun yang Anda butuhkan.</p>
            </div>

            <div class="bg-white p-8 shadow-md rounded-2xl w-full md:w-1/2">
                <form action="{{ route('kontak.kirim') }}" method="POST">
                    @csrf

                    @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-4">
                        <input type="text" name="nama" value="{{ old('nama') }}"
                            class="mt-1 bg-gray-200 block w-full border border-gray-300 rounded-xl shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                            placeholder="Nama Lengkap" required>
                    </div>

                    <div class="mb-4">
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="mt-1 bg-gray-200 block w-full border border-gray-300 rounded-xl shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                            placeholder="Email" required>
                    </div>

<div class="mb-4">
    <label class="block text-gray-700 font-semibold mb-2">Subjek</label>
    <div class="flex gap-6">
        <label class="inline-flex items-center">
            <input type="radio" name="subjek" value="Konsultasi"
                   class="text-orange-500 focus:ring-orange-400"
                   {{ old('subjek') === 'Konsultasi' ? 'checked' : '' }} required>
            <span class="ml-2">Konsultasi</span>
        </label>

        <label class="inline-flex items-center">
            <input type="radio" name="subjek" value="Pendaftaran"
                   class="text-orange-500 focus:ring-orange-400"
                   {{ old('subjek') === 'Pendaftaran' ? 'checked' : '' }}>
            <span class="ml-2">Pendaftaran</span>
        </label>
    </div>
</div>


                    <div class="mb-6">
                        <textarea name="pesan" rows="5"
                            class="mt-1 bg-gray-200 block w-full border border-gray-300 rounded-xl shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                            placeholder="Pesan" required>{{ old('pesan') }}</textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-4 rounded-xl transition duration-300 shadow-md">
                        KIRIM PESAN
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
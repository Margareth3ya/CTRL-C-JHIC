@extends('layouts.app')
<title>@yield('title', 'KONTAK - SMK PGRI 3')</title>

@push('styles')
<style>
    section, body {
    background: 
        linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), /* lapisan gelap 50% */
        url('assets/backgroundMain.png') center / cover no-repeat;
}



    .radio-pill-group {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .radio-pill {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.2rem 1rem;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        border-radius: 9999px;
        background-color: rgba(255, 255, 255, 0.3);
        border: 1.5px solid #e5e7eb; /* gray-200 */
        color: #374151; /* gray-700 */
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .radio-pill:hover {
        background-color: rgba(249, 115, 22, 0.07);
        border-color: #f97316;
    }

    .radio-pill input[type="radio"] {
        appearance: none;
        -webkit-appearance: none;
        position: absolute;
        opacity: 0;
        pointer-events: none;
    }

    .radio-pill input[type="radio"]:checked + span {
        background: linear-gradient(135deg, #f97316, #fb923c);
        color: white;
        border-color: transparent;
        box-shadow: 0 6px 16px rgba(249, 115, 22, 0.3);
        transform: scale(1.03);
    }

    .radio-pill span {
        position: relative;
        z-index: 2;
        display: inline-block;
        padding: 0.5rem 1.4rem;
        border-radius: 9999px;
        transition: all 0.3s ease;
    }

    /* Responsiveness */
    @media (max-width: 640px) {
        .radio-pill {
            width: 100%;
            justify-content: center;
        }
    }

    .radio-pill {
    padding: 0.3rem 0.9rem;
    font-size: 0.9rem;
    border-width: 1px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.04);
}

.radio-pill span {
    padding: 0.25rem 0.8rem;
}
button[type="submit"] {
    width: 100%;
    background: linear-gradient(135deg, #f97316, #fb923c);
    color: white;
    font-weight: 600;
    padding: 0.9rem 1.4rem;
    border: none;
    border-radius: 9999px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 0.5px;
    box-shadow: 0 6px 16px rgba(249, 115, 22, 0.25);
}

button[type="submit"]:hover {
    background: linear-gradient(135deg, #fb923c, #f97316);
    box-shadow: 0 8px 20px rgba(249, 115, 22, 0.4);
    transform: translateY(-2px);
}

button[type="submit"]:active {
    transform: translateY(0);
    box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
}

</style>
@endpush

@section('content')
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-center items-start gap-10">
        <div class="mt-36 text-center px-4 text-white">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Kirimkan Pesan kepada kami</h1>
            <p class="text-lg max-w-2xl mx-auto">
                Jangan ragu untuk menghubungi kami melalui formulir di bawah ini.
                Kami siap menjawab pertanyaan Anda dan membantu dalam hal apapun yang Anda butuhkan.
            </p>
        </div>

        <div class="bg-white p-8 shadow-md rounded-2xl w-full md:w-2/5">

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

                <!-- ✨ Redesain Radio jadi pill -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-3">Subjek</label>
                    <div class="radio-pill-group">
                        <label class="radio-pill">
                            <input type="radio" name="subjek" value="Konsultasi"
                                {{ old('subjek') === 'Konsultasi' ? 'checked' : '' }} required>
                            <span>Konsultasi</span>
                        </label>

                        <label class="radio-pill">
                            <input type="radio" name="subjek" value="Pendaftaran"
                                {{ old('subjek') === 'Pendaftaran' ? 'checked' : '' }}>
                            <span>Pendaftaran</span>
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

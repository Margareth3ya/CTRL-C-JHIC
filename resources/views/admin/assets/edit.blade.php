@extends('admin.layout')
@section('title', 'Edit Asset')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto">
        <h2 class="text-2xl font-semibold mb-4">Edit Asset</h2>

        <form action="{{ route('admin.assets.update', $asset->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-semibold mb-1">Folder</label>
                <select name="folder" class="border rounded w-full px-3 py-2">
                    <option value="general" {{ $asset->folder == 'general' ? 'selected' : '' }}>General</option>
                    <option value="alumni" {{ $asset->folder == 'alumni' ? 'selected' : '' }}>Alumni</option>
                    <option value="berita" {{ $asset->folder == 'berita' ? 'selected' : '' }}>Berita</option>
                    <option value="kegiatan" {{ $asset->folder == 'kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                    <option value="ssb" {{ $asset->folder == 'ssb' ? 'selected' : '' }}>SSB</option>
                    <option value="ssb_section1" {{ $asset->folder == 'ssb_section1' ? 'selected' : '' }}>SSB Section 1
                    </option>
                    <option value="prestasi" {{ $asset->folder == 'prestasi' ? 'selected' : '' }}>Prestasi</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Preview Sekarang</label>
                <img src="{{ asset('assets/' . $asset->folder . '/' . $asset->image) }}" class="h-32 rounded shadow">
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Ganti Gambar (opsional)</label>
                <input type="file" name="image" class="border rounded w-full px-3 py-2">
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Simpan Perubahan
            </button>
            <a href="/admin/assets" class="bg-gray-500 rounded px-4 py-2 text-white hover:bg-gray-600">Kembali</a>
        </form>
    </div>
@endsection
@extends('admin.layout')
@section('title', 'Edit Konten & Asset')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Edit Konten & Asset</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.assets.update', $content->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Folder -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Pilih Folder</label>
            <select name="folder" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">
                <option value="alumni" {{ $content->folder == 'alumni' ? 'selected' : '' }}>Alumni</option>
                <option value="berita" {{ $content->folder == 'berita' ? 'selected' : '' }}>Berita</option>
                <option value="kegiatan" {{ $content->folder == 'kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                <option value="ssb" {{ $content->folder == 'ssb' ? 'selected' : '' }}>SSB</option>
                <option value="ekstrakulikuler" {{ $content->folder == 'ekstrakulikuler' ? 'selected' : '' }}>Ekstrakulikuler</option>
                <option value="prestasi" {{ $content->folder == 'prestasi' ? 'selected' : '' }}>Prestasi</option>
            </select>
        </div>

        <!-- Judul -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Judul Konten</label>
            <input type="text" name="title" value="{{ old('title', $content->title) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">
        </div>

        <!-- Isi Konten -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Isi Konten</label>
            <textarea name="body" rows="5" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">{{ old('body', $content->body) }}</textarea>
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1">Isi Konten</label>
            <textarea name="credit" rows="5" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">{{ old('body', $content->credit) }}</textarea>
        </div>

        <!-- Gambar -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Gambar</label>
            <div class="flex items-center gap-4">
                @if ($content->image)
                    <img src="{{ asset('assets/'.$content->folder.'/'.$content->image) }}" alt="Preview" class="h-20 rounded shadow">
                @else
                    <span class="text-gray-500 italic">Belum ada gambar</span>
                @endif
                <input type="file" name="image" class="border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">
            </div>
            <p class="text-gray-500 text-sm mt-1">Kosongkan jika tidak ingin mengganti gambar.</p>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.contents.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Kembali</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection

@extends('admin.layout')
@section('title', 'Tambah Asset')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Upload Asset Baru</h2>

    <form action="{{ route('admin.assets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Pilih Kategori Folder</label>
            <select name="folder" class="border-gray-300 rounded-lg w-full p-2">
                @foreach ($folders as $folder)
                    <option value="{{ $folder }}">{{ ucfirst(str_replace('_', ' ', $folder)) }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Upload Gambar</label>
            <input type="file" name="image" class="border rounded-lg p-2 w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Simpan
        </button>
        <a href="/admin/assets" class="bg-gray-500 rounded px-4 py-2 text-white hover:bg-gray-600">Kembali</a>
    </form>
</div>
@endsection

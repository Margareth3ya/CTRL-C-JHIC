<!-- resources/views/admin/assets/create.blade.php -->
@extends('admin.layout')

@section('title', 'Upload Asset')

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Upload Asset Baru</h2>

        <form action="{{ route('admin.assets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" name="image" id="image" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" accept="image/*">
                    <p class="mt-1 text-sm text-gray-500">Format: JPEG, PNG, JPG, GIF (Maks: 2MB)</p>
                </div>
            </div>

            <div class="mt-6 flex justify-end space-x-3">
                <a href="{{ route('admin.assets.index') }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">
                    Batal
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
                    Upload
                </button>
            </div>
        </form>
    </div>
@endsection
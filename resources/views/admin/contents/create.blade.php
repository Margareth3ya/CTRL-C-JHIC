@extends('admin.layout')
@section('title', 'Tambah Konten')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto">
        <h2 class="text-2xl font-semibold mb-4">Tambah Konten</h2>

        <form action="{{ route('admin.contents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold mb-1">Judul</label>
                <input type="text" name="title" class="border rounded w-full px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Isi Konten</label>
                <textarea name="body" rows="4" class="border rounded w-full px-3 py-2"></textarea>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Author</label>
                <input type="text" name="credit" class="border rounded w-full px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Folder</label>
                <select name="folder" id="folder" class="border rounded w-full px-3 py-2">
                    <option value="general">General</option>
                    <option value="alumni">Alumni</option>
                    <option value="berita">Berita</option>
                    <option value="kegiatan">Kegiatan</option>
                    <option value="ssb">SSB</option>
                    <option value="ekstrakulikuler">Ekstrakulikuler</option>
                    <option value="prestasi">Prestasi</option>
                    <option value="prestasi2">Prestasi Card2</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Gambar</label>
                <input type="file" name="image[]" class="border rounded w-full px-3 py-2" multiple required>

                <p class="text-sm text-gray-500 mt-1">
                    Jika folder <strong>SSB</strong>, kamu bisa upload lebih dari 3 gambar.
                </p>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Simpan
            </button>
            <a href="/admin/contents" class="bg-gray-500 rounded px-4 py-2 text-white hover:bg-gray-600">Kembali</a>
        </form>
    </div>
    <script>
        // FUNGSI UNTUK MULTIPLE UPLOAD SSB
        document.getElementById('folder').addEventListener('change', function () {
            const fileInput = document.querySelector('input[name="image[]"]');
            if (this.value === 'ssb' || this.value === 'kegiatan') {
                fileInput.setAttribute('multiple', true);
            } else {
                fileInput.removeAttribute('multiple');
            }
        });
    </script>

@endsection

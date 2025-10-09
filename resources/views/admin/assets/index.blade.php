@extends('admin.layout')
@section('title', 'Daftar Asset')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-semibold">Daftar Asset</h2>
        <a href="{{ route('admin.assets.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            + Tambah Asset
        </a>
    </div>

    <table class="min-w-full border border-gray-200 rounded-lg">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">#</th>
                <th class="px-4 py-2 border">Preview</th>
                <th class="px-4 py-2 border">Folder</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assets as $asset)
                <tr class="border-t">
                    <td class="px-4 py-2 text-center">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2 text-center">
                        <img src="{{ asset('assets/'.$asset->folder.'/'.$asset->image) }}" class="h-16 mx-auto rounded">
                    </td>
                    <td class="px-4 py-2 text-center capitalize">{{ $asset->folder }}</td>
                    <td class="px-4 py-2 text-center">
                        <a href="{{ route('admin.assets.edit', $asset->id) }}" class="bg-yellow-500 px-4 py-2 rounded-lg text-white hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('admin.assets.destroy', $asset->id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button class="bg-red-500 px-4 py-2 rounded-lg text-white hover:bg-red-600" onclick="return confirm('Yakin hapus asset ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('admin.layout')
@section('title', 'Daftar Konten')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-semibold">Daftar Konten</h2>
            <a href="{{ route('admin.contents.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                + Tambah Konten
            </a>
        </div>

        <table class="min-w-full border border-gray-200 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border">#</th>
                    <th class="px-4 py-2 border">Preview</th>
                    <th class="px-4 py-2 border">Judul</th>
                    <th class="px-4 py-2 border">Desc</th>
                    <th class="px-4 py-2 border">Author</th>
                    <th class="px-4 py-2 border">Folder</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contents as $content)
                    <tr class="border-t mx-auto">
                        <td class="px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 text-center">
                            @if($content->image)
                                <img src="{{ asset('assets/' . ($content->folder ? $content->folder . '/' : '') . trim(str_replace(['[', ']', '"'], '', $content->image))) }}"
                                    alt="{{ $content->title ?? 'Gambar Konten' }}" class="h-16 mx-auto rounded" />
                            @endif
                        </td>
                        <td class="px-4 py-2 text-center">{{ $content->title }}</td>
                        <td class="px-4 py-2 text-left max-w-xs">
                            <div class="text-gray-600 text-sm">
                                {{ Str::limit(strip_tags($content->body), 50, '...') }}
                            </div>
                        </td>
                        <td class="px-4 py-2 text-left max-w-xs">
                            <div class="text-gray-600 text-sm">
                                {{ Str::limit(strip_tags($content->credit), 50, '...') }}
                            </div>
                        </td>

                        <td class="px-4 py-2 text-center capitalize">{{ $content->folder }}</td>
                        <td class="px-4 py-2 text-center">
                            <a href="{{ route('admin.contents.edit', $content->id) }}"
                                class="bg-yellow-500 px-4 py-2 rounded-lg text-white hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('admin.contents.destroy', $content->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button class="bg-red-500 px-4 py-2 rounded-lg text-white hover:bg-red-600"
                                    onclick="return confirm('Yakin hapus konten ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
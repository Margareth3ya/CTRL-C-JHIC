<!-- resources/views/admin/assets/index.blade.php -->
@extends('admin.layout')

@section('title', 'Manajemen Assets')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Manajemen Assets</h2>
        <a href="{{ route('admin.assets.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
            <i class="fas fa-plus mr-2"></i>Upload Asset
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($assets as $asset)
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <img src="{{ asset('assets/' . $asset->image) }}" alt="Asset" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-sm text-gray-600 mb-2">{{ $asset->image }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs text-gray-500">{{ $asset->created_at->format('d M Y') }}</span>
                        <div class="space-x-2">
                            <a href="{{ route('admin.assets.edit', $asset->id) }}"
                                class="text-blue-600 hover:text-blue-900 text-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.assets.destroy', $asset->id) }}" method="POST" class="inline"
                                onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 text-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
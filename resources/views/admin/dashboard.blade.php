<!-- resources/views/admin/dashboard.blade.php -->
@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-md">
            <div class="flex items-center">
                <div class="p-3 bg-blue-500 rounded-lg">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-600">Total Users</h3>
                    <p class="text-3xl font-bold text-gray-800">{{ $userCount }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 hover:shadow-md">
            <div class="flex items-center">
                <div class="p-3 bg-green-500 rounded-lg">
                    <i class="fas fa-images text-white text-2xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-600">Total Assets</h3>
                    <p class="text-3xl font-bold text-gray-800">{{ $assetCount }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 hover:shadow-md">
            <div class="flex items-center">
                <div class="p-3 bg-purple-500 rounded-lg">
                    <i class="fas fa-file-alt text-white text-2xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-600">Total Konten</h3>
                    <p class="text-3xl font-bold text-gray-800">{{ $contentCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow hover:shadow-md">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">Aktivitas Terbaru</h3>
        </div>
        <div class="p-6">
            <p class="text-gray-600">Selamat datang di dashboard admin website sekolah.</p>
        </div>
    </div>
@endsection
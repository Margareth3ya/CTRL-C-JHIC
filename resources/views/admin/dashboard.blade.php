@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 auto-rows-[180px] sm:auto-rows-[200px] lg:auto-rows-[220px] gap-4 sm:gap-5 lg:gap-6 p-3 sm:p-4 lg:p-6 select-none">

    <!-- Total Users -->
    <div class="lg:col-span-2 bg-white/70 backdrop-blur-lg rounded-2xl shadow-lg p-5 flex flex-col justify-between hover:shadow-blue-200/50 hover:-translate-y-1 transition-all duration-300">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="text-gray-500 text-sm font-medium">Total Users</h3>
                <h2 class="text-4xl font-bold text-gray-800 mt-2 tracking-tight">{{ $userCount }}</h2>
            </div>
            <div class="w-10 h-10 bg-blue-500/10 rounded-2xl flex items-center justify-center">
                <i class="fas fa-users text-blue-600 text-xl"></i>
            </div>
        </div>
        <div class="mt-3 text-sm text-gray-400">+2% dibanding minggu lalu</div>
    </div>

    <!-- Total Assets -->
    <div class="lg:col-span-2 bg-white/70 backdrop-blur-lg rounded-2xl shadow-lg p-5 flex flex-col justify-between hover:shadow-emerald-200/50 hover:-translate-y-1 transition-all duration-300">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="text-gray-500 text-sm font-medium">Total Assets</h3>
                <h2 class="text-4xl font-bold text-gray-800 mt-2 tracking-tight">{{ $assetCount }}</h2>
            </div>
            <div class="w-10 h-10 bg-emerald-500/10 rounded-2xl flex items-center justify-center">
                <i class="fas fa-images text-emerald-600 text-xl"></i>
            </div>
        </div>
        <div class="mt-3 text-sm text-gray-400">Stabil dalam 7 hari terakhir</div>
    </div>

    <!-- Total Konten -->
    <div class="lg:col-span-2 bg-gradient-to-br from-purple-500/80 to-pink-500/80 text-white rounded-2xl shadow-lg p-5 flex flex-col justify-between hover:shadow-pink-200/40 hover:-translate-y-1 transition-all duration-300">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="text-white/80 text-sm font-medium">Total Konten</h3>
                <h2 class="text-4xl font-bold mt-2 tracking-tight">{{ $contentCount }}</h2>
            </div>
            <div class="w-10 h-10 bg-white/10 rounded-2xl flex items-center justify-center">
                <i class="fas fa-file-alt text-white text-xl"></i>
            </div>
        </div>
        <div class="mt-3 text-sm text-white/70">+8 artikel baru minggu ini</div>
    </div>
</div>

<!-- Bagian bawah -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 p-3 sm:p-4 lg:p-6">

    <!-- Statistik Pengunjung -->
    <div class="lg:col-span-2 bg-white/80 backdrop-blur-lg rounded-2xl shadow-lg p-6 hover:shadow-blue-200/40 transition-all duration-300">
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-gray-700 font-semibold text-lg flex items-center gap-2">
                Statistik Pengunjung
                <span id="live-indicator" class="text-sm text-emerald-500">Server APIs Connected</span>
            </h2>
        </div>
        <div class="w-full h-[340px] overflow-hidden">
            <canvas id="visitorChart"></canvas>
        </div>
    </div>

    <!-- Aktivitas Log Admin -->
    <div class="bg-white/80 backdrop-blur-lg rounded-2xl shadow-lg p-6 hover:shadow-emerald-200/40 transition-all duration-300">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-gray-700 font-semibold text-lg flex items-center gap-2">
                <i class="fas fa-history text-emerald-600"></i> Aktivitas Log Admin
            </h2>

            <!-- Filter tipe aktivitas -->
            <form method="GET" action="{{ route('admin.dashboard') }}">
                <select name="filter" onchange="this.form.submit()" class="text-sm border-gray-200 rounded-lg text-gray-700 focus:ring-emerald-500 focus:border-emerald-500">
                    <option value="">Semua</option>
                    <option value="Login" {{ request('filter')=='Login'?'selected':'' }}>Login</option>
                    <option value="Tambah Data" {{ request('filter')=='Tambah Data'?'selected':'' }}>Tambah Data</option>
                    <option value="Edit Data" {{ request('filter')=='Edit Data'?'selected':'' }}>Edit Data</option>
                    <option value="Hapus Data" {{ request('filter')=='Hapus Data'?'selected':'' }}>Hapus Data</option>
                </select>
            </form>
        </div>

        <div class="space-y-3 max-h-[360px] overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300">
            @forelse($adminLogs as $log)
                <div class="flex items-start gap-3 border-b border-gray-100 pb-2">
                    <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center">
                        <i class="fas fa-user-cog text-emerald-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-800 text-sm font-medium">{{ $log->admin_name }}</p>
                        <p class="text-gray-500 text-xs">{{ $log->activity }}</p>
                        <span class="text-[10px] text-gray-400">{{ $log->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-400 text-sm">Belum ada aktivitas terbaru.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        @if ($adminLogs->hasPages())
            <div class="mt-4">
                {{ $adminLogs->onEachSide(1)->links('vendor.pagination.tailwind-dashboard') }}
            </div>
        @endif
    </div>
</div>

<!-- Chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="module">
    import { initVisitorChart } from "/js/apis.js";
    initVisitorChart("{{ route('admin.visitor.stats') }}", @json($labels), @json($data));
</script>
@endsection

<!-- resources/views/admin/layout.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Website Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        canvas {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-800 text-white">
            <div class="p-4">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
                <p class="text-blue-200 text-sm">Website Sekolah</p>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}"
                    class="block py-2 px-4 hover:bg-blue-700 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-700' : '' }}">
                    <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                </a>
                <a href="{{ route('admin.users.index') }}"
                    class="block py-2 px-4 hover:bg-blue-700 {{ request()->routeIs('admin.users.*') ? 'bg-blue-700' : '' }}">
                    <i class="fas fa-users mr-2"></i>Users
                </a>
                <a href="{{ route('admin.assets.index') }}"
                    class="block py-2 px-4 hover:bg-blue-700 {{ request()->routeIs('admin.assets.*') ? 'bg-blue-700' : '' }}">
                    <i class="fas fa-images mr-2"></i>Assets
                </a>
                <a href="{{ route('admin.contents.index') }}"
                    class="block py-2 px-4 hover:bg-blue-700 {{ request()->routeIs('admin.contents.*') ? 'bg-blue-700' : '' }}">
                    <i class="fas fa-file-alt mr-2"></i>Konten
                </a>

                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit"
                        class="w-full text-left block py-2 px-4 hover:bg-blue-700 text-red-200 hover:text-white">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow">
                <div class="flex justify-between items-center px-6 py-4">
                    <h2 class="text-xl font-semibold text-gray-800">@yield('title', 'Dashboard')</h2>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600">Selamat datang, <strong>{{ Auth::user()->username }}</strong></span>
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus data ini?');
        }
    </script>
        <script>
        (function () {
            function detectDevTools() {
                const widthThreshold = window.outerWidth - window.innerWidth > 160;
                const heightThreshold = window.outerHeight - window.innerHeight > 160;

                if (widthThreshold || heightThreshold) {
                    document.body.innerHTML = '<div style="display: flex; justify-content: center; align-items: center; height: 100vh; font-family: Arial, sans-serif;"><div style="text-align: center;"><h1 style="color: #dc2626;">Akses Ditolak</h1><p>Ngapain lihat lihat kocak</p></div></div>';
                    throw new Error('DevTools detected');
                }
            }
            detectDevTools();
            window.addEventListener('resize', detectDevTools);
            const originalConsole = {
                log: console.log,
                warn: console.warn,
                error: console.error,
                info: console.info
            };

            ['log', 'warn', 'error', 'info'].forEach(method => {
                console[method] = function () {
                    detectDevTools();
                    originalConsole[method].apply(console, arguments);
                };
            });
        })();
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMK PGRI 3 MALANG')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset("assets/icon.png") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    @stack('scripts')
    @stack('styles')
</head>

<body class="bg-white-100 text-gray-800">
    @include('components.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
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
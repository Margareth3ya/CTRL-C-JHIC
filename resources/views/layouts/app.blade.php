<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMK PGRI 3 MALANG')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png"
        href="https://lh3.googleusercontent.com/sitesv/AICyYdZ8eelg0qA3ScgdJPuyrZ69qtzXlaoT0l3b4iuWTB1FzyNz4-gPlKWTUmGPT8hpwIckYcNLTGz8YSyapnCRQjGCE6DlkwsyhI8fMiaBz2W_H5Q4QWTg9_NSGGjomEXA5kJC6nxEPqUlPr64nF4IZsBzs-1e3DtzbM5mro7mhEYGrCTy5y1cspb58VwagZgH8mCGmdPLrtJm4nNGMwV6yg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @stack('styles')
</head>

<body class="bg-gray-100 text-gray-800">
    @include('components.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMK PGRI 3 MALANG')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="https://lh3.googleusercontent.com/sitesv/AICyYdYcYW5s4crH8c55MxO1wQSkJOHNDR9xETVsqVLQcBAODQWgv-cPdEBqv90dz9fC9Fw1ciasYU6Zlpk9TLx2-rOshG9QnP9-zLnEDXUJ72L3GUQvk6ssVCM8WWoTa3xTQLXf8HAP3JrPqdvggYqnDcniAg-YYkYu6zpU1ffdLDE7v2puEsuVGfvVeFFNJ9Ubsh3cMkNMhSBramalf_XN6g">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

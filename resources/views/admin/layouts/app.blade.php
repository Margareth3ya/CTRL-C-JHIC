<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ADMIN SKA')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset("assets/icon.png") }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-white-100 text-gray-800">
    @yield('content')
</body>

</html>
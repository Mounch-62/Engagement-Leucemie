<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Gestion') • {{ env('APP_NAME', '') }}</title>

    @if (env('APP_ENV') === 'production')
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <script src="{{ asset('build/assets/app.js') }}"></script>
    @else
    @vite('resources/js/app.js')
    @endif

</head>

<body>
    @yield('base-content')
</body>

</html>
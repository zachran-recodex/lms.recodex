<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Prolift Academy by United Tractors | Empowering Learning, Elevating Skills.</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-chrome-192x192.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('') }}css/slick.css" />
    <link rel="stylesheet" href="{{ asset('') }}css/aos.css" />
    <link rel="stylesheet" href="{{ asset('') }}css/output.css" />
    <link rel="stylesheet" href="{{ asset('') }}css/style.css" />

    <script src="https://kit.fontawesome.com/ddb90eabf1.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="layout-wrapper active w-full">
        <div class="relative flex w-full">
            @include('layouts.sidebar')
            <div class="body-wrapper flex-1 overflow-x-hidden">
                <!-- Page Heading -->
                @isset($header)
                    {{ $header }}
                @endisset
                {{ $slot }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <!--scripts -->
    <script src="{{ asset('') }}js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('') }}js/aos.js"></script>
    <script src="{{ asset('') }}js/slick.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('') }}js/chart.js"></script>
    <script src="{{ asset('') }}js/main.js"></script>

</body>

</html>

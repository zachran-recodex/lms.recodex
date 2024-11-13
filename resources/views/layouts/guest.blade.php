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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="bg-white">
        <div class="flex flex-col lg:flex-row justify-between min-h-screen">
            <!-- Left -->
            {{ $slot }}

            <!-- Right -->
            <div class="lg:w-1/2 lg:block hidden bg-[#F6FAFF] p-8 sm:p-12 relative bg-cover bg-center"
                style="background-image: url('{{ asset('images/background/login.jpg') }}');">
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black opacity-50"></div>

                <div
                    class="relative h-full flex flex-col justify-center items-center text-center max-w-lg m-auto p-4 sm:p-8">
                    <p class="text-white text-base sm:text-lg font-medium">
                        Prolift Academy adalah platform pembelajaran online yang dirancang untuk memberikan
                        pelatihan berkualitas kepada pelanggan United Tractors. Dengan akses ke video tutorial,
                        panduan interaktif, dan bimbingan mentor, Prolift Academy membantu Anda menguasai penggunaan
                        unit secara efektif dan mendalam, di mana saja dan kapan saja.
                    </p>
                </div>
            </div>
        </div>
    </section>

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

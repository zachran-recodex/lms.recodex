<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/" class="flex w-full h-[45px] py-[0px] px-[12px] items-center gap-[16px] mb-4">
                <x-application-logo class="w-20 h-20 p-4 rounded-full bg-[#0010F7]" />
                <h1 class="text-4xl font-bold text-black">TractoLearn</h1>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>

        <footer class="w-full text-black text-center py-4 mt-6">
            <p>&#169; {{ date('Y') }} TractoLearn. All rights reserved. Created by <a href="https://recodex.id"
                    class="text-[#86C332]">Recodex</a>.</p>
        </footer>
    </div>
</body>

</html>

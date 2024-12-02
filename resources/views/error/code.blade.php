<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ $code }} - {{ config('app.name') }}
    </title>
    <!-- Icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/media/logo/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/logo/apple-touch-icon.png') }}">

    <!-- Meta -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/aquawolf04/font-awesome-pro@5cd1511/css/all.css">

    <!-- Global Styles / Scripts -->
    @include('layouts.partial.themeMode')
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body
    class="font-sans antialiased bg-[#f0f4f9] text-[#1f1f1f] flex flex-col justify-center items-center w-screen h-screen dark:bg-[#1e1f20]">
    <div class="w-full flex flex-col grow lg:grow-0 justify-center items-center lg:w-[1040px]">
        <h1 class="text-[150px] font-bold text-red-500 italic">{{ $code }}</h1>
        <h2 class="text-4xl font-semibold">{{ $title }}</h2>
        <p class="mt-3 text-lg font-normal">
            {{ $message }}
        </p>
    </div>
</body>

</html>

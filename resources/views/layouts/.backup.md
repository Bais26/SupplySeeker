<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SupplySeeker</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 font-family-karla flex">
    <aside class="bg-gray-800  h-screen w-1/6 hidden sm:block shadow-xl">
        <div class="text-gray-100 text-3xl">
            <div class="p-2.5 mt-1 flex items-center justify-center">
                <i class="bi bi-building"></i>
                <h1 class="font-bold text-gray-200 text-2xl ml-3">SupplySeeker</h1>
            </div>
            <div class="my-2 bg-gray-300 h-[1px] mx-4"></div>
        </div>
        <nav class="text-gray-200 text-xl pt-3">
            <a href="/"
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-800 text-white mb-6">
                <i class="bi bi-house-door-fill mr-3"></i>
                <span class="text-md ml-4 text-gray-200 font-bold">Dashboard</span>
            </a>
            <div class="my-2 bg-gray-300 h-[1px]"></div>
            <div class="text-sm mt-3 flex items-center px-4 text-white">
                SPK
            </div>
            <a href="/kriteria"
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-800 text-white">
                <i class="bi bi-ui-checks-grid mr-3"></i>
                <span class="text-md ml-4 text-gray-200 font-bold">Data Kriteria</span>
            </a>
            <a href="/nilai"
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-800 text-white">
                <i class="bi bi-bar-chart mr-3"></i>
                <span class="text-md ml-4 text-gray-200 font-bold">Data Sub Kriteria</span>
            </a>
            <a href="/alternative"
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-800 text-white">
                <i class="bi bi-people-fill mr-3"></i>
                <span class="text-md ml-4 text-gray-200 font-bold">Data Alternatif</span>
            </a>
            <a  href="/hitung"
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-800 text-white">
                <i class="bi bi-calculator mr-3"></i>
                <span class="text-md ml-4 text-gray-200 font-bold">Perhitungan</span>
            </a>
            <div class="my-4 bg-white h-[1px]"></div>
        </nav>
    </aside>
        <div class="w-full flex flex-col h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
</html>

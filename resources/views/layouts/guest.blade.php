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
        <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <div>
        <nav class="bg-gradient-to-r from-purple-800 via-purple-700 to-purple-500 text-white sticky top-0">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
    <img class="h-10" src="{{asset('./image/logo.png')}}" alt="SupplierSeeker">
        <span class="self-center text-2xl font-semibold whitespace-nowrap">SupplySeeker</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden focus:outline-none focus:ring-1 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
        <li>
          <a href="/" class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#layanan" class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0">Layanan</a>
        </li>
        <li>
          <a href="#fitur" class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0">Fitur</a>
        </li>
        <li>
          <a href="#kontak" class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0">Kontak</a>
        </li>
        <li>
          <a href="/login" class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0">Login</a>
        </li>
        <li>
          <a href="/register" class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
            <div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

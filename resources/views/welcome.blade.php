<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SupplySeeker</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
    <!-- Styles -->
    <!-- Scripts -->
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite(['resources/js/app.js'])
    <style>
        .bg-image {
            background-image: url('/image/BG.png');
            background-size: cover;
            background-position: center;
            opacity: 90%;
            height: 800px;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <nav class="z-10 bg-aksen text-white sticky top-0 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="h-10" src="{{asset('./image/logo.png')}}" alt="SupplierSeeker">
                <span class="self-center text-2xl font-semibold whitespace-nowrap">SupplySeeker</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden focus:outline-none focus:ring-1 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#layanan"
                            class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0">Layanan</a>
                    </li>
                    <li>
                        <a href="#fitur"
                            class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0">Fitur</a>
                    </li>
                    <li>
                        <a href="#kontak"
                            class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0">Kontak</a>
                    </li>
                    @if (Route::has('login'))
                        <div class="md:hidden block">
                            @auth
                                <a href="{{ url('/admin') }}"
                                    class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0 font-bold text-center border">Dashboard
                                    admin</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0">Log
                                    in</a>
                                <a href="{{ route('register') }}"
                                    class="block py-2 px-3 rounded hover: md:hover:bg-transparent md:border-0 md:hover:text-gray-300 md:p-0">register</a>
                            @endauth
                        </div>
                    @endif
                </ul>
            </div>
            @if (Route::has('login'))
                <div class="hidden md:block">
                    @auth
                        <a href="{{ url('/admin') }}" class="font-semibold text-gray-50 hover:text-gray-300">Dashboard
                            admin</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-50 hover:text-gray-300">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-50 hover:text-gray-300">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
    <div class="bg-image flex items-center justify-center">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000"
            class="container mx-auto px-5 py-24 md:flex md:flex-row justify-center text-center md:items-center md:justify-center">
            <div class="md:w-1/2 md:pr-16 flex flex-col items-center text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-8">Memilih yang Terbaik untuk Bisnis Anda</h1>
                <p class="mb-8 text-white leading-relaxed text-xl md:text-xl">SPK ini Menentukan Supplier Terbaik untuk
                    Bisnis Anda, dengan Sistem ini, Anda dapat mengevaluasi dan memilih supplier terbaik berdasarkan
                    kriteria yang relevan, dan memastikan kualitas dan efisiensi dalam memilih supplier.</p>
                <div class="flex justify-center">
                    <a href="/admin"
                        class="bg-white text-[#333] font-semibold py-3 px-6 rounded-lg hover:bg-primary transition duration-300">Tentukan
                        Supplier</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Layanan Kami Section -->
    <section id="layanan" class="py-32 bg-background">
        <div class="container mx-auto text-center">
            <div data-aos="fade-up" data-aos-duration="2000">
                <h2 class="text-3xl font-bold">Layanan Kami</h2>
                <p class="mt-2">SupplySeeker hadir untuk menjadi solusi bagi kamu</p>
            </div>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-12" data-aos="fade-up" data-aos-duration="2000">
                    <i class="bi bi-person-check text-second" style="font-size: 2rem;"></i>
                    <h3 class="text-xl font-bold">Pemilihan Supplier</h3>
                    <p class="mt-4">Kami menyediakan peringkat untuk setiap supplier berdasarkan kriteria yang telah
                        diterapkan, sistem ini membantu Anda untuk memilih suuplier terbaik yang sesuai dengan kebutuhan
                        Anda</p>
                </div>
                <div class="p-12" data-aos="fade-up" data-aos-duration="2000">
                    <i class="bi bi-bar-chart-line text-second" style="font-size: 2rem;"></i>
                    <h3 class="text-xl font-bold">Benchmarking Supplier</h3>
                    <p class="mt-4">Kami menyediakan alat untuk membandingkan supplier Anda dengan Supplier lain di
                        industri yang sama, ini membantu anda untuk menentukan supplier yang tepat tanpa memakan waktu
                        yang lama untuk membandingkan</p>
                </div>
                <div class="p-12" data-aos="fade-up" data-aos-duration="2000">
                    <i class="bi bi-lightbulb text-second" style="font-size: 2rem;"></i>
                    <h3 class="text-xl font-bold">Rekomendasi Optimal</h3>
                    <p class="mt-4">Berdasarkan data yang dikumpulkan dan dianalis, sistem kami memberikan rekomendasi
                        supplier terbaik sesuai apa yang anda butuhkan</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Fitur Section -->
    <!-- <section id="fitur" class="py-12 bg-background">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Fitur di SupplySeeker</h2>
            <p class="mt-2">Sistem Pendukung Keputusan kami menyediakan berbagai fitur untuk membantu Anda membuat
                keputusan terbaik.</p>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-violet-500 mb-4">
                        <svg xmlns="vhttp://www.w3.org/2000/sg" class="h-12 w-12 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Data Kriteria</h3>
                    <p class="mt-4">Mengelola dan menampilkan data kriteria yang relevan dengan keputusan yang akan
                        diambil.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-violet-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7l1.5 1.5a1 1 0 010 1.414L3 11.5m12-5l1.5 1.5a1 1 0 010 1.414L15 11.5m-9 9l1.5-1.5a1 1 0 011.414 0L11.5 20m0-12l1.5 1.5a1 1 0 010 1.414L11.5 11.5m-5 9l1.5-1.5a1 1 0 011.414 0L11.5 20m0-12l1.5 1.5a1 1 0 010 1.414L11.5 11.5" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Data Alternatif</h3>
                    <p class="mt-4">Menyediakan data alternatif yang akan dibandingkan berdasarkan kriteria yang telah
                        ditentukan.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-violet-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Sub Kriteria</h3>
                    <p class="mt-4">Mengelola dan menampilkan data sub kriteria untuk detail yang lebih mendalam.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-violet-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M5 11v10M5 21H3m18 0h-2m0-18h2M5 3H3m16 18v-4M21 11V5M5 21V5m0 16h16" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Data Penilaian</h3>
                    <p class="mt-4">Menyediakan data penilaian untuk setiap alternatif berdasarkan kriteria yang telah
                        ditentukan.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-violet-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Data Perhitungan Akhir</h3>
                    <p class="mt-4">Mengelola dan menampilkan hasil perhitungan akhir untuk keputusan yang lebih baik.
                    </p>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="bg-primary body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
    <h2 class="text-white text-3xl font-bold">Fitur di SupplySeeker</h2>
            <p class="mt-2 text-white">Sistem Pendukung Keputusan kami menyediakan berbagai fitur untuk membantu Anda membuat
                keputusan terbaik.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/2 ">
        <div class="flex rounded-lg h-full p-8 bg-card flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-aksen flex-shrink-0">
            <svg xmlns="vhttp://www.w3.org/2000/sg" class="h-12 w-12 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">Data Kriteria</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/2">
        <div class="flex rounded-lg h-full p-8 bg-card flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-aksen flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">Data Kriteria</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/2">
        <div class="flex rounded-lg h-full p-8 bg-card flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-aksen flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">Sub Kriteria</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/2 ">
        <div class="flex rounded-lg h-full p-8 bg-card flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-aksen flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>    
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">Perhitungan</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
    <section class="text-gray-600 bg-primary body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="flex flex-col text-center w-full mb-20" data-aos="fade-up" data-aos-duration="2000">
                    <h2 class="text-aksen text-3xl font-bold">Fitur di SupplySeeker</h2>
                    <p class="mt-2 text-aksen">Sistem Pendukung Keputusan kami menyediakan berbagai fitur untuk membantu
                        Anda membuat
                        keputusan terbaik.</p>
                </div>
                <div class="flex flex-wrap md:flex-nowrap -m-4">
                    <div class="md:w-1/2 p-4 " data-aos="fade-right"
                        data-aos-duration="1000">
                        <div class="bg-gray-100 rounded-lg">
                            <img class="h-44 rounded w-full object-cover object-center mb-2"
                                src="{{asset('./image/kriteria.png')}}" alt="content">
                            <div class="p-6">
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Data Kriteria</h2>
                                <p class="leading-relaxed text-base">Mengelola dan menampilkan data kriteria yang relevan dengan keputusan yang akan
                                diambil</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 p-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="bg-gray-100 rounded-lg">
                            <img class="h-44 rounded w-full object-cover object-center mb-2"
                                src="{{asset('./image/alternatif.png')}}" alt="content">
                            <div class="p-6">
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Data Alternatif</h2>
                                <p class="leading-relaxed text-base">Menyediakan data alternatif yang akan dibandingkan berdasarkan kriteria yang telah
                                ditentukan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 p-4" data-aos="fade-down" data-aos-duration="1000">
                        <div class="bg-gray-100 rounded-lg">
                            <img class="h-44 rounded w-full object-cover object-center mb-2"
                                src="{{asset('./image/dashboard.png')}}" alt="content">
                            <div class="p-6">
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">dashboard</h2>
                                <p class="leading-relaxed text-base">Menampilkan tampilan utama untuk user dapat menambahkan kriteria, alternative, serta dapat melihat hasil hitungan </p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 p-4" data-aos="fade-left"
                        data-aos-duration="1000">
                        <div class="bg-gray-100 rounded-lg">
                            <img class="h-44 rounded w-full object-cover object-center mb-2"
                                src="{{asset('./image/perhitungan.png')}}" alt="content">
                            <div class="p-6">
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Data Perhitungan</h2>
                                <p class="leading-relaxed text-base">Mengelola dan menampilkan hasil perhitungan akhir untuk keputusan yang lebih baik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Konsultasi Section -->
    <section id="kontak"
        class="-z-10 relative bg-[url(https://res.cloudinary.com/dojf4to3s/image/upload/v1718157516/image_20_ki016h.png)] bg-cover bg-center">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative container mx-auto hidden md:block">
            <div class="absolute py-32 text-white">
                <h1 class="text-5xl font-semibold">Butuh Konsultasi..?
                    <br>Silahkan kontak kami
                    <br>Kami Siap Membantu
                </h1>
                <div>
                    <div class="mt-6 text-2xl">Kontak</div>
                    <div class="flex gap-4 text-xl mt-3">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p>Jl. Pejuang Cinta, Tegal,
                            Indonesia</p>
                    </div>
                    <div class="flex gap-4 text-xl mt-2">
                        <i class="bi bi-telephone-inbound"></i>
                        <p>022-6545-2041</p>
                    </div>
                    <div class="flex gap-4 text-xl mt-2">
                        <i class="bi bi-envelope"></i>
                        <p>SupplySeeker@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5 py-24 mx-auto flex relative z-10">
            <div
                class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-2xl mb-1 font-medium title-font text-center">Ada Pertanyaan?</h2>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="text-white bg-violet-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Kirim</button>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="body-font bg-aksen text-[#333]">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                <img class="h-10 w-auto" src="{{asset("./image/logo.png")}}" alt="SupplierSeeker">
                <span class="ml-3 text-xl">SupplySeeker</span>
            </a>
            <p class="text-sm text-white sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020
                BaisYufan —
                <a href="https://twitter.com/knyttneve" class="text-white ml-1" rel="noopener noreferrer"
                    target="_blank">@baskara</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a href="https://www.facebook.com/bais.yufan.1" class="text-white">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/hi_basss/" class="ml-3 text-white">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/bais-yufan-352057291/" class="ml-3 text-white">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

    <script>
        document.getElementById('navbar-toggler').addEventListener('click', function () {
            var navbarCollapse = document.getElementById('navbar-collapse');
            if (navbarCollapse.classList.contains('hidden')) {
                navbarCollapse.classList.remove('hidden');
            } else {
                navbarCollapse.classList.add('hidden');
            }
        });
    </script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
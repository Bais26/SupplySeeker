<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="flex flex-wrap justify-between gap-6 mx-6 sm:px-6 lg:px-8">
            <a href="/kriteria"
                class="h-32 w-1/4 bg-white border-red-500 flex justify-center gap-4 place-items-center rounded-xl border-l-8 p-6 shadow-lg">
                <div class="text-2xl text-center font-extrabold">Data Kriteria</div>
            </a>

            <a href="/alternative"
                class="h-32 w-1/4 bg-white border-green-500 flex justify-center gap-4 place-items-center rounded-xl border-l-8 p-6 shadow-lg">
                <div class="text-2xl text-center font-extrabold">Data Alternatif</div>
            </a>

            <a href="/subkriteria"
                class="h-32 w-1/4 bg-white border-blue-600 flex justify-center gap-4 place-items-center rounded-xl border-l-8 p-6 shadow-lg">
                <div class="text-2xl text-center font-extrabold">Sub Kriteria</div>
            </a>

            <a href="/hitung"
                class="h-32 w-1/4 bg-white border-violet-600 flex justify-center gap-4 place-items-center rounded-xl border-l-8 p-6 shadow-lg">
                <div class="text-2xl text-center font-extrabold">Data Perhitungan</div>
            </a>
            </div>

        <div class="py-12">
            <div class="mx-6 sm:px-6 lg:px-8">
                <div class="bg-white border border-gray-300 rounded-lg p-6 shadow-lg text-center">
                    <h1 class="text-3xl font-extrabold font-sans mb-4">Selamat Datang, Admin! 👋</h1>
                    <p class="text-xl">di Sistem Pendukung Keputusan Untuk Menentukan Supplier Terbaik Menggunakan Metode Weighted Product (WP)</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Value card -->
    <div class="mt-2">
        <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4">
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6
                        class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                        Data Kriteria
                    </h6>
                </div>
                <div>
                    <span>
                        <svg class="w-12 h-12 text-green-400 dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </div>
            </div>

            <!-- Users card -->
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6
                        class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                        Data Alternatif
                    </h6>
                </div>
                <div>
                    <span>
                        <svg class="w-12 h-12 text-green-400 dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </span>
                </div>
            </div>

            <!-- Orders card -->
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6
                        class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                        Sub Kriteria
                    </h6>
                </div>
                <div>
                    <span>
                        <svg class="w-12 h-12 text-green-400 dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </span>
                </div>
            </div>

            <!-- Tickets card -->
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6
                        class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                        Data Perhitungan
                    </h6>
                </div>
                <div>
                    <span>
                        <svg class="w-12 h-12 text-green-400 dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="mx-6 sm:px-6 lg:px-8">
                <div class="bg-white border border-gray-300  rounded-lg p-6 shadow-lg text-center">
                    <h1 class="text-3xl font-extrabold font-sans mb-4">Selamat Datang, Admin! 👋</h1>
                    <p class="text-md text-gray-500">di Sistem Pendukung Keputusan Untuk Menentukan Supplier Terbaik Menggunakan Metode Weighted Product (WP)</p>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
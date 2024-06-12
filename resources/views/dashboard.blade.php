    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="flex flex-wrap justify-between gap-6 mx-6 sm:px-6 lg:px-8">
                <a href="/kriteria"
                    class="h-32 w-1/4 bg-white border-red-500 flex justify-center gap-4 place-items-center rounded-xl border-l-8 p-6 shadow-lg">
                    <div class=" ">
                        <div class="text-2xl text-center font-extrabold">Data kriteria</div>
                    </div>
                </a>

                <a href="/alternatif"
                    class="h-32 w-1/4 bg-white border-green-500 flex justify-center gap-4 place-items-center rounded-xl border-l-8 p-6 shadow-lg">
                    <div class="">
                        <div class="text-2xl text-center font-extrabold">data Alternatif</div>
                    </div>
                </a>

                <a href="/subkriteria"
                    class="h-32 w-1/4 bg-white border-blue-600 flex justify-center gap-4 place-items-center rounded-xl border-l-8 p-6 shadow-lg">
                    <div class="">
                        <div class="text-2xl text-center font-extrabold">Sub Kriteria</div>
                    </div>
                </a>

                <a href="/penilaian"
                    class="h-32 w-1/4 bg-white border-yellow-300 flex justify-center gap-4 place-items-center rounded-xl border-l-8 p-6 shadow-lg">
                    <div class="">
                        <div class="text-2xl text-center font-extrabold">Data Penilaian</div>
                    </div>
                </a>

                <a href="/hitungan"
                    class="h-32 w-1/4 bg-white border-violet-600 flex justify-center gap-4 place-items-center rounded-xl border-l-8 p-6 shadow-lg">
                    <div class="">
                        <div class="text-2xl text-center font-extrabold">Data Perhitungan</div>
                    </div>
                </a>

                <a href="/nilaiakhir"
                    class="h-32 w-1/4 bg-white border-gray-400 flex justify-center gap-4 place-items-center rounded-xl border-l-8 p-6 shadow-lg">
                    <div class="">
                        <div class="text-2xl text-center font-extrabold">Data Akhir </div>
                    </div>
                </a>
            </div>
            <div class="py-12">
                <div class="mx-6 sm:px-6 lg:px-8">
                    <div class="bg-white border border-gray-300 rounded-lg p-6 shadow-lg text-center">
                        <h1 class="text-3xl font-extrabold font-sans mb-4">Selamat Datang, Admin! 👋</h1>
                        <p class="text-xl font">di Sistem Pendukung Keputusan Untuk Menentukan Supplier Terbaik Menggunakan Metode Weighted Product (WP)</p>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
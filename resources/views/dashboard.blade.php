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
    </div>
</x-app-layout>

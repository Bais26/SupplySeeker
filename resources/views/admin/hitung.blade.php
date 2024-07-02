<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Perhitungan WP dan Normalisasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Bobot -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200 overflow-y-auto">
                    <h3 class="text-xl font-semibold text-gray-800 leading-tight mb-4">Bobot</h3>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                @foreach ($kriterias as $kriteria)
                                    <th class="p-4 text-sm font-semibold tracking-wide text-center">{{ $kriteria->nama_kriteria }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($kriterias as $kriteria)
                                    <td class="border text-center px-4 py-2">{{ $kriteria->bobot_kriteria }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Normalisasi -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200 overflow-y-auto">
                    <h3 class="text-xl font-semibold text-gray-800 leading-tight mb-4">Normalisasi</h3>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2">Nama Supplier</th>
                                @foreach ($kriterias as $kriteria)
                                    <th class="py-2">{{ $kriteria->nama_kriteria }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alternatifs as $alternatif)
                                <tr>
                                    <td class="py-2 text-center">{{ $alternatif->nama_supplier }}</td>
                                    @foreach ($kriterias as $kriteria)
                                        <td class="py-2 text-center">{{ $alternatifValues[$alternatif->id][$kriteria->kode_kriteria] }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Hasil Perhitungan WP -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200 overflow-y-auto">
                    <h3 class="text-xl font-semibold text-gray-800 leading-tight mb-4">Hasil Perhitungan WP</h3>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2">Nama Supplier</th>
                                <th class="py-2">Nilai WP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wpValues as $id => $nilaiWP)
                                <tr>
                                    <td class="py-2 text-center">{{ $alternatifs->find($id)->nama_supplier }}</td>
                                    <td class="py-2 text-center">{{ $nilaiWP }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

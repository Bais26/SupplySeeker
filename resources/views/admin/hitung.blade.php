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
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-800 leading-tight mb-4">Bobot</h3>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2">Harga</th>
                                <th class="py-2">Tahun</th>
                                <th class="py-2">Kapasitas Mesin</th>
                                <th class="py-2">Seater</th>
                                <th class="py-2">Transmisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 text-center">{{ $widget1['kriterias'] }}</td>
                                <td class="py-2 text-center">{{ $widget2['kriterias'] }}</td>
                                <td class="py-2 text-center">{{ $widget3['kriterias'] }}</td>
                                <td class="py-2 text-center">{{ $widget4['kriterias'] }}</td>
                                <td class="py-2 text-center">{{ $widget5['kriterias'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Normalisasi -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-800 leading-tight mb-4">Normalisasi</h3>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2">Nama</th>
                                <th class="py-2">Harga</th>
                                <th class="py-2">Tahun</th>
                                <th class="py-2">Kapasitas Mesin</th>
                                <th class="py-2">Seater</th>
                                <th class="py-2">Transmisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td class="py-2 text-center">{{ $item->nama }}</td>
                                    <td class="py-2 text-center">{{ $item->C1 != 0 ? $C1min['alternatifs'] / $item->C1 : 0 }}</td>
                                    <td class="py-2 text-center">{{ $item->C2 != 0 ? $item->C2 / $C2max['alternatifs'] : 0 }}</td>
                                    <td class="py-2 text-center">{{ $item->C3 != 0 ? $item->C3 / $C3max['alternatifs'] : 0 }}</td>
                                    <td class="py-2 text-center">{{ $item->C4 != 0 ? $item->C4 / $C4max['alternatifs'] : 0 }}</td>
                                    <td class="py-2 text-center">{{ $item->C5 != 0 ? $item->C5 / $C5max['alternatifs'] : 0 }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Hasil Pemilihan Mobil Terbaik -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-800 leading-tight mb-4">Hasil Pemilihan Mobil Terbaik</h3>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2">Nama</th>
                                <th class="py-2">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td class="py-2 text-center">{{ $item->nama }}</td>
                                    <td class="py-2 text-center">
                                        {{ (($C1min['alternatifs'] / $item->C1) * $widget1['kriterias']) +
                                           (($item->C2 / $C2max['alternatifs']) * $widget2['kriterias']) +
                                           (($item->C3 / $C3max['alternatifs']) * $widget3['kriterias']) +
                                           (($item->C4 / $C4max['alternatifs']) * $widget4['kriterias']) +
                                           (($item->C5 / $C5max['alternatifs']) * $widget5['kriterias']) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

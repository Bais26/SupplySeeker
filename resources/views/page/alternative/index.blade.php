<!-- resources/views/page/alternative-index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Alternatif') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Daftar Alternatif
                    </div>

                    <!-- Tombol Tambah -->
                    <div class="mt-6">
                        <a href="{{ route('alternative.create') }}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Tambah Alternatif
                        </a>
                    </div>

                    <!-- Daftar Alternatif -->
                    <div class="mt-6">
                        <table class="w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Nama Supplier</th>
                                    <th class="px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatives as $alternative)
                                <tr>
                                    <td class="border px-4 py-2">{{ $alternative->id }}</td>
                                    <td class="border px-4 py-2">{{ $alternative->nama_supplier }}</td>
                                    <td class="border px-4 py-2">
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('alternative.edit', $alternative->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                                            Edit
                                        </a>
                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('alternative.destroy', $alternative->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

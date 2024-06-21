<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Kriteria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Daftar Kriteria
                    </div>

                    <!-- Tombol Tambah -->
                    <div class="mt-6">
                        <a href="{{ route('kriteria.create') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Tambah Kriteria
                        </a>
                    </div>

                    <!-- Daftar Kriteria -->
                    <div class="mt-6">
                        <table class="w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Kode kriteria</th>
                                    <th class="border px-4 py-2">Nama kriteria</th>
                                    <th class="border px-4 py-2">bobot kriteria</th>
                                    <th class="border px-4 py-2">Type</th>
                                    <th class="border px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteria as $kriterias)
                                <tr x-data="{ showModal: false }">
                                    <td class="border px-4 py-2 text-center">{{ $kriterias->kode_kriteria }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $kriterias->nama_kriteria }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $kriterias->bobot_kriteria }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $kriterias->type }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <div class="justify-center gap-6 flex">
                                            <!-- Tombol Edit -->
                                            <a href="{{ route('kriteria.edit', $kriterias->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <!-- Tombol Hapus -->
                                            <button @click="showModal = true" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                            <!-- Modal Konfirmasi Hapus -->
                                            <div x-show="showModal" x-cloak class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                                                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                                                    <div x-show="showModal" x-cloak class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                            <div class="sm:flex sm:items-start">
                                                                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                    <!-- Heroicon name: exclamation -->
                                                                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938-7.276a2.5 2.5 0 110 3.536 2.5 2.5 0 010-3.536zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                                                        Hapus Kriteria
                                                                    </h3>
                                                                    <div class="mt-2">
                                                                        <p class="text-sm text-gray-500">
                                                                            Apakah Anda yakin ingin menghapus Kriteria ini?
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-4">
                                                            <form action="{{ route('kriteria.destroy', $kriterias->id) }}" method="POST" class="inline-block">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                            <button @click="showModal = false" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2 sm:ml-0">
                                                                Batal
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Modal Konfirmasi Hapus -->
                                        </div>
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

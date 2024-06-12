<!-- resources/views/page/alternative-delete.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hapus Alternatif') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <p class="text-red-600 text-lg">Apakah Anda yakin ingin menghapus alternatif ini?</p>
                    <p class="text-sm text-gray-500">{{ $alternative->nama_supplier }}</p>

                    <form action="{{ route('alternative.destroy', $alternative->id) }}" method="POST" class="mt-4">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
        
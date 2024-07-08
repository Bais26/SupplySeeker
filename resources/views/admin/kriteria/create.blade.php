<x-app-layout>
    <div class="container mx-auto p-5 min-h-screen bg-gray-100">
        <h1 class="text-2xl mb-4 font-semibold text-gray-800">Tambah Kriteria</h1>

        <div class="bg-white rounded-lg shadow-md p-6">
            <form action="{{ route('kriteria.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="kode_kriteria" class="block text-gray-700 font-bold mb-2">Kode Kriteria:</label>
                    <input type="text" name="kode_kriteria" id="kode_kriteria" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="nama_kriteria" class="block text-gray-700 font-bold mb-2">Nama Kriteria:</label>
                    <input type="text" name="nama_kriteria" id="nama_kriteria" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="bobot_kriteria" class="block text-gray-700 font-bold mb-2">Bobot Kriteria:</label>
                    <input type="number" step="any" name="bobot_kriteria" id="bobot_kriteria" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="type" class="block text-gray-700 font-bold mb-2">Type:</label>
                    <select name="type" id="type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="" disabled selected>Select Type</option>
                        <option value="Benefit">Benefit</option>
                        <option value="Cost">Cost</option>
                    </select>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Tambah Kriteria
                    </button>
                    <a href="{{ route('kriteria.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

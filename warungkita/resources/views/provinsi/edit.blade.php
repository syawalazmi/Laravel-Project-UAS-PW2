<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8">
            <a href="{{ route('provinsi.view') }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="21"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </a>
        </div>
        <h4 class="mt-4 text-white text-2xl text-center font-bold">Edit Data Provinsi</h4>
        <div class="container mx-auto">
            <form method="post" class="shadow-md rounded px-8 pt-6 pb-8 mb-4"
                action="{{ route('provinsi.update', $provinsi->id) }}">
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="nama">
                        Nama Provinsi
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="nama" type="text" placeholder="Masukkan Nama Provinsi"
                        value="{{ $provinsi->nama }}">
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="ibukota">
                        Ibukota
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="ibukota" type="text" placeholder="Masukkan Nama Ibukota"
                        value="{{ $provinsi->ibukota }}">
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="latitude">
                        Latitude
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="latitude" type="number" placeholder="Masukkan Koordinat Latitude"
                        value="{{ $provinsi->latitude }}">
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="longitude">
                        Longitude
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="longitude" type="number" placeholder="Masukkan Koordinat Longitude"
                        value="{{ $provinsi->longitude }}">
                </div>


                <div class="flex items-center justify-between">
                    <button class="text-center hover:text-gray-400 text-white font-bold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

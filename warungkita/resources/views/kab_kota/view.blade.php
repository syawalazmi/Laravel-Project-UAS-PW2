    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Data UMKM') }}
            </h2>
        </x-slot>

        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="">
                    <a href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="21"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                        </svg>
                    </a>
                </div>
                <h4 class="font-semibold text-2xl text-center text-gray-800 dark:text-gray-200 leading-tight mb-3">List
                    Kabupaten/Kota
                </h4>
                <div>
                    <a class="bg-blue-500 text-white hover:text-gray-400 font-bold py-2 px-4"
                        href="{{ route('kab_kota.create') }}">Tambah
                        Data</a>
                </div>


                <table class="text-white text-center text-xs border-collapse border border-gray-300 w-full mt-6"
                    width="100%">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">Id</th>
                            <th class="border border-gray-300 px-4 py-2">Nama Kab/Kota</th>
                            <th class="border border-gray-300 px-4 py-2">Latitude</th>
                            <th class="border border-gray-300 px-4 py-2">Longitude</th>
                            <th class="border border-gray-300 px-4 py-2">Provinsi</th>
                            <th class="ms-8">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kab_kota as $viewKab_kota)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border border-gray-300 px-4 py-2"><?= $viewKab_kota->nama ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?= $viewKab_kota->latitude ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?= $viewKab_kota->longitude ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?= $viewKab_kota->provinsi_id ?></td>
                                <td class="border border-gray-300 px-4 py-2"><a
                                        href="{{ route('kab_kota.edit', $viewKab_kota->id) }}"
                                        class="text-white hover:text-gray-400 font-bold py-2 px-4 rounded">
                                        Edit
                                    </a>
                                <td class="border border-gray-300 px-4 py-2">
                                    <form action="{{ route('kab_kota.delete', $viewKab_kota->id) }}" method="post">
                                        @csrf
                                        <button
                                            class="bg-red-500 text-white hover:text-gray-400 font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-app-layout>

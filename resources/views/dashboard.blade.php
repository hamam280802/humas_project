<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-semibold mb-4">Selamat Datang di Sistem Monitoring Humas</h1>
                <p class="text-gray-700">Gunakan navigasi di atas untuk mengakses dokumentasi, progres projek, dan laporan kegiatan.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

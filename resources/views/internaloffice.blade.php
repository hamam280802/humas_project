<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('KAGEK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Kumpulan Gambar dan Video Kita</h3>

                    <div class="overflow-x-auto">
                        <div class="max-h-[500px] overflow-y-auto border border-gray-200 rounded-lg">
                            <table class="w-full bg-white border-collapse">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Tanggal</th>
                                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Nama Kegiatan</th>
                                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Dokumentasi</th>
                                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Cover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop through the activityDocumentation array and display each item -->
                                    @foreach($activityDocumentation as $item)
                                    <tr>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->nama_kegiatan }}</td>
                                        <td><a href="{{ $item->link_asset }}" target="_blank">Lihat Dokumentasi</a></td>
                                        <td><a href="{{ $item->link_cover }}" target="_blank">Lihat Cover</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Monitoring Humas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-poppins">

    <!-- Navbar -->
    <nav class="bg-white shadow p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-xl font-bold">Monitoring Humas</div>
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:text-blue-600 font-semibold">Beranda</a></li>

                <!-- Dokumen Dropdown -->
                <li class="relative group">
                    <button class="hover:text-blue-600 font-semibold">Dokumen</button>
                    <ul class="absolute left-0 mt-2 w-40 bg-white shadow-md rounded-md hidden group-hover:block z-10">
                        <li><a href="#" class="block px-4 py-2 font-semibold hover:bg-gray-100">Kepala</a></li>
                        <li><a href="#" class="block px-4 py-2 font-semibold hover:bg-gray-100">Statistik</a></li>
                        <li><a href="#" class="block px-4 py-2 font-semibold hover:bg-gray-100">Internal</a></li>
                    </ul>
                </li>

                <!-- Projek Dropdown -->
                <li class="relative group">
                    <button class="hover:text-blue-600 font-semibold">Projek</button>
                    <ul class="absolute left-0 mt-2 w-40 bg-white shadow-md rounded-md hidden group-hover:block z-10">
                        <li><a href="#" class="block px-4 py-2 font-semibold hover:bg-gray-100">Humas</a></li>
                        <li><a href="#" class="block px-4 py-2 font-semibold hover:bg-gray-100">Progres</a></li>
                    </ul>
                </li>

                <li><a href="#" class="hover:text-blue-600 font-semibold">Collabs</a></li>
                <li><a href="#" class="hover:text-blue-600 font-semibold">Laporan</a></li>
                <li>
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="hover:text-blue-600 font-semibold focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="hover:text-blue-600 font-semibold focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 hover:text-blue-600 font-semibold focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="p-6">
        <h1 class="text-2xl font-semibold mb-4">Selamat Datang di Sistem Monitoring Humas</h1>
        <p class="text-gray-700">Gunakan navigasi di atas untuk mengakses dokumentasi, progres projek, dan laporan kegiatan.</p>
    </main>

</body>
</html>

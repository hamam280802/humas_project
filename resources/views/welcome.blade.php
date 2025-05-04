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
    <nav class="bg-white shadow-md p-4">
        <div class="mx-auto flex justify-between items-center">
            <div class="text-xl font-bold">Monitoring Humas</div>
            <ul class="flex space-x-12">
                <li><a href="/" class="hover:text-blue-600 hover:font-semibold">Beranda</a></li>

                <!-- Dokumen Dropdown -->
                <li class="relative group">
                    <button class="hover:text-blue-600 hover:font-semibold">Dokumen</button>
                    <ul class="absolute -left-9 top-full mt-2 w-96 bg-white shadow-lg hidden z-10 space-y-4 p-6">
                        <li class="px-4"><a href="#" class="block font-semibold hover:text-blue-600">Kepala</a><div class="text-gray-500 text-sm mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, perferendis.</div></li>
                        <li class="px-4"><a href="#" class="block font-semibold hover:text-blue-600">Statistik</a><div class="text-gray-500 text-sm mt-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, officia.</div></li>
                        <li class="px-4"><a href="#" class="block font-semibold hover:text-blue-600">Internal</a><div class="text-gray-500 text-sm mt-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, repudiandae!</div></li>
                    </ul>
                </li>

                <!-- Projek Dropdown -->
                <li class="relative group">
                    <button class="hover:text-blue-600 hover:font-semibold">Projek</button>
                    <ul class="absolute -left-9 top-full mt-2 w-96 bg-white shadow-md hidden z-10 space-y-4 p-6">
                        <li class="px-4"><a href="#" class="block font-semibold hover:text-blue-600">Humas</a><div class="text-gray-500 text-sm mt-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, sed.</div></li>
                        <li class="px-4"><a href="#" class="block font-semibold hover:text-blue-600">Progres</a><div class="text-gray-500 text-sm mt-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, inventore.</div></li>
                    </ul>
                </li>

                <li><a href="#" class="hover:text-blue-600 hover:font-semibold">Collabs</a></li>
                <li><a href="#" class="hover:text-blue-600 hover:font-semibold">Laporan</a></li>
            </ul>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hover:text-blue-600 hover:font-semibold">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-blue-600 hover:font-semibold">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 hover:text-blue-600 hover:font-semibold">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="p-6">
        <h1 class="text-2xl font-semibold mb-4">Selamat Datang di Sistem Monitoring Humas</h1>
        <p class="text-gray-700">Gunakan navigasi di atas untuk mengakses dokumentasi, progres projek, dan laporan kegiatan.</p>
    </main>

    <footer class="bg-gray-100 absolute bottom-0 w-full">
        <div class="bg-gray-800 text-white p-4 text-center">
            <p>&copy; 2025 Monitoring Humas. All rights reserved.</p>
        </div>
        <div class="bg-gray-700 text-white p-4 text-center">
            <p>Developed by Tim HUMAS with &#10084;</p>
        </div>
    </footer>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const dropdowns = document.querySelectorAll('.relative.group');

        dropdowns.forEach(dropdown => {
            const button = dropdown.querySelector('button');
            const menu = dropdown.querySelector('ul');

            button.addEventListener('click', (e) => {
                e.preventDefault();
                menu.classList.toggle('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!dropdown.contains(e.target)) {
                    menu.classList.add('hidden');
                }
            });
        });
    });
</script>

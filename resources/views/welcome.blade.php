<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YoPulih</title>
    @vite('resources/css/app.css')
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .hide-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body class="bg-blue-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-white w-64 p-4 fixed inset-y-0 left-0 transform -translate-x-full transition-transform duration-200 ease-in-out lg:static lg:translate-x-0 z-50 hide-scrollbar">
            <div class="text-2xl font-bold mb-4">YoPulih</div>
            <nav>
                @foreach(config('menu') as $menuItem)
                    <a href="{{ route($menuItem['route']) }}" class="block py-2 px-4 rounded {{ request()->routeIs($menuItem['route']) ? 'bg-blue-700 text-white' : 'text-blue-700 hover:bg-blue-200' }}">
                        {{ $menuItem['icon'] }} {{ $menuItem['name'] }}
                    </a>
                @endforeach
            </nav>
        </div>

        <!-- Overlay -->
        <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden lg:hidden"></div>

        <!-- Main content -->
        <div class="flex-1 p-8 lg:ml-64 transition duration-200 ease-in-out">
            <div class="flex justify-between items-center mb-6">
                <button id="sidebarToggle" class="lg:hidden">☰</button>
                <input type="text" placeholder="Klik untuk mencari..." class="p-2 w-1/2 rounded border border-gray-300">
                <div>
                    <button class="mr-4">🔔</button>
                    <button>⚙️</button>
                </div>
            </div>

            <div>
                <h2 class="text-2xl font-bold mb-4">Video</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-8">
                    <div class="bg-white p-4 rounded shadow">
                        <div class="bg-gray-300 h-32 mb-2"></div>
                        <h3 class="text-lg font-semibold">Daur Ulang Sampah Plastik</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <div class="bg-gray-300 h-32 mb-2"></div>
                        <h3 class="text-lg font-semibold">Daur Ulang Sampah Plastik</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <div class="bg-gray-300 h-32 mb-2"></div>
                        <h3 class="text-lg font-semibold">Daur Ulang Sampah Plastik</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <div class="bg-gray-300 h-32 mb-2"></div>
                        <h3 class="text-lg font-semibold">Daur Ulang Sampah Plastik</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                <h2 class="text-2xl font-bold mb-4">Artikel</h2>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="text-lg font-semibold">Tips Mengelola Stress</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestias itaque...</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="text-lg font-semibold">Membangun Pribadi</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestias itaque...</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="text-lg font-semibold">Kenali Gejala Stress</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestias itaque...</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="text-lg font-semibold">Apakah Aku Butuh Penanganan Khusus? Yuk Ikuti Tes-nya Disini!</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestias itaque...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            const sidebarToggle = document.getElementById('sidebarToggle');

            sidebarToggle.addEventListener('click', function () {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            });

            overlay.addEventListener('click', function () {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            });
        });
    </script>
</body>
</html>

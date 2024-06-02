<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    @php
        $currentPath = Request::path();
        $userRole = Auth::user()->role;
    @endphp
    <body class="h-screen bg-gradient-to-b from-[#42a0d8] via-[#88b3cd] to-[#c0c3c3] p-10 space-y-10 flex flex-col">
        <div class="flex justify-between items-center">
            <div class="text-5xl">Yopulih</div>
            <div class="flex gap-x-3 text-4xl">
                <div>😊</div>
                <div>😂</div>
                <div>😍</div>
            </div>
        </div>
        <div class="flex gap-x-10 w-full flex-1 overflow-auto bg-transparent">
            <div class="bg-[#d7d7d7] rounded-l-3xl px-3 py-5 w-full max-w-xs lg:block hidden">
                <div class="flex justify-end text-5xl">👋</div>
                <div class="flex flex-col gap-y-3 text-lg text-left mt-10">
                @if ($userRole == '1')
                    <a href="/dashboard/video-artikel" class="text-left {{ str_contains($currentPath, 'dashboard/video-artikel') ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Video Artikel</a>
                    <a href="#" class="text-left {{ $currentPath === 'dashboard/daftar-laporan' ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Daftar Laporan</a>
                    <a href="#" class="text-left {{ $currentPath === 'dashboard/psikolog' ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Psikolog</a>
                @endif
                @if ($userRole == '2')
                    <a href="/dashboard" class="text-left {{ $currentPath === 'dashboard' ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Dashboard</a>
                    <a href="/dashboard/video-artikel" class="text-left {{ str_contains($currentPath, 'dashboard/video-artikel') ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Video Artikel</a>
                    <a href="/dashboard/forum" class="text-left {{ str_contains($currentPath, 'dashboard/forum') ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Forum</a>
                    <a href="#" class="text-left {{ $currentPath === 'dashboard/konsultasi' ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Konsultasi</a>
                    <a href="/dashboard/stress-test" class="text-left {{ $currentPath === 'dashboard/stress-test' ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Stress Test</a>
                @endif
                @if ($userRole == '3')
                    <a href="/dashboard" class="text-left {{ $currentPath === 'dashboard' ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Dashboard</a>
                    <a href="/dashboard/video-artikel" class="text-left {{ str_contains($currentPath, 'dashboard/video-artikel') ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Video Artikel</a>
                    <a href="/dashboard/forum" class="text-left {{ str_contains($currentPath, 'dashboard/forum') ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Forum</a>
                    <a href="#" class="text-left {{ $currentPath === 'dashboard/daftar-klien' ? 'bg-[#005082] text-white shadow-lg' : 'text-[#747373]' }} cursor-pointer font-bold py-2 rounded-xl px-5">Daftar Klien</a>
                @endif
                </div>
            </div>
            <div class="w-full flex flex-col gap-y-10">
                <nav class="bg-[#d7d7d7] rounded-r-3xl py-10 w-full flex justify-start px-10">
                    <div class="block lg:hidden text-3xl">👋</div>
                </nav>
                <main class="bg-[#d7d7d7] rounded-r-3xl p-10 w-full h-full overflow-y-auto">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>

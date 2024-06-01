<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-gradient-to-b from-[#42a0d8] via-[#88b3cd] to-[#c0c3c3] p-10 flex gap-x-10 w-full">
    <sidebar class="bg-[#d7d7d7] rounded-l-3xl px-3 py-5 w-full max-w-xs shadow-2xl">
        <div class="flex justify-end text-5xl">👋</div>
        <div class="flex flex-col gap-y-3 text-lg text-left mt-10">
            <div class="bg-[#005082] text-white py-2 rounded-xl shadow-lg px-5">Video Artikel</div>
            <div class="bg-[#005082] text-white py-2 rounded-xl shadow-lg px-5">Daftar Laporan</div>
            <div class="bg-[#005082] text-white py-2 rounded-xl shadow-lg px-5">Psikolog</div>
        </div>
    </sidebar>
    <div class="w-full flex flex-col gap-y-10">
        <nav class="bg-[#d7d7d7] rounded-r-3xl py-10 w-full flex justify-end px-10">
            
        </nav>
        <main class="bg-[#d7d7d7] rounded-r-3xl p-10 w-full shadow-2xl h-full overflow-y-auto">
            @yield('content')
        </main>
    </div>
</body>
</html>

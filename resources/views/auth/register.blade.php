<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Register</title>
    </head>
    <body class="bg-[#f4ebd7] flex items-center justify-center h-screen">
        <div class="w-full max-w-4xl flex flex-wrap overflow-hidden mx-8">
            <div class="w-full md:w-1/2">
                <div class="flex items-center justify-center mb-4">
                    <img src="path/to/logo.png" alt="Logo" class="w-10 h-10 mr-2">
                    <h1 class="text-2xl font-bold">YoPulih</h1>
                </div>
                @if (session('success'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-500 text-white p-4 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-500 text-white p-4 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="shadow-lg bg-white border-2 border-gray-300 rounded-lg p-8">
                    <h2 class="text-2xl font-bold mb-4">Halo!</h2>
                    <p class="mb-4">Sudah memiliki akun? <a href="/auth/login" class="text-blue-500">Masuk</a></p>
                    <form action="/auth/register" method="POST" class="space-y-5">
                        @csrf
                        <div class="mb-4">
                            <input placeholder="Nama" type="text" value="{{ old('name') }}" name="name" id="name" class="mt-1 block w-full border-b border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <input placeholder="Email" type="email" value="{{ old('email') }}" name="email" id="email" class="mt-1 block w-full border-b border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <input placeholder="Kata Sandi" type="password" name="password" id="password" class="mt-1 block w-full border-b border-gray-300 shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-gray-400 text-white py-2 px-4 rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full md:w-1/2 bg-cover bg-center" style="background-image: url('path/to/your/image.jpg');">
                <div class="p-8 flex flex-col justify-center h-full">
                    <h2 class="text-3xl font-bold mb-4">Selamat Datang,</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestias tenetur minus officia nobis fugit consequatur earum, animi eius aliquid perferendis! Aspernatur id consequatur, rem qui optio non fugiat.</p>
                </div>
            </div>
        </div>
    </body>
</html>

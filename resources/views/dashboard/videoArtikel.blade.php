@extends('layout.dashboard')

@section('title', 'Home')

@section('content')
    <h1 class="font-bold text-xl text-[#464646] mb-5">Video:</h1>
    <div class="flex flex-wrap gap-5">
        @foreach ($videos as $video)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs w-full">
                <div class="relative">
                    <div class="bg-gray-400 h-40 flex items-center justify-center">
                        <iframe src="{{ $video->url }}"  class="w-full h-full" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">{{ $video->title }}</h3>
                    <p class="text-gray-600 text-sm">{{ $video->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <h1 class="font-bold text-xl text-[#464646] mb-5 mt-10">Artikel:</h1>
    <div class="flex flex-col gap-y-3">
        @foreach ($articles as $article)
            <a href="/dashboard/video-artikel/{{ $article->slug }}" class="bg-white rounded-2xl shadow-lg px-10 py-5">
                <div class="font-bold">{{ $article->title }}</div>
                <div>{{ $article->description }}</div>
            </a>
        @endforeach
    </div>
@endsection

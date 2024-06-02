@extends('layout.dashboard')

@section('title', 'Home')

@section('content')
    <h1 class="font-bold text-5xl text-[#464646]">FORUM</h1>
    <div class="h-[1px] w-full bg-black mt-4"></div>
    <div class="flex flex-col gap-y-4 mt-5">   
        @foreach($posts as $post)
            <div class="bg-white rounded-lg shadow-lg px-5 py-2">
                <div class="flex justify-between">
                    <div class="flex items-center gap-x-2">
                        <div class="text-2xl">😘</div>
                        <div class="flex flex-col gap-y-0">
                            <div class="font-bold">{{ $post->author->name }}</div>
                            <div class="text-xs">{{ $post->created_at->diffForHumans() }}</div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    {{ $post->content }}
                </div>
                <div class="h-[1px] w-full bg-black mt-4"></div>
                <a href="/dashboard/forum/{{ $post->id }}" class="flex justify-end font-bold my-2 cursor-pointer">
                    Lihat Komentar
                </a>
            </div>
        @endforeach
    </div>
@endsection

@extends('layout.dashboard')

@section('title', 'Home')

@section('content')
    <a href="/dashboard/forum" class="font-bold text-5xl text-[#464646]">FORUM</a>
    <div class="h-[1px] w-full bg-black mt-4"></div>
    <div class="flex flex-col gap-y-4 mt-5">   
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
        </div>
        <div>Komentar:</div>
        @foreach($post->comments as $comment)
            <div class="bg-white rounded-lg shadow-lg px-5 py-2">
                <div class="flex justify-between">
                    <div class="flex items-center gap-x-2">
                        <div class="text-2xl">😘</div>
                        <div class="flex flex-col gap-y-0">
                            <div class="font-bold">{{ $comment->author->name }}</div>
                            <div class="text-xs">{{ $comment->created_at->diffForHumans() }}</div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    {{ $comment->content }}
                </div>
            </div>
        @endforeach
    </div>
@endsection

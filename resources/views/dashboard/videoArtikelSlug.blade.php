@extends('layout.dashboard')

@section('title', 'Home')

@section('content')
    <a href="/dashboard/video-artikel" class="text-blue-500">Back</a>
    <h1 class="font-bold">{{ $article->title }}</h1>
    <p class="">{!! $article->text !!}</p>
@endsection
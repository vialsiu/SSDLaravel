@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left py-20">
    <h1 class="text-6xl">{{ $post->title }}</h1>
</div>

<div class="w-4/5 m-auto pt-5">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-5">{{ $post->description }}</p>

    <p class="text-gray-600 pt-5"><strong>Artist:</strong> {{ $post->artist }}</p>
    <p class="text-gray-600"><strong>Medium:</strong> {{ $post->medium }}</p>
    <p class="text-gray-600"><strong>Origin:</strong> {{ $post->origin }}</p>
    <p class="text-gray-600"><strong>Year:</strong> {{ $post->year }}</p>
</div>

@endsection 
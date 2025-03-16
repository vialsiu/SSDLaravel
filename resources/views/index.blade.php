@extends('layouts.app')

@section('title', 'Home - Paint Across The World')

@section('content')
<header class="text-center py-10 bg-gray-900 text-white">
    <h1 class="text-5xl font-bold">Art Across Origins</h1>
    <p class="mt-3 text-lg">Exploring the beauty of art from around the world</p>
</header>

<main class="container mx-auto py-10 px-5">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($artworks as $art)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $art->image) }}" alt="{{ $art->title }}" class="w-full h-60 object-cover">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">{{ $art->title }}</h2>
                    <p class="text-gray-600 mt-2">{{ $art->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection

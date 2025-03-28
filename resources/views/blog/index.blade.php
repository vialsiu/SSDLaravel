@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-24 border-b border-gray-200 pb-10">
        <div class="bg-cover bg-center w-full" style="background-image: url('images/piece7.jpg')">
            <h2 class="text-6xl text-white py-20">
                Blogs - Paintings
            </h2>
        </div>
    </div>
</div>

@if (session()->has('message'))
    <div id="flash-message" class="w-4/5 m-auto mt-10 pl-2 relative">
        <p class="uppercase bg-gray-300 text-gray-800 text-sm font-bold py-2 px-6 rounded relative">
            {{ session()->get('message') }}
            <button onclick="document.getElementById('flash-message').remove()"
                    class="absolute top-1 right-2 text-gray-700 text-lg font-bold hover:text-black">
                &times;
            </button>
        </p>
    </div>
@endif


@if (Auth::check())
    <div class="pt-8 w-4/5 m-auto">
        <a href="/blog/create"
           class="uppercase bg-gray-200 text-gray-800 text-sm font-bold py-2 px-6 rounded hover:bg-gray-400 transition duration-300 ease-in-out mb-4 border border-purple-100">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-6 border-b border-gray-200">
        <div>
            <!-- Image with max-height -->
            <img src="{{ asset('images/' . $post->image_path) }}" 
                 alt="{{ $post->title }}" 
                 class="rounded-lg shadow-md max-h-192 object-cover w-auto">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, 
                Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <!-- Truncate the description to 100 words -->
            <p class="text-xl text-gray-700 pt-4 pb-10 leading-8 font-light">
                {{ \Illuminate\Support\Str::words($post->description, 50, '...') }}
            </p>

            <a href="/blog/{{ $post->slug }}" 
               class="uppercase bg-gray-200 text-gray-800 text-sm font-bold py-2 px-6 rounded hover:bg-gray-400 transition duration-300 ease-in-out mb-4">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a href="/blog/{{ $post->slug }}/edit"
                       class="px-4 py-2 bg-gray-200 text-gray-800 font-medium rounded-md hover:bg-gray-300 transition duration-200 ease-in-out">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                     <form action="/blog/{{ $post->slug }}" method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-700 pr-3 font-medium"
                            type="submit">
                            Delete
                        </button>
                    </form>
                </span>
            @endif
        </div>
    </div>    
@endforeach

@endsection

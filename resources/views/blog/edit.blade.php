@extends('layouts.app')

@section('content')
<div class="w-4/5 pt-24 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-2 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto">
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <input type="text" name="title" value="{{ $post->title }}" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <textarea name="description" class="py-5 bg-transparent block border-b-2 w-full text-lg outline-none">{{ $post->description }}</textarea>
    
        <input type="text" name="artist" value="{{ $post->artist }}" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="medium" value="{{ $post->medium }}" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="origin" value="{{ $post->origin }}" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="year" value="{{ $post->year }}" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <div class="flex justify-end mt-5">
            <button type="submit" class="px-4 py-2 bg-gray-200 text-gray-800 font-medium rounded-md hover:bg-gray-300 transition duration-200 ease-in-out">
            Update Post
            </button>
        </div>
    </form>
    
</div>

@endsection
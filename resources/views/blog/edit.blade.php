@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
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
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <input type="text" name="title" value="{{ $post->title }}" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <textarea name="description" class="py-5 bg-transparent block border-b-2 w-full text-lg outline-none">{{ $post->description }}</textarea>
    
        <input type="text" name="artist" value="{{ $post->artist }}" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="medium" value="{{ $post->medium }}" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="origin" value="{{ $post->origin }}" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="year" value="{{ $post->year }}" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <button type="submit" class="uppercase mt-5 bg-blue-500 text-gray-100 text-lg font-extrabold py-3 px-6 rounded-3xl">
            Update Post
        </button>
    </form>
    
</div>

@endsection
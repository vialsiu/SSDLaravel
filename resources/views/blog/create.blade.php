@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Post
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
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
    
        <input type="text" name="title" placeholder="Title..." class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <textarea name="description" placeholder="Description..." class="py-5 bg-transparent block border-b-2 w-full text-lg outline-none"></textarea>
    
        <input type="text" name="artist" placeholder="Artist..." class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="medium" placeholder="Medium..." class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="origin" placeholder="Origin..." class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="year" placeholder="Year..." class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <div class="bg-grey-lighter pt-5">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>
    
        <button type="submit" class="uppercase mt-5 bg-blue-500 text-gray-100 text-lg font-extrabold py-3 px-6 rounded-3xl">
            Submit Post
        </button>
    </form>
    
</div>

@endsection
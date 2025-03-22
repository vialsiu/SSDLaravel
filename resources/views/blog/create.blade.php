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
    
        <!-- Image Upload with Preview -->
        <div class="bg-grey-lighter pt-5">
            <label class="w-30 flex pb-2 flex-col items-center px-4 bg-gray-200 text-gray-800 font-medium rounded-md hover:bg-gray-300 transition duration-200 ease-in-out cursor-pointer">
                <span class="mt-2 text-base leading-normal">Select a file...</span>
                <input type="file" name="image" class="hidden" id="imageUpload" accept="image/*" onchange="previewImage(event)">
            </label>
        </div>

        <!-- Image Preview -->
        <div class="mt-5">
            <img id="imagePreview" src="" alt="Selected Image" class="hidden max-w-full h-auto rounded-md shadow-md">
        </div>

        <div class="flex justify-end mt-5">
            <button type="submit" class="px-4 py-2 bg-gray-200 text-gray-800 font-medium rounded-md hover:bg-gray-300 transition duration-200 ease-in-out">
            Submit Post
            </button>
        </div>
    </form>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.classList.remove('hidden');
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection

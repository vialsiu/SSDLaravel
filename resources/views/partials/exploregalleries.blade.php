<div class="w-4/5 m-auto py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        @foreach ($galleries as $gallery)
            <div class="block rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 ease-in-out">
                <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/' . $gallery->image) }}');"></div>
                <div class="bg-white p-4">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $gallery->title }}</h3>
                    <p class="text-sm text-gray-600">{{ $gallery->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@php
    $galleryLinks = [
        'https://www.louvre.fr/en',
        'https://www.metmuseum.org/',
        'https://www.nationalgallery.org.uk/',
        'https://www.uffizi.it/en',
        'https://www.rijksmuseum.nl/en',
        'https://www.pradomuseum.es/en',
        'https://www.vangoghmuseum.nl/',
        'https://www.museodelnovecento.org/en/',
        'https://www.moma.org/',
        'https://www.centrepompidou.fr/en',
        'https://www.tate.org.uk/',
        'https://www.hermitagemuseum.org/',
        'https://www.museivaticani.va/',
        'https://www.guggenheim.org/',
        'https://www.getty.edu/museum/',
        'https://www.saatchigallery.com/',
    ];
@endphp

<div class="w-4/5 m-auto py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        @foreach ($galleries as $gallery)
            <a href="{{ $galleryLinks[$loop->index] ?? '#' }}" target="_blank" rel="noopener noreferrer"
                class="block rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 ease-in-out bg-white">
                <div class="h-48 bg-cover bg-center"
                    style="background-image: url('{{ asset('images/' . $gallery->image) }}');"></div>
                <div class="bg-white p-4">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $gallery->title }}</h3>
                    <p class="text-sm text-gray-600">{{ $gallery->description }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>

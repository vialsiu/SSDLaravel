<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Viva il Painted Voyage')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/ship.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="text-gray-900 bg-gray-100 flex flex-col min-h-screen">
    
    @include('partials.nav')

    <div class="container mx-auto py-10 flex-grow">
        @yield('content')
    </div>

    @include('partials.footer')

</body>

</html>

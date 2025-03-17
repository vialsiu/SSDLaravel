<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Paint Across The World')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ time() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="text-gray-900 bg-gray-100">
    
    @include('partials.nav')

    <div class="container mx-auto py-10">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>

<nav class="p-4 shadow-md bg-white">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Placeholder for logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/statue.png') }}" alt="Logo" class="h-10 w-10">
            <h1 class="text-2xl font-bold text-gray-900">Viva il Painted Voyage</h1>
        </div>
        <!-- Navigation Links -->
        <ul class="flex space-x-6">
            <li><a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-gray-900 font-medium">Blogs</a></li>
            <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-gray-900 font-medium">Contact</a></li>
            <li><a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900 font-medium">Log In</a></li>
        </ul>
    </div>
</nav>

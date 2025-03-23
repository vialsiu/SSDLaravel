<nav class="bg-white py-3 fixed top-0 left-1/2 transform -translate-x-1/2 w-[85%] max-w-6xl z-50 shadow-md border-b border-gray-300">
    <div class="container mx-auto flex items-center justify-between px-4 lg:px-8">
        
        <!-- Logo (flex shrink) -->
        <div class="flex items-center space-x-2 flex-shrink-0">
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <img src="{{ asset('/images/ship.png') }}" alt="Logo" class="h-7 w-auto max-sm:h-5">
                <h1 class="text-gray-900 gradient-text text-xl md:text-2xl lg:text-3xl whitespace-nowrap">Viva il Painted Voyage</h1>
            </a>
        </div>

        <!-- Navigation Links (flex nowrap, shrinkable text) -->
        <ul class="flex items-center space-x-4 md:space-x-6 lg:space-x-8 flex-nowrap whitespace-nowrap text-sm md:text-base lg:text-lg">
            <li><a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-black transition">Blogs</a></li>
            <li><a href="{{ route('artist.index') }}" class="text-gray-700 hover:text-black transition">Artists</a></li>
            <li><a href="{{ url('/quiz') }}" class="text-gray-700 hover:text-black transition">Art Quiz</a></li>
            <li><a href="{{ route('galleries') }}" class="text-gray-700 hover:text-black transition">Galleries</a></li>

            <!-- Log in/out button -->
            @guest
                <li><a href="{{ route('login') }}" class="text-gray-700 hover:text-black transition">Log in</a></li>
            @else
                <li>
                    <a href="{{ route('logout') }}" class="text-gray-700 hover:text-black transition"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Log out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>

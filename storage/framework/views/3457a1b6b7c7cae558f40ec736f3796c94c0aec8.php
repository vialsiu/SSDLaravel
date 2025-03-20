<nav class="bg-white py-3">
    <div class="container mx-auto flex items-center justify-between max-w-6xl px-4 lg:px-8">
        
        <!-- Logo on the Left -->
        <div class="flex items-center space-x-3 nav-logo">
            <img src="<?php echo e(asset('/images/compass.png')); ?>" alt="Logo" class="h-10 w-auto">
            <h1 class="text-gray-900 gradient-text">Viva il Painted Voyage</h1>
        </div>

        <!-- Navigation Links -->
        <ul class="flex space-x-6 text-lg font-medium">
            <li><a href="<?php echo e(route('home')); ?>" class="text-gray-700 hover:text-black transition">Home</a></li>
            <li><a href="<?php echo e(route('blog.index')); ?>" class="text-gray-700 hover:text-black transition">Blogs</a></li>
            <li><a href="<?php echo e(route('blog.index')); ?>" class="text-gray-700 hover:text-black transition">Artists</a></li>
            <li><a href="<?php echo e(route('contact')); ?>" class="text-gray-700 hover:text-black transition">Galleries</a></li>
            
            <!-- Log in Button with Dynamic Authentication Check -->
            <?php if(auth()->guard()->guest()): ?>
                <li><a href="<?php echo e(route('login')); ?>" class="text-gray-700 hover:text-black transition">Log in</a></li>
            <?php else: ?>
                <li>
                    <a href="<?php echo e(route('logout')); ?>" class="text-gray-700 hover:text-black transition"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Log out
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
            <?php endif; ?>
        </ul>

        <!-- Search Icon -->
        <div>
            <a href="#" class="text-gray-700 hover:text-black transition">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.8-5.4a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z" />
                </svg>
            </a>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/partials/nav.blade.php ENDPATH**/ ?>
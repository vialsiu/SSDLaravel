<div class="container mx-auto text-center py-16 px-6 lg:px-12">
    
    <!-- Title -->
    <h2 class="text-3xl font-semibold text-gray-600 mb-8">EXPLORE, EMBRACE ART</h2>

    <!-- Grid Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        
        <!-- Card 1:  -->
        <div class="text-center">
            <a href="<?php echo e(url('/blog')); ?>">
            <img src="<?php echo e(asset('images/piece1.jpg')); ?>" class="w-full h-64 object-cover rounded-lg shadow-md">
            <h3 class="text-xl font-medium text-gray-900 mt-4 relative pb-2 after:block after:w-10 after:border after:border-gray-300 after:mt-2 after:mx-auto">
                See latest blogs
            </h3>
            <p class="text-gray-600 mt-2 text-sm">Unlock your horizons to learn</p>
            </a>
        </div>

        <!-- Card 2: Exhibitions -->
        <div class="text-center">
            <a href="<?php echo e(url('/artists')); ?>">
            <img src="<?php echo e(asset('images/piece2.jpg')); ?>" class="w-full h-64 object-cover rounded-lg shadow-md">
            <h3 class="text-xl font-medium text-gray-900 mt-4 relative pb-2 after:block after:w-10 after:border after:border-gray-300 after:mt-2 after:mx-auto">
                Artists
            </h3>
            <p class="text-gray-600 mt-2 text-sm">Do you have what it takes to be an artist?</p>
        </a>
        </div>

        <!-- Card 3: -->
        <div class="text-center">
            <a href="<?php echo e(url('/quiz')); ?>">
            <img src="<?php echo e(asset('images/piece3.jpg')); ?>" alt="Art Trivia Quiz" class="w-full h-64 object-cover rounded-lg shadow-md">
            <h3 class="text-xl font-medium text-gray-900 mt-4 relative pb-2 after:block after:w-10 after:border after:border-gray-300 after:mt-2 after:mx-auto">
                Art Trivia Quiz
            </h3>
            <p class="text-gray-600 mt-2 text-sm">                Challenge your knowledge
            </p>
        </a>
        </div>

        <!-- Card 4: Membership -->
        <div class="text-center">
            <img src="<?php echo e(asset('images/piece4.jpg')); ?>"class="w-full h-64 object-cover rounded-lg shadow-md">
            <h3 class="text-xl font-medium text-gray-900 mt-4 relative pb-2 after:block after:w-10 after:border after:border-gray-300 after:mt-2 after:mx-auto">
                Placeholder
            </h3>
            <p class="text-gray-600 mt-2 text-sm">Placeholder for now</p>
        </div>

    </div>
</div>
<?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/partials/explore.blade.php ENDPATH**/ ?>
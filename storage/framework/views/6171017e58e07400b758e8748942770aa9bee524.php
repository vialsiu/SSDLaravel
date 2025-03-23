<div class="w-4/5 m-auto py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

        <!-- Card 1 -->
        <a href="https://example.com/gallery1" target="_blank" class="block rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 ease-in-out">
            <div class="h-48 bg-cover bg-center" style="background-image: url('<?php echo e(asset('images/gal.jpg')); ?>');"></div>
            <div class="bg-white p-4">
                <h3 class="text-lg font-semibold text-gray-800">Gallery 1</h3>
                <p class="text-sm text-gray-600">Explore art from this collection.</p>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="https://example.com/gallery2" target="_blank" class="block rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 ease-in-out">
            <div class="h-48 bg-cover bg-center" style="background-image: url('<?php echo e(asset('images/gal2.jpg')); ?>');"></div>
            <div class="bg-white p-4">
                <h3 class="text-lg font-semibold text-gray-800">Gallery 2</h3>
                <p class="text-sm text-gray-600">Explore art from this collection.</p>
            </div>
        </a>

        <!-- Card 3 -->
        <a href="https://example.com/gallery3" target="_blank" class="block rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 ease-in-out">
            <div class="h-48 bg-cover bg-center" style="background-image: url('<?php echo e(asset('images/gal3.jpeg')); ?>');"></div>
            <div class="bg-white p-4">
                <h3 class="text-lg font-semibold text-gray-800">Gallery 3</h3>
                <p class="text-sm text-gray-600">Explore art from this collection.</p>
            </div>
        </a>

        <!-- Card 4 -->
        <a href="https://example.com/gallery4" target="_blank" class="block rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 ease-in-out">
            <div class="h-48 bg-cover bg-center" style="background-image: url('<?php echo e(asset('images/backgroundpic.jpeg')); ?>');"></div>
            <div class="bg-white p-4">
                <h3 class="text-lg font-semibold text-gray-800">Gallery 4</h3>
                <p class="text-sm text-gray-600">Explore art from this collection.</p>
            </div>
        </a>

        <!-- Cards 5 to 16 -->
        <?php for($i = 5; $i <= 16; $i++): ?>
            <a href="https://example.com/gallery<?php echo e($i); ?>" target="_blank" class="block rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 ease-in-out">
                <div class="h-48 bg-cover bg-center" style="background-image: url('<?php echo e(asset('images/backgroundpic.jpeg')); ?>');"></div>
                <div class="bg-white p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Gallery <?php echo e($i); ?></h3>
                    <p class="text-sm text-gray-600">Explore art from this collection.</p>
                </div>
            </a>
        <?php endfor; ?>

    </div>
</div>
<?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/partials/exploregalleries.blade.php ENDPATH**/ ?>
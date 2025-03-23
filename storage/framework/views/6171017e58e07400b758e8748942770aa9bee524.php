<div class="w-4/5 m-auto py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="block rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 ease-in-out">
                <div class="h-48 bg-cover bg-center" style="background-image: url('<?php echo e(asset('images/' . $gallery->image)); ?>');"></div>
                <div class="bg-white p-4">
                    <h3 class="text-lg font-semibold text-gray-800"><?php echo e($gallery->title); ?></h3>
                    <p class="text-sm text-gray-600"><?php echo e($gallery->description); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/partials/exploregalleries.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>
<div class="w-4/5 m-auto text-left py-20">
    <h1 class="text-6xl"><?php echo e($post->title); ?></h1>
</div>

<div class="w-4/5 m-auto pt-5">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800"><?php echo e($post->user->name); ?></span>, Created on <?php echo e(date('jS M Y', strtotime($post->updated_at))); ?>

    </span>

    <p class="text-xl text-gray-700 pt-5"><?php echo e($post->description); ?></p>

    <p class="text-gray-600 pt-5"><strong>Artist:</strong> <?php echo e($post->artist); ?></p>
    <p class="text-gray-600"><strong>Medium:</strong> <?php echo e($post->medium); ?></p>
    <p class="text-gray-600"><strong>Origin:</strong> <?php echo e($post->origin); ?></p>
    <p class="text-gray-600"><strong>Year:</strong> <?php echo e($post->year); ?></p>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/blog/show.blade.php ENDPATH**/ ?>
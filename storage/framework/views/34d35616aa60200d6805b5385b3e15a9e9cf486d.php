

<?php $__env->startSection('content'); ?>
<div class="w-4/5 m-auto text-center">
    <div class="py-24 border-b border-gray-200 pb-0">
        <div class="bg-cover bg-center w-full" style="background-image: url('images/piece6.jpg')">
            <h2 class="text-6xl text-white py-20">
                Are you an artist?
            </h2>
        </div>
    </div>
</div>

<?php echo $__env->make('partials.exploreartist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/artists.blade.php ENDPATH**/ ?>
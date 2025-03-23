<?php $__env->startSection('content'); ?>
<div class="w-4/5 m-auto text-center">
    <div class="py-24 border-b border-gray-200 pb-10">
        <div class="bg-cover bg-center w-full" style="background-image: url('images/bgpic10.jpg')">
            <h2 class="text-6xl text-white py-20">
                Galleries
            </h2>
        </div>
    </div>
</div>
<!-- Gallery Grid -->
<?php echo $__env->make('partials.exploregalleries', ['galleries' => $galleries], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/galleries.blade.php ENDPATH**/ ?>
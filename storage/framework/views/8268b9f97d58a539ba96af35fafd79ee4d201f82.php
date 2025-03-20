

<?php $__env->startSection('content'); ?>
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Post
        </h1>
    </div>
</div>

<?php if($errors->any()): ?>
    <div class="w-4/5 m-auto">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    <?php echo e($error); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="w-4/5 m-auto pt-20">
    <form action="/blog/<?php echo e($post->slug); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
    
        <input type="text" name="title" value="<?php echo e($post->title); ?>" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <textarea name="description" class="py-5 bg-transparent block border-b-2 w-full text-lg outline-none"><?php echo e($post->description); ?></textarea>
    
        <input type="text" name="artist" value="<?php echo e($post->artist); ?>" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="medium" value="<?php echo e($post->medium); ?>" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="origin" value="<?php echo e($post->origin); ?>" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <input type="text" name="year" value="<?php echo e($post->year); ?>" class="bg-transparent block border-b-2 w-full h-12 text-xl outline-none">
    
        <button type="submit" class="uppercase mt-5 bg-blue-500 text-gray-100 text-lg font-extrabold py-3 px-6 rounded-3xl">
            Update Post
        </button>
    </form>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/blog/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="w-4/5 m-auto text-center">
    <div class="py-24 border-b border-gray-200 pb-10">
        <div class="bg-cover bg-center w-full" style="background-image: url('images/piece7.jpg')">
            <h2 class="text-6xl text-white py-20">
                Are you an artist?
            </h2>
        </div>
    </div>
</div>

<?php echo $__env->make('partials.exploreartist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div class="container mx-auto px-6 lg:px-20 py-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-800">Leonardo da Vinci</h2>
            <p class="text-gray-600 mt-2">Painter of the famous Mona Lisa.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-800">Vincent van Gogh</h2>
            <p class="text-gray-600 mt-2">Known for The Starry Night and expressive brushwork.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-800">Frida Kahlo</h2>
            <p class="text-gray-600 mt-2">Famous for her self-portraits and surrealist themes.</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/artists.blade.php ENDPATH**/ ?>
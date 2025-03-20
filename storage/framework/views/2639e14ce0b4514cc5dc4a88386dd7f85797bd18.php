

<?php $__env->startSection('title', 'Viva il Painted Voyage - Home'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<div x-data="{
        images: [
            '/images/backgroundpic.jpeg',
            '/images/backgroundpic2.jpeg',
            '/images/backgroundpic3.jpg'
        ],
        currentIndex: 0,
        transitioning: false,
        startSlideshow() {
            setInterval(() => {
                this.nextImage();
            }, 3500);
        },
        nextImage() {
            if (this.transitioning) return;
            this.transitioning = true;
            setTimeout(() => {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.transitioning = false;
            }, 1000);
        },
        goToImage(index) {
            if (this.transitioning || index === this.currentIndex) return;
            this.transitioning = true;
            setTimeout(() => {
                this.currentIndex = index;
                this.transitioning = false;
            }, 1000);
        }
    }"
    x-init="startSlideshow()"
    class="relative w-full h-screen overflow-hidden"
>

    <!-- Background Images -->
    <template x-for="(image, index) in images" :key="index">
        <div class="absolute inset-0 w-full h-full bg-cover bg-center transition-all duration-1000"
             x-bind:style="'background-image: url(' + image + '); background-size: cover; background-position: center;'"
             :class="index === currentIndex ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-full'">
        </div>
    </template>

    <!-- National Gallery Style Text Overlay -->
    <div class="absolute inset-0 flex flex-col justify-center text-left text-white px-8 md:px-16 lg:px-24 max-w-3xl">
        <p class="text-xl md:text-2xl font-sans tracking-wide uppercase opacity-80">
            The Crossing of Seven Seas
        </p>
        <h1 class="text-6xl md:text-8xl font-serif font-bold leading-tight">
            Embrace<br> Talents<br> Worldwide
        </h1>
        <a href="<?php echo e(route('blog.index')); ?>" class="text-lg md:text-2xl font-sans mt-4 underline hover:opacity-80 transition-opacity">
            New exhibitions - latest blogs
        </a>
    </div>

    <!-- Navigation Dots -->
    <div class="absolute right-5 top-1/2 transform -translate-y-1/2 flex flex-col space-y-3">
        <template x-for="(image, index) in images" :key="index">
            <div class="w-4 h-4 rounded-full border border-white cursor-pointer transition-all duration-300"
                 :class="index === currentIndex ? 'bg-white scale-125' : 'bg-transparent hover:bg-gray-400'"
                 @click="goToImage(index)">
            </div>
        </template>
    </div>
</div>

<!-- Full-width fix: Force collections partial to be outside any width-restricted parent -->
<div class="w-full max-w-none">
    <?php echo $__env->make('partials.explore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.collections', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/index.blade.php ENDPATH**/ ?>
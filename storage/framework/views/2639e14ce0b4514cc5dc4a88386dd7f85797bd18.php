

<?php $__env->startSection('title', 'Home - Paint Across The World'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section with Smooth Slide-Up Background Transition -->
<div x-data="{
        images: [
            '/images/backgroundpic.jpg',
            '/images/backgroundpic2.jpg',
            '/images/backgroundpic3.jpg'
        ],
        currentIndex: 0,
        transitioning: false,
        startSlideshow() {
            setInterval(() => {
                this.transitioning = true;
                setTimeout(() => {
                    this.currentIndex = (this.currentIndex + 1) % this.images.length;
                    this.transitioning = false;
                }, 1000); // Transition duration matches CSS
            }, 3000); // Image changes every 3 seconds
        }
    }"
    x-init="startSlideshow()"
    class="relative w-full h-screen overflow-hidden"
>

    <!-- Background Images (Layered for Smooth Transition) -->
    <template x-for="(image, index) in images" :key="index">
        <div class="absolute inset-0 w-full h-full bg-cover bg-center transition-all duration-1000"
             x-bind:style="'background-image: url(' + image + '); background-size: cover; background-position: center;'"
             :class="index === currentIndex ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-full'">
        </div>
    </template>

    <!-- Dark Overlay & Text -->
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center">
        <h1 class="text-5xl sm:text-7xl font-bold leading-tight">
            <span>Explore.</span><br>
            <span>Discover.</span><br>
            <span>Express Yourself.</span>
        </h1>
    </div>
    <!-- Navigation Dots (VERTICALLY ALIGNED, RIGHT SIDE) -->
    <div class="absolute right-5 top-1/2 transform -translate-y-1/2 flex flex-col space-y-3">
        <template x-for="(image, index) in images" :key="index">
            <div class="w-4 h-4 rounded-full border border-white cursor-pointer"
                 :class="index === currentIndex ? 'bg-white' : 'bg-transparent'">
            </div>
        </template>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/index.blade.php ENDPATH**/ ?>
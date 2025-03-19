@extends('layouts.app')

@section('title', 'Home - Paint Across The World')

@section('content')
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
                this.nextImage();
            }, 3000); // Change image every 3 seconds
        },
        nextImage() {
            if (this.transitioning) return;
            this.transitioning = true;
            setTimeout(() => {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.transitioning = false;
            }, 1000); // Transition duration matches CSS
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

    <!-- Background Images (Layered for Smooth Transition) -->
    <template x-for="(image, index) in images" :key="index">
        <div class="absolute inset-0 w-full h-full bg-cover bg-center transition-all duration-1000"
             x-bind:style="'background-image: url(' + image + '); background-size: cover; background-position: center;'"
             :class="index === currentIndex ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-full'">
        </div>
    </template>

    <!-- National Gallery Style Text Overlay (Left-Aligned & Larger Font) -->
    <div class="absolute inset-0 flex flex-col justify-center text-left text-white px-8 md:px-16 lg:px-24 max-w-3xl">
        
        <!-- Subtitle -->
        <p class="text-xl md:text-2xl font-sans tracking-wide uppercase opacity-80">
            The Crossing of Seven Seas
        </p>

        <!-- Main Name -->
        <h1 class="text-6xl md:text-8xl font-serif font-bold leading-tight">
            Embrace<br> Talents<br> Worldwide
        </h1>

        <!-- Bottom Call-to-Action -->
        <a href="#" class="text-lg md:text-2xl font-sans mt-4 underline hover:opacity-80 transition-opacity">
            New exhibitions - latest blogs
        </a>
    </div>

    <!-- Clickable Navigation Dots (VERTICALLY ALIGNED, RIGHT SIDE) -->
    <div class="absolute right-5 top-1/2 transform -translate-y-1/2 flex flex-col space-y-3">
        <template x-for="(image, index) in images" :key="index">
            <div class="w-4 h-4 rounded-full border border-white cursor-pointer transition-all duration-300"
                 :class="index === currentIndex ? 'bg-white scale-125' : 'bg-transparent hover:bg-gray-400'"
                 @click="goToImage(index)">
            </div>
        </template>
    </div>
</div>
@endsection

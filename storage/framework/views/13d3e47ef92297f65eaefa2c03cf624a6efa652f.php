

<?php $__env->startSection('title', 'Contact Us - Viva il Painted Voyage'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl w-full">
        <h1 class="text-3xl font-semibold text-gray-900 text-center mb-4">Contact Us</h1>
        <p class="text-gray-600 text-center mb-8">We'd love to hear from you! Fill out the form below, and we'll get back to you as soon as possible.</p>

        <form action="<?php echo e(route('contact.submit')); ?>" method="POST" class="space-y-6">
            <?php echo csrf_field(); ?>

            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700">Your Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full p-3 border border-gray-300 rounded-md focus:ring focus:ring-gray-300">
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700">Your Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-3 border border-gray-300 rounded-md focus:ring focus:ring-gray-300">
            </div>

            <!-- Message Field -->
            <div>
                <label for="message" class="block text-sm font-semibold text-gray-700">Message</label>
                <textarea id="message" name="message" rows="4" required
                    class="w-full p-3 border border-gray-300 rounded-md focus:ring focus:ring-gray-300"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-gray-900 text-white font-semibold py-3 rounded-md hover:bg-gray-800 transition">
                Send Message
            </button>
        </form>

        <!-- Contact Info -->
        <div class="text-center mt-6">
            <p class="text-gray-600">Or reach us directly at:</p>
            <p class="text-gray-900 font-semibold">info@paintedvoyage.com</p>
            <p class="text-gray-900 font-semibold">+1 234 567 890</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/contact.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="relative min-h-screen flex items-center justify-center bg-cover bg-center" 
     style="background-image: url('<?php echo e(asset('/images/backgroundpic5.jpeg')); ?>');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Dark overlay -->

    <div class="relative z-10 login-container shadow-lg p-8 max-w-sm w-full">
        <h2 class="text-2xl font-semibold text-gray-900 text-center mb-2">Create an Account</h2>
        <p class="text-sm text-gray-800 text-center mb-6">Join us today and start your journey.</p>

        <form class="space-y-4" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>

            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700">Full Name:</label>
                <input id="name" type="text" name="name"
                    class="w-full p-3 border rounded-md focus:ring focus:ring-orange-300 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('name')); ?>" required autofocus>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700">Email Address:</label>
                <input id="email" type="email" name="email"
                    class="w-full p-3 border rounded-md focus:ring focus:ring-orange-300 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('email')); ?>" required>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700">Password:</label>
                <input id="password" type="password" name="password"
                    class="w-full p-3 border rounded-md focus:ring focus:ring-orange-300 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    required>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Confirm Password Field -->
            <div>
                <label for="password-confirm" class="block text-sm font-semibold text-gray-700">Confirm Password:</label>
                <input id="password-confirm" type="password" name="password_confirmation"
                    class="w-full p-3 border rounded-md focus:ring focus:ring-orange-300" required>
            </div>

            <!-- Register Button -->
            <button type="submit" 
                class="w-full bg-gray-900 text-white font-semibold py-3 rounded-md hover:bg-gray-800 transition">
                Register
            </button>

            <!-- Login Link -->
            <?php if(Route::has('login')): ?>
                <p class="text-center text-sm text-gray-900 mt-4">
                    Already have an account? <a href="<?php echo e(route('login')); ?>" class="text-brown-600 hover:text-brown-800 font-semibold">Login</a>
                </p>
            <?php endif; ?>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/auth/register.blade.php ENDPATH**/ ?>
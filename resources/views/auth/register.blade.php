@extends('layouts.app')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-cover bg-center" 
     style="background-image: url('{{ asset('/images/backgroundpic5.jpeg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Dark overlay -->

    <div class="relative z-10 login-container shadow-lg p-8 max-w-sm w-full">
        <h2 class="text-2xl font-semibold text-gray-900 text-center mb-2">Create an Account</h2>
        <p class="text-sm text-gray-800 text-center mb-6">Join us today and start your journey.</p>

        <form class="space-y-4" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700">Full Name:</label>
                <input id="name" type="text" name="name"
                    class="w-full p-3 border rounded-md focus:ring focus:ring-orange-300 @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}" required autofocus>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700">Email Address:</label>
                <input id="email" type="email" name="email"
                    class="w-full p-3 border rounded-md focus:ring focus:ring-orange-300 @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700">Password:</label>
                <input id="password" type="password" name="password"
                    class="w-full p-3 border rounded-md focus:ring focus:ring-orange-300 @error('password') border-red-500 @enderror"
                    required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
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
            @if (Route::has('login'))
                <p class="text-center text-sm text-gray-900 mt-4">
                    Already have an account? <a href="{{ route('login') }}" class="text-brown-600 hover:text-brown-800 font-semibold">Login</a>
                </p>
            @endif
        </form>
    </div>
</div>
@endsection

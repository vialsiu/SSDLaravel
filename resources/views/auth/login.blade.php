@extends('layouts.app')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-cover bg-center" 
     style="background-image: url('{{ asset('/images/backgroundpic5.jpeg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Dark overlay -->

    <div class="relative z-10 login-container shadow-lg p-8 max-w-sm w-full">
        <h2 class="text-2xl font-semibold text-gray-900 text-center mb-2">Login to your account</h2>
        <p class="text-sm text-gray-800 text-center mb-6">Welcome! Please log in to continue.</p>

        <form class="space-y-4" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700">Email Address:</label>
                <input id="email" type="email" name="email" 
                    class="w-full p-3 border rounded-md focus:ring focus:ring-orange-300 @error('email') border-red-500 @enderror" 
                    value="{{ old('email') }}" required autofocus>
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

            <!-- Remember Me & Forgot Password -->
            <div class="flex justify-between items-center text-sm">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="text-orange-500 focus:ring-orange-300">
                    <span class="ml-2 text-gray-900">Remember Me</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-orange-600 hover:text-orange-800">Forgot Password?</a>
                @endif
            </div>

            <!-- Login Button -->
            <button type="submit" 
                class="w-full bg-gray-900 text-white font-semibold py-3 rounded-md hover:bg-gray-800 transition">
                Login
            </button>

            <!-- Register Link -->
            @if (Route::has('register'))
                <p class="text-center text-sm text-gray-900 mt-4">
                    Not registered? <a href="{{ route('register') }}" class="text-orange-600 hover:text-orange-800 font-semibold">Create an account</a>
                </p>
            @endif

            <!-- Demo User Information -->
            <div class="text-xs text-gray-900 text-center mt-6">
                <strong>Demo User:</strong><br>
                Email: <span class="font-mono text-gray-900">test@test.com</span><br>
                Password: <span class="font-mono text-gray-900">randomPassword</span>
            </div>
        </form>
    </div>
</div>
@endsection

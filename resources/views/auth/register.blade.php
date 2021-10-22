@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @auth
                <div class="mb-4 text-2xl text-center">User Registration</div>              
            @endauth
            @guest
                <div class="mb-4 text-2xl text-center">Admin Registration</div>
            @endguest
            <form action="{{ route('register') }}" method="post">
                @csrf
                {{-- Fullname --}}
                <div class="mb-3">
                    <label for="name" class="sr-only">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Complete Name" value="{{ old('name') }}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror">
                    {{-- error message --}}
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Username --}}
                <div class="mb-3">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror">
                    {{-- error message --}}
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- User type --}}
                <div class="mb-3">
                    <label for="user_type" class="sr-only">User Type</label>
                    @auth
                        <input type="hidden" name="user_type" id="user_type" value="office-staff">                 
                    @endauth
                    @guest
                        <input type="hidden" name="user_type" id="user_type" value="administrator">
                    @endguest
                </div>
                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror">
                    {{-- error message --}}
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Password --}}
                <div class="mb-3">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a Password" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">
                    {{-- error message --}}
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Confirm Password --}}
                <div class="mb-3">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" @error('password_confirmation') border-red-500 @enderror>
                </div>
                <div><button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button></div>
            </form>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background:#cccccc !important;height:650px">
    <section>
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                @auth
                    <div class="mb-4 text-2xl text-center">User Registration</div>              
                @endauth
                @guest
                    <div class="mb-4 text-2xl text-center"><h4>Admin Registration</h4></div>
                @endguest
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    {{-- Fullname --}}
                    <div class="mb-3">
                        <label for="name" class="sr-only">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Complete Name" value="{{ old('name') }}"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-danger @enderror">
                        {{-- error message --}}
                        @error('name')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Username --}}
                    <div class="mb-3">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username"  value="{{ old('username') }}"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-danger @enderror">
                        {{-- error message --}}
                        @error('username')
                            <div class="text-danger mt-2 text-sm">
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
                        <input type="email" name="email" id="email" placeholder="Email"value="{{ old('email') }}"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-danger @enderror">
                        {{-- error message --}}
                        @error('email')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Password --}}
                    <div class="mb-3">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Choose a Password"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">
                        {{-- error message --}}
                        @error('password')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Confirm Password --}}
                    <div class="mb-3">
                        <label for="password_confirmation" class="sr-only">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation')border-danger @enderror">
                    </div>
                    <hr class="my-4">
                    <div class="d-grid">
                        <div><button class="btn btn-primary btn-block btn-login text-uppercase fw-bold" >Register</button></div>
                    </div>  
                    <hr class="my-3">
                </form>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
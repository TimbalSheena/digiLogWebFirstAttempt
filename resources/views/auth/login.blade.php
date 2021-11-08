@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="background:#cccccc !important;height:650px">
        <section>
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
                <h4 class="card-title text-center mb-5 fw-light fs-5">Log In</h4>
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-black text-center">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                {{-- Email --}}
                <div class="form-floating mb-3">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email"  placeholder="Email" value="{{ old('email') }}"
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
                    <input type="password" name="password" id="password" placeholder="Password" 
                    class="form-control bg-gray border-2 w-full p-4 rounded-lg @error('password') border-danger @enderror">
                    {{-- error message --}}
                    @error('password')
                        <div class="text-danger mt-2 text-sm ">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Remember me --}}
                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember"  class="form-check-input ml-2">
                        <label for="remember" class="form-check-label ml-4 ">Remember me</label>
                    </div>
                </div>
                <hr class="my-3">
                <div class="d-grid">
                    <button class="btn btn-primary btn-block btn-login text-uppercase fw-bold">Login</button>
                </div>
                <hr class="my-3">
            </form>
            </div>
            </div>
        </div>
        </div>
        </section>
    </div>
@endsection
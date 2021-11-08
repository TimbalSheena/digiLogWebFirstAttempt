@include('includes.head')

<div class="jumbotron container mt-5">
    <div class="row container">
    <a href="{{ route('admin') }}" class="btn btn-default" ><span class="fas fa-arrow-left mr-2"></span >Back</a>
    <h3 class="display-6 mt-1">Data Registration</h>
    </div>
    <div class="mb-4"></div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mt-4">
                        <li class="btn-block"><a href="{{ route('reg_data') }}"class="btn btn-primary mb-3 btn-block active"  >Security Personnel</a></li>
                        <li class="btn-block"><a href="{{ route('reg_staff') }}"class="btn btn-primary  mb-3 btn-block"  >Office Staff</a></li>
                        <li class="btn-block"><a href="{{ route('reg_office') }}"class="btn btn-primary  mb-3 btn-block" >Office</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card container">
                <div class="card-body">
                <form action="#" method="#">
                    @csrf
                    {{-- Firstname --}}
                    <div class="mb-4 mt-4">
                        <label class="form-label" for="customFile">Upload Profile Picture</label>
                        <input type="file" class="form-control" id="customFile" />
                    </div>
                    {{-- Firstname --}}
                    <div class="mb-3 mt-4">
                        <input type="text" name="firstname" id="firstname" placeholder="First Name" value="{{ old('firstname') }}"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('firstname') border-danger @enderror">
                        {{-- error message --}}
                        @error('name')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Lastname --}}
                    <div class="mb-3">
                        <input type="text" name="lastname" id="lastname" placeholder="Last Name"  value="{{ old('lastname') }}"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('lastname') border-danger @enderror">
                        {{-- error message --}}
                        @error('username')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Contact Number --}}
                    <div class="mb-3">
                        <input type="contact" name="contact" id="contact" placeholder="Contact Number" value="{{ old('email') }}"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-danger @enderror">
                        {{-- error message --}}
                        @error('email')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Address--}}
                    <div class="mb-3">
                        <input type="address" name="address" id="address" placeholder="Complete Address"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('address') border-red-500 @enderror">
                        {{-- error message --}}
                        @error('password')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Security ID --}}
                    <div class="mb-3">
                        <input type="security" name="security" id="security" placeholder="Security ID" class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation')border-danger @enderror">
                    </div>
                    <hr class="my-4">
                    <div class="d-grid">
                        <div><button class="btn btn-success btn-login text-uppercase fw-bold" >Register</button></div>
                    </div>  
                    <hr class="my-3">
                </form>
                </div>  
            </div>
        </div>
    </div>
</div>
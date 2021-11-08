@include('includes.head')

<div class="jumbotron container mt-5">
    <div class="row container">
        <a href="{{ route('admin') }}" class="btn btn-default" ><span class="fas fa-arrow-left mr-2"></span >Back</a>
        <h3 class="display-6 mt-1">Office Registration</h3>
    </div>
    <div class="mb-4"></div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                <ul class="nav nav-tabs mt-4">
                        <li class="btn-block"><a href="{{ route('reg_data') }}"class="btn btn-primary mb-3 btn-block"  >Security Personnel</a></li>
                        <li class="btn-block"><a href="{{ route('reg_staff') }}"class="btn btn-primary  mb-3 btn-block"  >Office Staff</a></li>
                        <li class="btn-block"><a href="{{ route('reg_office') }}"class="btn btn-primary  mb-3 btn-block active" >Office</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card container">
                <div class="card-body">
                <form action="#" method="#">
                    @csrf
                    {{-- Building Number--}}
                    <div class="mb-3 mt-4">
                        <input type="text" name="buidnum" id="buidnum" placeholder="Building Number" value="{{ old('buidnum') }}"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('buidnum') border-danger @enderror">
                        {{-- error message --}}
                        @error('name')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Building Name --}}
                    <div class="mb-3">
                        <input type="text" name="buildname" id="buildname" placeholder="Building Name"  value="{{ old('buildname') }}"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('buildname') border-danger @enderror">
                        {{-- error message --}}
                        @error('username')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Office --}}
                    <div class="mb-3">
                        <input type="contact" name="office" id="office" placeholder="Office" value="{{ old('office') }}"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('office') border-danger @enderror">
                        {{-- error message --}}
                        @error('email')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <hr class="my-4">
                    <div class="d-grid">
                        <div><button class="btn btn-success btn-login text-uppercase fw-bold" >Add Office</button></div>
                    </div>  
                    <hr class="my-3">
                </form>
                </div>  
            </div>
        </div>
    </div>
</div>
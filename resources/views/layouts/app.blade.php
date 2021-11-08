@include('includes.head')

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="{{ route('home') }}" class="navbar-brand ">USTP Digital Logbook</a>
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                @auth
                @if (auth()->user()->user_type == "administrator")
                    <a href="{{ route('register') }}"class="nav-item nav-link" >Register User</a>
                @endif
                </li>
                <li class="nav-item">
                    <a href="" class="nav-item nav-link" >{{ Auth::user()->name }}</a>
                </li>
            </ul>
            
            <form action="{{ route('logout') }}" method="post" class="nav-item nav-link" >
                @csrf
                <button type="submit" class="btn btn-light">Logout</button>
            </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="p-3 text-white">Login</a>
                    <a href="{{ route('register') }}" class="p-3 text-white">Register</a>
                @endguest  
                </div>
            </div>
        </nav>
        @yield('content')
    </body>
</html>
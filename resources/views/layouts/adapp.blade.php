@include('includes.head')

<body class="bg-gray-300">
    <nav class="p-6 bg-gray-800 flex justify-between mb-6">  
          @show
            <ul class="flex items-center">
                @auth
                    @if (auth()->user()->user_type == "administrator")
                        <li><a href="{{ route('register') }}" class="p-3 text-white">Register User</a></li>
                    @endif
                    <li><a href="" class="p-3 text-white">{{ Auth::user()->name }}</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit" class="text-white">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li><a href="{{ route('login') }}" class="p-3 text-white">Login</a></li>
                    <li><a href="{{ route('register') }}" class="p-3 text-white">Register</a></li>
                @endguest
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
@include('includes.head')
<body>
  
</body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="{{ route('admin') }}" class="p-3 text-white">Welcome {{ Auth::user()->name }}</a>
        <div class="navbar-nav ml-auto">
            <form action="{{ route('logout') }}" method="post" class="nav-item nav-link" >

                <button type="submit" class="btn btn-light">Logout</button>
            </form>
        </div>
    </nav>
</body>
</html>
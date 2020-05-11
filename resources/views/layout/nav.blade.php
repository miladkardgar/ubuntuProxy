<h3 class="masthead-brand">Cover</h3>
<nav class="nav nav-masthead justify-content-center">
    <a class="nav-link active" href="#">Home</a>
    @if (Route::has('login'))
        @auth
            <a class="nav-link" href="{{ url('/home') }}">Home</a>
        @else
            <a class="nav-link" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    @endif
    <a class="nav-link" href="{{route('addAccount')}}">Add Account</a>
</nav>

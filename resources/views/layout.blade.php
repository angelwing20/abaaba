<ul>
    @auth
    <li>
        <span>Welcome {{auth()->user()->name }}</span>
    </li>
    <li>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </li>

    @else
    
    <li>
        <a href="{{ route('register') }}">Register</a>
    </li>
    <li>
        <a href="{{ route('login') }}">Login</a>
    </li>
    @endauth
</ul>
@yield('content')
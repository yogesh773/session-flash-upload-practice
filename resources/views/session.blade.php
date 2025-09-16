<div>
    <h1>Profile</h1>

    @if(session('session'))
        <h1>Welcome, {{ session('session') }}</h1>
    @else
        <h1>No user found</h1>
    @endif 

    <a href="{{ url('logout') }}">Logout</a>

</div>

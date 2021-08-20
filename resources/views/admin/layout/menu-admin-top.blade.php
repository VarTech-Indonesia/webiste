@section('menu-admin-top')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/admin/home') }}" class="nav-link">Home</a>
    </li>
    @auth
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin-logout')}}" class="nav-link">Logout</a>
    </li>
    @else
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin-login') }}" class="nav-link">Login</a>
    </li>
    @endauth
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact Us</a>
    </li>
</ul>
@stop
@section('menu-admin-left')
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{route('admin-home')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Dashboard </p>
            </a>
        </li>
        @auth
        <li class="nav-item">
            <a href="{{route('user-admin.index')}}" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p> User </p>
            </a>
        </li>
        @endauth
    </ul>
</nav>
@stop
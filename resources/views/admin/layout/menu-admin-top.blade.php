@section('menu-admin-top')
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
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
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
            <form class="form-inline">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                </button>
                </div>
            </div>
            </form>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="{{asset('storage/images-front/vartech.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
            </div>
            <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="{{asset('storage/images-front/vartech.png')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
            </div>
            <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="{{asset('storage/images-front/vartech.png')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
            </div>
            <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
        </li>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('storage/'.Auth::user()->image)}}" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header bg-info">
                <img src="{{asset('storage/'.Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">

                <p>
                    {{Auth::user()->name}} 
                    <small>Member Since  {{Auth::user()->created_at}}</small>
                </p>
                </li>
                <li class="user-body">
                <div class="row">
                    <div class="col text-center">
                    <a href="#"> {{Auth::user()->email}}</a>
                    </div>
                </div>
                </li>
                <li class="user-footer">
                <a href="#" class="btn  btn-info"><i class="fa fa-bell"></i> Profile</a>
                <a href="{{route('admin-logout')}}" class="btn btn-danger float-right">Sign out</a>
                </li>
            </ul>
        </li>
    </ul>
    @else
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin-login') }}" class="nav-link">Login</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact Us</a>
        </li>
    </ul>
    @endauth
</nav>
@stop
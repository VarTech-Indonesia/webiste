@section('menu-admin-left')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link">
    <img src="{{asset('storage/images-front/vartech.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">VarTech - Indonesia</span>
    </a>
    <div class="sidebar">
        <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
            </div>
        </div>
        </div>
        @auth
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <img src="{{asset('storage/images-front/business-report.svg')}}" width="25px" >
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user-admin.index')}}" class="nav-link">
                        <img src="{{asset('storage/images-front/profile.svg')}}" width="25px" >
                        <p>
                            User
                            <span class="badge badge-info right">
                                2
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img src="{{asset('storage/images-front/checklist.svg')}}" width="25px" >
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('page-category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/page-admin') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pages</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img src="{{asset('storage/images-front/checklist.svg')}}" width="25px" >
                        <p>
                            Posts
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Posts</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('user-admin.index')}}" class="nav-link">
                        <img src="{{asset('storage/images-front/slider.svg')}}" width="25px" >
                        <p>
                            Slider
                            <span class="badge badge-info right">
                                2
                            </span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        @endauth
    </div>
</aside>
@stop
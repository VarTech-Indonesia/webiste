<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky sticky-dark">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="#">
            <img src="{{asset('storage/images-front/VarTech.png')}}" alt="" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">{{ __('lang.Tentang Kami') }}</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">Layanan</a>
                </li>
                <li class="nav-item">
                    <a href="#portofolio" class="nav-link">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a href="#clients" class="nav-link">Pengguna</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                    <a href="lang/id" class="nav-link"><img src="{{asset('storage/images-front/id.png')}}" width="18px"></a>
                </li>
                <li class="nav-item">
                    <a href="lang/en" class="nav-link"><img src="{{asset('storage/images-front/us.png')}}" width="18px"></a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- Navbar End -->
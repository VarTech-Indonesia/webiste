<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $beranda->meta_description }}" />
    <meta name="keywords" content="{{ $beranda->meta_keywords }}" />
    <meta content="VarTech" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('storage/images-front/vartech.ico')}}">
    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('storage/css/materialdesignicons.min.css')}}" />
    <!-- Pixeden Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('storage/css/pe-icon-7.css')}}" />
    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('storage/css/magnific-popup.css')}}" />
    <!--Slider-->
    <link rel="stylesheet" href="{{asset('storage/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/css/owl.transitions.css')}}" />
    <!-- css -->
    <link href="{{asset('storage/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('storage/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('storage/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- AOS -->
    <link href="{{asset('storage/css/aos.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
        <div id="status">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div> -->
    <!-- Loader End-->

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

    <!-- Home Start -->
    <!-- <section class="section home-5-bg" id="home"> -->
    <section class="section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="mt-40 text-center home-5-content">
                                <div class="home-icon mb-4">
                                    {{-- <i class="mdi mdi-pinwheel mdi-spin text-white h1">VarTech Indonesia</i> --}}
                                </div>
                                <h1 class="text-white font-weight-normal home-5-title mb-0"></h1>
                                <p class="text-white-70 mt-4 f-15 mb-0">Information Technology and Printing Service Provider</p>
                                <div class="mt-5">
                                    {{-- <button type="submit" class="btn btn-custom">Lihat Lebih Lanjut >></button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home End -->

    <!-- About Start -->
    <section class="section bg-about bg-light-about bg-light" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading mb-5">
                        <h3 class="text-dark mb-1 font-weight-light text-uppercase">VarTech Indonesia</h3>
                        <div class="title-border-simple position-relative"></div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="flip-left">
                <div class="col-lg-3">
                    <div class="about-box about-light text-center p-3">
                        <div class="about-icon mb-4">
                            <i class="mdi mdi-nature"></i>
                        </div>
                        <h4 class="font-weight-light">
                            <a href="#" class="text-dark">
                                <p class="gsap-text-profesional"></p>
                            </a>
                        </h4>
                        <p class="text-muted f-14"></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="about-box about-light text-center p-3">
                        <div class="about-icon mb-4">
                            <i class="mdi mdi-lightbulb"></i>
                        </div>
                        <h4 class="font-weight-light">
                            <a href="#" class="text-dark">
                                <p class="gsap-text-terpercaya"></p>
                            </a>
                        </h4>
                        <p class="text-muted f-14"></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="about-box about-light text-center p-3">
                        <div class="about-icon mb-4">
                            <i class="mdi mdi-projector-screen"></i>
                        </div>
                        <h4 class="font-weight-light">
                            <a href="#" class="text-dark">
                                <p class="gsap-text-adaftif"></p>
                            </a>
                        </h4>
                        <p class="text-muted f-14"></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="about-box about-light text-center p-3">
                        <div class="about-icon mb-4">
                            <i class="mdi mdi-lightbulb"></i>
                        </div>
                        <h4 class="font-weight-light">
                            <a href="#" class="text-dark">
                                <p class="gsap-text-inovatif"></p>
                            </a>
                        </h4>
                        <p class="text-muted f-14"></p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
                    <div class="about-desc">
                        <h3 class="text-dark mb-3 font-weight-light">{{ $beranda->title }}</h3>
                        <p class="text-muted f-15">{!! $beranda->excerpt !!}</p>
                        <div class="about-by">
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="about-img light-img position-relative p-4">
                        <img src="{{asset('storage/'.$beranda->image)}}" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Service Start -->
    <section class="section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="title-heading mb-5">
                        <h3 class="text-dark mb-1 font-weight-light text-uppercase">Layanan Kami</h3>
                        <div class="title-border-simple position-relative"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($layanan as $item_layanan)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                    <div class=" service-box rounded mt-4 p-4">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-database"></i>
                        </div>
                        <div class="services-desc">
                            <div class="service-title mb-2 position-relative">
                                <h5 class="font-weight-normal mb-3"><a href="#" class="text-dark">{{ $item_layanan->title }}</a></h5>
                            </div>
                            <p class="text-muted mb-3 f-14">{!! $item_layanan->excerpt !!}</p>
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                    <div class=" service-box rounded mt-4 p-4">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-database"></i>
                        </div>
                        <div class="services-desc">
                            <div class="service-title mb-2 position-relative">
                                <h5 class="font-weight-normal mb-3"><a href="#" class="text-dark">Pembuatan Website</a></h5>
                            </div>
                            <p class="text-muted mb-3 f-14">Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.</p>
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="service-box rounded mt-4 p-4">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-palette"></i>
                        </div>
                        <div class="services-desc">
                            <div class="service-title mb-2 position-relative">
                                <h5 class="font-weight-normal mb-3"><a href="#" class="text-dark">Sistem Informasi Akademik</a></h5>
                            </div>
                            <p class="text-muted mb-3 f-14">Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.</p>
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="service-box rounded mt-4 p-4">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-finance"></i>
                        </div>
                        <div class="services-desc">
                            <div class="service-title mb-2 position-relative">
                                <h5 class="font-weight-normal mb-3"><a href="#" class="text-dark">Sistem Informasi Pemerintahan (e-government)</a></h5>
                            </div>
                            <p class="text-muted mb-3 f-14">Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.</p>
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box rounded mt-4 p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-yin-yang"></i>
                        </div>
                        <div class="services-desc">
                            <div class="service-title mb-2 position-relative">
                                <h5 class="font-weight-normal mb-3"><a href="#" class="text-dark">Sistem Informasi Medis</a></h5>
                            </div>
                            <p class="text-muted mb-3 f-14">Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.</p>
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box rounded mt-4 p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-apple-keyboard-command"></i>
                        </div>
                        <div class="services-desc">
                            <div class="service-title mb-2 position-relative">
                                <h5 class="font-weight-normal mb-3"><a href="#" class="text-dark">Sistem Informasi Sekolah</a></h5>
                            </div>
                            <p class="text-muted mb-3 f-14">Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.</p>
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box rounded mt-4 p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-apple-keyboard-command"></i>
                        </div>
                        <div class="services-desc">
                            <div class="service-title mb-2 position-relative">
                                <h5 class="font-weight-normal mb-3"><a href="#" class="text-dark">Digital Marketing</a></h5>
                            </div>
                            <p class="text-muted mb-3 f-14">Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.</p>
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box rounded mt-4 p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-hexagon-multiple"></i>
                        </div>
                        <div class="services-desc">
                            <div class="service-title mb-2 position-relative">
                                <h5 class="font-weight-normal mb-3"><a href="#" class="text-dark">Multimedia, Desain dan Animasi</a></h5>
                            </div>
                            <p class="text-muted mb-3 f-14">Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.</p>
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box rounded mt-4 p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-hexagon-multiple"></i>
                        </div>
                        <div class="services-desc">
                            <div class="service-title mb-2 position-relative">
                                <h5 class="font-weight-normal mb-3"><a href="#" class="text-dark">Printing dan Percetakan Umum</a></h5>
                            </div>
                            <p class="text-muted mb-3 f-14">Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.</p>
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box rounded mt-4 p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-hexagon-multiple"></i>
                        </div>
                        <div class="services-desc">
                            <div class="service-title mb-2 position-relative">
                                <h5 class="font-weight-normal mb-3"><a href="#" class="text-dark">Pengadaan Komputer, Jaringan dan Server</a></h5>
                            </div>
                            <p class="text-muted mb-3 f-14">Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.</p>
                            <p class="mb-0 text-uppercase f-13"><a href="#" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Portofolio Start -->
    <section class="section" id="portofolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading mb-5" data-aos="fade-right" data-aos-duration="2000">
                        <h3 class="text-dark mb-1 font-weight-light text-uppercase">Portofolio</h3>
                        <div class="title-border-simple position-relative"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($portofolio as $item_portofolio)
                <div class="col-lg-4">
                    <div class="blog position-relative">
                        <div class="blog-img position-relative mt-4" data-aos="zoom-in" data-aos-duration="2000">
                            <div class="blog-date">
                                <p class="mb-0 font-weight-light text-white f-15">{{ $item_portofolio->title }}</p>
                            </div>
                            <img src="{{asset('storage/'.$item_portofolio->image)}}" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="position-relative">
                            <div class="blog-content text-center bg-white p-4" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000">
                                <p class="text-uppercase f-13 mb-2 text-muted">{{ $item_portofolio->title }}</p>
                                <h5 class="font-weight-normal f-18"><a href="#" class="text-dark">{{ $item_portofolio->title }}</a></h5>
                                <p class="text-muted f-14">
                                    {!! $item_portofolio->excerpt !!}
                                </p>
                                <div class="read-more">
                                    <a href="#" class=" text-primary f-15">Read more<i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-4">
                    <div class="blog position-relative">
                        <div class="blog-img position-relative mt-4" data-aos="zoom-in" data-aos-duration="2000">
                            <div class="blog-date">
                                <p class="mb-0 font-weight-light text-white f-15">Website</p>
                            </div>
                            <img src="{{asset('storage/images/blog/img-2.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="position-relative">
                            <div class="blog-content text-center bg-white p-4" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000">
                                <p class="text-uppercase f-13 mb-2 text-muted">web developer</p>
                                <h5 class="font-weight-normal f-18"><a href="#" class="text-dark">At vero eos accusamus</a></h5>
                                <p class="text-muted f-14">
                                    Et harum quidem rerum it facilis est et expedita distinctio a libero tempore cumsoluta.
                                </p>
                                <div class="read-more">
                                    <a href="#" class=" text-primary f-15">Read more<i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog position-relative">
                        <div class="blog-img position-relative mt-4" data-aos="zoom-in" data-aos-duration="2000">
                            <div class="blog-date">
                                <p class="mb-0 font-weight-light text-white f-15">PPDB Online</p>
                            </div>
                            <img src="{{asset('storage/images/blog/img-3.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="position-relative">
                            <div class="blog-content text-center bg-white p-4" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000">
                                <p class="text-uppercase f-13 mb-2 text-muted">web designer</p>
                                <h5 class="font-weight-normal f-18"><a href="#" class="text-dark">Et harum quidem rerum</a></h5>
                                <p class="text-muted f-14">
                                    Temporibus autemes quibusdam et aut offici debitis rerum necessitatibus recusandae.
                                </p>
                                <div class="read-more">
                                    <a href="#" class=" text-primary f-15">Read more<i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Portofolio End -->

    <!-- Client Start -->
    <!-- <section class="section bg-clients" id="clients"> -->
    <section class="section" id="clients">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading mb-5" data-aos="fade-right" data-aos-duration="1000">
                        <h3 class="text-white mb-1 font-weight-light text-uppercase">Testimoni Pengguna</h3>
                        <div class="title-border-color position-relative"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="owl-demo">
                    @foreach ($testimoni as $item_testimoni)
                    <div class="item">
                        <div class="testi-content">
                            <div class="testi-box mt-4">
                                <h4 class="text-white mb-3 font-weight-light">{{ $item_testimoni->title }}</h4>
                                <p class="text-white-70 font-weight-light mb-0 f-15">{!! $item_testimoni->excerpt !!}</p>
                                <div class="quote-img">
                                    <img src="{{asset('storage/images/quote-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="float-right ml-3">
                                    <div class="client-img">
                                        <img src="{{ asset('storage/'.$item_testimoni->image )}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                </div>
                                <div class="clients-name text-right pt-3">
                                    <h6 class="text-white font-weight-normal position-relative f-17 mb-0"><span class="after-border"></span>{{ $item_testimoni->title }}</h6>
                                    <p class="text-white-70 f-13 mb-0">{{ $item_testimoni->title }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="item">
                        <div class="testi-content">
                            <div class="testi-box mt-4">
                                <h4 class="text-white mb-3 font-weight-light">"Web Development"</h4>
                                <p class="text-white-70 font-weight-light mb-0 f-15">At vero eos et accusamus et iusto odio dignissimos that site ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores quas molestias excepturi cupiditate non.</p>
                                <div class="quote-img">
                                    <img src="{{asset('storage/images/quote-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="float-right ml-3">
                                    <div class="client-img">
                                        <img src="{{asset('storage/images/clients/img-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                </div>
                                <div class="clients-name text-right pt-3">
                                    <h6 class="text-white font-weight-normal position-relative f-17 mb-0"><span class="after-border"></span> Jonas Davis</h6>
                                    <p class="text-white-70 f-13 mb-0">Web Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-content">
                            <div class="testi-box mt-4">
                                <h4 class="text-white mb-3 font-weight-light">"Graphic Developer"</h4>
                                <p class="text-white-70 font-weight-light mb-0 f-15">At vero eos et accusamus et iusto odio dignissimos that site ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores quas molestias excepturi cupiditate non.</p>
                                <div class="quote-img">
                                    <img src="{{asset('storage/images/quote-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="float-right ml-3">
                                    <div class="client-img">
                                        <img src="{{asset('storage/images/clients/img-3.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                </div>
                                <div class="clients-name text-right pt-3">
                                    <h6 class="text-white font-weight-normal position-relative f-17 mb-0"><span class="after-border"></span> Mary Cantu</h6>
                                    <p class="text-white-70 f-13 mb-0">PHP Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-content">
                            <div class="testi-box mt-4">
                                <h4 class="text-white mb-3 font-weight-light">"Best Designer"</h4>
                                <p class="text-white-70 font-weight-light mb-0 f-15">At vero eos et accusamus et iusto odio dignissimos that site ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores quas molestias excepturi cupiditate non.</p>
                                <div class="quote-img">
                                    <img src="{{asset('storage/images/quote-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="float-right ml-3">
                                    <div class="client-img">
                                        <img src="{{asset('storage/images/clients/img-4.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                </div>
                                <div class="clients-name text-right pt-3">
                                    <h6 class="text-white font-weight-normal position-relative f-17 mb-0"><span class="after-border"></span> Rodney Grey</h6>
                                    <p class="text-white-70 f-13 mb-0">Graphic Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-content">
                            <div class="testi-box mt-4">
                                <h4 class="text-white mb-3 font-weight-light">"Senior Management"</h4>
                                <p class="text-white-70 font-weight-light mb-0 f-15">At vero eos et accusamus et iusto odio dignissimos that site ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores quas molestias excepturi cupiditate non.</p>
                                <div class="quote-img">
                                    <img src="{{asset('storage/images/quote-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="float-right ml-3">
                                    <div class="client-img">
                                        <img src="{{asset('storage/images/clients/img-5.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                </div>
                                <div class="clients-name text-right pt-3">
                                    <h6 class="text-white font-weight-normal position-relative f-17 mb-0"><span class="after-border"></span> Shana Esposito</h6>
                                    <p class="text-white-70 f-13 mb-0">Web Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-content">
                            <div class="testi-box mt-4">
                                <h4 class="text-white mb-3 font-weight-light">"Graphic Developer"</h4>
                                <p class="text-white-70 font-weight-light mb-0 f-15">At vero eos et accusamus et iusto odio dignissimos that site ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores quas molestias excepturi cupiditate non.</p>
                                <div class="quote-img">
                                    <img src="{{asset('storage/images/quote-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="float-right ml-3">
                                    <div class="client-img">
                                        <img src="{{asset('storage/images/clients/img-6.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                </div>
                                <div class="clients-name text-right pt-3">
                                    <h6 class="text-white font-weight-normal position-relative f-17 mb-0"><span class="after-border"></span> Linda Sanor</h6>
                                    <p class="text-white-70 f-13 mb-0">UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client End -->

    <!-- Contact US Start -->
    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading mb-5">
                        <h3 class="text-dark mb-1 font-weight-light text-uppercase">Konsultasi Gratis</h3>
                        <div class="title-border-simple position-relative"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-box p-5">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <div class="custom-form p-3">
                                    <div id="message"></div>
                                    <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group app-label">
                                                    <input name="name" id="name" type="text" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group app-label">
                                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group app-label">
                                                    <input type="text" class="form-control" id="subject" placeholder="Subject" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group app-label">
                                                    <textarea name="comments" id="comments" rows="5" class="form-control" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Send Message">
                                                <div id="simple-msg"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="contact-cantent p-3">
                                    <div class="contact-details">
                                        <div class="float-left contact-icon mr-3 mt-2">
                                            <i class="mdi mdi-headphones text-muted h5"></i>
                                        </div>
                                        <div class="app-contact-desc text-muted pt-1">
                                            <p class="mb-0 info-title f-13">Telepon</p>
                                            <p class="mb-0 f-13">022-</p>
                                        </div>
                                    </div>
                                    <div class="contact-details mt-2">
                                        <div class="float-left contact-icon mr-3 mt-2">
                                            <i class="mdi mdi-email-outline text-muted h5"></i>
                                        </div>
                                        <div class="app-contact-desc text-muted pt-1">
                                            <p class="mb-0 info-title f-13">Email :</p>
                                            <p class="mb-0 f-13"><a href="" class="text-muted">office@vartech.co.id</a></p>
                                        </div>
                                    </div>
                                    <div class="contact-details mt-2">
                                        <div class="float-left contact-icon mr-3 mt-2">
                                            <i class="mdi mdi-map-marker text-muted h5"></i>
                                        </div>
                                        <div class="app-contact-desc text-muted pt-1">
                                            <p class="mb-0 info-title f-13">Front Office :</p>
                                            <p class="mb-0 f-13"><a href="" class="text-muted">Jl. Bagusrangin 1a/50 Kota Bandung Indonesia</a></p>
                                        </div>
                                    </div>
                                    <div class="follow mt-4">
                                        <h4 class="text-dark mb-3">Follow</h4>
                                        <ul class="follow-icon list-inline mt-32 mb-0">
                                            <li class="list-inline-item f-15"><a href="#" class="social-icon text-muted"><i class="mdi mdi-facebook"></i></a></li>
                                            <li class="list-inline-item f-15"><a href="#" class="social-icon text-muted"><i class="mdi mdi-twitter"></i></a></li>
                                            <li class="list-inline-item f-15"><a href="#" class="social-icon text-muted"><i class="mdi mdi-google-plus"></i></a></li>
                                            <li class="list-inline-item f-15"><a href="#" class="social-icon text-muted"><i class="mdi mdi-linkedin"></i></a></li>
                                            <li class="list-inline-item f-15"><a href="#" class="social-icon text-muted"><i class="mdi mdi-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us End -->

    <!-- Footer Start -->
    <section class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-5">
                        <p class="text-uppercase text-dark footer-title mb-4">Tentang Kami</p>
                        <p class="text-muted f-14">
                            VarTech Indonesia berkomitmen secara Profesional, Terpercaya,
                            Adaptif dan Inovatif dalam mengerjakan semua kebutuhan konsumen yang dipercayakan kepada kami
                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-5">
                                <p class="text-uppercase text-dark footer-title mb-4">Organisasi Perusahaan</p>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li class="f-14"><a href="" class="text-muted">Visi, Misi dan Tujuan</a></li>
                                    <li class="f-14"><a href="" class="text-muted">Nilai-nilai Perusahaan</a></li>
                                    <li class="f-14"><a href="" class="text-muted">Sumber Daya</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-5">
                                <p class="text-uppercase text-dark footer-title mb-4">Pelayanan</p>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li class="f-14"><a href="" class="text-muted">Cloud Server</a></li>
                                    <li class="f-14"><a href="" class="text-muted">Web dan Aplikasi</a></li>
                                    <li class="f-14"><a href="" class="text-muted">Digital Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-5">
                                <p class="text-uppercase text-dark footer-title mb-4">Perjanjian dan Kerjasama</p>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li class="f-14"><a href="" class="text-muted">Syarat dan Ketentuan</a></li>
                                    <li class="f-14"><a href="" class="text-muted">Kebijakan</a></li>
                                    <li class="f-14"><a href="" class="text-muted">Pelanggan</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Footer Alt Start -->
    <section class="footer-alt bg-dark pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="copyright text-white f-14 font-weight-light mb-0">{{date('Y')}} © VarTech Indonesia</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Alt End -->

    <script src="{{asset('storage/js/jquery.min.js')}}"></script>
    <script src="{{asset('storage/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('storage/js/scrollspy.min.js')}}"></script>
    <script src="{{asset('storage/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('storage/js/anime.min.js')}}"></script>
    <!-- carousel -->
    <script src="{{asset('storage/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('storage/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('storage/js/magnificpopup.int.js')}}"></script>
    <!--Particles JS-->
    <script src="{{asset('storage/js/particles.js')}}"></script>
    <script src="{{asset('storage/js/particles.app.js')}}"></script>
    <!-- Main Js -->
    <script src="{{asset('storage/js/app.js')}}"></script>
    <script>
        //owlCarousel
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items: 2,
                itemsDesktop: [1199, 2],
                itemsDesktopSmall: [979, 2]

            });
        });
    </script>
    <!--AOS-->
    <script src="{{asset('storage/js/aos.js')}}"></script>
    <script>
        AOS.init({
            mirror: true, // whether elements should animate out while scrolling past them
        });
    </script>

    <!-- GSP -->
    {{-- https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js --}}
    <script src="{{asset('storage/js/gsap.min.js')}}"></script>
    {{-- https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/TextPlugin.min.js --}}
    <script src="{{asset('storage/js/TextPlugin.min.js')}}"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        // gsap.from('.navbar', {
        //     duration: 1.5,
        //     y: '-300%',
        //     opacity: 0,
        //     ease: 'bounce'
        // });
        gsap.to(".gsap-text-profesional", {
            duration: 1,
            delay: 1,
            text: "Profesional"
        })
        gsap.to(".gsap-text-terpercaya", {
            duration: 1,
            delay: 2,
            text: "Terpercaya"
        })
        gsap.to(".gsap-text-adaftif", {
            duration: 1,
            delay: 3,
            text: "Adaftif"
        })
        gsap.to(".gsap-text-inovatif", {
            duration: 1,
            delay: 4,
            text: "Inovatif"
        })
    </script>
</body>

</html>
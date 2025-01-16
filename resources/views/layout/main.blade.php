<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{{ $data->meta_keywords }}" />
    <meta name="description" content="{{ $data->meta_description }}" />
    <meta content="VarTech" name="VarTech Indonesia" />
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
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky sticky-dark">
        <div class="container">
            <a class="navbar-brand logo" href="#">
                <img src="{{asset('storage/images-front/VarTech.png')}}" alt="" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="/" class="nav-link">Home</a>
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
                        <a href="/lang/id" class="nav-link"><img src="{{asset('storage/images-front/id.png')}}" width="18px"></a>
                    </li>
                    <li class="nav-item">
                        <a href="/lang/en" class="nav-link"><img src="{{asset('storage/images-front/us.png')}}" width="18px"></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Jumbotron Start -->
    <section class="section home-3-bg" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="mt-40 home-3-content">
                                <h1 class="text-white font-weight-light home-7-title mb-0"><span class="element" data-elements="VarTech Indonesia, Professional, Terpercaya, Adaptif,  Inovatif, Solusi Kebutuhan Teknologi Informasi dan Percetakan"></span></h1>
                                <p class="text-white-70 mt-4 f-15 mb-0">
                                    VarTech Indonesia berkomitmen untuk tetap secara profesional berfokus pada pemberian layanan teknologi informasi dan percetakan
                                </p>
                                <div class="mt-5">
                                    {{-- <a href="#" class="btn btn-custom mr-3">Learn More</a>
                                    <a href="http://vimeo.com/99025203" class="video-play-icon text-white"><i class="mdi mdi-play play-icon-circle text-white mr-2"></i> 
                                        <span class="f-14">Watch Video!</span>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mt-40 home-3-content position-relative p-4">
                                <img src="{{asset('storage/images/home-2-img.png')}}" alt="" class="img-fluid mx-auto d-block home-2-img mover-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="home-3-shape">
                            <img src="images/home-3-shape.png" alt="" class="img-fluid mx-auto w-100 d-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jumbotron End -->
    
        @yield('main-content')

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

    <!-- Typed -->
    <script src="{{asset('storage/js/typed.js')}}"> type="text/javascript"></script>
    <!-- BackSlideShow -->
    <script src="{{asset('storage/js/jquery.backstretch.min.js')}}"></script> 
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
        // type
        $(".element").each(function(){
                var $this = $(this);
                $this.typed({
                strings: $this.attr('data-elements').split(','),
                typeSpeed: 100, // typing speed
                backDelay: 3000 // pause before backspacing
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
    <script src="{{asset('storage/js/gsap.min.js')}}"></script>
    <script src="{{asset('storage/js/TextPlugin.min.js')}}"></script>
    <script>
        // gsap.registerPlugin(TextPlugin);
        // gsap.to(".gsap-text-pendidikan", {
        //     duration: 2,
        //     delay: 1,
        //     text: "Teknologi Informasi Bidang Pendidikan"
        // })
        // gsap.to(".gsap-text-kesehatan", {
        //     duration: 2,
        //     delay: 3,
        //     text: "Layanan IT Bidang Kesehatan"
        // })
        // gsap.to(".gsap-text-pemerintahan", {
        //     duration: 2,
        //     delay: 5,
        //     text: "Layanan IT Bidang Pemerintahan"
        // })
        // gsap.to(".gsap-text-bisnis", {
        //     duration: 2,
        //     delay: 7,
        //     text: "Layanan IT Bidang Bisnis"
        // })
    </script>
</body>

</html>
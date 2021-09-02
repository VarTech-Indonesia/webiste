
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
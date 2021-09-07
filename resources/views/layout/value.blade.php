<!-- Nilai Start -->
<section class="section" id="about">
    <div class="container">
        <div class="row"  data-aos="fade-right" data-aos-duration="1000">
            <div class="col-lg-12">
                <div class="title-heading mb-5">
                    <h3 class="text-dark mb-1 font-weight-light text-uppercase">VarTech Indonesia</h3>
                    <div class="title-border-simple position-relative"></div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-right" data-aos-duration="1000">
            @foreach ($service as $item_service)
            <div class="col-lg-3">
                <div class="about-box about-light text-center">
                    <div  data-aos="zoom-in" data-aos-duration="2000">
                       <img src="{{asset('storage/'.$item_service->icon)}}" width="100px">
                    </div>
                    <h4 class="font-weight-light" data-aos="fade-up" data-aos-duration="2000">
                        <a href="/page/{{$item_service->slug}}" class="text-dark">
                            <p>{{$item_service->title}}</p>
                        </a>
                    </h4>
                    <p class="text-muted f-14"></p>
                </div>
            </div>
            @endforeach
           
            {{-- <div class="col-lg-3">
                <div class="about-box about-light text-center p-3">
                    <div class="about-icon mb-4">
                        <i class="mdi mdi-lightbulb"></i>
                    </div>
                    <h4 class="font-weight-light">
                        <a href="#" class="text-dark">
                            <p class="gsap-text-kesehatan"></p>
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
        </div> --}}
    </div>
</section>
<!-- Nilai End -->
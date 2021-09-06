<!-- About Start -->
<section class="section bg-about bg-light-about bg-light" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="about-desc">
                    <h3 class="text-dark mb-3 font-weight-light">{{ $data->title }}</h3>
                    <p class="text-muted f-15">{!! $data->excerpt !!}</p>
                    <div class="about-by">
                        <p class="mb-0 text-uppercase f-13"><a href="/page/{{$data->slug}}" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p>
                        {{-- <p class="mb-0 text-uppercase f-13"><a href="/page" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a></p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                <div class="">
                    <img src="{{asset('storage/'.$data->image)}}" width="553px" >
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->
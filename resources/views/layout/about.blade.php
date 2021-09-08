<!-- ABOUT START -->
<section class="section bg-about bg-light-about bg-light" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-heading mb-5">
                    <h3 class="text-dark mb-1 font-weight-light text-uppercase">Jasa Layanan Teknologi Informasi dan Percetakan</h3>
                    <div class="title-border-simple position-relative"></div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-right" data-aos-duration="1000">
            @foreach ($service as $item_service)
            <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="2000">
                <div class="about-box about-light text-center p-3">
                    <div class="mb-3">
                        <img src="{{asset('storage/'.$item_service->icon)}}" width="100px">
                    </div>
                    <h4 class="font-weight-light"><a href="/page/{{$item_service->slug}}" class="text-dark">{{$item_service->title}}</a></h4>
                    <p class="text-muted f-14">{!!$item_service->excerpt!!}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="about-desc">
                    <h3 class="text-dark mb-3 font-weight-light">{{ $data->title }}</h3>
                    <p class="text-muted f-15">{!! $data->excerpt !!}</p>
                    <div class="about-by">
                        <p class="mb-0 text-uppercase f-13">
                            <a href="/page/{{$data->slug}}" class="text-primary">Selanjutnya<i class="mdi mdi-arrow-right ml-2"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                <div>
                    <img src="{{asset('storage/'.$data->image)}}" alt="{{$data->slug}}" class="img-fluid mx-auto d-block" >
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT END -->
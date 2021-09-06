<!-- Client Start -->
<section class="section bg-clients" id="clients">
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
                @foreach ($testimonial as $item_testimonial)
                <div class="item">
                    <div class="testi-content">
                        <div class="testi-box mt-4">
                            <h4 class="text-white mb-3 font-weight-light">{{ $item_testimonial->title }}</h4>
                            <p class="text-white-70 font-weight-light mb-0 f-15">{!! $item_testimonial->excerpt !!}</p>
                            <div class="quote-img">
                                <img src="{{asset('storage/images/quote-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="float-right ml-3">
                                <div class="client-img">
                                    <img src="{{ asset('storage/'.$item_testimonial->image )}}" alt="" class="img-fluid rounded-circle">
                                </div>
                            </div>
                            <div class="clients-name text-right pt-3">
                                <h6 class="text-white font-weight-normal position-relative f-17 mb-0"><span class="after-border"></span>{{ $item_testimonial->customer }}</h6>
                                <p class="text-white-70 f-13 mb-0">{{ $item_testimonial->position }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Client End -->
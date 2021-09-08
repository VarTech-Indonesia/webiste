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
                            {{-- <p class="text-uppercase f-13 mb-2 text-muted">{{ $item_portofolio->title }}</p> --}}
                            <h5 class="font-weight-normal f-18">
                                <a href="{{ $item_portofolio->link }}" class="text-dark" target="_blank">
                                {{ $item_portofolio->title }}
                                </a>
                            </h5>
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
        </div>
    </div>
</section>
<!-- Portofolio End -->
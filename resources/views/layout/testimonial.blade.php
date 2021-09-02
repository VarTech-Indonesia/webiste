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
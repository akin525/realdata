@include('layouts.sidebar')


<!-- Template Main CSS File -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
{{--<section id="pricing" class="pricing">--}}
{{--    <div class="container" data-aos="fade-up">--}}

{{--        <div class="section-title">--}}
{{--            <h2>Pricing</h2>--}}
{{--            <p>Affordable Data Plans And Prices</p>--}}
{{--        </div>--}}

{{--        <div class="row">--}}

{{--            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">--}}
{{--                <div class="box">--}}
{{--                    <h3>MTN Data</h3>--}}
{{--                    <img src="{{asset('assets/img/mtn-1.png')}}" class="img-fluid" alt="">--}}
{{--                    <ul>--}}
{{--                        @foreach($mtn as $m)--}}
{{--                            <li><i class="bx bx-check"></i> {{$m->plan}}  for   #{{$m->tamount}}</li>--}}
{{--                        @endforeach--}}

{{--                    </ul>--}}
{{--                    <a href="{{route('select')}}" class="buy-btn">Get Started</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">--}}
{{--                <div class="box featured">--}}
{{--                    <h3>Airtel Data</h3>--}}
{{--                    <img src="{{asset('assets/img/airtime-1.png')}}" class="img-fluid" alt="">--}}
{{--                    <ul>--}}
{{--                        @foreach($airtel as $g)--}}
{{--                            <li><i class="bx bx-check"></i> {{$g->plan}}  for   #{{$g->tamount}}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                    <a href="{{route('select')}}" class="buy-btn">Get Started</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">--}}
{{--                <div class="box">--}}
{{--                    <h3>Glo Data</h3>--}}
{{--                    <img src="{{asset('assets/img/glo-1.png')}}" class="img-fluid" alt="">--}}
{{--                    <ul>--}}
{{--                        @foreach($glo as $go)--}}
{{--                            <li><i class="bx bx-check"></i> {{$go->plan}}   for   #{{$go->tamount}}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                    <a href="{{route('select')}}" class="buy-btn">Get Started</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">--}}
{{--                <div class="box">--}}
{{--                    <h3>9mobile Data</h3>--}}
{{--                    <img src="{{asset('assets/img/9mobile-1.png')}}" class="img-fluid" alt="">--}}
{{--                    <ul>--}}
{{--                        @foreach($eti as $e)--}}
{{--                            <li><i class="bx bx-check"></i>{{$e->plan}}   for   #{{$e->tamount}}</li>--}}
{{--                        @endforeach--}}

{{--                    </ul>--}}
{{--                    <a href="{{route('select')}}" class="buy-btn">Get Started</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}


<div class="pricing-table-title">
    <h2>Pricing Table 1</h2>
</div>
<div class="pricing-table table-1">
    <div class="ptable-item">
        <div class="ptable-single">
            <div class="ptable-header">
                <div class="ptable-title">
                    <h2>Silver</h2>
                </div>
                <div class="ptable-price">
                    <h2><small>$</small>99<span>/ M</span></h2>
                </div>
            </div>
            <div class="ptable-body">
                <div class="ptable-description">
                    <ul>
                        <li>Pure HTML & CSS</li>
                        <li>Google Font</li>
                        <li>Fontawesome Icons</li>
                        <li>Responsive Design</li>
                        <li>Well-commented Code</li>
                        <li>Easy to Use</li>
                    </ul>
                </div>
            </div>
            <div class="ptable-footer">
                <div class="ptable-action">
                    <a href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="ptable-item featured-item">
        <div class="ptable-single">
            <div class="ptable-header">
                <div class="ptable-status">
                    <span>Hot</span>
                </div>
                <div class="ptable-title">
                    <h2>Gold</h2>
                </div>
                <div class="ptable-price">
                    <h2><small>$</small>199<span>/ M</span></h2>
                </div>
            </div>
            <div class="ptable-body">
                <div class="ptable-description">
                    <ul>
                        <li>Pure HTML & CSS</li>
                        <li>Google Font</li>
                        <li>Fontawesome Icons</li>
                        <li>Responsive Design</li>
                        <li>Well-commented Code</li>
                        <li>Easy to Use</li>
                    </ul>
                </div>
            </div>
            <div class="ptable-footer">
                <div class="ptable-action">
                    <a href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="ptable-item">
        <div class="ptable-single">
            <div class="ptable-header">
                <div class="ptable-title">
                    <h2>Platinum</h2>
                </div>
                <div class="ptable-price">
                    <h2><small>$</small>299<span>/ M</span></h2>
                </div>
            </div>
            <div class="ptable-body">
                <div class="ptable-description">
                    <ul>
                        <li>Pure HTML & CSS</li>
                        <li>Google Font</li>
                        <li>Fontawesome Icons</li>
                        <li>Responsive Design</li>
                        <li>Well-commented Code</li>
                        <li>Easy to Use</li>
                    </ul>
                </div>
            </div>
            <div class="ptable-footer">
                <div class="ptable-action">
                    <a href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

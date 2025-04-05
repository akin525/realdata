@include('layouts.sidebar')


<!-- Template Main CSS File -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pricing</h2>
            <p>Affordable Data Plans And Prices</p>
        </div>

        <div class="row">

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                    <h3>MTN Data</h3>
                    <img src="{{asset('assets/img/mtn-1.png')}}" class="img-fluid" alt="">
                    <ul>
                        @foreach($mtn as $m)
                            <li><i class="bx bx-check"></i> {{$m->plan}}  for   #{{$m->tamount}}</li>
                        @endforeach

                    </ul>
                    <a href="{{route('select')}}" class="buy-btn">Get Started</a>
                </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3>Airtel Data</h3>
                    <img src="{{asset('assets/img/airtime-1.png')}}" class="img-fluid" alt="">
                    <ul>
                        @foreach($airtel as $g)
                            <li><i class="bx bx-check"></i> {{$g->plan}}  for   #{{$g->tamount}}</li>
                        @endforeach
                    </ul>
                    <a href="{{route('select')}}" class="buy-btn">Get Started</a>
                </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                    <h3>Glo Data</h3>
                    <img src="{{asset('assets/img/glo-1.png')}}" class="img-fluid" alt="">
                    <ul>
                        @foreach($glo as $go)
                            <li><i class="bx bx-check"></i> {{$go->plan}}   for   #{{$go->tamount}}</li>
                        @endforeach
                    </ul>
                    <a href="{{route('select')}}" class="buy-btn">Get Started</a>
                </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                    <h3>9mobile Data</h3>
                    <img src="{{asset('assets/img/9mobile-1.png')}}" class="img-fluid" alt="">
                    <ul>
                        @foreach($eti as $e)
                            <li><i class="bx bx-check"></i>{{$e->plan}}   for   #{{$e->tamount}}</li>
                        @endforeach

                    </ul>
                    <a href="{{route('select')}}" class="buy-btn">Get Started</a>
                </div>
            </div>

        </div>

    </div>
</section>

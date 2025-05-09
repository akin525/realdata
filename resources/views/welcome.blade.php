<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

         <title>Real Data Sub</title>
        <meta content="RealDataSub | Buy data in a few clicks to keep surfing the internet. You can buy whatever size of data plan for whichever network you desire. All plans are topped-up to your specified number in seconds." name="description">
        <meta content="" name="keywords">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Favicons -->
        <link href="{{asset('images/dlog.jpeg')}}"  rel="icon">
        <link href="{{asset('images/dlog.jpeg')}}"  rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    </head>
    <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{route('welcome')}}"><img src="{{asset('images/dlog.jpeg')}}" class="img-fluid" alt=""></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo1.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    @auth
                        <li><a class="nav-link scrollto" href="#">{{Auth::user()->name}}</a></li>

                        <li><a class="getstarted scrollto" href="{{url('/dashboard')}}">Dashboard</a></li>

                    @else
                        <li><a class="getstarted scrollto" href="{{route('register')}}">Sign Up</a></li>

                    @endauth

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Welcome to Real Data Sub</h1>
                    <h2>Nigeria's No.1 Platform For Internet Data Purchase, Airtime Topup, TV Cable Subscription & Bill Payment. </h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="btn-get-started scrollto">Dashboard</a>
                        @else
                        <a href="{{ route('register') }}" class="btn-get-started scrollto">Sign Up</a>
                            &nbsp  &nbsp;&nbsp
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Login</a>
                        @endauth
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('assets/img/mtn.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('assets/img/airtel.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('assets/img/glo.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('assets/img/9mobile.png')}}" class="img-fluid" alt="">
                    </div>

{{--                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">--}}
{{--                        <img src="{{asset('assets/img/eletricity.png')}}" class="img-fluid" alt="">--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">--}}
{{--                    rrr    <img src="{{asset('assets/img/cable-tv.png')}}" class="img-fluid" alt="">--}}
{{--                    </div>--}}

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            We offer instant recharge of Airtime, Databundle, CableTV (DStv, GOtv & Startimes), Electricity Bill Payment and more....
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> We're Fast</li>
                            <li><i class="ri-check-double-line"></i> 100% Secured</li>
                            <li><i class="ri-check-double-line"></i> Automated Services</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Certain things might be hard to get done, but with the Real Data Sub platform, making payments or subscribing data on your gadgets shouldn't be one of those.

                            So, Real Data Sub helps you to make payments for services you enjoy right from the comfort of your home or offices. The experience of total convenience, fast service delivery and easy funding processes are just at your fingertips.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->


        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{asset('assets/img/skills.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>About Real Data Sub</h3>
                        <p >
{{--                            class="fst-italic"--}}
                            With Real Data Sub, you can purchase airtime, subscribe data to your phones or laptops, pay electricity bills and then again pay for your CableTV subscriptions seamlessly all by yourself with just the click of a button.

                            We're 24/7 functional and our Customer Support Systems are prompt to response to any complaints or suggestions you may think of.

                            Thank you for joining us.
                        </p>

                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">Registered Users <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Happy Clients <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Logged in Users <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Years Of Experience <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>We offer instant recharge of Airtime, purchase of Data Bundles, CableTV Subscriptions such as: DStv, GOtv, Startimes and etc, Electricity Bill Payment and much more...

                        Just sigh up and take a look at our low prices.</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Airtime</a></h4>
                            <p>With our Airtime purchase, you get a huge validity on social space where you can do what you love via phone calls or video communications.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Databundle</a></h4>
                            <p>Get cheap, strong and fast internet access for your Smartphones.
                                You can choose from a variety of the bundles we have available.</p>
                        </div>
                    </div>

                    <!--          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">-->
                    <!--            <div class="icon-box">-->
                    <!--              <div class="icon"><i class="bx bx-tachometer"></i></div>-->
                    <!--              <h4><a href="">CableTV</a></h4>-->
                    <!--              <p>Pay your gotv, DSTV, Startimes</p>-->
                    <!--            </div>-->
                    <!--          </div>-->

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href=""> CableTV</a></h4>
                            <p>Never you miss out on any of your favorite shows!
                                Log in and easily renew your GOtv, DStv, and Startimes subscriptions on our platform in just a few clicks</p>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href=""> Electricity Bill Payment</a></h4>
                            <p>Avoid the stress, pay for your electricity bills from your mobile and PC online.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->


        <!-- ======= resller Section ======= -->
{{--        <section id="team1" class="team1">--}}
{{--            <div class="container card">--}}

{{--                <div class="section-title" data-aos="fade-up">--}}
{{--                    <h2>Reseller Plan</h2>--}}
{{--                    <p>You can Partner with us, you can have your own platform whereby you sell data, airtime, Electricity and cable TV and others</p>--}}
{{--                </div>--}}

{{--                <div class="row">--}}

{{--                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" >--}}
{{--                        <div class="member1" data-aos="full">--}}
{{--                            <div class="pic1"><img width="300" src="{{asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>--}}
{{--                            <div class="member-info1">--}}
{{--                                <a class="btn btn-success" href="https://wa.me/2347011223737/?text=i want to be a reseller from Lelesco Enterprise,  i want small scales ">Select</a>--}}
{{--                                <span>Enjoy Your Plan</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">--}}
{{--                        <div class="member1" data-aos="zoom-in" data-aos-delay="100">--}}
{{--                            <div class="pic1"><img width="300" src="{{asset('assets/img/team/team-5.jpg')}}" class="img-fluid" alt=""></div>--}}
{{--                            <div class="member-info1">--}}
{{--                                <a class="btn btn-success" href="https://wa.me/2347011223737/?text=i want to be a reseller from Lelesco Enterprise,  i want medium scales">Select</a>--}}
{{--                                <span>Enjoy Your Plan</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" >--}}
{{--                        <div class="member1" data-aos="zoom-in" data-aos-delay="200">--}}
{{--                            <div class="pic1"><img width="300" src="{{asset('assets/img/team/team-6.jpg')}}" class="img-fluid" alt=""></div>--}}
{{--                            <div class="member-info1">--}}
{{--                                <a class="btn btn-success" href="https://wa.me/2347011223737/?text=i want to be a reseller from Lelesco Enterprise,  i want full scales with Licenses">Select</a>--}}
{{--                                <span>Enjoy Your Plan</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </section>--}}
        <!-- End reseller Section -->




        <!-- ======= Cta Section ======= -->
{{--        <section id="cta" class="cta">--}}
{{--            <div class="container" data-aos="zoom-in">--}}

{{--                <div class="row">--}}
{{--                    <div class="col-lg-9 text-center text-lg-start">--}}
{{--                        <h3>Call To Action</h3>--}}
{{--                        <p> You Can Perform Quick Transactions Anytime And Anywhere Using Any Device. Awesome Customer Support. Quick Payment Steps. Safe and Secure. Services: Instant Reconnection, 24/7 Support, Secure Payment, Fast Support Response, Prompt Customer Support.</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 cta-btn-container text-center">--}}
{{--                        <a class="cta-btn align-middle" href="#">Call To Action</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </section>--}}
        <!-- End Cta Section -->


        <!-- ======= Team Section ======= -->
{{--        <section id="team" class="team section-bg">--}}
{{--            <div class="container" data-aos="fade-up">--}}

{{--                <div class="section-title">--}}
{{--                    <h2>Team</h2>--}}
{{--                    <p>We are here to serve you, Thanks for coming </p>--}}
{{--                </div>--}}

{{--                <div class="row">--}}

{{--                    <div class="col-lg-6">--}}
{{--                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">--}}
{{--                            <div class="pic"><img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>--}}
{{--                            <div class="member-info">--}}
{{--                                <h4>Mr Vincent</h4>--}}
{{--                                <span>Chief Executive Officer</span>--}}
{{--                                <p>The owner of Lelesco Enterprise</p>--}}
{{--                                <div class="social">--}}
{{--                                    <a href="https://wa.link/aad9x2"> <i class="ri-whatsapp-fill"></i></a>--}}
{{--                                    <a href=""><i class="ri-facebook-fill"></i></a>--}}
{{--                                    <a href=""><i class="ri-instagram-fill"></i></a>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 mt-4 mt-lg-0">--}}
{{--                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">--}}
{{--                            <div class="pic"><img src="{{asset('assets/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>--}}
{{--                            <div class="member-info">--}}
{{--                                <h4>Maduka Chinemeran Vivian</h4>--}}
{{--                                <span>Assistance Manager</span>--}}
{{--                                <p>Assistance Manager of  Lelesco Enterprise</p>--}}
{{--                                <div class="social">--}}
{{--                                    <a href="https://web.facebook.com/maduka.vivian.96"><i class="ri-facebook-fill"></i></a>--}}
{{--                                    <a href="https://www.instagram.com/nikkyvee"><i class="ri-instagram-fill"></i></a>--}}
{{--                                    <a href="https://wa.me/2348133347164"> <i class="ri-whatsapp-fill"></i> </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </section>--}}
        <!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
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
        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>How we can help you ?</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">HOW DO I REGISTER? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Click on the "Sign Up"  button and fill in your details, then click on register, that's how you can create an account with us.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">HOW DO I FUND MY WALLET? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Transfer your funds to the automated account details assigned only to your dashboard, or make use of our different Paystack funding options available for you.
                                    You can as well reach out to the admin team should there be any network glitches.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">CAN I BUY WITH NO FUNDS IN MY WALLET? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Yes, all you have to do is to have your ATM card with you, pick what you want to buy or subscribe to, then pay via Paystack card funding.

                                    You can reach out for more guidelines on this.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">CAN I HAVE A BRIEF VIEW OF YOUR SERVICES? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                <h4>Airtime VTU </h4>

                                MTN VTU Airtime,
                                Airtel VTU Airtime,
                                Glo VTU Airtime,
                                9mobile VTU Airtime
                                <h4>Data</h4>

                                MTN Data Bundle,
                                Airtel Data Bundle,
                                Glo Data Bundle,
                                9mobile Data Bundle

                                <h4>TV Subscription</h4>

                                DSTV subscription payment,
                                GOTV Subscription Payment,
                                Startimes Subscription Payment

                                <h4>Electricity Payment</h4>

                                Abuja Electricity Distribution Company (AEDC) – Prepaid,
                                Port Harcourt Electricity Distribution Company (PHED) – Prepaid,
                                Ikeja Electricity Distribution Company (IKEDC) – Prepaid,
                                Eko Electricity Distribution Company (EKEDC) – Prepaid,
                                Jos Electricity Distribution PLC (JEDplc) – Prepaid,
                                Kano Electricity Distribution Company (KEDCO) – Prepaid,
                                </p>
                            </div>
                        </li>


                    </ul>
                </div>

            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Chat with us for immediate expert advice on our products and services. Or you can send an email to our customer support team and we'll get back to you.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>OguBolo, River State Nigeria.</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@realdatasub.com.ng</p>
                                <p> admin@realdatasub.com.ng </p>
                            </div>
                            <!--              <div class="phone">-->
                            <!--                <i class="bi bi-phone"></i>-->
                            <!--                <h4>Call:</h4>-->
                            <!--                <p>+234 803 6711 447</p>-->
                            <!--              </div>-->

                            <div class="col-lg-8 col-md-6 footer-links">
                                <h4>Our Social Networks</h4>
                                <p>You can contact us via this</p>
                                <div class="social-links mt-3">
                                    <a href="https://www.youtube.com/@Ekponomendie" class="twitter"><i class="bx bxl-youtube"></i></a>
                                    <a href="https://m.facebook.com/mendiee1/" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="https://www.instagram.com/mendiee1/" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="https://wa.link/aad9x2" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                                </div>
                            </div>

                            <!--              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.265818459094!2d7.196316774979461!3d4.7238251952512735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10683667a71d76ff%3A0xc600253245b79019!2s15%20Mission%20Rd%2C%20Ogu%20Bolo%20500104%2C%20Rivers!5e0!3m2!1sen!2sng!4v1742673510637!5m2!1sen!2sng" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <h4 class="center-text">We love to hear from you</h4>
                            <!--              <p> <strong> Talk To Us</strong>&nbsp  &nbsp;&nbsp-->
                            <!--              Let's Hear From You  &nbsp  &nbsp;&nbsp How Best Can We Serve You?</p>-->
                            &nbsp  &nbsp;&nbsp
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Platform</h4>
                        <p>Join our network of outstanding entrepreneurs patnering with Real Data Sub .</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

{{--        <div class="footer-top">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-lg-3 col-md-6 footer-contact">--}}
{{--                        <h3>Real Data Sub</h3>--}}
{{--                        <p>We offer you the most affordable and cheapest datas, airtime, cable subscription, and eletricty bil payment. When is comes to renewing your bills, we are the best partner you can have. </p>--}}
{{--                        <!--            <p>-->--}}
{{--                        <!--               OguBolo, River State Nigeria. <br><br>-->--}}
{{--                        <!--&lt;!&ndash;              <strong>Phone:</strong> +234 803 6711 447<br>&ndash;&gt;-->--}}
{{--                        <!--              <strong>Email:</strong> info@realdatasub.com.ng<br>-->--}}
{{--                        <!--              &nbsp;&nbsp  &nbsp;&nbsp  <p> admin@realdatasub.com.ng </p>-->--}}
{{--                        <!--            </p>-->--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3 col-md-6 footer-links">--}}
{{--                        <h4>Useful Links</h4>--}}
{{--                        <ul>--}}
{{--                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>--}}
{{--                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>--}}
{{--                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>--}}
{{--                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>--}}
{{--                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

{{--                    <!--          <div class="col-lg-3 col-md-6 footer-links">-->--}}
{{--                    <!--            <h4>Our Services</h4>-->--}}
{{--                    <!--            <ul>-->--}}
{{--                    <!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Airtime Sales</a></li>-->--}}
{{--                    <!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Data Bundle</a></li>-->--}}
{{--                    <!--              <li><i class="bx bx-chevron-right"></i> <a href="#">TV Subscription</a></li>-->--}}
{{--                    <!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Electricity Payment</a></li>-->--}}
{{--                    <!--            </ul>-->--}}
{{--                    <!--          </div>-->--}}

{{--                    <!--          <div class="col-lg-3 col-md-6 footer-links">-->--}}
{{--                    <!--            <h4>Our Social Networks</h4>-->--}}
{{--                    <!--            <p>You can contact us via this</p>-->--}}
{{--                    <!--            <div class="social-links mt-3">-->--}}
{{--                    <!--              <a href="https://www.youtube.com/@Ekponomendie" class="twitter"><i class="bx bxl-youtube"></i></a>-->--}}
{{--                    <!--              <a href="https://m.facebook.com/mendiee1/" class="facebook"><i class="bx bxl-facebook"></i></a>-->--}}
{{--                    <!--              <a href="https://www.instagram.com/mendiee1/" class="instagram"><i class="bx bxl-instagram"></i></a>-->--}}
{{--                    <!--              <a href="https://wa.link/aad9x2" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>-->--}}
{{--                    <!--            </div>-->--}}
{{--                    <!--          </div>-->--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Real Data Sub</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">5starcompany</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <div class="row">

        <a href="https://wa.link/aad9x2" class="back-to-top d-flex align-items-center justify-content-center"><i class=" bi-whatsapp"></i></a>
    </div>


    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    </body>

</html>

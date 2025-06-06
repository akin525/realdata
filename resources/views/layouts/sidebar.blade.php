<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from d22roh5inpczgk.cloudfront.net/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 22:17:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="Real Data Sub | Buy data in a few clicks to keep surfing the internet. You can buy whatever size of data plan for whichever network you desire. All plans are topped-up to your specified number in seconds." name="description">
    <meta property="og:image" content="https://lelescoenterprise.com.ng/images/dlog.jpeg" />
    <title>{{ Auth::user()->name }} Dashboard| RealdataSub </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://lelescoenterprise.com.ng/images/dlog.jpeg">
    <link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="v{{asset('endor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    {{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.min.css">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">

    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>

</head>
<body>
<style>
    .subscribe {
        position: relative;
        padding: 20px;
        background-color: #FFF;
        border-radius: 4px;
        color: #333;
        box-shadow: 0px 0px 60px 5px rgba(0, 0, 0, 0.4);
    }

    .subscribe:after {
        position: absolute;
        content: "";
        right: -10px;
        bottom: 18px;
        width: 0;
        height: 0;
        border-left: 0px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid #491110;
    }

    .subscribe p {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 4px;
        line-height: 28px;
    }



    .subscribe .submit-btn {
        position: absolute;
        border-radius: 30px;
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        background-color: #491110;
        color: #FFF;
        padding: 12px 25px;
        display: inline-block;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 5px;
        right: -10px;
        bottom: -20px;
        cursor: pointer;
        transition: all .25s ease;
        box-shadow: -5px 6px 20px 0px rgba(26, 26, 26, 0.4);
    }

    .subscribe .submit-btn:hover {
        background-color: #491110;
        box-shadow: -5px 6px 20px 0px rgba(88, 88, 88, 0.569);
    }
</style>
<style>
    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loading-spinner {
        width: 40px;
        height: 40px;
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>


<div class="loading-overlay" id="loadingSpinner" style="display: none;">
    <div class="loading-spinner"></div>
</div>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="{{route('welcome')}}" class="brand-logo">
            <img width="50" src="{{asset('images/dlog.jpeg')}}">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="input-group search-area right d-lg-inline-flex d-none">
                            <input type="text" class="form-control" placeholder="Find something here...">
                            <div class="input-group-append">
									<span class="input-group-text">
										<a href="javascript:void(0)">
											<i class="flaticon-381-search-2"></i>
										</a>
									</span>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav header-right main-notification">
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link bell dz-theme-mode" href="#">
                                <i id="icon-light" class="fa fa-sun-o"></i>
                                <i id="icon-dark" class="fa fa-moon-o"></i>
                            </a>
                        </li>


                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <img src="{{asset('images/avater.jpg')}}" width="20" alt=""/>
                                <div class="header-info">
                                    <span>{{ Auth::user()->name }}</span>
                                    <small>Customer</small>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form  action="{{route('logout')}}" method="POST" class="dropdown-item ai-icon">
                                    @csrf
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <button type="submit" class="ml-2">Logout </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="sub-header">
                <div class="d-flex align-items-center flex-wrap mr-auto">
                    <h5 class="dashboard_bar">Dashboard</h5>
                </div>
                <div class="d-flex align-items-center">
                    <a href="javascript:void(0);" class="btn btn-xs btn-primary light mr-1">Today</a>
                    <a href="javascript:void(0);" class="btn btn-xs btn-primary light mr-1">Month</a>
                    <a href="javascript:void(0);" class="btn btn-xs btn-primary light">Year</a>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <div class="main-profile">
                <div class="image-bx">
                    <img src="{{asset('images/avater.jpg')}}" alt="">
                    <a class="nav-link bell dz-theme-mode" href="#">
                        <i id="icon-light" class="fa fa-sun-o"></i>
                        <i id="icon-dark" class="fa fa-moon-o"></i>
                    </a>
                    <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
                </div>
                <h5 class="name"><span class="font-w400">Hello,</span> {{ Auth::user()->username }}</h5>
                <p class="email">{{ Auth::user()->email }}</p>

            </div>
            <ul class="metismenu" >
{{--                <li><a href="{{route('welcome')}}" class="ai-icon">--}}
{{--                        <i class="flaticon-381-home"></i>--}}
{{--                        <span class="nav-text">Homepage</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @if(Auth::user()->role=='admin')--}}
{{--                <li><a href="{{route('admin/dashboard')}}" class="ai-icon">--}}
{{--                        <i class="flaticon-144-layout"></i>--}}
{{--                        <span class="nav-text">Admin Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @endif--}}
                <li><a href="{{route('dashboard')}}" class="ai-icon">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a href="{{route('changepass')}}" class="ai-icon">
                        <i class="flaticon-006-key"></i>
                        <span class="nav-text">Change Password</span>
                    </a>
                </li>
                <li><a href="{{route('update')}}" class="ai-icon">
                        <i class="flaticon-381-user"></i>
                        <span class="nav-text">Update Profile</span>
                    </a>
                </li>
                <li><a class="ai-icon" href="{{route('fund')}}" aria-expanded="false">
                        <i class="flaticon-008-credit-card"></i>
                        <span class="nav-text">Fund Wallet</span>
                    </a>
                </li>
                <li><a class="ai-icon" href="{{route('fund')}}" aria-expanded="false">
                        <i class="flaticon-008-credit-card"></i>
                        <span class="nav-text">Upgrade</span>
                    </a>
                </li>
                <li class="nav-label">Products</li>
                <li><a class="ai-icon" href="{{route('airtime')}}" aria-expanded="false">
                        <i class="flaticon-136-phone-call"></i>
                        <span class="nav-text">Buy Airtime</span>
                    </a>

                </li>
                <li><a class="ai-icon" href="{{route('select')}}" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Buy Data</span>
                    </a>

                </li>
                <li><a class="ai-icon" href="{{route('tv')}}" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Pay TV</span>
                    </a>

                </li>
                <li><a class="ai-icon" href="{{route('elect')}}" aria-expanded="false">
                        <i class="flaticon-111-power-button"></i>
                        <span class="nav-text">Pay Electricity</span>
                    </a>

                </li>
                <li><a href="{{route('invoice')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-book"></i>
                        <span class="nav-text">Transaction History</span>
                    </a>
                </li>
                <li><a href="{{route('price')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-book"></i>
                        <span class="nav-text">Price</span>
                    </a>
                </li>
            </ul>
            <div class="copyright">
                <p><strong>RealDataSub Customer Dashboard</strong> © 2025 All Rights Reserved</p>
                <p class="fs-12">Design<span class="heart"></span> by Real Data Sub</p>
            </div>

        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    @include('sweetalert::alert')
    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
{{--    <a href="https://wa.link/aad9x2/?text=Goodday, My Username is {{Auth::user()->username}}" class="float" target="_blank">--}}
{{--        <i class="fa fa-whatsapp my-float"></i>--}}
{{--    </a>--}}


    <script src="{{asset('vendor/global/global.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{asset('vendor/peity/jquery.peity.min.js')}}"></script>

    <!-- Apex Chart -->
    <script src="{{asset('vendor/apexchart/apexchart.j')}}s"></script>

    <!-- Dashboard 1 -->
    <script src="{{asset('js/dashboard/dashboard-1.js')}}"></script>

    <script src="{{asset('vendor/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('js/deznav-init.js')}}"></script>
    <script src="{{asset('js/demo.js')}}"></script>
    <script src="{{asset('js/styleSwitcher.js')}}"></script>
    <!-- Datatable -->
    <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('js/deznav-init.js')}}"></script>
    <script src="{{asset('js/demo.j')}}s"></script>
    <script src="{{asset('js/styleSwitcher.js')}}"></script>


    {{-- toastr js --}}


</body>

<!-- Mirrored from d22roh5inpczgk.cloudfront.net/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 22:18:44 GMT -->
</html>

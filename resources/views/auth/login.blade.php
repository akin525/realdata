<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from d22roh5inpczgk.cloudfront.net/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 22:19:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="Real Data Sub | Buy data in a few clicks to keep surfing the internet. You can buy whatever size of data plan for whichever network you desire. All plans are topped-up to your specified number in seconds." name="description">
    <meta property="og:image" content="https://lelescoenterprise.com.ng/images/dlog.jpeg" />
    <meta name="format-detection" content="telephone=no">
    <title>Real Data Sub</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://lelescoenterprise.com.ng/images/dlog.jpeg">
    <link href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>
@include('sweetalert::alert')
<body class="vh-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <img width="100" src="{{asset('images/dlog.jpeg')}}" alt="">
                                </div>
                                <center>
                                    <!-- Session Status -->
{{--                                    <x-session-status class="alert-danger text-danger" :status="session('status')" />--}}

                                    <!-- Validation Errors -->
                                    <x-validation-errors class="alert-danger text-danger" :errors="$errors" />
                                </center>
                                <h4 class="text-center mb-4">Sign in your account</h4>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" name="password" id="myInput" class="form-control"   required>
                                        <center>
                                            <input  type="checkbox" onclick="myFunction()">Show Password
                                        </center>

                                        <script>
                                            function myFunction() {
                                                var x = document.getElementById("myInput");
                                                if (x.type === "password") {
                                                    x.type = "text";
                                                } else {
                                                    x.type = "password";
                                                }
                                            }
                                        </script>
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <!-- Remember Me -->
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>


                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Don't have an account? <a class="text-primary" href="{{route('register')}}">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <a href="https://wa.link/aad9x2/?text=Goodday, My Username is....." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('vendor/global/global.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('js/deznav-init.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>
<script src="{{asset('js/styleSwitcher.js')}}"></script>
</body>

<!-- Mirrored from d22roh5inpczgk.cloudfront.net/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 22:19:02 GMT -->
</html>

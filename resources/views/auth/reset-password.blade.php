<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from d22roh5inpczgk.cloudfront.net/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 22:19:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:title" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:description" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:image" content="../../zenix.dexignzone.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <title>Lelescoenterprise</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/dlog.jpeg')}}">
    <link href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="vh-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3 align-items-center">
                                    <img class="align-content-center" width="100" src="{{asset('images/dlog.jpeg')}}" alt="">
                                </div>



                                <center>
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                </center>

                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <!-- Email Address -->
                                    <div>
                                        <x-label for="email" :value="__('Email')" />

                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-label for="password" :value="__('Password')" />

                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                                 type="password"
                                                 name="password_confirmation" required />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <x-button>
                                            {{ __('Reset Password') }}
                                        </x-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

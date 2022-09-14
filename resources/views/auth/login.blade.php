@extends('layouts.navbar')

@section('content')

<!--Body Container-->
<div id="page-content">   
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">Login Sliding with Slideshow</h1>
                <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="index.html" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Login Sliding with Slideshow</span></div>
            </div>
        </div>
    </div>
    <!--End Collection Banner-->

    <!--Container-->
    <div class="container">
        <!--Main Content-->
        <div class="mainlogin-sliding my-5 py-0 py-lg-4">
            <div class="row">
                <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto">
                    <div class="row g-0 form-slider">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <!--Home slider-->
                            <div class="slideshow slideshow-wrapper">
                                <div class="home-slideshow">
                                    <div class="slide">
                                        <div class="blur-up lazyload bg-size ratio ratio-16x9">
                                            <img class="bg-img blur-up lazyload" data-src="assets/images/slideshow/demo15-banner1.jpg" src="assets/images/slideshow/demo15-banner1.jpg" alt="image" title="" />
                                            <div class="container">
                                                <div class="slideshow-content slideshow-overlay middle d-flex justify-content-center align-items-center">
                                                    <div class="slideshow-content-in text-center h-auto">
                                                        <div class="wrap-caption animation style1 col-11 col-sm-8 p-4">
                                                            <h3>Welcome to Optimal</h3>
                                                            <p>Optimal Multipurpose Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="blur-up lazyload bg-size ratio ratio-16x9">
                                            <img class="bg-img blur-up lazyload" data-src="assets/images/parallax/demo12-banner1.jpg" src="assets/images/parallax/demo12-banner1.jpg" alt="image" title="" />                 
                                            <div class="container">
                                                <div class="slideshow-content slideshow-overlay middle d-flex justify-content-center align-items-center">
                                                    <div class="slideshow-content-in text-center h-auto">
                                                        <div class="wrap-caption animation style1 col-11 col-sm-8 p-4">
                                                            <h3>Welcome to Optimal</h3>
                                                            <p>Creative, flexible, Infinite Possibilities and High Performance Html template to make your business shine! Suitable for multipurpose stores.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Home slider-->
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <!-- Login Wrapper -->
                            <div class="login-wrapper">
                                <!-- Login Inner -->
                                <div class="login-inner">
                                    <!-- Login Logo -->
                                    <a href="index.html" class="logo d-inline-block mb-4"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo" /></a>
                                    <!-- End Login Logo -->
                                    <!-- User Form -->
                                    <div class="user-loginforms">
                                        <!-- Login Form -->
                                        <form id="form-login" class="text-left user-form-login login-active" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <h4>Login to your account</h4>
                                            <div class="form-row">
                                                <div class="form-group w-100">
                                                    <label for="email" class=" col-form-label ">{{ __('Email Address') }}</label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address" name="email" />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group w-100">
                                                    <label for="password" class=" col-form-label ">{{ __('Password') }}</label>
                                                    <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group w-100 submit d-flex-center justify-content-between">
                                                    <input type="submit" class="btn btn-secondary rounded" value="Login">
                                                    @if (Route::has('password.request'))
                                                        <a class="btn-link fw-500 forgotpass-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                                <div class="form-group w-100 text-center">
                                                    Not registered?<a href="/register"
                                                     class="fw-500 ms-1 btn-link ">Create an account</a>
                                                </div>
                                            </div>
                                        </form> 
                                        <!-- End Login Form -->
                                        
                                       
                                    </div>
                                    <!-- End User Form -->
                                    
                                </div>
                                <!-- End Login Inner -->
                            </div>
                            <!-- End Login Wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Main Content-->
    </div>
    <!--End Container-->
</div>
<!--End Body Container-->


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection




@extends('layouts.navbar')

@section('content')
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">Login</h1>
                <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="index.html" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Login</span></div>
            </div>
        </div>
    </div>
    <!--End Collection Banner-->

    <!--Container-->
    <div class="container">
        <!--Main Content-->
        <div class="login-register pt-2 pb-5 pt-lg-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4 mb-md-0">
                    <div class="inner">
                        <form method="post" action="{{  route('vendor.register') }}" class="customer-form">
                            @csrf	
                            <h3 class="h4 text-uppercase">Rgistertation</h3>
                            {{-- <p>If you have an account with us, please log in.</p> --}}
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerEmail" class="d-none">Name <span class="required">*</span></label>
                                        <input type="text" name="name" class="@error('name')    +@enderror" placeholder="Full name" id="CustomerEmail"  required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerEmail" class="d-none">Email <span class="required">*</span></label>
                                        <input type="email" name="email" class="@error('email')  @enderror" placeholder="Email" id="CustomerEmail"  required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                        <input type="password" name="password" class="@error('password')   @enderror" placeholder="Password" id="CustomerPassword"  required />                        	
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                        <input type="password" name="password_confirmation" class="@error('password_confirmation')   @enderror" placeholder="Password" id="CustomerPassword"  required />                        	
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn rounded me-auto" value="Sign In">
                                </div>
                                <div class="text-left col-12 col-sm-12 col-md-12 col-lg-12">
                                    <p class="d-flex-center">
                                        
                                        <a href="forgot-password.html">Forgot your password?</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="inner">
                        <h3 class="h4 text-uppercase">Already Have an Account?</h3>
                        <p>Registering for this site allows you to access your order status and history. We’ll get a new account set up for you in no time. For this will only ask you for information necessary to make the purchase process faster and easier</p>
                        <a href="register.html" class="btn rounded">Login an account</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <!--End Main Content-->
    </div>
    <!--End Container-->
@endsection




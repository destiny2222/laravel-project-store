<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Veltrix - Admin Dashboard Template | Themesbrand</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="/Admini/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/Admini/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="/Admini/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/Admini/assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body class="bg-primary">

@if ($errors->any())
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="alert alert-primary alert-dismissible fade show t" role="alert">
                @foreach ($errors->all() as $error)
                        <div class="text-start">{{ $error }}</div>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
    
@endif

    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
    </div>

    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern shadow-none">
                        <div class="card-body">
                            <div class="text-center mt-4">
                                <div class="mb-3">
                                    <a href="index.html" class="logo"><img src="assets/images/logo-light.png" height="20" alt="logo"></a>
                                </div>
                            </div>
                            <div class="p-3"> 
                                <h4 class="font-18 text-center">Welcome Back !</h4>
                                <p class="text-muted text-center mb-4">Sign in to continue to Veltrix.</p>
                                <form class="form-horizontal" action="{{ route('admin.login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">{{ __('Email Address/ Phone No') }}</label>
                                        <input type="text"  class="form-control @error('field') is-invalid @enderror" name="field" value="{{ old('field') }}" required autocomplete="field"  placeholder="Enter username / Phone No">
                                    </div>
            
                                    <div class="form-group">
                                        <label for="userpassword">{{   __('Password') }}</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                                    </div>
            
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                    </div>
        
                                    <div class="mt-4 text-center">
                                        <a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                    </div>
                                </form>
            
                            </div>
                
                        </div>
                    </div>
                    {{-- <div class="mt-5 text-center text-white-50">
                        <p>Don't have an account ? <a href="pages-register.html" class="font-500 text-white"> Signup now </a> </p>
                        <p>© 2019 Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

        <!-- jQuery  -->
        <script src="/Admini/assets/js/jquery.min.js"></script>
        <script src="/Admini/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/Admini/assets/js/metismenu.min.js"></script>
        <script src="/Admini/assets/js/jquery.slimscroll.js"></script>
        <script src="/Admini/assets/js/waves.min.js"></script>

        <!-- App js -->
        <script src="/Admini/assets/js/app.js"></script>
        
    </body>

</html>    
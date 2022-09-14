<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>{{ config('app.name') }} - Admin Dashboard  | Dexnovate</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- datepicker -->
        <link href="/Admini/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- jvectormap -->
        <link href="/Admini/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <link href="/Admini/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/Admini/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="/Admini/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/Admini/assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('admin.layout.navbar')
            @include('admin.layout.Left-Sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                @if (session()->has('status'))
            <p style="color: green">{{  session()->get('status') }}</p>
            @endif
                <!-- Start content -->
                <div class="content dasboard-content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">@yield('page-title')</h4>
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="mdi mdi-home-outline"></i></a></li> -->
                                        <li class="breadcrumb-item active">@yield('page-breadcrumb')</li>
                                    </ol>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="@yield('link', '')" class="btn btn-primary  arrow-none waves-effect waves-light" >
                                                <i class="mdi mdi-settings mr-2"></i> @yield('linkText','')
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->
                        @include('partials.message')

                        @yield('content')
                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

                <footer class="footer">
                    © 2019 Veltrix <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        @include('admin.layout.right-sidebar')

        <!-- jQuery  -->
        <script src="/Admini/assets/js/jquery.min.js"></script>
        <script src="/Admini/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/Admini/assets/js/metismenu.min.js"></script>
        <script src="/Admini/assets/js/jquery.slimscroll.js"></script>
        <script src="/Admini/assets/js/waves.min.js"></script>

        <!-- datepicker -->
        <script src="/Admini/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <!-- vector map  -->
        <script src="/Admini/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="/Admini/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <!-- apexcharts -->
        <script src="/Admini/plugins/apexcharts/apexcharts.min.js"></script>

        <!-- Peity JS -->
        <script src="/Admini/plugins/peity-chart/jquery.peity.min.js"></script>

        <script src="/Admini/assets/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="/Admini/assets/js/app.js"></script>
        
    </body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div>
        @if (session()->has('status'))
            <p style="color: green">{{  session()->get('status') }}</p>
        @endif
        <h2>Welcome admin</h2>
    </div>

    <div>
        
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>


@extends('layouts.navbar')

@section('content')
     <!--Collection Banner-->
     <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image" style=""></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">Vendor Dashboard</h1>
                <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="index.html" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Vendor Dashboard</span></div>
            </div>
        </div>
    </div>
    <!--End Collection Banner-->

    <!--Main Content-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 left-col">
                <div class="product-sticky-style mb-4">
                    <div class="card dashboard-profile position-relative">
                        <div class="card-image position-relative bg-blue">
                            <div class="img-thumbnail position-absolute top-50 start-50 translate-middle col-10 bg-white text-center p-4">
                                <img src="assets/images/footer-logo.png" class="center-xy img-fluid" alt="Logo Brand" />
                                <h3 class="my-3 d-none">Optimal Store</h3>
                                <p class="mt-3 mb-0">54 followers | 46 review</p>
                                <p class="email d-flex-center justify-content-center mt-2"><i class="an an-envelope-l me-2"></i> <a href="mailto:sales@yousite.com">sales@yousite.com</a></p>
                            </div>
                        </div>
                        <div class="list-group rounded-0 dashboard-links">
                            <a href="vendor-dashboard.html" class="list-group-item list-group-item-action active"><i class="an an-home-l me-2"></i> Dashboard</a>
                            <a href="vendor-profile.html" class="list-group-item list-group-item-action"><i class="an an-user-expand me-2"></i> Public Profile</a>
                            <a href="vendor-uploads.html" class="list-group-item list-group-item-action"><i class="an an-upload-l me-2"></i> Uploads</a>
                            <a href="vendor-tracking.html" class="list-group-item list-group-item-action"><i class="an an-truck-l me-2"></i> Track Shipping</a>
                            <a href="vendor-settings.html" class="list-group-item list-group-item-action"><i class="an an-edit-l me-2"></i> Settings (Edit)</a>
                            <a href="index.html" class="list-group-item list-group-item-action"><i class="an an-power-off-r me-2"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                <div class="row dashboard-card mb-3">
                    <div class="col-12 col-sm-6 co-md-4 col-lg-4">
                        <div class="card card-body bg-green">
                            <div class="icontext d-flex">
                                <span class="icon rounded-circle d-flex-center justify-content-center"><i class="an an-dollar-sign fs-5"></i></span>
                                <div class="fl-1 ms-3 text-content">
                                    <h5 class="mb-1 card-title text-white">Total Revenue</h5>
                                    <span class="text">$80,950</span>
                                    <span class="text-sm"> Shipping fees are not included </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 co-md-4 col-lg-4">
                        <div class="card card-body bg-pink">
                            <div class="icontext d-flex">
                                <span class="icon rounded-circle d-flex-center justify-content-center"><i class="an an-truck-l fs-5"></i></span>
                                <div class="fl-1 ms-3 text-content">
                                    <h5 class="mb-1 card-title text-white">Total Orders</h5>
                                    <span class="text">4567</span>
                                    <span class="text-sm">48% From Last 24 Hours</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 co-md-4 col-lg-4">
                        <div class="card card-body bg-orange">
                            <div class="icontext d-flex">
                                <span class="icon rounded-circle d-flex-center justify-content-center"><i class="an an-qrcode2 fs-5"></i></span>
                                <div class="fl-1 ms-3 text-content">
                                    <h5 class="mb-1 card-title text-white">Total Products</h5>
                                    <span class="text">1540</span>
                                    <span class="text-sm">In 49 Categories</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row main-dashboard">
                    <div class="col-12 col-sm-12 co-md-6 col-lg-12 mb-3">
                        <div class="dashboard-vendor-card">
                            <div class="db-card-header d-flex-center justify-content-between mb-3">
                                <h4 class="text-uppercase mb-0">Latest Order</h4>
                                <a class="btn btn-small" href="#">View All</a>
                            </div>
                            <div class="db-card-body">
                                <div class="db-card-table table-responsive">
                                    <table class="table align-middle">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col" class="border-bottom-0">ID</th>
                                                <th scope="col" class="border-bottom-0">Image</th>
                                                <th scope="col" class="border-bottom-0">Name</th>
                                                <th scope="col" class="border-bottom-0 text-center">Method</th>
                                                <th scope="col" class="border-bottom-0 text-center">Status</th>
                                                <th scope="col" class="border-bottom-0 text-center">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="border-bottom"><span>#222</span></th>
                                                <td class="border-bottom prod-img"><img src="assets/images/products/product-7-1.jpg" alt="product" width="50" /></td>
                                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Button Top Black</a></td>
                                                <td class="border-bottom text-center"><i class="an an-credit-card-l an-1x me-2"></i><span>COD</span></td>
                                                <td class="border-bottom text-center"><span>Delivered</span></td>
                                                <td class="border-bottom text-center fw-500"><span>$320</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="border-bottom"><span>#223</span></th>
                                                <td class="border-bottom prod-img"><img src="assets/images/products/product-6-1.jpg" alt="product" width="50" /></td>
                                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Sunset Sleep Top</a></td>
                                                <td class="border-bottom text-center"><span><i class="an an-credit-card-l an-1x me-2"></i>Cash</span></td>
                                                <td class="border-bottom text-center"><span>Pending</span></td>
                                                <td class="border-bottom text-center fw-500"><span>$214</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="border-bottom"><span>#224</span></th>
                                                <td class="border-bottom prod-img"><img src="assets/images/products/product-12.jpg" alt="product" width="50" /></td>
                                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Hoodie Sweatshirt</a></td>
                                                <td class="border-bottom text-center"><span><i class="an an-credit-card-l an-1x me-2"></i>Ewallets</span></td>
                                                <td class="border-bottom text-center"><span>On Way</span></td>
                                                <td class="border-bottom text-center fw-500"><span>$548</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 co-md-6 col-lg-12 mb-3">
                        <div class="dashboard-vendor-card">
                            <div class="db-card-header d-flex-center justify-content-between mb-3">
                                <h4 class="text-uppercase mb-0 me-auto">Product List</h4>
                                <a class="btn btn-small" href="#">View All</a> <a class="btn btn-small btn-secondary ms-3" href="vendor-uploads.html">Add</a>
                            </div>
                            <div class="db-card-body">
                                <div class="db-card-table table-responsive">
                                    <table class="table align-middle">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col" class="border-bottom-0">ID</th>
                                                <th scope="col" class="border-bottom-0">Image</th>
                                                <th scope="col" class="border-bottom-0">Name</th>
                                                <th scope="col" class="border-bottom-0 text-center">Price</th>
                                                <th scope="col" class="border-bottom-0 text-center">sales</th>
                                                <th scope="col" class="border-bottom-0 text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="border-bottom"><span>#2125</span></th>
                                                <td class="border-bottom prod-img"><img src="assets/images/products/product-1.jpg" alt="product" width="50" /></td>
                                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Floral Crop Top</a></td>
                                                <td class="border-bottom product-price text-center">
                                                    <span class="old-price">$199.00</span>
                                                    <span class="price">$219.00</span>
                                                </td>
                                                <td class="border-bottom text-center"><span>245</span></td>
                                                <td class="border-bottom text-center">
                                                    <a href="#" class="edit-i remove me-1"><i class="icon an an-edit-l an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"></i></a>
                                                    <a href="#" class="remove ms-1"><i class="an an-trash-al an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Remove"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="border-bottom"><span>#2126</span></th>
                                                <td class="border-bottom prod-img"><img src="assets/images/products/product-2.jpg" alt="product" width="50" /></td>
                                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Mini Sleev Top</a></td>
                                                <td class="border-bottom product-price text-center">
                                                    <span class="price">$219.00</span>
                                                </td>
                                                <td class="border-bottom text-center"><span>684</span></td>
                                                <td class="border-bottom text-center">
                                                    <a href="#" class="edit-i remove me-1"><i class="icon an an-edit-l an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"></i></a>
                                                    <a href="#" class="remove ms-1"><i class="an an-trash-al an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Remove"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="border-bottom"><span>#2127</span></th>
                                                <td class="border-bottom prod-img"><img src="assets/images/products/product-4.jpg" alt="product" width="50" /></td>
                                                <td class="border-bottom prod-tlt"><a href="product-layout1.html">Trim Button Front Blouse</a></td>
                                                <td class="border-bottom product-price text-center">
                                                    <span class="price">$219.00</span>
                                                </td>
                                                <td class="border-bottom text-center"><span>159</span></td>
                                                <td class="border-bottom text-center">
                                                    <a href="#" class="edit-i remove me-1"><i class="icon an an-edit-l an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"></i></a>
                                                    <a href="#" class="remove ms-1"><i class="an an-trash-al an-1x" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Remove"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body">
                                <h4 class="card-title text-uppercase mb-1">Sale statistics</h4>
                                <p class="small mb-3"> Lorem Ipsum is simply dummy text of the printing </p>
                                <canvas id="myChart" height="155"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="card mb-0 mb-lg-0">
                            <article class="card-body">
                                <h4 class="card-title text-uppercase mb-1">Revenue Base on Country</h4>
                                <p class="small mb-3"> Manage your current sale and buy orders </p>
                                <canvas id="myChart2" height="225"></canvas>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Main Content-->
@endsection
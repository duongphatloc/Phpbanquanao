<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <base href="{{ asset('/') }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') | hihi</title>

    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Site Icons -->
    <link rel="shortcut icon" href="front/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="front/images/apple-touch-icon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="front/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="front/css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="front/css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="front/images/logo.png" class="logo"
                            alt="" /></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('front.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.home.about') }}">About Us</a>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a class="nav-link" href="{{ route('front.product.index') }}">Product</a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.home.service') }}">Our Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.html">Contact Us</a>
                        </li>
                        <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                        @guest
                            <a class="nav-link active" href="{{ route('login') }}">Login</a>
                            <a class="nav-link active" href="{{ route('register') }}">Register</a>
                        @else
                            <form id="logout" action="{{ route('logout') }}" method="POST">
                                <a role="button" class="nav-link active"
                                    onclick="document.getElementById('logout').submit();">
                                    Logout

                                </a>
                                @csrf


                            </form>
                        @endguest









                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="side-menu">
                            <a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">3</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                   
                    <ul class="cart-list">
                        
                       
                        <li class="total">
                            <a href="{{ route('front.cart.cart') }}" class="btn btn-default hvr-hover btn-cart">VIEW
                                CART</a>
                            {{-- <span class="float-right"><strong>Total</strong>:{{ $guarded['total'] }}</span> --}}
                        </li>
                    </ul>
                   
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <form action="{{ route('front.product.search')}}" type="get">
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search" name="query" />
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
</form>
    <!-- End Top Search -->


    <!-- body here -->
    @yield('body')

    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About ThewayShop</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p>
                                        <i class="fas fa-map-marker-alt"></i>Address: Michael I.
                                        Days 3756 <br />Preston Street Wichita,<br />
                                        KS 67213
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fas fa-phone-square"></i>Phone:
                                        <a href="tel:+1-888705770">+1-888 705 770</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fas fa-envelope"></i>Email:
                                        <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">
            All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a>
        </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none">&uarr;</a>



</body>
<!-- ALL JS FILES -->
<script src="front/js/jquery-3.2.1.min.js"></script>
<script src="front/js/popper.min.js"></script>
<script src="front/js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="front/js/jquery.superslides.min.js"></script>
<script src="front/js/bootstrap-select.js"></script>
<script src="front/js/inewsticker.js"></script>
<script src="front/js/bootsnav.js"></script>
<script src="front/js/front/images-loded.min.js"></script>
<script src="front/js/isotope.min.js"></script>
<script src="front/js/owl.carousel.min.js"></script>
<script src="front/js/baguetteBox.min.js"></script>
<script src="front/js/form-validator.min.js"></script>
<script src="front/js/contact-form-script.js"></script>
<script src="front/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    < /html>

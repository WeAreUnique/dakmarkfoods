<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/images/apple-touch-icon-114x114.png')}}">
    
    <!-- CSS -->        
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vertical-rhythm.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('frontend/css/rev-slider.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('frontend/rs-plugin/css/settings.css') }}" media="screen" />  
    
</head>
<body>

    <!-- Page Loader -->        
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- End Page Loader -->
    
    <!-- Page Wrap -->
    <div class="page" id="top">
        <!-- SITE LANGUAGE -->
        <div class="lang-select-content">
            <ul class="lang-select-list">
                <li><a href="#" class="lang-select"><i class="flag-icon flag-icon-vn"></i> Tiếng Việt </i></a></li>
                <li><a href="#" class="lang-select"><i class="flag-icon flag-icon-us"></i> English </i></a></li>
                <li><a href="#" class="lang-select"><i class="flag-icon flag-icon-cn"></i> 中文 </i></a></li>
                <li><a href="#" class="lang-select"><i class="flag-icon flag-icon-jp"></i> 日本語 </i></a></li>
                <li><a href="#" class="lang-select"><i class="flag-icon flag-icon-kr"></i> 한국어 </i></a></li>
            </ul>
        </div>
        <!-- END SITE LANGUAGE -->

        <!-- SITE SEARCH OVERLAY -->
        <div id="full-screen-search">
            <button type="button" class="close">×</button>
            <form>
                <div class="seach-input">
                    <input type="text" class="search" id="s" name="s" placeholder="Nhập nội dung" autofocus="autofocus" value="">
                </div>
            </form>
        </div>
        <!-- END SITE SEARCH OVERLAY -->

        <!-- Fullwidth Slider -->
        <div class="home-section fullwidth-slider bg-dark" id="home">
            <!-- Slide Item -->
            <section class="home-section bg-scroll fixed-height-small bg-dark-alfa-20" data-background="{{ asset('frontend/images/home-sample/01.jpg') }}">
                <div class="js-height-parent container">
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                            <div class="hs-line-8 no-transp mb-40 mb-xs-10">
                                Hello & Welcome
                            </div>
                            <div class="hs-line-14 mb-50 mb-xs-10">
                                We are Rhythm
                            </div>
                            <div class="local-scroll">
                                <a href="pages-pricing-1.html" class="btn btn-mod btn-border-w btn-circle btn-small">Get Pricing</a>
                                <span class="hidden-xs">&nbsp;</span>
                                <a href="#about" class="btn btn-mod btn-border-w btn-circle btn-small">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Hero Content -->
                </div>
            </section>
            <!-- End Slide Item -->
            <!-- Slide Item -->
            <section class="home-section bg-scroll fixed-height-small bg-dark-alfa-20" data-background="{{ asset('frontend/images/home-sample/02.jpg') }}">
                <div class="js-height-parent container">
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                            <h1 class="hs-line-8 no-transp mb-50 mb-xs-10">
                                We Are just crative people
                            </h1>
                            <h2 class="hs-line-14 mb-50 mb-xs-10">
                                Rhythm Creative Studio
                            </h2>
                            <div class="local-scroll">
                                <a href="#about" class="btn btn-mod btn-border-w btn-small btn-circle hidden-xs">See More</a>
                                <span class="hidden-xs">&nbsp;</span>
                                <a href="http://vimeo.com/50201327" class="btn btn-mod btn-border-w btn-small btn-circle lightbox mfp-iframe">Play Reel</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Hero Content -->
                </div>
            </section>
            <!-- End Slide Item -->
            <!-- Slide Item -->
            <section class="home-section bg-scroll fixed-height-small bg-dark-alfa-20" data-background="{{ asset('frontend/images/home-sample/03.jpg') }}">
                <div class="js-height-parent container">
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                            <h2 class="hs-line-8 no-transp mb-50 mb-xs-10">
                                Create your dream with
                            </h2>
                            <h1 class="hs-line-14 mb-50 mb-xs-10">
                                Amazing Design
                            </h1>
                            <div>
                                <a href="pages-pricing-1.html" class="btn btn-mod btn-border-w btn-small btn-circle">Get Pricing</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Hero Content -->
                </div>
            </section>
            <!-- End Slide Item -->
        </div>
        <!-- End Fullwidth Slider -->

        <!-- Navigation panel -->
        <nav class="main-nav stick-fixed">
            <div class="full-wrapper relative clearfix">
                <!-- Logo ( * your text or image into link tag *) -->
                <div class="nav-logo-wrap local-scroll">
                    <a href="#top" class="logo">
                        <img src="{{ asset('frontend/images/DakMark-foods.png') }}" alt="" />
                    </a>
                </div>
                <div class="mobile-nav">
                    <i class="fa fa-bars"></i>
                </div>
                <!-- Main Menu -->
                <!-- Main Menu -->
                <div class="inner-nav desktop-nav">
                    <ul class="clearlist">
                        <!-- Item With Sub -->
                        <li>
                            <a href="#" class="mn-has-sub active">Trang Chủ <i class="fa fa-angle-down"></i></a>
                            <!-- Sub Multilevel -->
                            <ul class="mn-sub mn-has-multi">
                                <!-- Sub Column -->
                                <li>
                                    <a href="mp-index-10.html">Giới Thiệu</a>
                                </li>
                                <li>
                                    <a href="mp-index-10.html">Giới Thiệu</a>
                                </li>
                                <!-- End Sub Column -->
                            </ul>
                            <!-- End Sub Multilevel -->
                        </li>
                        <!-- End Item With Sub -->
                        <!-- Item With Sub -->
                        <li>
                            <a href="#" class="mn-has-sub">Nông Sản <i class="fa fa-angle-down"></i></a>
                            <!-- Sub Multilevel -->
                            <ul class="mn-sub mn-has-multi">
                                <!-- Sub Column -->
                                <li>
                                    <a href="mp-index-10.html">Giới Thiệu</a>
                                </li>
                                <li>
                                    <a href="mp-index-10.html">Giới Thiệu</a>
                                </li>
                                <!-- End Sub Column -->
                            </ul>
                            <!-- End Sub Multilevel -->
                        </li>
                        <!-- End Item With Sub -->
                        <!-- Item With Sub -->
                        <li>
                            <a href="#" class="mn-has-sub">ĐẶC SẢN <i class="fa fa-angle-down"></i></a>
                            <!-- Sub Multilevel -->
                            <ul class="mn-sub mn-has-multi">
                                <!-- Sub Column -->
                                <li>
                                    <a href="mp-index-10.html">Giới Thiệu</a>
                                </li>
                                <li>
                                    <a href="mp-index-10.html">Giới Thiệu</a>
                                </li>
                                <!-- End Sub Column -->
                            </ul>
                            <!-- End Sub Multilevel -->
                        </li>
                        <!-- End Item With Sub -->
                        <!-- Item With Sub -->
                        <li>
                            <a href="#" class="mn-has-sub">Đặc Biệt <i class="fa fa-angle-down"></i></a>
                            <!-- Sub Multilevel -->
                            <ul class="mn-sub mn-has-multi">
                                <!-- Sub Column -->
                                <li>
                                    <a href="mp-index-10.html">Giới Thiệu</a>
                                </li>
                                <li>
                                    <a href="mp-index-10.html">Giới Thiệu</a>
                                </li>
                                <!-- End Sub Column -->
                            </ul>
                            <!-- End Sub Multilevel -->
                        </li>
                        <!-- End Item With Sub -->
                        <!-- Item With Sub -->
                        <li>
                            <a href="#">Khuyến Mãi</a>
                        </li>
                        <!-- End Item With Sub -->
                        <!-- Divider -->
                        <li><a>&nbsp;</a></li>
                        <!-- End Divider -->
                        <!-- Favorite -->
                        <li>
                            <a href="#" class="align-center"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <!-- End Favorite -->
                        <!-- Search -->
                        <li>
                            <a id="site-search" href="#" class="align-center"><i class="fa fa-search"></i></a>
                        </li>
                        <!-- End Search -->
                        <!-- Cart -->
                        <li>
                            <a href="#" class="align-center"><i class="fa fa-shopping-cart"></i> (0)</a>
                        </li>
                        <!-- End Cart -->
                        <!-- User -->
                        <li>
                            <a href="#" class="align-center"><i class="fa fa-user-circle-o"></i> (0)</a>
                        </li>
                        <!-- End User -->
                        <!-- Languages -->
                        <li>
                            <a id="lang-select" class="align-center" href="#"><i class="flag-icon flag-icon-vn"></i></a>
                        </li>
                        <!-- End Languages -->
                    </ul>
                </div>
                <!-- End Main Menu -->
            </div>
        </nav>
        <!-- End Navigation panel -->

        <!-- Best Seller Product -->
        <section class="small-section pt-50 pb-30">
            <div class="container relative">
                <h2 class="section-title align-left mb-30 mb-sm-40">
                    SẢN PHẨM MUA NHIỀU
                    <a href="#" class="section-more right">xem thêm <i class="fa fa-angle-right"></i></a>
                </h2>
                <div class="row multi-columns-row">
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt=""></a>
                            <div class="intro-label">
                                <span class="label label-danger bg-red">30%</span>
                            </div>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">G-Star Polo Applique Jersey</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <del>$150.00</del>
                            &nbsp;
                            <strong>$94.75</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">Only &amp; Sons Pique Polo Shirt</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$28.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">Longline Long Sleeve T-shirt</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$39.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">Polo Shirt With Floral Sleeves</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$85.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt=""></a>
                            <div class="intro-label">
                                <span class="label label-danger bg-red">30%</span>
                            </div>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">G-Star Polo Applique Jersey</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <del>$150.00</del>
                            &nbsp;
                            <strong>$94.75</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">Only &amp; Sons Pique Polo Shirt</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$28.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">Longline Long Sleeve T-shirt</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$39.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">Polo Shirt With Floral Sleeves</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$85.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                </div>
            </div>
        </section>
        <!-- End Best Seller Product -->
        
        <!-- New Product -->
        <section class="small-section bg-gray-lighter pt-50 pb-30">
            <div class="container relative">
                <h2 class="section-title align-left mb-30 mb-sm-40">
                    SẢN PHẨM MỚI VỚI CAROUSEL
                    <a href="#" class="section-more right">xem thêm <i class="fa fa-angle-right"></i></a>
                </h2>
                <div class="row">
                    <div class="image-carousel owl-carousel">

                        <!-- Shop Item -->
                        <div>
                            <div class="post-prev-img p15">
                                <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-prev-title align-center">
                                <a href="#">Polo Shirt With Floral Sleeves</a>
                            </div>
                            <div class="post-prev-text align-center mb-0">
                                <strong>$85.99</strong>
                            </div>
                        </div>
                        <!-- End Shop Item -->
                        <!-- Shop Item -->
                        <div>
                            <div class="post-prev-img p15">
                                <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-prev-title align-center">
                                <a href="#">Polo Shirt With Floral Sleeves</a>
                            </div>
                            <div class="post-prev-text align-center mb-0">
                                <strong>$85.99</strong>
                            </div>
                        </div>
                        <!-- End Shop Item -->
                        <!-- Shop Item -->
                        <div>
                            <div class="post-prev-img p15">
                                <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-prev-title align-center">
                                <a href="#">Polo Shirt With Floral Sleeves</a>
                            </div>
                            <div class="post-prev-text align-center mb-0">
                                <strong>$85.99</strong>
                            </div>
                        </div>
                        <!-- End Shop Item -->
                        <!-- Shop Item -->
                        <div>
                            <div class="post-prev-img p15">
                                <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-prev-title align-center">
                                <a href="#">Polo Shirt With Floral Sleeves</a>
                            </div>
                            <div class="post-prev-text align-center mb-0">
                                <strong>$85.99</strong>
                            </div>
                        </div>
                        <!-- End Shop Item -->
                        <!-- Shop Item -->
                        <div>
                            <div class="post-prev-img p15">
                                <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-prev-title align-center">
                                <a href="#">Polo Shirt With Floral Sleeves</a>
                            </div>
                            <div class="post-prev-text align-center mb-0">
                                <strong>$85.99</strong>
                            </div>
                        </div>
                        <!-- End Shop Item -->
                    </div>
                </div>
                    
            </div>
        </section>
        <!-- End New Product -->

        <!-- Hot Product -->
        <section class="small-section pt-50 pb-30">
            <div class="container relative">
                <h2 class="section-title align-left mb-30 mb-sm-40">
                    SECTION KHÁC
                    <a href="#" class="section-more right">xem thêm <i class="fa fa-angle-right"></i></a>
                </h2>
                <div class="row multi-columns-row">
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt=""></a>
                            <div class="intro-label">
                                <span class="label label-danger bg-red">30%</span>
                            </div>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">G-Star Polo Applique Jersey</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <del>$150.00</del>
                            &nbsp;
                            <strong>$94.75</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">Only &amp; Sons Pique Polo Shirt</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$28.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">Longline Long Sleeve T-shirt</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$39.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="#"><img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="#">Polo Shirt With Floral Sleeves</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$85.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                </div>
            </div>
        </section>
        <!-- End New Product -->

        <!-- Product Categories -->
        <section class="small-section pt-20 pb-20 bg-gray-lighter danhmucsp">
            <div class="container relative">
                <h2 class="section-title mb-30 mb-sm-40">DANH MỤC SẢN PHẨM</h2>
                <div class="row multi-columns-row">
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    THỊT TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    CÁ TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    HOA QUẢ TƯƠI
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    HẠT COFFEE
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    THỊT TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    CÁ TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    THỊT TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    CÁ TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    HOA QUẢ TƯƠI
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    HẠT COFFEE
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    THỊT TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="#">
                                <img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    CÁ TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                </div>
            </div>
        </section>
        <!-- End Product Categories -->

        <!-- News -->
        <section class="small-section pt-50 pb-30">
            <div class="container relative">
                <h2 class="section-title align-left mb-30 mb-sm-40">
                    TIN TỨC/KHUYẾN MÃI
                    <a href="#" class="section-more right">xem thêm <i class="fa fa-angle-right"></i></a>
                </h2>
                <div class="row multi-columns-row">
                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40">
                        <div class="post-prev-img">
                            <a href="blog-single-sidebar-right.html"><img src="{{ asset('frontend/images/home-sample/hq.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title ">
                            <a href="">ĐÂY LÀ TIÊU ĐỀ</a>
                        </div>
                        <div class="post-prev-info ">
                            <a href="">Tuấn, Hiếu</a> | 30/10
                        </div>
                        <div class="post-prev-text">
                            Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
                        </div>
                        <div class="post-prev-more">
                            <a href="" class="btn btn-mod btn-gray btn-round">Đọc Ngay <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Post Item -->
                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40">
                        <div class="post-prev-img">
                            <a href="blog-single-sidebar-right.html"><img src="{{ asset('frontend/images/home-sample/gift.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title ">
                            <a href="">ĐÂY LÀ TIÊU ĐỀ</a>
                        </div>
                        <div class="post-prev-info ">
                            <a href="">Tuấn, Hiếu</a> | 30/10
                        </div>
                        <div class="post-prev-text">
                            Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
                        </div>
                        <div class="post-prev-more">
                            <a href="" class="btn btn-mod btn-gray btn-round">Đọc Ngay <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Post Item -->
                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40">
                        <div class="post-prev-img">
                            <a href="blog-single-sidebar-right.html"><img src="{{ asset('frontend/images/home-sample/hot.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title ">
                            <a href="">ĐÂY LÀ TIÊU ĐỀ</a>
                        </div>
                        <div class="post-prev-info ">
                            <a href="">Tuấn, Hiếu</a> | 30/10
                        </div>
                        <div class="post-prev-text">
                            Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
                        </div>
                        <div class="post-prev-more">
                            <a href="" class="btn btn-mod btn-gray btn-round">Đọc Ngay <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Post Item -->
                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40">
                        <div class="post-prev-img">
                            <a href="blog-single-sidebar-right.html"><img src="{{ asset('frontend/images/home-sample/tb.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title ">
                            <a href="">ĐÂY LÀ TIÊU ĐỀ</a>
                        </div>
                        <div class="post-prev-info ">
                            <a href="">Tuấn, Hiếu</a> | 30/10
                        </div>
                        <div class="post-prev-text">
                            Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
                        </div>
                        <div class="post-prev-more">
                            <a href="" class="btn btn-mod btn-gray btn-round">Đọc Ngay <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Post Item -->
                </div>
            </div>
        </section>
        <!-- End News -->

        <section class="small-section bg-gray-lighter">
            <div class="container relative">
                <form class="form align-center" id="mailchimp" novalidate="true">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="section-title">ĐĂNG KÝ NHẬN BẢN TIN</h2>
                            <p><small>Đừng bỏ lỡ những sản phẩm hot và khuyến mãi siêu hấp dẫn</small></p>
                            <div class="mb-20">
                                <input placeholder="Enter Your Email" class="newsletter-field form-control input-md round mb-xs-10" type="email" pattern=".{5,100}" required="" name="EMAIL">
                                <button type="submit" class="btn btn-mod btn-medium btn-w btn-round mb-xs-10">
                                    Subscribe
                                </button>
                            </div>
                            <div class="form-tip">
                                <i class="fa fa-info-circle"></i> Chúng tôi sẻ không spam
                            </div>
                            <div id="subscribe-result"></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Foter -->
        <footer class="page-section bg-gray footer pb-20 pt-30 align-left">
            <div class="container">
                <div class="row align-left">
                    <!-- Widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget">
                            <h5 class="widget-title">DAKMARK FOODS</h5>
                            <div class="widget-body">
                                <ul class="clearlist widget-menu">
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Giới Thiệu</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Điều Khoản</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Liên Hệ</a>
                                    </li>
                                </ul>
                                <div class="mb-20 mt-20">
                                    <strong>ĐƯỢC CHỨNG NHẬN</strong>
                                    <a target="_blank" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=21571" rel="nofollow"><img alt="" title="" src="{{ asset('frontend/images/home-sample/1492058103818_8888090.png') }}" class="img-responsive"></a>
                                    <a target="_blank" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=21571" rel="nofollow"><img alt="" title="" src="{{ asset('frontend/images/home-sample/bo-cong-thuong.da-dang-ky.png') }}" class="img-responsive"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget -->
                    <!-- Widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget">
                            <h5 class="widget-title">HỖ TRỢ KHÁCH HÀNG</h5>
                            <div class="widget-body">
                                <ul class="clearlist widget-menu">
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Kiểm tra đơn hàng</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Chính sách thanh toán</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Chính sách giao hàng</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Chính sách đổi/trả hàng</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Câu hỏi thường gặp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget -->
                    <!-- Widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget">
                            <h5 class="widget-title">PHƯƠNG THỨC THANH TOÁN</h5>
                            <div class="widget-body">
                                <div class="phuongthucthanhtoan">
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-visa.svg">
                                    </span>
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-mastercard.svg">
                                    </span>
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-jcb.svg">
                                    </span>
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-cash.svg">
                                    </span>
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-internet-banking.svg">
                                    </span>
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-installment.svg">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <!-- End Widget -->
                    <!-- Widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget">
                            <h5 class="widget-title">CHI NHÁNH</h5>
                            <div class="widget-body">
                                <div class="widget-text clearfix">
                                    <div class="mb-20">CÔNG TY CỔ PHẦN DỊCH VỤ THƯƠNG MẠI DAKMARK</div>
                                    <div class="mb-20">
                                        <strong>TRỤ SỞ CHÍNH</strong>
                                        <p>Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh, Việt Nam</p>
                                    </div>
                                    <div class="mb-20">
                                        <strong>VĂN PHÒNG ĐẠI DIỆN</strong>
                                        <p>Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh, Việt Nam</p>
                                    </div>
                                    <div class="footer-social-links">
                                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                                        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
            </div>
            <!-- Top Link -->
            <div class="local-scroll">
                <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
            </div>
            <!-- End Top Link -->
        </footer>
        <!-- End Foter -->
    </div>

    <!-- <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    
                    <ul class="nav navbar-nav navbar-right">
                        
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>        
    <script type="text/javascript" src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.localScroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.viewport.mini.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
    **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/gmap3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.simple-text-rotator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/contact-form.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/rev-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/custom-js.js') }}"></script>
    <!-- FACEBOOK SUPPORT CHAT -->
    <script type="text/javascript">
    (function(d, s, id) {
        var z = d.createElement(s);
        z.type = "text/javascript";
        z.id = id;
        z.async = true;
        z.src = "//static.zotabox.com/2/a/2a6fc4c8863090a636c3e219109dbbc9/widgets.js";
        var sz = d.getElementsByTagName(s)[0];
        sz.parentNode.insertBefore(z, sz)
    }(document, "script", "zb-embed-code"));
    </script>
</body>
</html>

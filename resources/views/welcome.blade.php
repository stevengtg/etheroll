<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Version Two || Sellshop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="apple-touch-icon" href="apple-touch-icon.webp">
    <!-- Place favicon.ico in the root directory -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Lato:wght@300;400;700;900&display=swap"
        rel="stylesheet">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="{{ asset('css/jquery.simpleLens.css') }}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- nivo.slider css -->
    <link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- header section start -->
    <header class="header-one header-two">
        <div class="header-top-two">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12">
                        <div class="middel-top">
                            <div class="left floatleft">
                                <p><i class="mdi mdi-clock"></i> Mon-Fri : 09:00-19:00</p>
                            </div>
                        </div>
                        <div class="middel-top clearfix">
                            <ul class="clearfix right floatright">
                                <li>
                                    <a href="#"><i class="mdi mdi-account"></i></a>
                                    <ul>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="login.html">Registar</a></li>
                                        <li><a href="my-account.html">My account</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-settings"></i></a>
                                    <ul>
                                        <li><a href="my-account.html">My account</a></li>
                                        <li><a href="cart.html">My cart</a></li>
                                        <li><a href="wishlist.html">My wishlist</a></li>
                                        <li><a href="checkout.html">Check out</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="right floatright">
                                <form action="javascript:void(0)">
                                    <button type="submit"><i class="mdi mdi-magnify"></i></button>
                                    <input type="text" placeholder="Search within these results..." />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <a href="index.html"><img src="img/logo2.webp" alt="Sellshop" /></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="header-middel">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home version one</a></li>
                                            <li><a href="index-2.html">Home version two</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul class="magamenu">
                                            <li class="banner"><a href="shop.html"><img src="img/maga1.webp"
                                                        alt="" /></a></li>
                                            <li>
                                                <h5>men’s wear</h5>
                                                <ul>
                                                    <li><a href="#">Shirts & Top</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shemwear</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Sweaters</a></li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">Men Watch</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h5>women’s wear</h5>
                                                <ul>
                                                    <li><a href="#">Shirts & Tops</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shemwear</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Sweaters</a></li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">Women Watch</a></li>
                                                </ul>
                                            </li>
                                            <li class="banner"><a href="shop.html"><img src="img/maga2.webp"
                                                        alt="" /></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="product-grid.html">Product Grid View</a></li>
                                            <li><a href="product-list.html">Product List View</a></li>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="error-404.html">404 page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-style-1.html">Blog Style One</a></li>
                                            <li><a href="blog-style-2.html">Blog Style Two</a></li>
                                            <li><a href="single-blog.html">Single Blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu start -->
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index.html">Home</a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home version one</a></li>
                                                <li><a href="index-2.html">Home version two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Shop</a>
                                            <ul>
                                                <li>
                                                    <h5>men’s wear</h5>
                                                    <ul>
                                                        <li><a href="#">Shirts & Top</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shemwear</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Sweaters</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Men Watch</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h5>women’s wear</h5>
                                                    <ul>
                                                        <li><a href="#">Shirts & Tops</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shemwear</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Sweaters</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Women Watch</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="product-grid.html">Product Grid View</a></li>
                                                <li><a href="product-list.html">Product List View</a></li>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="error-404.html">404 page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul>
                                                <li><a href="blog-style-1.html">Blog Style One</a></li>
                                                <li><a href="blog-style-2.html">Blog Style Two</a></li>
                                                <li><a href="single-blog.html">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="cart-itmes">
                        <a class="cart-itme-a" href="cart.html">
                            <i class="mdi mdi-cart"></i>
                            02 items : <strong>$86.00</strong>
                        </a>
                        <div class="cartdrop">
                            <div class="sin-itme clearfix">
                                <i class="mdi mdi-close"></i>
                                <a class="cart-img" href="cart.html"><img src="img/cart/1.webp"
                                        alt="" /></a>
                                <div class="menu-cart-text">
                                    <a href="#">
                                        <h5>men’s black t-shirt</h5>
                                    </a>
                                    <span>Color : Black</span>
                                    <span>Size : SL</span>
                                    <strong>$122.00</strong>
                                </div>
                            </div>
                            <div class="sin-itme clearfix">
                                <i class="mdi mdi-close"></i>
                                <a class="cart-img" href="cart.html"><img src="img/cart/2.webp"
                                        alt="" /></a>
                                <div class="menu-cart-text">
                                    <a href="#">
                                        <h5>men’s black t-shirt</h5>
                                    </a>
                                    <span>Color : Black</span>
                                    <span>Size : SL</span>
                                    <strong>$132.00</strong>
                                </div>
                            </div>
                            <div class="total">
                                <span>total <strong>= $306.00</strong></span>
                            </div>
                            <a class="goto" href="cart.html">go to cart</a>
                            <a class="out-menu" href="checkout.html">Check out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->
    <!-- slider-section-start -->
    <div class="main-slider-one main-slider-two slider-area">
        <div id="wrapper">
            <div class="slider-wrapper">
                <div id="mainSlider" class="nivoSlider">
                    <img src="img/slider/home2/1.webp" alt="main slider" title="#htmlcaption" />
                    <img src="img/slider/home2/2.webp" alt="main slider" title="#htmlcaption2" />
                </div>
                <div id="htmlcaption" class="nivo-html-caption slider-caption">
                    <div class="container">
                        <div class="slider-left slider-right">
                            <div class="slide-text animated zoomInUp">
                                <h3>new collection</h3>
                                <h1>Men’s Fashion 2021</h1>
                            </div>
                            <div class="animated slider-btn fadeInUpBig">
                                <a class="shop-btn" href="shop.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                    <div class="container">
                        <div class="slider-left two-caption-text slider-right">
                            <div class="slide-text animated zoomInUp">
                                <h3>new collection</h3>
                                <h1>Men’s Fashion 2021</h1>
                                <span>Starting at $65.00. Don’t miss out!</span>
                            </div>
                            <div class="one-p animated bounceInLeft">
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                    interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</p>
                            </div>
                            <div class="animated slider-btn fadeInUpBig">
                                <a class="shop-btn" href="shop.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider section end -->
    <!-- collection section start -->
    <section class="collection-area collection-area2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-colect banner collect-one">
                        <a href="#"><img src="img/collect/4.webp" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="colect-text ">
                        <h4><a href="#">Fashion Collection 2021</a></h4>
                        <h5>big sale of the men 2021 fashion <br /> Up To 23% Off!</h5>
                        <a href="#">Shop Now <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                    <div class="collect-img banner margin single-colect">
                        <a href="#"><img src="img/collect/5.webp" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collect-img banner single-colect">
                        <a href="#"><img src="img/collect/6.webp" alt="" /></a>
                    </div>
                    <div class="colect-text ">
                        <h4><a href="#">Men’s Collection 2021</a></h4>
                        <p>There are many variations of passages of Lorem Ipsum avalabbut the majority have suffered
                            alteration in some form.</p>
                        <a href="#">Shop Now <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- collection section end -->
    <!-- featured-products section start -->
    <section class="single-products  products-two section-padding extra-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Featured Products</h2>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <ul class="load-list load-list-one">
                    <li>
                        <div class="row text-center">
                            <div class="col-md-6 col-lg-3">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>new</span>
                                        </div>
                                        <a href="#"><img src="img/products/16.webp" alt="Product Title" /></a>
                                        <div class="actions-btn">
                                            <a href="#"><i class="mdi mdi-cart"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"><i
                                                    class="mdi mdi-eye"></i></a>
                                            <a href="#"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-dsc">
                                        <p><a href="#">men’s Black t-shirt</a></p>
                                        <span>$65.20</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <div class="col-md-6 col-lg-3">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type sell">
                                            <span>sell</span>
                                        </div>
                                        <a href="#"><img src="img/products/17.webp" alt="Product Title" /></a>
                                        <div class="actions-btn">
                                            <a href="#"><i class="mdi mdi-cart"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"><i
                                                    class="mdi mdi-eye"></i></a>
                                            <a href="#"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-dsc">
                                        <p><a href="#">men’s White t-shirt</a></p>
                                        <span>$57.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <div class="col-md-6 col-lg-3 r-margin-top">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>-15%</span>
                                        </div>
                                        <a href="#"><img src="img/products/18.webp" alt="Product Title" /></a>
                                        <div class="actions-btn">
                                            <a href="#"><i class="mdi mdi-cart"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"><i
                                                    class="mdi mdi-eye"></i></a>
                                            <a href="#"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-dsc">
                                        <p><a href="#">men’s Blue t-shirt</a></p>
                                        <span>$56.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <div class="col-md-6 col-lg-3 r-margin-top">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="img/products/19.webp" alt="Product Title" /></a>
                                        <div class="actions-btn">
                                            <a href="#"><i class="mdi mdi-cart"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"><i
                                                    class="mdi mdi-eye"></i></a>
                                            <a href="#"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-dsc">
                                        <p><a href="#">men’s Grey t-shirt</a></p>
                                        <span>$96.20</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                    </li>
                    <li>
                        <div class="row text-center">
                            <div class="col-md-6 col-lg-3">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>new</span>
                                        </div>
                                        <a href="#"><img src="img/products/20.webp" alt="Product Title" /></a>
                                        <div class="actions-btn">
                                            <a href="#"><i class="mdi mdi-cart"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"><i
                                                    class="mdi mdi-eye"></i></a>
                                            <a href="#"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-dsc">
                                        <p><a href="#">men’s White t-shirt</a></p>
                                        <span>$165.20</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <div class="col-md-6 col-lg-3">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="img/products/21.webp" alt="Product Title" /></a>
                                        <div class="actions-btn">
                                            <a href="#"><i class="mdi mdi-cart"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"><i
                                                    class="mdi mdi-eye"></i></a>
                                            <a href="#"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-dsc">
                                        <p><a href="#">men’s white t-shirt</a></p>
                                        <span>$57.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <div class="col-md-6 col-lg-3 r-margin-top">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>new</span>
                                        </div>
                                        <a href="#"><img src="img/products/22.webp" alt="Product Title" /></a>
                                        <div class="actions-btn">
                                            <a href="#"><i class="mdi mdi-cart"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"><i
                                                    class="mdi mdi-eye"></i></a>
                                            <a href="#"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-dsc">
                                        <p><a href="#">men’s Black t-shirt</a></p>
                                        <span>$67.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <div class="col-md-6 col-lg-3 r-margin-top">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#"><img src="img/products/23.webp" alt="Product Title" /></a>
                                        <div class="actions-btn">
                                            <a href="#"><i class="mdi mdi-cart"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view"><i
                                                    class="mdi mdi-eye"></i></a>
                                            <a href="#"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-dsc">
                                        <p><a href="#">men’s Black t-shirt</a></p>
                                        <span>$77.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                    </li>
                </ul>
                <button id="load-more-one">Load More</button>
            </div>
        </div>
    </section>
    <!-- featured-products section end -->
    <!-- coming product section start -->
    <section class="coming-product coming-product2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-2">
                    <ul class="tab-menu nav nav-tabs padding">
                        <li><a class="active" href="#dress1" data-bs-toggle="tab"
                                data-bs-target="#dress1, #text1"><img src="img/coming/s1.webp" alt="" /></a>
                        </li>
                        <li><a href="#dress2" data-bs-toggle="tab" data-bs-target="#dress2,#text2"><img
                                    src="img/coming/s2.webp" alt="" /></a></li>
                    </ul>
                </div>
                <div class="col-md-7 col-lg-5">
                    <div class="text-center large-img tab-content">
                        <div class="tab-pane fade show active" id="dress1">
                            <img src="img/coming/l1.webp" alt="" />
                            <div class="count-text clearfix">
                                <ul id="countdown-1">
                                    <li>
                                        <p class="timeRefDays timedescription">days</p>
                                        <span class="days timenumbers">00</span>
                                    </li>
                                    <li>
                                        <p class="timeRefHours timedescription">hrs</p>
                                        <span class="hours timenumbers">00</span>
                                    </li>
                                    <li>
                                        <p class="timeRefMinutes timedescription">mins</p>
                                        <span class="minutes timenumbers">00</span>
                                    </li>
                                    <li>
                                        <p class="timeRefSeconds timedescription">secs</p>
                                        <span class="seconds timenumbers">00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dress2">
                            <img src="img/coming/l2.webp" alt="" />
                            <div class="count-text clearfix">
                                <ul id="countdown-2">
                                    <li>
                                        <p class="timeRefDays timedescription">days</p>
                                        <span class="days timenumbers">00</span>
                                    </li>
                                    <li>
                                        <p class="timeRefHours timedescription">hrs</p>
                                        <span class="hours timenumbers">00</span>
                                    </li>
                                    <li>
                                        <p class="timeRefMinutes timedescription">mins</p>
                                        <span class="minutes timenumbers">00</span>
                                    </li>
                                    <li>
                                        <p class="timeRefSeconds timedescription">secs</p>
                                        <span class="seconds timenumbers">00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="padding">
                        <div class="tab-content">
                            <div class="single-coming tab-pane fade show active" id="text1">
                                <h4><a href="#">The Maker usc Dress</a></h4>
                                <span><strong>$569.00</strong> <del>$669.00</del></span>
                                <p class="come-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does
                                    eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    venim, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoes
                                    tempor incididunt ut labore et dolore magna aliqua. consequat. Ut enim ad minim
                                    veniam.</p>
                                <ul class="color-size">
                                    <li><span>Size</span><strong>:</strong> <a href="#">SL</a><a
                                            href="#">ML</a><a href="#">Xl</a></li>
                                    <li><span>color</span><strong>:</strong> <a href="#">Red</a><a
                                            href="#">Grean</a><a href="#">Blue</a></li>
                                    <li><span>Brand</span><strong>:</strong>Crazy Fashion</li>
                                    <li><span>category</span><strong>:</strong>Fashion Men’s</li>
                                </ul>
                            </div>
                            <div class="single-coming tab-pane fade" id="text2">
                                <h4><a href="#">The Maker usc Dress</a></h4>
                                <span><strong>$569.00</strong> <del>$669.00</del></span>
                                <p class="come-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does
                                    eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    venim, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoes
                                    tempor incididunt ut labore et dolore magna aliqua. consequat. Ut enim ad minim
                                    veniam.</p>
                                <ul class="color-size">
                                    <li><span>Size</span><strong>:</strong> <a href="#">SL</a><a
                                            href="#">ML</a><a href="#">Xl</a></li>
                                    <li><span>color</span><strong>:</strong> <a href="#">Red</a><a
                                            href="#">Grean</a><a href="#">Blue</a></li>
                                    <li><span>Brand</span><strong>:</strong>Crazy Fashion</li>
                                    <li><span>category</span><strong>:</strong>Fashion Men’s</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- coming product section end -->
    <!-- tab-products section start -->
    <div class="tab-products single-products products-two section-padding extra-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <ul class="product-tab nav nav-tabs">
                            <li><a class="active" data-bs-toggle="tab" href="#arrival">New Arrival
                                    <span>//</span></a></li>
                            <li><a data-bs-toggle="tab" href="#popular">Popular Product <span>//</span></a></li>
                            <li><a data-bs-toggle="tab" href="#best">Best Seller</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center tab-content">
                <div class="tab-pane  fade show active" id="arrival">
                    <div class="wrapper">
                        <ul class="load-list load-list-two">
                            <li>
                                <div class="row text-center">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="img/products/20.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s White t-shirt</a></p>
                                                <span>$165.20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type sell">
                                                    <span>sell</span>
                                                </div>
                                                <a href="#"><img src="img/products/17.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$57.00 <del>$60.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>-15%</span>
                                                </div>
                                                <a href="#"><img src="img/products/21.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s white t-shirt</a></p>
                                                <span>$67.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/19.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Grey t-shirt</a></p>
                                                <span>$77.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/16.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$65.20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type sell">
                                                    <span>sell</span>
                                                </div>
                                                <a href="#"><img src="img/products/22.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$57.00 <del>$62.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/18.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$56.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/23.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$96.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="img/products/16.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s White t-shirt</a></p>
                                                <span>$165.20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/17.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$57.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/22.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$67.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/21.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$77.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </li>
                        </ul>
                        <button id="load-more-two">Load More</button>
                    </div>
                </div>
                <!-- arrival product end -->
                <div class="tab-pane fade" id="popular">
                    <div class="wrapper">
                        <ul class="load-list load-list-three">
                            <li>
                                <div class="row text-center">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/16.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$57.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/17.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s White t-shirt</a></p>
                                                <span>$67.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/18.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Blue t-shirt</a></p>
                                                <span>$77.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/19.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Grey t-shirt</a></p>
                                                <span>$77.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/20.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s white t-shirt</a></p>
                                                <span>$65.20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type sell">
                                                    <span>sell</span>
                                                </div>
                                                <a href="#"><img src="img/products/21.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$57.00 <del>$62.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/22.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$56.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/23.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$96.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="img/products/18.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s White t-shirt</a></p>
                                                <span>$165.20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/21.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s White t-shirt</a></p>
                                                <span>$57.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/23.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$67.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/19.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Grey t-shirt</a></p>
                                                <span>$77.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </li>
                        </ul>
                        <button id="load-more-three">Load More</button>
                    </div>
                </div>
                <!-- popular product end -->
                <div class="tab-pane fade" id="best">
                    <div class="wrapper">
                        <ul class="load-list load-list-four">
                            <li>
                                <div class="row text-center">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="img/products/21.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s White t-shirt</a></p>
                                                <span>$165.20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/13.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$57.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>-15%</span>
                                                </div>
                                                <a href="#"><img src="img/products/22.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$67.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/16.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$77.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/17.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$65.20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type sell">
                                                    <span>sell</span>
                                                </div>
                                                <a href="#"><img src="img/products/19.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Grey t-shirt</a></p>
                                                <span>$57.00 <del>$62.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/18.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s White t-shirt</a></p>
                                                <span>$56.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/20.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$96.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="img/products/23.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$165.20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="img/products/20.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s White t-shirt</a></p>
                                                <span>$165.20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/16.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Black t-shirt</a></p>
                                                <span>$57.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    <div class="col-md-6 col-lg-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="img/products/18.webp"
                                                        alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">men’s Blue t-shirt</a></p>
                                                <span>$77.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </li>
                        </ul>
                        <button id="load-more-four">Load More</button>
                    </div>
                </div>
                <!-- popular product end -->
            </div>
        </div>
    </div>
    <!-- tab-products section end -->
    <!-- blog section start -->
    <section class="latest-blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <ul class="load-list load-list-blog">
                    <li>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img src="img/blog/1.webp"
                                                alt="" /></a></div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">Fashion style fine arts drawing</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a
                                                href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 25, 2021</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img src="img/blog/2.webp"
                                                alt="" /></a></div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">women’s Fashion style 2021</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a
                                                href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 15, 2021</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img src="img/blog/3.webp"
                                                alt="" /></a></div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">women’s winter Fashion style</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a
                                                href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 22, 2021</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img src="img/blog/4.webp"
                                                alt="" /></a></div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">women’s winter Fashion style</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a
                                                href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 22, 2021</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img src="img/blog/5.webp"
                                                alt="" /></a></div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">Fashion style fine arts drawing</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a
                                                href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 25, 2021</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img src="img/blog/6.webp"
                                                alt="" /></a></div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">women’s Fashion style 2021</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a
                                                href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 15, 2021</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <button id="load-more-blog">Load More</button>
            </div>
        </div>
    </section>
    <!-- blog section end -->
    <!-- quick view start -->
    <div class="product-details quick-view modal animated zoomInUp" id="quick-view">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-table">
                        <div class="d-tablecell">
                            <div class="modal-dialog">
                                <div class="main-view modal-content">
                                    <div class="modal-footer" data-bs-dismiss="modal">
                                        <span>x</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-lg-4">
                                            <div class="quick-image">
                                                <div class="single-quick-image text-center">
                                                    <div class="list-img">
                                                        <div class="product-img tab-content">
                                                            <div class="simpleLens-container tab-pane fade show"
                                                                id="sin-1">
                                                                <div class="pro-type">
                                                                    <span>new</span>
                                                                </div>
                                                                <a class="simpleLens-image"
                                                                    data-lens-image="img/products/z1.webp"
                                                                    href="#"><img src="img/products/z1.webp"
                                                                        alt=""
                                                                        class="simpleLens-big-image"></a>
                                                            </div>
                                                            <div class="simpleLens-container tab-pane active fade show"
                                                                id="sin-2">
                                                                <div class="pro-type sell">
                                                                    <span>sell</span>
                                                                </div>
                                                                <a class="simpleLens-image"
                                                                    data-lens-image="img/products/z2.webp"
                                                                    href="#"><img src="img/products/z2.webp"
                                                                        alt=""
                                                                        class="simpleLens-big-image"></a>
                                                            </div>
                                                            <div class="simpleLens-container tab-pane fade show"
                                                                id="sin-3">
                                                                <div class="pro-type">
                                                                    <span>-15%</span>
                                                                </div>
                                                                <a class="simpleLens-image"
                                                                    data-lens-image="img/products/z3.webp"
                                                                    href="#"><img src="img/products/z3.webp"
                                                                        alt=""
                                                                        class="simpleLens-big-image"></a>
                                                            </div>
                                                            <div class="simpleLens-container tab-pane fade show"
                                                                id="sin-4">
                                                                <div class="pro-type">
                                                                    <span>new</span>
                                                                </div>
                                                                <a class="simpleLens-image"
                                                                    data-lens-image="img/products/z4.webp"
                                                                    href="#"><img src="img/products/z4.webp"
                                                                        alt=""
                                                                        class="simpleLens-big-image"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quick-thumb">
                                                    <ul class="product-slider nav">
                                                        <li><a data-bs-toggle="tab" href="#sin-1"> <img
                                                                    src="img/products/s1.webp" alt="quick view" />
                                                            </a></li>
                                                        <li><a class="active" data-bs-toggle="tab" href="#sin-2">
                                                                <img src="img/products/s2.webp" alt="small image" />
                                                            </a></li>
                                                        <li><a data-bs-toggle="tab" href="#sin-3"> <img
                                                                    src="img/products/s3.webp" alt="small image" />
                                                            </a></li>
                                                        <li><a data-bs-toggle="tab" href="#sin-4"> <img
                                                                    src="img/products/s4.webp" alt="small image" />
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-8">
                                            <div class="quick-right">
                                                <div class="list-text">
                                                    <h3>men’s White t-shirt</h3>
                                                    <span>Summer men’s fashion</span>
                                                    <div class="ratting floatright">
                                                        <p>( 27 Rating )</p>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star-half"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                    </div>
                                                    <h5><del>$79.30</del> $69.30</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have be suffered alteration in some form, by
                                                        injected humour, or randomised words which donot look even
                                                        slightly believable. If you are going to use a passage of Lorem
                                                        Ipsum, you neede be sure there isn't anything embarrassing
                                                        hidden in the middle of text. Lorem Ipsum is simply dummy text
                                                        of the printing and typesetting industry.</p>
                                                    <div class="all-choose">
                                                        <div class="s-shoose">
                                                            <h5>Color</h5>
                                                            <div class="color-select clearfix">
                                                                <span></span>
                                                                <span class="outline"></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                        <div class="s-shoose">
                                                            <h5>size</h5>
                                                            <div class="size-drop">
                                                                <div class="btn-group">
                                                                    <button type="button"
                                                                        class="btn">XL</button>
                                                                    <button type="button"
                                                                        class="btn dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <span class=""><i
                                                                                class="mdi mdi-chevron-down"></i></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Xl</a></li>
                                                                        <li><a href="#">SL</a></li>
                                                                        <li><a href="#">S</a></li>
                                                                        <li><a href="#">L</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="s-shoose">
                                                            <h5>qty</h5>
                                                            <form action="#">
                                                                <div class="plus-minus">
                                                                    <a class="dec qtybutton">-</a>
                                                                    <input type="text" value="02"
                                                                        name="qtybutton" class="plus-minus-box">
                                                                    <a class="inc qtybutton">+</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="list-btn">
                                                        <a href="#">add to cart</a>
                                                        <a href="#">wishlist</a>
                                                        <a href="#">zoom</a>
                                                    </div>
                                                    <div class="share-tag clearfix">
                                                        <ul class="blog-share floatleft">
                                                            <li>
                                                                <h5>share </h5>
                                                            </li>
                                                            <li><a href="#"><i
                                                                        class="mdi mdi-facebook"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="mdi mdi-twitter"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="mdi mdi-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-vimeo"></i></a>
                                                            </li>
                                                            <li><a href="#"><i
                                                                        class="mdi mdi-dribbble"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="mdi mdi-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quick view end -->
    <!-- footer section start -->
    <footer class="footer-two">
        <!-- brand logo area start -->
        <div class="brand-logo">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="barnd-bg">
                            <a href="#"><img src="img/brand/1.webp" alt="Brand Logo" /></a>
                            <a href="#"><img src="img/brand/2.webp" alt="Brand Logo" /></a>
                            <a href="#"><img src="img/brand/3.webp" alt="Brand Logo" /></a>
                            <a href="#"><img src="img/brand/4.webp" alt="Brand Logo" /></a>
                            <a href="#"><img src="img/brand/5.webp" alt="Brand Logo" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand logo section end -->
        <!-- social media section start -->
        <div class="social-media section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="newsletter newsletter2">
                            <h3>newsletter</h3>
                            <form action="#">
                                <input type="text" name="email" placeholder="Enter your email..." />
                                <button type="submit">subscribe</button>
                            </form>
                        </div>
                        <div class="social-icons">
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-google-plus"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-rss"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 offset-lg-1 col-lg-5">
                        <div class="newsletter get-touch">
                            <h3>get in touch</h3>
                            <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
                                <input type="text" name="con_name" placeholder="Enter your Name..." />
                                <input type="text" name="con_email" placeholder="Enter your email..." />
                                <textarea name="con_message" rows="2" placeholder="Enter your message...."></textarea>
                                <button type="submit">send your message</button>
                                <p class="form-message"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- social media section end -->
        <!-- footer-top area start -->
        <div class="footer-top section-padding">
            <div class="footer-dsc">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="single-text">
                                <div class="footer-title">
                                    <h4>Contact us</h4>
                                </div>
                                <div class="footer-text">
                                    <ul>
                                        <li>
                                            <i class="mdi mdi-map-marker"></i>
                                            <p>Your address goes here.</p>
                                            <p>Your address goes here.</p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-phone"></i>
                                            <p>0123456789</p>
                                            <p>0123456789</p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-email"></i>
                                            <p>demo@example.com</p>
                                            <p>demo@example.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-2 wide-mobile">
                            <div class="single-text">
                                <div class="footer-title">
                                    <h4>my account</h4>
                                </div>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="login.html"><i class="mdi mdi-menu-right"></i>My Account</a>
                                        </li>
                                        <li><a href="wishlist.html"><i class="mdi mdi-menu-right"></i>My
                                                Wishlist</a></li>
                                        <li><a href="cart.html"><i class="mdi mdi-menu-right"></i>My Cart</a></li>
                                        <li><a href="login.html"><i class="mdi mdi-menu-right"></i>Sign In</a></li>
                                        <li><a href="checkout.html"><i class="mdi mdi-menu-right"></i>Check out</a>
                                        </li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Track My Orde</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-2 wide-mobile">
                            <div class="single-text">
                                <div class="footer-title">
                                    <h4>shipping</h4>
                                </div>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="contact.html"><i class="mdi mdi-menu-right"></i>New
                                                Products</a></li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Top Sellers</a></li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Manufactirers</a>
                                        </li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Suppliers</a></li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Specials</a></li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Availability</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 r-margin-top wide-mobile">
                            <div class="single-text">
                                <div class="footer-title">
                                    <h4>Information</h4>
                                </div>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="contact.html"><i class="mdi mdi-menu-right"></i>Return
                                                Exchange</a></li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Fast Delivery</a>
                                        </li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Online Shopping</a>
                                        </li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Shipping Guide</a>
                                        </li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Turm Of Use</a></li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i>Home Delivery</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 r-margin-top wide-mobile">
                            <div class="single-text">
                                <div class="footer-title">
                                    <h4>instagram</h4>
                                </div>
                                <div class="clearfix instagram">
                                    <ul>
                                        <li><a href="#"><img src="img/footer/in1.webp"
                                                    alt="Instagram" /></a></li>
                                        <li><a href="#"><img src="img/footer/in2.webp"
                                                    alt="Instagram" /></a></li>
                                        <li><a href="#"><img src="img/footer/in3.webp"
                                                    alt="Instagram" /></a></li>
                                        <li><a href="#"><img src="img/footer/in4.webp"
                                                    alt="Instagram" /></a></li>
                                        <li><a href="#"><img src="img/footer/in5.webp"
                                                    alt="Instagram" /></a></li>
                                        <li><a href="#"><img src="img/footer/in6.webp"
                                                    alt="Instagram" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top area end -->
        <!-- footer-bottom area start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copy-text"> © 2021 <strong>Sell-Shop</strong> Made With <i class="mdi mdi-heart"
                                style="color: red;" aria-hidden="true"></i> By <a class="company-name"
                                href="https://themeforest.net/user/codecarnival/portfolio">
                                <strong> CodeCarnival</strong></a>.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="#"><img src="img/footer/payment.webp" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area end -->
    </footer>
    <!-- footer section end -->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- nivo.slider JS -->
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <!-- simpleLens JS -->
    <script src="js/jquery.simpleLens.min.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- load-more js -->
    <script src="js/load-more.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>

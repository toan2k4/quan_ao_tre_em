@extends('layout.main')
@section('content')
     <!-- Hero Section Start -->
     <div class="hero-section section">

        <!-- Hero Slider Start -->
        <div class="hero-slider hero-slider-one fix">

            <!-- Hero Item Start -->
            <div class="hero-item" style="background-image: url(<?= BASE_URL ?>public/client/assets/images/hero/hero-1.jpg)">

                <!-- Hero Content -->
                <div class="hero-content">

                    <h1>Get 35% off <br>Latest Baby Product</h1>
                    <a href="#">SHOP NOW</a>

                </div>

            </div><!-- Hero Item End -->

            <!-- Hero Item Start -->
            <div class="hero-item" style="background-image: url(<?= BASE_URL ?>public/client/assets/images/hero/hero-2.jpg)">

                <!-- Hero Content -->
                <div class="hero-content">

                    <h1>Get 35% off <br>Latest Baby Product</h1>
                    <a href="#">SHOP NOW</a>

                </div>

            </div><!-- Hero Item End -->

        </div><!-- Hero Slider End -->

    </div><!-- Hero Section End -->

    <!-- Banner Section Start -->
    <div class="banner-section section mt-40">
        <div class="container-fluid">
            <div class="row row-10 mbn-20">

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <div class="banner banner-1 content-left content-middle">

                        <a href="#" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/banner/banner-1.jpg" alt="Banner Image"></a>

                        <div class="content">
                            <h1>New Arrival <br>Baby’s Shoe <br>GET 30% OFF</h1>
                            <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <a href="#" class="banner banner-2">

                        <img src="<?= BASE_URL ?>public/client/assets/images/banner/banner-2.jpg" alt="Banner Image">

                        <div class="content bg-theme-one">
                            <h1>New Toy’s for your Baby</h1>
                        </div>

                        <span class="banner-offer">25% off</span>

                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <div class="banner banner-1 content-left content-top">

                        <a href="#" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/banner/banner-3.jpg" alt="Banner Image"></a>

                        <div class="content">
                            <h1>Trendy <br>Collections</h1>
                            <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- Banner Section End -->

    <!-- Product Section Start -->
    <div class="product-section section section-padding">
        <div class="container">

            <div class="row">
                <div class="section-title text-center col mb-30">
                    <h1>Popular Products</h1>
                    <p>All popular product find here</p>
                </div>
            </div>

            <div class="row mbn-40">

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="<?= BASE_URL ?>public/client/assets/images/product/product-1.jpg" alt="Image">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>add to cart</button>
                                        <button>add to wishlist</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.html">Tmart Baby Dress</a></h4>

                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                    <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                    <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                </div>

                                <div class="content-right">
                                    <span class="price">$25</span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="<?= BASE_URL ?>public/client/assets/images/product/product-2.jpg" alt="Image">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>add to cart</button>
                                        <button>add to wishlist</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.html">Jumpsuit Outfits</a></h4>

                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                    <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                    <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                </div>

                                <div class="content-right">
                                    <span class="price">$09</span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="<?= BASE_URL ?>public/client/assets/images/product/product-3.jpg" alt="Image">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>add to cart</button>
                                        <button>add to wishlist</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.html">Smart Shirt</a></h4>

                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                    <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                    <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                </div>

                                <div class="content-right">
                                    <span class="price">$18</span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="<?= BASE_URL ?>public/client/assets/images/product/product-4.jpg" alt="Image">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>add to cart</button>
                                        <button>add to wishlist</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.html">Kids Shoe</a></h4>

                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                    <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                    <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                </div>

                                <div class="content-right">
                                    <span class="price">$15</span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="<?= BASE_URL ?>public/client/assets/images/product/product-5.jpg" alt="Image">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>add to cart</button>
                                        <button>add to wishlist</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.html"> Bowknot Bodysuit</a></h4>

                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                    <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                    <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                </div>

                                <div class="content-right">
                                    <span class="price">$12</span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="<?= BASE_URL ?>public/client/assets/images/product/product-6.jpg" alt="Image">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>add to cart</button>
                                        <button>add to wishlist</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.html">Striped T-Shirt</a></h4>

                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                    <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                    <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                </div>

                                <div class="content-right">
                                    <span class="price">$12</span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="<?= BASE_URL ?>public/client/assets/images/product/product-7.jpg" alt="Image">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>add to cart</button>
                                        <button>add to wishlist</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.html">Kislen Jak Tops</a></h4>

                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                    <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                    <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                </div>

                                <div class="content-right">
                                    <span class="price">$29</span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="<?= BASE_URL ?>public/client/assets/images/product/product-8.jpg" alt="Image">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>add to cart</button>
                                        <button>add to wishlist</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="single-product.html">Lattic Shirt</a></h4>

                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                    <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                    <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                </div>

                                <div class="content-right">
                                    <span class="price">$08</span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div><!-- Product Section End -->

    <!-- Banner Section Start -->
    <div class="banner-section section section-padding pt-0 fix">
        <div class="row row-5 mbn-10">

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <div class="banner banner-3">

                    <a href="#" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/banner/banner-4.jpg" alt="Banner Image"></a>

                    <div class="content" style="background-image: url(<?= BASE_URL ?>public/client/assets/images/banner/banner-3-shape.png)">
                        <h1>New Arrivals</h1>
                        <h2>Up to 35% off</h2>
                        <h4>2 - 5 Years</h4>
                    </div>

                    <a href="#" class="shop-link" data-hover="SHOP NOW">SHOP NOW</a>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <div class="banner banner-4">

                    <a href="#" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/banner/banner-5.jpg" alt="Banner Image"></a>

                    <div class="content">
                        <div class="content-inner">
                            <h1>Online Shopping</h1>
                            <h2>Flat 25% off <br>New Trend for 2022</h2>
                            <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <div class="banner banner-5">

                    <a href="#" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/banner/banner-6.jpg" alt="Banner Image"></a>

                    <div class="content" style="background-image: url(<?= BASE_URL ?>public/client/assets/images/banner/banner-5-shape.png)">
                        <h1>Collection for <br>Baby Girl’s</h1>
                        <h2>Flat 25% off</h2>
                    </div>

                    <a href="#" class="shop-link" data-hover="SHOP NOW">SHOP NOW</a>

                </div>
            </div>

        </div>
    </div><!-- Banner Section End -->

    <!-- Product Section Start -->
    <div class="product-section section section-padding pt-0">
        <div class="container">
            <div class="row mbn-40">

                <div class="col-lg-4 col-md-6 col-12 mb-40">

                    <div class="row">
                        <div class="section-title text-start col mb-30">
                            <h1>Best Deal</h1>
                            <p>Exclusive deals for you</p>
                        </div>
                    </div>

                    <div class="best-deal-slider w-100">

                        <div class="slide-item">
                            <div class="best-deal-product">

                                <div class="image"><img src="<?= BASE_URL ?>public/client/assets/images/product/best-deal-1.jpg" alt="Image"></div>

                                <div class="content-top">

                                    <div class="content-top-left">
                                        <h4 class="title"><a href="#">2 Piece Shirt Set</a></h4>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>

                                    <div class="content-top-right">
                                        <span class="price">$13 <span class="old">$28</span></span>
                                    </div>

                                </div>

                                <div class="content-bottom">
                                    <div class="countdown" data-countdown="2023/06/20"></div>
                                    <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                                </div>

                            </div>
                        </div>

                        <div class="slide-item">
                            <div class="best-deal-product">

                                <div class="image"><img src="<?= BASE_URL ?>public/client/assets/images/product/best-deal-2.jpg" alt="Image"></div>

                                <div class="content-top">

                                    <div class="content-top-left">
                                        <h4 class="title"><a href="#">Kelly Shirt Set</a></h4>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>

                                    <div class="content-top-right">
                                        <span class="price">$09 <span class="old">$25</span></span>
                                    </div>

                                </div>

                                <div class="content-bottom">
                                    <div class="countdown" data-countdown="2023/06/20"></div>
                                    <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 col-md-6 col-12 ps-3 ps-lg-4 ps-xl-5 mb-40">

                    <div class="row">
                        <div class="section-title text-start col mb-30">
                            <h1>On Sale Products</h1>
                            <p>All featured product find here</p>
                        </div>
                    </div>

                    <div class="small-product-slider row row-7 mbn-40">

                        <div class="col mb-40">

                            <div class="on-sale-product">
                                <a href="single-product.html" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/product/on-sale-1.jpg" alt="Image"></a>
                                <div class="content text-center">
                                    <h4 class="title"><a href="single-product.html">Skily Girld Dress</a></h4>
                                    <span class="price">$19 <span class="old">$35</span></span>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col mb-40">

                            <div class="on-sale-product">
                                <a href="single-product.html" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/product/on-sale-2.jpg" alt="Image"></a>
                                <div class="content text-center">
                                    <h4 class="title"><a href="single-product.html">Kelly Shirt Set</a></h4>
                                    <span class="price">$08 <span class="old">$25</span></span>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col mb-40">

                            <div class="on-sale-product">
                                <a href="single-product.html" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/product/on-sale-3.jpg" alt="Image"></a>
                                <div class="content text-center">
                                    <h4 class="title"><a href="single-product.html">Sleeveless Tops</a></h4>
                                    <span class="price">$05 <span class="old">$12</span></span>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col mb-40">

                            <div class="on-sale-product">
                                <a href="single-product.html" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/product/on-sale-4.jpg" alt="Image"></a>
                                <div class="content text-center">
                                    <h4 class="title"><a href="single-product.html">Babysuit Bundle</a></h4>
                                    <span class="price">$25 <span class="old">$45</span></span>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col mb-40">

                            <div class="on-sale-product">
                                <a href="single-product.html" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/product/on-sale-5.jpg" alt="Image"></a>
                                <div class="content text-center">
                                    <h4 class="title"><a href="single-product.html">Xshuai Baby Frock</a></h4>
                                    <span class="price">$13 <span class="old">$28</span></span>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col mb-40">

                            <div class="on-sale-product">
                                <a href="single-product.html" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/product/on-sale-6.jpg" alt="Image"></a>
                                <div class="content text-center">
                                    <h4 class="title"><a href="single-product.html">Stylish Hat</a></h4>
                                    <span class="price">$03 <span class="old">$10</span></span>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col mb-40">

                            <div class="on-sale-product">
                                <a href="single-product.html" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/product/on-sale-7.jpg" alt="Image"></a>
                                <div class="content text-center">
                                    <h4 class="title"><a href="single-product.html">Aolvo Kids Munch</a></h4>
                                    <span class="price">$25 <span class="old">$35</span></span>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col mb-40">

                            <div class="on-sale-product">
                                <a href="single-product.html" class="image"><img src="<?= BASE_URL ?>public/client/assets/images/product/on-sale-8.jpg" alt="Image"></a>
                                <div class="content text-center">
                                    <h4 class="title"><a href="single-product.html">Tmart Baby Dress</a></h4>
                                    <span class="price">$48 <span class="old">$65</span></span>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div><!-- Product Section End -->

    <!-- Feature Section Start -->
    <div class="feature-section bg-theme-two section section-padding fix" style="background-image: url(<?= BASE_URL ?>public/client/assets/images/pattern/pattern-dot.png);">
        <div class="container">
            <div class="feature-wrap row justify-content-between mbn-30">

                <div class="col-md-4 col-12 mb-30">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="<?= BASE_URL ?>public/client/assets/images/feature/feature-1.png" alt="Image"></div>
                        <div class="content">
                            <h3>Free Shipping</h3>
                            <p>Start from $100</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-12 mb-30">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="<?= BASE_URL ?>public/client/assets/images/feature/feature-2.png" alt="Image"></div>
                        <div class="content">
                            <h3>Money Back Guarantee</h3>
                            <p>Back within 25 days</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-12 mb-30">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="<?= BASE_URL ?>public/client/assets/images/feature/feature-3.png" alt="Image"></div>
                        <div class="content">
                            <h3>Secure Payment</h3>
                            <p>Payment Security</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- Feature Section End -->

    <!-- Blog Section Start -->
    <div class="blog-section section section-padding">
        <div class="container">
            <div class="row mbn-40">

                <div class="col-xl-6 col-lg-5 col-12 mb-40">

                    <div class="row">
                        <div class="section-title text-start col mb-30">
                            <h1>CLIENTS REVIEW</h1>
                            <p>Clients says abot us</p>
                        </div>
                    </div>

                    <div class="row mbn-40">

                        <div class="col-12 mb-40">
                            <div class="testimonial-item">
                                <p>Jadusona is one of the most exclusive Baby shop in the wold, where you can find all product for your baby that your want to buy for your baby. I recomanded this shop all of you</p>
                                <div class="testimonial-author">
                                    <img src="<?= BASE_URL ?>public/client/assets/images/testimonial/testimonial-1.png" alt="Image">
                                    <div class="content">
                                        <h4>Zacquline Smith</h4>
                                        <p>CEO, Momens Group</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-40">
                            <div class="testimonial-item">
                                <p>Jadusona is one of the most exclusive Baby shop in the wold, where you can find all product for your baby that your want to buy for your baby. I recomanded this shop all of you</p>
                                <div class="testimonial-author">
                                    <img src="<?= BASE_URL ?>public/client/assets/images/testimonial/testimonial-2.png" alt="Image">
                                    <div class="content">
                                        <h4>Nusaha Williams</h4>
                                        <p>CEO, Momens Group</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xl-6 col-lg-7 col-12 mb-40">

                    <div class="row">
                        <div class="section-title text-start col mb-30">
                            <h1>FROM THE BLOG</h1>
                            <p>Find all latest update here</p>
                        </div>
                    </div>

                    <div class="row mbn-40">

                        <div class="col-12 mb-40">
                            <div class="blog-item">
                                <div class="image-wrap">
                                    <h4 class="date">May <span>25</span></h4>
                                    <a class="image" href="single-blog.html"><img src="<?= BASE_URL ?>public/client/assets/images/blog/blog-1.jpg" alt="Image"></a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-blog.html">Lates and new Trens for baby fashion</a></h4>
                                    <div class="desc">
                                        <p>Jadusona is one of the most of a exclusive Baby shop in the</p>
                                    </div>
                                    <ul class="meta">
                                        <li><a href="#"><img src="<?= BASE_URL ?>public/client/assets/images/blog/blog-author-1.jpg" alt="Blog Author">Muhin</a></li>
                                        <li><a href="#">25 Likes</a></li>
                                        <li><a href="#">05 Views</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-40">
                            <div class="blog-item">
                                <div class="image-wrap">
                                    <h4 class="date">May <span>20</span></h4>
                                    <a class="image" href="single-blog.html"><img src="<?= BASE_URL ?>public/client/assets/images/blog/blog-2.jpg" alt="Image"></a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-blog.html">New Collection New Trend all New Style</a></h4>
                                    <div class="desc">
                                        <p>Jadusona is one of the most of a exclusive Baby shop in the</p>
                                    </div>
                                    <ul class="meta">
                                        <li><a href="#"><img src="<?= BASE_URL ?>public/client/assets/images/blog/blog-author-2.jpg" alt="Blog Author">Takiya</a></li>
                                        <li><a href="#">25 Likes</a></li>
                                        <li><a href="#">05 Views</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div><!-- Blog Section End -->

    <!-- Brand Section Start -->
    <div class="brand-section section section-padding pt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="brand-slider">

                    <div class="brand-item col">
                        <img src="<?= BASE_URL ?>public/client/assets/images/brands/brand-1.png" alt="Image">
                    </div>

                    <div class="brand-item col">
                        <img src="<?= BASE_URL ?>public/client/assets/images/brands/brand-2.png" alt="Image">
                    </div>

                    <div class="brand-item col">
                        <img src="<?= BASE_URL ?>public/client/assets/images/brands/brand-3.png" alt="Image">
                    </div>

                    <div class="brand-item col">
                        <img src="<?= BASE_URL ?>public/client/assets/images/brands/brand-4.png" alt="Image">
                    </div>

                    <div class="brand-item col">
                        <img src="<?= BASE_URL ?>public/client/assets/images/brands/brand-5.png" alt="Image">
                    </div>

                    <div class="brand-item col">
                        <img src="<?= BASE_URL ?>public/client/assets/images/brands/brand-6.png" alt="Image">
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Brand Section End -->
@endsection
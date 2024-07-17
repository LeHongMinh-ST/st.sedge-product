@extends('client.layouts.master')

@section('title')
    home
@endsection

@section('content')
{{-- <main id="main-content">
    <!-- home-slider start -->
    <section class="home-slider-area section-ptb" style="background-image: url('img/slider/home4-bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home-slider-info">
                        <div class="slider-block slider-title">
                            <div class="home-slider-title">
                                <span class="sub-title">Rubber plant get 30% off</span>
                                <h2>Grow green and be safe</h2>
                                <a href="collection.html" class="btn btn-style">Shop now</a>
                            </div>
                        </div>
                        <div class="slider-block slider-image">
                            <div class="home-slider-img">
                                <span class="image">
                                    <img src="img/slider/home4-slider.jpg" class="img-fluid" alt="home-slider">
                                </span>
                            </div>
                        </div>
                        <div class="slider-block slider-service">
                            <ul class="slider-ul">
                                <li class="slider-li">
                                    <div class="slider-main">
                                        <div class="slider-icon-img">
                                            <img src="img/slider/home4-icon1.png" class="img-fluid" alt="slider-icon1">
                                        </div>
                                        <div class="service-title">
                                            <h6>Feeding</h6>
                                            <p>Lorem ipsum is simply dummy text of the printing industry.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="slider-li">
                                    <div class="slider-main">
                                        <div class="slider-icon-img">
                                            <img src="img/slider/home4-icon2.png" class="img-fluid" alt="slider-icon2">
                                        </div>
                                        <div class="service-title">
                                            <h6>Light</h6>
                                            <p>Lorem ipsum is simply dummy text of the printing industry.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="slider-li">
                                    <div class="slider-main">
                                        <div class="slider-icon-img">
                                            <img src="img/slider/home4-icon3.png" class="img-fluid" alt="slider-icon3">
                                        </div>
                                        <div class="service-title">
                                            <h6>Care</h6>
                                            <p>Lorem ipsum is simply dummy text of the printing industry.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>
    <!-- home-slider end -->
    <!-- banner-grid start -->
    <section class="banner-grid section-pt">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-content">
                        <ul class="banner-ul">
                            <li class="banner-li">
                                <div class="banner-wrap banner-hover">
                                    <a href="javascript:void(0)" class="banner-img">
                                        <img src="img/banner/home4-banner-1.jpg" class="img-fluid" alt="banner1">
                                    </a>
                                    <div class="banner-wrapper">
                                        <div class="banner-info">
                                            <div class="banner-sub-title">
                                                <span>Outdoor plants</span>
                                            </div>
                                            <h2>Trees are  green gold</h2>
                                            <div class="banner-link">
                                                <a href="collection.html" class="btn btn-style">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-li">
                                <div class="banner-wrap banner-hover">
                                    <a href="javascript:void(0)" class="banner-img">
                                        <img src="img/banner/home4-banner-2.jpg" class="img-fluid" alt="banner2">
                                    </a>
                                    <div class="banner-wrapper">
                                        <div class="banner-info">
                                            <div class="banner-sub-title">
                                                <span>Indoor plant</span>
                                            </div>
                                            <h2>Trees are  important</h2>
                                            <div class="banner-link">
                                                <a href="collection.html" class="btn btn-style">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-grid end -->
    <!-- our-service start -->
    <section class="our-service section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="service-content">
                        <ul class="service-ul">
                            <li class="service-li">
                                <div class="service-block">
                                    <a href="javascript:void(0)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M8.965 18a3.5 3.5 0 0 1-6.93 0H1V6a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2h3l3 4.056V18h-2.035a3.501 3.501 0 0 1-6.93 0zM15 7H3v8.05a3.5 3.5 0 0 1 5.663.95h5.674c.168-.353.393-.674.663-.95zm2 6h4v-.285L18.992 10H17zm.5 6a1.5 1.5 0 1 0 0-3.001a1.5 1.5 0 0 0 0 3.001M7 17.5a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0" />
                                        </svg>
                                    </a>
                                    <div class="service-text">
                                        <h6>Free shipping</h6>
                                        <p>Orders from all item</p>
                                    </div>
                                </div>
                            </li>
                            <li class="service-li">
                                <div class="service-block">
                                    <a href="javascript:void(0)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="m11.005 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11.005 22l-5.38-3.668a6 6 0 0 1-2.62-4.958V5.235a1 1 0 0 1 .702-.954zm0 2.094l-6 1.876v7.404a4 4 0 0 0 1.558 3.169l.189.136l4.253 2.9L14.787 17h-4.782a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h7V5.97zm0 7.906v3h9v-3zm0-2h9V9h-9z" />
                                        </svg>
                                    </a>
                                    <div class="service-text">
                                        <h6>Secure payment</h6>
                                        <p>100% secure payment</p>
                                    </div>
                                </div>
                            </li>
                            <li class="service-li">
                                <div class="service-block">
                                    <a href="javascript:void(0)">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M14.178 9.76602C16.0334 9.35487 17.695 8.4283 19.0049 7.14424V4.00281H5.00488V7.14424C6.31472 8.4283 7.97632 9.35487 9.83175 9.76602C10.2621 9.01149 11.0741 8.50281 12.0049 8.50281C12.9357 8.50281 13.7477 9.01149 14.178 9.76602ZM14.3861 11.7666C14.0633 12.7737 13.1192 13.5028 12.0049 13.5028C10.8905 13.5028 9.94648 12.7737 9.6237 11.7666C7.92722 11.425 6.36024 10.7257 5.00488 9.75071V20.0028H19.0049V9.75071C17.6495 10.7257 16.0825 11.425 14.3861 11.7666ZM4.00488 2.00281H20.0049C20.5572 2.00281 21.0049 2.45052 21.0049 3.00281V21.0028C21.0049 21.5551 20.5572 22.0028 20.0049 22.0028H4.00488C3.4526 22.0028 3.00488 21.5551 3.00488 21.0028V3.00281C3.00488 2.45052 3.4526 2.00281 4.00488 2.00281Z"/></svg>
                                    </a>
                                    <div class="service-text">
                                        <h6>Secure packaging</h6>
                                        <p>Recyclable packaging</p>
                                    </div>
                                </div>
                            </li>
                            <li class="service-li">
                                <div class="service-block">
                                    <a href="javascript:void(0)">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22 17.0022C21.999 19.8731 19.9816 22.2726 17.2872 22.8616L16.6492 20.9476C17.8532 20.7511 18.8765 20.0171 19.4649 19H17C15.8954 19 15 18.1046 15 17V13C15 11.8954 15.8954 11 17 11H19.9381C19.446 7.05369 16.0796 4 12 4C7.92038 4 4.55399 7.05369 4.06189 11H7C8.10457 11 9 11.8954 9 13V17C9 18.1046 8.10457 19 7 19H4C2.89543 19 2 18.1046 2 17V12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12V12.9987V13V17V17.0013V17.0022ZM20 17V13H17V17H20ZM4 13V17H7V13H4Z"></path></svg>
                                    </a>
                                    <div class="service-text">
                                        <h6>24/7 Online support</h6>
                                        <p>Dedicated 24/7 support</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-service end -->
    <!-- home-about start -->
    <section class="about-area" style="background-image: url('img/banner/home4-about-bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-wrapper">
                        <div class="about-img about-wrap">
                            <div class="about-img-block">
                                <img src="img/banner/about-banner.png" class="img-fluid" alt="about-banner">
                            </div>
                        </div>
                        <div class="about-info about-wrap">
                            <div class="about-info-block">
                                <div class="section-capture">
                                    <div class="section-title">
                                        <span class="sub-title">About planets</span>
                                        <h2 class="title">The more you plant, the better planet you make.</h2>
                                        <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae explicabo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-info-btn">
                                <a href="about-us.html" class="btn btn-style">View more</a>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about end -->
    <!-- product-category start -->
    <section class="special-category section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="collection-category">
                        <div class="section-capture">
                            <div class="section-title">
                                <span class="sub-title">New plants</span>
                                <h2>Our products</h2>
                            </div>
                        </div>
                        <div class="collection-wrap">
                            <!-- product-area-title end -->
                            <div class="collection-slider swiper" id="new-product4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="img/product/home4-pro-1.jpg" class="img-fluid img1" alt="p-1">
                                                    <img src="img/product/home4-pro-2.jpg" class="img-fluid img2" alt="p-2">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Quickview</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Add to cart</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Majesty palm</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">$11.00</span>
                                                        <span class="old-price">$17.00</span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="img/product/home4-pro-3.jpg" class="img-fluid img1" alt="p-3">
                                                    <img src="img/product/home4-pro-4.jpg" class="img-fluid img2" alt="p-4">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Quickview</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Add to cart</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Howea forsteriana</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">$21.00</span>
                                                        <span class="old-price">$25.00</span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="img/product/home4-pro-5.jpg" class="img-fluid img1" alt="p-5">
                                                    <img src="img/product/home4-pro-6.jpg" class="img-fluid img2" alt="p-6">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Quickview</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Add to cart</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Ears cactus</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">$79.00</span>
                                                        <span class="old-price">$89.00</span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="img/product/home4-pro-7.jpg" class="img-fluid img1" alt="p-7">
                                                    <img src="img/product/home4-pro-8.jpg" class="img-fluid img2" alt="p-8">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Quickview</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Add to cart</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Majesty palm</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">$11.00</span>
                                                        <span class="old-price">$19.00</span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="img/product/home4-pro-9.jpg" class="img-fluid img1" alt="p-9">
                                                    <img src="img/product/home4-pro-10.jpg" class="img-fluid img2" alt="p-10">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Quickview</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Add to cart</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Wheat grass</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">$21.00</span>
                                                        <span class="old-price">$25.00</span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="img/product/home4-pro-11.jpg" class="img-fluid img1" alt="p-11">
                                                    <img src="img/product/home4-pro-12.jpg" class="img-fluid img2" alt="p-12">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Quickview</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Add to cart</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Strelitzia nicolai</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">$44.00</span>
                                                        <span class="old-price">49.00</span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                </div>
                            </div>
                            <!-- product-area-title end -->
                            <div class="collection-button">
                                <a href="collection.html" class="btn btn-style">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-category end -->
    <!-- home-service start -->
    <section class="home-service-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home-service-block">
                        <div class="swiper" id="service-slider4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-prev">
                                    <div class="service-main">
                                        <div class="service-image">
                                            <a href="about-us-2.html" class="image-block">
                                                <span class="image">
                                                    <img src="img/service/home4-service1.jpg" class="img-fluid" alt="service1">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="service-content">
                                            <div class="content-block">
                                                <a href="about-us-2.html" class="title">Quality products</a>
                                                <p class="desc">Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt aliqua.</p>
                                                <a href="about-us-2.html" class="service-link">Explore now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev">
                                    <div class="service-main">
                                        <div class="service-image">
                                            <a href="about-us-2.html" class="image-block">
                                                <span class="image">
                                                    <img src="img/service/home4-service2.jpg" class="img-fluid" alt="service2">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="service-content">
                                            <div class="content-block">
                                                <a href="about-us-2.html" class="title">On tree care</a>
                                                <p class="desc">Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt aliqua.</p>
                                                <a href="about-us-2.html" class="service-link">Explore now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev">
                                    <div class="service-main">
                                        <div class="service-image">
                                            <a href="about-us-2.html" class="image-block">
                                                <span class="image">
                                                    <img src="img/service/home4-service3.jpg" class="img-fluid" alt="service3">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="service-content">
                                            <div class="content-block">
                                                <a href="about-us-2.html" class="title">Supply seeds</a>
                                                <p class="desc">Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt aliqua.</p>
                                                <a href="about-us-2.html" class="service-link">Explore now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev">
                                    <div class="service-main">
                                        <div class="service-image">
                                            <a href="about-us-2.html" class="image-block">
                                                <span class="image">
                                                    <img src="img/service/home4-service4.jpg" class="img-fluid" alt="service4">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="service-content">
                                            <div class="content-block">
                                                <a href="about-us-2.html" class="title">Quality products</a>
                                                <p class="desc">Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt aliqua.</p>
                                                <a href="about-us-2.html" class="service-link">Explore now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-service end -->
    <!-- offer-text start -->
    <section class="offer-text-area section-pb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="offer-text-main">
                        <div class="offer-text-block">
                            <div class="offer-text-title">
                                <div class="section-capture">
                                    <div class="section-title">
                                        <span class="sub-title">Greening the world</span>
                                        <h2>Where nature comes to life!</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="offer-text-image">
                                <div class="image-block">
                                    <a href="https://www.youtube-nocookie.com/embed/OQRRlD3Ei5k" class="video-btn play-button popup-youtube">
                                        <span class="image">
                                            <img src="img/video/home4-video.png" class="img-fluid" alt="video">
                                        </span>
                                        <span class="icon"><i class="feather-play"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="offer-text-desc">
                                <div class="desc-block">
                                    <p class="desc">It is a long established fact that a reader will be distracted by readable content of a page at its layout.</p>
                                    <a href="about-us-3.html" class="text-btn">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <!-- offer-text end -->
    <!-- test-area start -->
    <section class="deal-test section-ptb">
        <div class="container">
            <div class="row"> 
                <div class="col">
                    <div class="deal-test-block">
                        <div class="section-capture">
                            <div class="section-title">
                                <span class="sub-title">Our testimonial</span>
                                <h2><span>Customer love</span></h2>
                            </div>
                        </div>
                        <div class="testi-wrap">
                            <div class="test-slider swiper" id="test-slider4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-info">
                                            <div class="testi-img-author">
                                                <span class="testi-img">
                                                    <img class="img-fluid" src="img/testi/test-1.jpg" alt="test-1">
                                                </span>
                                                <div class="testi-review-block">
                                                    <span class="testi-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="test-img-text">
                                                <div class="test-des">
                                                    <p>“If you use this site regularly and would like to help keep the site on the internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.”</p>
                                                </div>
                                                <div class="testi-block-author">
                                                    <div class="testi-author">
                                                        <h2>Lisa resnick</h2>
                                                        <p class="author-bio">Company ceo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-info">
                                            <div class="testi-img-author">
                                                <span class="testi-img">
                                                    <img class="img-fluid" src="img/testi/test-2.jpg" alt="test-2">
                                                </span>
                                                <div class="testi-review-block">
                                                    <span class="testi-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="test-img-text">
                                                <div class="test-des">
                                                    <p>“If you use this site regularly and would like to help keep the site on the internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.”</p>
                                                </div>
                                                <div class="testi-block-author">
                                                    <div class="testi-author">
                                                        <h2>Audie dewey</h2>
                                                        <p class="author-bio">Company ceo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-info">
                                            <div class="testi-img-author">
                                                <span class="testi-img">
                                                    <img class="img-fluid" src="img/testi/test-3.jpg" alt="test-3">
                                                </span>
                                                <div class="testi-review-block">
                                                    <span class="testi-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="test-img-text">
                                                <div class="test-des">
                                                    <p>“If you use this site regularly and would like to help keep the site on the internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.”</p>
                                                </div>
                                                <div class="testi-block-author">
                                                    <div class="testi-author">
                                                        <h2>Natosha jacobs</h2>
                                                        <p class="author-bio">Company ceo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-info">
                                            <div class="testi-img-author">
                                                <span class="testi-img">
                                                    <img class="img-fluid" src="img/testi/test-4.jpg" alt="test-4">
                                                </span>
                                                <div class="testi-review-block">
                                                    <span class="testi-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="test-img-text">
                                                <div class="test-des">
                                                    <p>“If you use this site regularly and would like to help keep the site on the internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.”</p>
                                                </div>
                                                <div class="testi-block-author">
                                                    <div class="testi-author">
                                                        <h2>Robert smith</h2>
                                                        <p class="author-bio">Company ceo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-info">
                                            <div class="testi-img-author">
                                                <span class="testi-img">
                                                    <img class="img-fluid" src="img/testi/test-5.jpg" alt="test-5">
                                                </span>
                                                <div class="testi-review-block">
                                                    <span class="testi-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="test-img-text">
                                                <div class="test-des">
                                                    <p>“If you use this site regularly and would like to help keep the site on the internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.”</p>
                                                </div>
                                                <div class="testi-block-author">
                                                    <div class="testi-author">
                                                        <h2>Robert smith</h2>
                                                        <p class="author-bio">Company ceo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons-wrap">
                                <div class="swiper-buttons">
                                    <div class="swiper-buttons-wrap">
                                        <button class="swiper-prev swiper-prev-test4">
                                            <span><i class="fa-solid fa-arrow-left"></i></span>
                                        </button>
                                        <button class="swiper-next swiper-next-test4">
                                            <span><i class="fa-solid fa-arrow-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- test-area end -->
    <!-- news-letter start -->
    <section class="news-letter section-pt">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="news-main">
                        <div class="news-search">
                            <div class="news-title">
                                <div class="section-title">
                                    <h2 class="newstitle">Join our newsletter</h2>
                                    <p>Sign up here to get 20% off on your next purchase, special offers and other discount information</p>
                                </div>
                            </div>
                            <!-- newsletter-content start -->
                            <div class="subscribe-content">
                                <div class="news-content">
                                    <form method="get" class="search-bar">
                                        <div class="subscribe-block">
                                            <input type="email" name="q" placeholder="Enter your mail.." class="input-text" required="">
                                            <div class="email-submit">
                                                <button type="submit" class="news-sub">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1m17 4.238l-7.928 7.1L4 7.216V19h16zM4.511 5l7.55 6.662L19.502 5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- newsletter-content end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-letter end -->
    <!-- instagram start -->
    <section class="instagram-warp section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="insta-slider swiper" id="insta-slider4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="index4.html">
                                    <img src="img/insta/home4-insta-2.jpg" class="img-fluid" alt="insta2">
                                    <div class="insta-icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="index4.html">
                                    <img src="img/insta/home4-insta-3.jpg" class="img-fluid" alt="insta3">
                                    <div class="insta-icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="index4.html">
                                    <img src="img/insta/home4-insta-4.jpg" class="img-fluid" alt="insta4">
                                    <div class="insta-icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="index4.html">
                                    <img src="img/insta/home4-insta-5.jpg" class="img-fluid" alt="insta5">
                                    <div class="insta-icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="index4.html">
                                    <img src="img/insta/home4-insta-6.jpg" class="img-fluid" alt="insta6">
                                    <div class="insta-icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="index4.html" class="banner-hover">
                                    <img src="img/insta/home4-insta-7.jpg" class="img-fluid" alt="insta7">
                                    <div class="insta-icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="index4.html">
                                    <img src="img/insta/home4-insta-1.jpg" class="img-fluid" alt="insta1">
                                    <div class="insta-icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram end -->
</main> --}}

    <!-- newsletter start -->
        @include('client.includes.newsletter')
    <!-- newsletter end -->
    <!-- quickview modal start -->
        @include('client.includes.quickview_modal')
    <!-- quickview modal end -->

@endsection

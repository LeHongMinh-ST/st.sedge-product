@extends('client.layouts.master')

@section('title')
    home
@endsection

@section('content')
    <main id="main-content">
        <!-- offer-text start -->
        <section class="offer-text-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="offer-text">
                            <ul class="offer-text-ul desktop-offer-text">
                                <li class="offer-text-li">
                                    <div class="offer-text-item">
                                        <p>Call : <a href="tel:+001234567890">+00 123 456 7890</a></p>
                                    </div>
                                </li>
                                <li class="offer-text-li show">
                                    <div class="offer-text-item">
                                        <p>Free shipping + 30-day happiness guarantee</p>
                                    </div>
                                </li>
                                <li class="offer-text-li">
                                    <div class="offer-text-item">
                                        <p>Hurry up. If it’s gone, then you will be alone.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- offer-text end -->
        <!-- home-slider start -->
        <section class="slider-content">
            <div class="home-slider swiper" id="home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-image-info">
                            <div class="slider-image">
                                <img src="assets/client/img/slider/home1-slider-1.jpg" class="img-fluid desk-img" alt="slider1">
                                <img src="assets/client/img/slider/home1-mobile-slider1.jpg" class="img-fluid mobile-img" alt="mobile-slider1">
                            </div>
                            <div class="slider-text-content container">
                                <div class="slider-text-info slider-content-center slider-text-center">
                                    <h2><span>Plant trees help the earth</span></h2>
                                    <p>Consider the birds and the bees and stop cutting down the trees.</p>
                                    <a href="collection.html" class="mobile-btn btn btn-style">Shop now</a>
                                </div>
                                <div class="container slider-button-content">
                                    <div class="row">
                                        <div class="col">
                                            <div class="slider-button slider-link-right">
                                                <a href="collection.html" class="btn btn-style">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image-info">
                            <div class="slider-image">
                                <img src="assets/client/img/slider/home1-slider-2.jpg" class="img-fluid desk-img" alt="slider2">
                                <img src="assets/client/img/slider/home1-mobile-slider2.jpg" class="img-fluid mobile-img" alt="mobile-slider2">
                            </div>
                            <div class="slider-text-content container">
                                <div class="slider-text-info slider-content-center slider-text-center">
                                    <h2><span>Billion new trees on earth</span></h2>
                                    <p>Consider the birds and the bees and stop cutting down the trees.</p>
                                    <a href="collection.html" class="mobile-btn btn btn-style">Shop now</a>
                                </div>
                                <div class="container slider-button-content">
                                    <div class="row">
                                        <div class="col">
                                            <div class="slider-button slider-link-right">
                                                <a href="collection.html" class="btn btn-style">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image-info">
                            <div class="slider-image">
                                <img src="assets/client/img/slider/home1-slider-3.jpg" class="img-fluid desk-img" alt="slider3">
                                <img src="assets/client/img/slider/home1-mobile-slider3.jpg" class="img-fluid mobile-img" alt="mobile-slider3">
                            </div>
                            <div class="slider-text-content container">
                                <div class="slider-text-info slider-content-center slider-text-center">
                                    <h2><span>Plant trees and save the earth</span></h2>
                                    <p>Consider the birds and the bees and stop cutting down the trees.</p>
                                    <a href="collection.html" class="mobile-btn btn btn-style">Shop now</a>
                                </div>
                                <div class="container slider-button-content">
                                    <div class="row">
                                        <div class="col">
                                            <div class="slider-button slider-link-right">
                                                <a href="collection.html" class="btn btn-style">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button class="swiper-prev swiper-prev-homeslider"><span><i class="feather-arrow-left"></i></span></button>
                            <button class="swiper-next swiper-next-homeslider"><span><i class="feather-arrow-right"></i></span></button>
                        </div>
                    </div>
                    <div class="swiper-dots">
                        <div class="swiper-pagination swiper-pagination-homeslider"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home-slider end -->
        <!-- offer-block start -->
        <section class="offer-block-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="offer-block" style="background-image: url('assets/client/img/offer/offer-bg.png');">
                            <ul class="offer-block-ul">
                                <li class="offer-block-li text-block">
                                    <div class="text-area">
                                        <h6 class="title">
                                        <span class="time-text">Limited time</span>
                                        for best prices don’t have to think buying
                                        </h6>
                                    </div>
                                </li>
                                <li class="offer-block-li button-block">
                                    <div class="text-area">
                                        <a href="collection.html" class="btn btn-style3">View offer</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- offer-block end -->
        <!-- category start -->
        <section class="category-slider section-pt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <h2>Shop category</h2>
                            </div>
                        </div>
                        <div class="cat-slider owl-carousel owl-theme" id="category-slider">
                            <div class="item">
                                <div class="category-wrap banner-hover">
                                    <a href="collection.html" class="cat-img-title banner-img">
                                        <div class="cat-img">
                                            <img src="assets/client/img/cat/home-1-cate1.jpg" class="img-fluid" alt="cat-1">
                                        </div>
                                        <div class="cat-content-info">
                                            <div class="cat-content">
                                                <h6><span class="cat-title">Snake plant</span></h6>
                                                <span class="cat-count">12 Items</span>
                                            </div>
                                            <div class="category-button">
                                                <span class="button-block"><i class="feather-plus"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-wrap banner-hover">
                                    <a href="collection.html" class="cat-img-title banner-img">
                                        <div class="cat-img">
                                            <img src="assets/client/img/cat/home-1-cate2.jpg" class="img-fluid" alt="cat-2">
                                        </div>
                                        <div class="cat-content-info">
                                            <div class="cat-content">
                                                <h6><span class="cat-title">Radermachera</span></h6>
                                                <span class="cat-count">12 Items</span>
                                            </div>
                                            <div class="category-button">
                                                <span class="button-block"><i class="feather-plus"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-wrap banner-hover">
                                    <a href="collection.html" class="cat-img-title banner-img">
                                        <div class="cat-img">
                                            <img src="assets/client/img/cat/home-1-cate3.jpg" class="img-fluid" alt="cat-3">
                                        </div>
                                        <div class="cat-content-info">
                                            <div class="cat-content">
                                                <h6><span class="cat-title">Strelitzia nicolai</span></h6>
                                                <span class="cat-count">12 Items</span>
                                            </div>
                                            <div class="category-button">
                                                <span class="button-block"><i class="feather-plus"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-wrap banner-hover">
                                    <a href="collection.html" class="cat-img-title banner-img">
                                        <div class="cat-img">
                                            <img src="assets/client/img/cat/home-1-cate4.jpg" class="img-fluid" alt="cat-4">
                                        </div>
                                        <div class="cat-content-info">
                                            <div class="cat-content">
                                                <h6><span class="cat-title">Monstera plant</span></h6>
                                                <span class="cat-count">12 Items</span>
                                            </div>
                                            <div class="category-button">
                                                <span class="button-block"><i class="feather-plus"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-wrap banner-hover">
                                    <a href="collection.html" class="cat-img-title banner-img">
                                        <div class="cat-img">
                                            <img src="assets/client/img/cat/home-1-cate5.jpg" class="img-fluid" alt="cat-5">
                                        </div>
                                        <div class="cat-content-info">
                                            <div class="cat-content">
                                                <h6><span class="home-1-cat-title">Bromeliads</span></h6>
                                                <span class="cat-count">12 Items</span>
                                            </div>
                                            <div class="category-button">
                                                <span class="button-block"><i class="feather-plus"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-wrap banner-hover">
                                    <a href="collection.html" class="cat-img-title banner-img">
                                        <div class="cat-img">
                                            <img src="assets/client/img/cat/home-1-cate6.jpg" class="img-fluid" alt="cat-6">
                                        </div>
                                        <div class="cat-content-info">
                                            <div class="cat-content">
                                                <h6><span class="cat-title">Fruit plants</span></h6>
                                                <span class="cat-count">12 Items</span>
                                            </div>
                                            <div class="category-button">
                                                <span class="button-block"><i class="feather-plus"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category end -->
        <!-- home-info start -->
        <section class="banner-info-area section-pt">
            <div class="banner-info-main">
                <div class="banner-image">
                    <div class="banner-bg-image" style="background-image: url('assets/client/img/banner/home1-info-banner.jpg');"></div>
                    <div class="image-block">
                        <span class="image">
                            <img src="assets/client/img/banner/home1-info-banner.jpg" class="img-fluid" alt="info-banner">
                        </span>
                    </div>
                </div>
                <div class="banner-info">
                    <div class="banner-text">
                        <div class="section-capture">
                            <div class="section-title">
                                <h2>Save our earth for the next generation</h2>
                            </div>
                        </div>
                        <div class="info-details">
                            <p class="description">If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.</p>
                            <div class="info-block">
                                <ul class="info-ul">
                                    <li class="info-li">
                                        <div class="info-text">
                                            <span class="info-title">Name</span>
                                            <div class="text-item">
                                                <p>Air purifying</p>
                                                <p>Rubber plant</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="info-li">
                                        <div class="info-text">
                                            <span class="info-title">Family</span>
                                            <div class="text-item">
                                                <p>Natural</p>
                                                <p>Moraceae</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="info-li">
                                        <div class="info-text">
                                            <span class="info-title">Height</span>
                                            <div class="text-item">
                                                <p>6 to 10 ft. or</p>
                                                <p>2 to 3 meters</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="banner-btn">
                            <a href="collection.html" class="btn btn-style2">View offers</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home-info end -->
        <!-- product start -->
        <section class="product-tab section-pt">
            <div class="collection-category">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="section-capture tab">
                                <div class="section-title">
                                    <h2><span>Popular product</span></h2>
                                </div>
                            </div>
                            <div class="collection-wrap">
                                <div class="collection-slider swiper" id="new-product">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-1.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-2.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Strelitzia nicolai</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 44.00</span>
                                                                        <span class="old-price">Rs. 49.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Strelitzia</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-3.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-4.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Aloe vera plant</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 61.00</span>
                                                                        <span class="old-price">Rs. 69.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Aloe vera</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-5.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-6.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Chinese evergreen</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 24.00</span>
                                                                        <span class="old-price">Rs. 29.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Evergreen</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-7.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-8.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Wheat grass</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 21.00</span>
                                                                        <span class="old-price">Rs. 25.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Grass</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-9.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-10.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Castle cactus</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 25.00</span>
                                                                        <span class="old-price">Rs. 35.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Castle</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-11.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-12.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Bird of paradise</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 21.00</span>
                                                                        <span class="old-price">Rs. 25.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Paradise</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-13.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-14.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Snake plant</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 54.00</span>
                                                                        <span class="old-price">Rs. 65.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Snake</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-15.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-16.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Areca palm</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 61.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Palm</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-17.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-18.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Howea forsteriana</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 22.00</span>
                                                                        <span class="old-price">Rs. 45.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Howea</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collection-button">
                                        <a href="collection.html" class="btn btn-style">View product</a>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="swiper-buttons-wrap">
                                        <button class="swiper-prev swiper-prev-new"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="15 18 9 12 15 6"></polyline></svg></span></button>
                                        <button class="swiper-next swiper-next-new"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg></span></button>
                                    </div>
                                </div>
                                <div class="swiper-dots">
                                    <div class="swiper-pagination swiper-pagination-new"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product end -->
        <!-- banner start -->
        <section class="home-banner-grid section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-grid-block">
                            <ul class="banner-grid-ul">
                                <li class="banner-grid-li big-banner">
                                    <div class="banner-block">
                                        <a href="collection.html">
                                            <span class="image-block">
                                                <img src="assets/client/img/banner/home1-banner-1.jpg" class="img-fluid" alt="big-banner">
                                            </span>
                                            <div class="banner-content banner-text-left banner-content-right">
                                                <span class="subtitle">Luxurious look</span>
                                                <h2 class="title">Indoor plant air purifying</h2>
                                                <span class="button btn btn-style2">Shop now</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="banner-grid-li small-banner">
                                    <div class="banner-block">
                                        <a href="collection.html">
                                            <span class="image-block">
                                                <img src="assets/client/img/banner/home1-banner-2.jpg" class="img-fluid" alt="small-banner">
                                            </span>
                                            <div class="banner-content banner-content banner-text-center banner-content-center">
                                                <h2 class="title">Outdoor jungle rain plant</h2>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->
        <!-- spring-service start -->
        <section class="spring-ser-area section-ptb" style="background-image: url('assets/client/img/service/spring-bg.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <h2>Spring services</h2>
                            </div>
                        </div>
                        <div class="spring-ser-block">
                            <ul class="spring-ul">
                                <li class="spring-li">
                                    <div class="spring-sev-main">
                                        <div class="spring-icon">
                                            <a href="index.html" class="spring-icon-img">
                                                <span class="spring-img1">
                                                    <img src="assets/client/img/service/home1-spring1.png" class="img-fluid" alt="spring-img1">
                                                </span>
                                                <span class="spring-img2">
                                                    <img src="assets/client/img/service/home1-spring1-1.png" class="img-fluid" alt="spring-img2">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="spring-content">
                                            <span>Quality products</span>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="spring-li">
                                    <div class="spring-sev-main">
                                        <div class="spring-icon">
                                            <a href="index.html" class="spring-icon-img">
                                                <span class="spring-img1">
                                                    <img src="assets/client/img/service/home1-spring2.png" class="img-fluid" alt="spring-img1">
                                                </span>
                                                <span class="spring-img2">
                                                    <img src="assets/client/img/service/home1-spring2-2.png" class="img-fluid" alt="spring-img2">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="spring-content">
                                            <span>Counseling on tree care</span>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="spring-li">
                                    <div class="spring-sev-main">
                                        <div class="spring-icon">
                                            <a href="index.html" class="spring-icon-img">
                                                <span class="spring-img1">
                                                    <img src="assets/client/img/service/home1-spring3.png" class="img-fluid" alt="spring-img1">
                                                </span>
                                                <span class="spring-img2">
                                                    <img src="assets/client/img/service/home1-spring3-3.png" class="img-fluid" alt="spring-img2">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="spring-content">
                                            <span>Supply seeds</span>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- spring-service end -->
        <!-- trending-product start -->
        <section class="product-tab section-ptb">
            <div class="collection-category">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="section-capture tab">
                                <div class="section-title">
                                    <h2><span>Trending product</span></h2>
                                </div>
                            </div>
                            <div class="collection-wrap">
                                <div class="collection-slider swiper" id="trending-product">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-1.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-2.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Strelitzia nicolai</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 44.00</span>
                                                                        <span class="old-price">Rs. 49.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Strelitzia</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-3.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-4.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Aloe vera plant</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 61.00</span>
                                                                        <span class="old-price">Rs. 69.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Aloe vera</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-5.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-6.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Chinese evergreen</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 24.00</span>
                                                                        <span class="old-price">Rs. 29.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Evergreen</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-7.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-8.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Wheat grass</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 21.00</span>
                                                                        <span class="old-price">Rs. 25.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Grass</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-9.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-10.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Castle cactus</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 25.00</span>
                                                                        <span class="old-price">Rs. 35.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Castle</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-11.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-12.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Bird of paradise</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 21.00</span>
                                                                        <span class="old-price">Rs. 25.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Paradise</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-13.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-14.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Snake plant</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 54.00</span>
                                                                        <span class="old-price">Rs. 65.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Snake</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-15.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-16.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Areca palm</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 61.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Palm</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image banner-hover">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="assets/client/img/product/home1-pro-17.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="assets/client/img/product/home1-pro-18.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action product-cart-btn">
                                                        <a href="#add-to-cart" class="add-to-cart">
                                                            <span class="cart-title">
                                                                <span class="add-c-title">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                    <span class="add-title">Add to cart</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <div class="pro-title-price">
                                                                <h6><a href="product-template.html">Howea forsteriana</a></h6>
                                                                <div class="product-price">
                                                                    <div class="price-box">
                                                                        <span class="new-price">Rs. 22.00</span>
                                                                        <span class="old-price">Rs. 45.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <a class="product-type" href="collection.html">Howea</a>
                                                                <a class="product-vendor" href="collection.html">Panno</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <span class="pro-ratting">
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collection-button">
                                        <a href="collection.html" class="btn btn-style">View product</a>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="swiper-buttons-wrap">
                                        <button class="swiper-prev swiper-prev-new"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="15 18 9 12 15 6"></polyline></svg></span></button>
                                        <button class="swiper-next swiper-next-new"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg></span></button>
                                    </div>
                                </div>
                                <div class="swiper-dots">
                                    <div class="swiper-pagination swiper-pagination-new"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending-product end -->
        <!-- our-service start -->
        <section class="our-service-area section-ptb bt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="service-ul">
                            <li class="service-li">
                                <div class="ser-box">
                                    <div class="ser-block">
                                        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M20.998 3v2c0 9.627-5.373 14-12 14H5.241a17.14 17.14 0 0 0-.243 3h-2c0-1.363.116-2.6.346-3.732c-.23-1.294-.346-3.05-.346-5.268c0-5.523 4.477-10 10-10c2 0 4 1 8 0m-8 2a8 8 0 0 0-8 8c0 .362.003.711.01 1.046c1.254-1.978 3.091-3.541 5.494-4.914l.992 1.736C8.64 12.5 6.746 14.354 5.774 17h3.224c6.015 0 9.871-3.973 9.997-11.612c-1.372.133-2.647.048-4.22-.188c-1.15-.173-1.376-.2-1.777-.2"/></svg></a>
                                        <div class="service-text">
                                            <h6>100% Live plants</h6>
                                            <p>Organic and natural plants</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="service-li">
                                <div class="ser-box">
                                    <div class="ser-block">
                                        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M8.965 18a3.5 3.5 0 0 1-6.93 0H1V6a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2h3l3 4.056V18h-2.035a3.501 3.501 0 0 1-6.93 0zM15 7H3v8.05a3.5 3.5 0 0 1 5.663.95h5.674c.168-.353.393-.674.663-.95zm2 6h4v-.285L18.992 10H17zm.5 6a1.5 1.5 0 1 0 0-3.001a1.5 1.5 0 0 0 0 3.001M7 17.5a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0"/></svg></a>
                                        <div class="service-text">
                                            <h6>Free shipping</h6>
                                            <p>Orders from all item</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="service-li">
                                <div class="ser-box">
                                    <div class="ser-block">
                                        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 10H2V4.003C2 3.449 2.455 3 2.992 3h18.016A.99.99 0 0 1 22 4.003V10h-1v10.002a.996.996 0 0 1-.993.998H3.993A.996.996 0 0 1 3 20.002zm16 0H5v9h14zM4 5v3h16V5zm5 7h6v2H9z"/></svg></a>
                                        <div class="service-text">
                                            <h6>Recyclable sackaging</h6>
                                            <p>Secure and recyclale packaging</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="service-li">
                                <div class="ser-box">
                                    <div class="ser-block">
                                        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M5.463 4.433A9.961 9.961 0 0 1 12 2c5.523 0 10 4.477 10 10c0 2.136-.67 4.116-1.81 5.74L17 12h3A8 8 0 0 0 6.46 6.228zm13.074 15.134A9.961 9.961 0 0 1 12 22C6.477 22 2 17.523 2 12c0-2.136.67-4.116 1.81-5.74L7 12H4a8 8 0 0 0 13.54 5.772z"/></svg></a>
                                        <div class="service-text">
                                            <h6>30 days return</h6>
                                            <p>Plant 30 day guarantee</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-service end -->
        <!-- testimonial start -->
        <section class="testimonial-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture tab">
                            <div class="section-title">
                                <h2><span>Customer love</span></h2>
                            </div>
                        </div>
                        <div class="testi-customer">
                            <div class="testi-wrpper">
                                <div class="testi-wrap testi-title">
                                    <div class="testi-title-info">
                                        <span class="testi-img">
                                            <img src="assets/client/img/banner/home1-testi-banner.png" class="img-fluid" alt="testi-banner">
                                        </span>
                                    </div>
                                </div>
                                <div class="testi-wrap testi-slider">
                                    <div class="testi-slider-info">
                                        <div class="testimonial-slider" id="testimonial-slider">
                                            <div class="item">
                                                <div class="testi-info">
                                                    <div class="author-img-icon">
                                                        <span class="testi-img">
                                                            <img src="assets/client/img/testi/test-1.jpg" class="img-fluid" alt="testi-1">
                                                        </span>
                                                    </div>
                                                    <div class="testi-content">
                                                        <div class="testi-desc">
                                                            <p>“If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.”</p>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6>Andrew smith</h6>
                                                            <p>Happy customer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testi-info">
                                                    <div class="author-img-icon">
                                                        <span class="testi-img">
                                                            <img src="assets/client/img/testi/test-2.jpg" class="img-fluid" alt="testi-2">
                                                        </span>
                                                    </div>
                                                    <div class="testi-content">
                                                        <div class="testi-desc">
                                                            <p>“If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.”</p>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6>Andrew smith</h6>
                                                            <p>Happy customer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testi-info">
                                                    <div class="author-img-icon">
                                                        <span class="testi-img">
                                                            <img src="assets/client/img/testi/test-3.jpg" class="img-fluid" alt="testi-3">
                                                        </span>
                                                    </div>
                                                    <div class="testi-content">
                                                        <div class="testi-desc">
                                                            <p>“If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.”</p>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6>Andrew smith</h6>
                                                            <p>Happy customer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testi-info">
                                                    <div class="author-img-icon">
                                                        <span class="testi-img">
                                                            <img src="assets/client/img/testi/test-4.jpg" class="img-fluid" alt="testi-4">
                                                        </span>
                                                    </div>
                                                    <div class="testi-content">
                                                        <div class="testi-desc">
                                                            <p>“If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill.”</p>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6>Andrew smith</h6>
                                                            <p>Happy customer</p>
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
        </section>
        <!-- testimonial start -->
    </main>

    <!-- newsletter start -->
    <div id="newsletter" class="popup-wrapper">
        <div class="popup-wrapper">
            <div class="modal fade show" id="news-letter-modal" aria-modal="true" role="dialog">
                <div class="newsletter-popup-inner modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form method="post" class="contact-form">
                                <button type="button" class="close-btn" data-bs-dismiss="modal"><i class="feather-x"></i></button>
                                <div class="newsletter-info">
                                    <div class="subscribe-area">
                                        <div class="subscribe-content">
                                            <h2>Newsletter</h2>
                                            <p>Subscribe with us to get special offers and other discount information</p>
                                        </div>
                                        <div class="popup-newsletter">
                                            <div class="subscribe-con">
                                                <div class="subscribe-block">
                                                    <input type="email" name="q" class="email mail" placeholder="Enter your mail">
                                                    <div class="email-submit">
                                                        <button type="submit" class="news-btn btn btn-style2">Subscribe</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter end -->
    <!-- quickview modal start -->
        @include('client.includes.quickview_modal')
    <!-- quickview modal end -->

@endsection
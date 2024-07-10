@extends('client.layouts.master')

@section('title')
    collection
@endsection

@section('content')
<main>
    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-ul">
                            <li class="breadcrumb-li">
                                <a class="breadcrumb-link" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Collection</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- collection start -->
    <section class="main-content-wrap shop-page section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pro-grli-wrapper left-side-wrap">
                        <div class="pro-grli-wrap product-grid">
                            <div class="collection-img-wrap">
                                <h6 class="st-title">Collection (23)</h6>
                                <!-- collection info start -->
                                <div class="collection-info">
                                    <div class="collection-image">
                                        <img src="assets/img/banner/sall-banner.jpg" class="img-fluid" alt="sall-banner">
                                    </div>
                                </div>
                                <!-- collection info end -->
                            </div>
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar">
                                <div class="product-filter without-sidebar">
                                    <button class="filter-button" type="button"><i class="fa-solid fa-filter"></i><span>Filter</span></button>
                                </div>
                                <div class="product-view-mode">
                                    <!-- shop-item-filter-list start -->
                                    <a href="javascript:void(0)" class="list-change-view grid-three active" data-grid-view="3"><i class="fa-solid fa-border-all"></i></a>
                                    <a href="javascript:void(0)" data-grid-view="1" class="list-change-view list-one"><i class="fa-solid fa-list"></i></a>
                                    <!-- shop-item-filter-list end -->
                                </div>
                                <!-- product-short start -->
                                <div class="product-short">
                                    <label for="SortBy">Sort by:</label>
                                    <select class="nice-select" name="sortby" id="SortBy">
                                        <option value="manual">Featured</option>
                                        <option value="best-selling">Best Selling</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-descending">Date, new to old</option>
                                        <option value="created-ascending">Date, old to new</option>
                                    </select>
                                    <a href="javascript:void(0)" class="short-title">
                                        <span class="sort-title">Best Selling</span>
                                        <span class="sort-icon"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                    <a href="javascript:void(0)" class="short-title short-title-lg">
                                        <span class="sort-title">Best Selling</span>
                                        <span class="sort-icon"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                    <ul class="pro-ul collapse">
                                        <li class="pro-li"><a href="javascript:void(0)">Featured</a></li>
                                        <li class="pro-li selected"><a href="javascript:void(0)">Best Selling</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Alphabetically, A-Z</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Alphabetically, Z-A</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Price, low to high</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Price, high to low</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Date, new to old</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Date, old to new</a></li>
                                    </ul>
                                </div>
                                <!-- product-short end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- special-product start -->
                            <div class="special-product grid-3">
                                <div class="collection-category">
                                    <div class="row">
                                        <div class="col">
                                            <div class="collection-wrap">
                                                <ul class="product-view-ul">
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-1.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-2.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-3.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-4.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-5.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-6.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-7.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-8.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-9.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-10.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-11.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-12.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-13.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-14.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-15.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-16.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-17.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-18.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-3.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-4.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-5.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-6.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="product-template.html" class="pro-img">
                                                                    <img src="assets/img/product/home1-pro-19.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="assets/img/product/home1-pro-20.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                                        <a href="#add-to-cart" class="add-to-cart">
                                                                            <span class="cart-title">
                                                                                <span class="add-c-title">
                                                                                    <span class="tooltip-text">Add to cart</span>
                                                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                    <span class="add-title">Add to cart</span>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="wishlist-product.html" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="paginatoin-area">
                                                <ul class="pagination-page-box">
                                                    <li class="number active"><a href="javascript:void(0)" class="theme-glink">1</a></li>
                                                    <li class="number"><a href="javascript:void(0)" class="gradient-text">2</a></li>
                                                    <li class="page-next"><a href="javascript:void(0)" class="theme-glink"><i class="fa -solid fa-angle-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pro-grli-wrap product-sidebar">
                            <div class="pro-grid-block">
                                <div class="shop-sidebar-inner">
                                    <div class="shop-sidebar-wrap filter-sidebar">
                                        <!-- button start -->
                                        <button class="close-sidebar" type="button">
                                        <i class="fa-solid fa-xmark"></i>
                                        </button>
                                        <!-- button end -->
                                        <!-- filter-form start -->
                                        <div class="facets">
                                            <form class="facets-form">
                                                <div class="facets-wrapper">
                                                    <!-- Product-Categories start -->
                                                    <div class="shop-sidebar">
                                                        <h6 class="shop-title">Categories</h6>
                                                        <a href="#collapse-5" data-bs-toggle="collapse" class="shop-title shop-title-lg">Categories<i class="fa fa-angle-down"></i></a>
                                                        <div class="collapse show shop-element" id="collapse-5">
                                                            <ul class="brand-ul scrollbar">
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label">
                                                                        <input type="checkbox" class="cust-checkbox">
                                                                        <span class="check-name">Wheat grass</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label">
                                                                        <input type="checkbox" class="cust-checkbox">
                                                                        <span class="check-name">Castle cactus</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 64gb">
                                                                        <input type="checkbox" value="64gb" class="cust-checkbox">
                                                                        <span class="check-name">Areca palm</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 500gb">
                                                                        <input type="checkbox" value="500gb" class="cust-checkbox">
                                                                        <span class="check-name">Collection</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 1tb">
                                                                        <input type="checkbox" value="1tb" class="cust-checkbox">
                                                                        <span class="check-name">Collection left</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 2tb">
                                                                        <input type="checkbox" value="2tb" class="cust-checkbox">
                                                                        <span class="check-name">Collection list</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                        <span class="check-name">Collection list left</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                        <span class="check-name">Collection right</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                        <span class="check-name">Snake plant</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                        <span class="check-name">Strelitzia nicolai</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                        <span class="check-name">Nicolai plant</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                        <span class="check-name">Aloe vera plant</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Product-Categories end -->
                                                    <div class="shop-sidebar sidebar-filter">
                                                        <h6 class="shop-title">Filter</h6>
                                                        <a href="javascript:void(0)" class="shop-title shop-title-lg">Filter</a>
                                                        <div class="filter-info">
                                                            <span class="filter-count-text">23 products</span>
                                                            <span class="loading-spinner"><svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle></svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="shop-sidebar sidebar-price">
                                                        <h6 class="shop-title">Price</h6>
                                                        <a href="#collapse-3" data-bs-toggle="collapse" class="shop-title shop-title-lg">Price</a>
                                                        <div class="filter-info">
                                                            <span class="shop-price">The highest price is $89.00</span>
                                                            <facet-remove><a href="collection.html" class="reset-text">Reset</a></facet-remove>
                                                        </div>
                                                        <!-- Product-price start -->
                                                        <div class="collapse price-wrap" id="collapse-3">
                                                            <price-range class="price-range">
                                                                <div class="price-range-group group-range">
                                                                    <input type="range" class="range" min="0" max="89" value="0" id="range1">
                                                                    <input type="range" class="range" min="0" max="89" value="89" id="range2">
                                                                </div>
                                                                <div class="price-input-group group-input">
                                                                    <div class="price-range-input input-price">
                                                                        <label class="label-text">From</label>
                                                                        <span class="price-value">$</span>
                                                                        <span id="demo1" class="price-field">0</span>
                                                                    </div>
                                                                    <span class="price-range-delimeter">-</span>
                                                                    <div class="price-range-input input-price">
                                                                        <label class="label-text">To</label>
                                                                        <span class="price-value">$</span>
                                                                        <span id="demo2" class="price-field">89</span>
                                                                    </div>
                                                                </div>
                                                            </price-range>
                                                        </div>
                                                        <!-- Product-price end -->
                                                        <!-- product-type start -->
                                                        <div class="shop-sidebar sidebar-open">
                                                            <h6 class="shop-title">Color</h6>
                                                            <a href="#collapse-6" data-bs-toggle="collapse" class="shop-title shop-title-lg">Color<i class="fa fa-angle-down"></i></a>
                                                            <div class="filter-info">
                                                                <span class="shop-price">0 selected</span>
                                                                <facet-remove>
                                                                <a href="collection-list-right.html" class="reset-text">Reset</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse shop-element shop-flavor" id="collapse-6">
                                                                <ul class="brand-ul scrollbar">
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 16gb">
                                                                            <input type="checkbox" value="16gb" class="cust-checkbox">
                                                                            <span class="check-name">Wheat grass</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 32gb">
                                                                            <input type="checkbox" value="32gb" class="cust-checkbox">
                                                                            <span class="check-name">Castle cactus</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 64gb">
                                                                            <input type="checkbox" value="64gb" class="cust-checkbox">
                                                                            <span class="check-name">Areca palm</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 500gb">
                                                                            <input type="checkbox" value="500gb" class="cust-checkbox">
                                                                            <span class="check-name">Collection</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 1tb">
                                                                            <input type="checkbox" value="1tb" class="cust-checkbox">
                                                                            <span class="check-name">Collection left</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 2tb">
                                                                            <input type="checkbox" value="2tb" class="cust-checkbox">
                                                                            <span class="check-name">Collection list</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Collection list left</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Collection right</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Snake plant</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Nicolai plant</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Strelitzia nicolai</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                            <span class="check-name">Aloe vera plant</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- product-type end -->
                                                    </div>
                                                    <div class="shop-sidebar sidebar-product">
                                                        <h6 class="shop-title">Product type</h6>
                                                        <a href="#reset" data-bs-toggle="collapse" class="shop-title shop-title-lg">Product type</a>
                                                        <div class="filter-info">
                                                            <span class="shop-price no-js-hidden">0 selected</span>
                                                            <facet-remove>
                                                            <a href="collection.html" class="reset-text">Reset</a>
                                                            </facet-remove>
                                                        </div>
                                                        <div class="collapse filter-element" id="reset">
                                                            <ul class="brand-ul scrollbar">
                                                                <li class="brand-li">
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="checkbox" name="cust-checkbox" class="cust-checkbox">
                                                                        <span class="filter-name">plant</span>
                                                                        <span class="count-check">(23)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="shop-sidebar sidebar-wedget">
                                                        <h6 class="shop-title">Availability</h6>
                                                        <a href="#collapse-1" class="shop-title shop-title-lg" data-bs-toggle="collapse">Availability</a>
                                                        <div class="filter-info">
                                                            <span class="shop-price no-js-hidden">0 selected</span>
                                                            <facet-remove>
                                                            <a href="collection.html" class="reset-text">Reset</a>
                                                            </facet-remove>
                                                        </div>
                                                        <div class="collapse filter-element" id="collapse-1">
                                                            <ul class="brnad-ul scrollbar">
                                                                <li class="availability">
                                                                    <label class="cust-checkbox-label availability in-stock">
                                                                        <input type="checkbox" name="filter.v.availability" value="1" class="cust-checkbox">
                                                                        <span class="filter-name">In stock</span>
                                                                        <span class="count-check">(23)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="availability">
                                                                    <label class="cust-checkbox-label availability in-stock">
                                                                        <input type="checkbox" name="filter.v.availability" value="1" class="cust-checkbox">
                                                                        <span class="filter-name">Out of stock</span>
                                                                        <span class="count-check">(1)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="shop-sidebar sidebar-wedget">
                                                        <h6 class="shop-title">Brand</h6>
                                                        <a href="#collapse-2" data-bs-toggle="collapse" class="shop-title shop-title-lg">Brand</a>
                                                        <div class="filter-info">
                                                            <span class="shop-price no-js-hidden">0 selected</span>
                                                            <facet-remove>
                                                            <a href="collection.html" class="reset-text">Reset</a>
                                                            </facet-remove>
                                                        </div>
                                                        <div class="collapse filter-element" id="collapse-2">
                                                            <ul class="brand-ul scrollbar">
                                                                <li class="brand-li">
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="checkbox" name="cust-checkbox" class="cust-checkbox">
                                                                        <span class="filter-name">Panno</span>
                                                                        <span class="count-check">(23)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- filter-form end -->
                                    </div>
                                </div>
                                <!-- sidebar img start -->
                                <div class="sidebar-banner banner-hover">
                                    <a href="collection.html" class="sidebar-img banner-img">
                                        <span class="sidebar-banner-image">
                                            <img src="assets/img/banner/side-banner.jpg" class="img-fluid" alt="side-banner">
                                        </span>
                                        <span class="sidebar-banner-icon"><i class="bi bi-arrow-right-short"></i></span>
                                    </a>
                                </div>
                                <!-- sidebar img start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- collection end -->
</main>
@endsection
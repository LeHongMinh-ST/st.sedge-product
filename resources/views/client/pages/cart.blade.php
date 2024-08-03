@extends('client.layouts.master')

@section('title')
    Giỏ hàng - Cóincidence
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
                                    <a class="breadcrumb-link" href="{{route('todo.home')}}">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-li">
                                    <span class="breadcrumb-text">Giỏ hàng</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- cart-page start -->
        <section class="cart-page section-pt">
            <form method="post">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="cart-page-wrap">
                                <div class="cart-wrap-info">
                                    <div class="cart-item-wrap">
                                        <div class="cart-title">
                                            <h6>Giỏ hàng của tôi:</h6>
                                            <span class="cart-count">
                                                    <span class="cart-counter">3</span>
                                                    <span class="cart-item-title ms-1">Sản phẩm</span>
                                                </span>
                                        </div>
                                        <div class="item-wrap">
                                            <ul class="cart-wrap">
                                                <!-- cart-info start -->
                                                <li class="item-info">
                                                    <!-- cart-img start -->
                                                    <div class="item-img">
                                                        <a href="product-template.html">
                                                            <img src="assets/client/img/cart/home-cart1.jpg" class="img-fluid" alt="cart-1">
                                                        </a>
                                                    </div>
                                                    <!-- cart-img end -->
                                                    <!-- cart-title start -->
                                                    <div class="item-text">
                                                        <a href="product-template.html">Dép cói</a>

                                                        <span class="item-option">
                                                                <span class="item-price">Giá: 125.000 <u>đ</u></span>
                                                            </span>
                                                    </div>
                                                    <!-- cart-title send -->
                                                </li>
                                                <!-- cart-info end -->
                                                <!-- cart-qty start -->
                                                <li class="item-qty">
                                                    <div class="product-quantity-action">
                                                        <div class="product-quantity">
                                                            <div class="cart-plus-minus">
                                                                <button class="dec qtybutton minus"><i class="fa-solid fa-minus"></i></button>
                                                                <input type="text" name="quantity" value="1">
                                                                <button class="inc qtybutton plus"><i class="fa-solid fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-remove">
                                                            <span class="remove-wrap">
                                                                <a href="javascript:void(0)" class="text-danger">Xóa sản phẩm</a>
                                                            </span>
                                                    </div>
                                                </li>
                                                <!-- cart-qty end -->
                                                <!-- cart-price start -->
                                                <li class="item-price">
                                                    <span class="amount full-price">125.000 <u>đ</u></span>
                                                </li>
                                                <!-- cart-price end -->
                                            </ul>
                                            <ul class="cart-wrap">
                                                <!-- cart-info start -->
                                                <li class="item-info">
                                                    <!-- cart-img start -->
                                                    <div class="item-img">
                                                        <a href="product-template.html">
                                                            <img src="assets/client/img/cart/home-cart2.jpg" class="img-fluid" alt="cart-1">
                                                        </a>
                                                    </div>
                                                    <!-- cart-img end -->
                                                    <!-- cart-title start -->
                                                    <div class="item-text">
                                                        <a href="product-template.html">Túi cói</a>

                                                        <span class="item-option">
                                                                <span class="item-price">Giá: 190.000 <u>đ</u></span>
                                                            </span>
                                                    </div>
                                                    <!-- cart-title send -->
                                                </li>
                                                <!-- cart-info end -->
                                                <!-- cart-qty start -->
                                                <li class="item-qty">
                                                    <div class="product-quantity-action">
                                                        <div class="product-quantity">
                                                            <div class="cart-plus-minus">
                                                                <button class="dec qtybutton minus"><i class="fa-solid fa-minus"></i></button>
                                                                <input type="text" name="quantity" value="1">
                                                                <button class="inc qtybutton plus"><i class="fa-solid fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-remove">
                                                            <span class="remove-wrap">
                                                                <a href="javascript:void(0)" class="text-danger">Xóa sản phẩm</a>
                                                            </span>
                                                    </div>
                                                </li>
                                                <!-- cart-qty end -->
                                                <!-- cart-price start -->
                                                <li class="item-price">
                                                    <span class="amount full-price">190.000 <u>đ</u></span>
                                                </li>
                                                <!-- cart-price end -->
                                            </ul>
                                            <ul class="cart-wrap">
                                                <!-- cart-info start -->
                                                <li class="item-info">
                                                    <!-- cart-img start -->
                                                    <div class="item-img">
                                                        <a href="product-template.html">
                                                            <img src="assets/client/img/cart/home-cart1.jpg" class="img-fluid" alt="cart-1">
                                                        </a>
                                                    </div>
                                                    <!-- cart-img end -->
                                                    <!-- cart-title start -->
                                                    <div class="item-text">
                                                        <a href="product-template.html">Dép cói</a>

                                                        <span class="item-option">
                                                                <span class="item-price">Giá: 125.000 <u>đ</u></span>
                                                            </span>
                                                    </div>
                                                    <!-- cart-title send -->
                                                </li>
                                                <!-- cart-info end -->
                                                <!-- cart-qty start -->
                                                <li class="item-qty">
                                                    <div class="product-quantity-action">
                                                        <div class="product-quantity">
                                                            <div class="cart-plus-minus">
                                                                <button class="dec qtybutton minus"><i class="fa-solid fa-minus"></i></button>
                                                                <input type="text" name="quantity" value="1">
                                                                <button class="inc qtybutton plus"><i class="fa-solid fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-remove">
                                                            <span class="remove-wrap">
                                                                <a href="javascript:void(0)" class="text-danger">Xóa sản phẩm</a>
                                                            </span>
                                                    </div>
                                                </li>
                                                <!-- cart-qty end -->
                                                <!-- cart-price start -->
                                                <li class="item-price">
                                                    <span class="amount full-price">125.000 <u>đ</u></span>
                                                </li>
                                                <!-- cart-price end -->
                                            </ul>
                                        </div>
                                        <div class="cart-buttons">
                                            <a href="{{route('todo.collection')}}" class="btn-style3">Tiếp tục tìm sản phẩm</a>
                                            <a href="#" class="btn-style3">Xóa tất cả sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-info-wrap">
                                    <div class="cart-total-wrap cart-info">
                                        <h6 class="cart-info-title">CỘNG GIỎ HÀNG</h6>
                                        <div class="cart-total">
                                            <div class="total-amount">
                                                <h6 class="total-title">Tạm tính</h6>
                                                <span class="amount total-price">499.000 <u>đ</u></span>
                                            </div>
                                            <div class="total-amount">
                                                <h6 class="total-title">Giao hàng</h6>
                                                <span class="amount total-price">30.000 <u>đ</u></span>
                                            </div>
                                            <hr>
                                            <div class="total-amount">
                                                <h6 class="total-title">Tổng tiền</h6>
                                                <span class="amount total-price">499.000 <u>đ</u></span>
                                            </div>
                                            <div class="proceed-to-checkout">
                                                <a href="{{route('todo.checkout')}}" class="btn btn-style3">Đặt hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- cart-page end -->
        <!-- product start -->
        <section class="product-tab section-ptb">
            <div class="collection-category">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="section-capture tab">
                                <div class="section-title">
                                    <h2><span>Sản phẩm phổ biến</span></h2>
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
                                                        <img src="{{asset("assets/client/img/product/home-pro-1.jpg")}}" class="img-fluid img1" alt="p-1">
                                                        <img src="{{asset("assets/client/img/product/home-pro-2.jpg")}}" class="img-fluid img2" alt="p-2">
                                                    </a>
                                                    <!-- product-action start -->
                                                    <div class="product-action pro-quiqview">
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <span class="tooltip-text">Xem sản phẩm</span>
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-cart">
                                                        <div class="product-action cart-wishlist">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <i class="feather-shopping-bag"></i>
                                                                <span class="add-title">Thêm vào giỏ hàng</span>
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
                                                        <h6><a href="product-template.html">Dép cói</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">111.000 <u>đ</u></span>
                                                            <span class="old-price ms-3">127.000 <u>đ</u></span>
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
                                                        <a href="javascript:void(0)" class="add-to-cart cart-width">
                                                            <i class="feather-shopping-bag"></i>
                                                        </a>
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <i class="feather-eye"></i>
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
                                                        <img src="{{asset("assets/client/img/product/home-pro-3.jpg")}}" class="img-fluid img1" alt="p-1">
                                                        <img src="{{asset("assets/client/img/product/home-pro-4.jpg")}}" class="img-fluid img2" alt="p-2">
                                                    </a>
                                                    <!-- product-action start -->
                                                    <div class="product-action pro-quiqview">
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <span class="tooltip-text">Xem sản phẩm</span>
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-cart">
                                                        <div class="product-action cart-wishlist">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <i class="feather-shopping-bag"></i>
                                                                <span class="add-title">Thêm vào giỏ hàng</span>
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
                                                        <h6><a href="product-template.html">Túi cói</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">121.000 <u>đ</u></span>
                                                            <span class="old-price ms-3">142.000 <u>đ</u></span>
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
                                                        <a href="javascript:void(0)" class="add-to-cart cart-width">
                                                            <i class="feather-shopping-bag"></i>
                                                        </a>
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <i class="feather-eye"></i>
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
                                                        <img src="{{asset("assets/client/img/product/home-pro-1.jpg")}}" class="img-fluid img1" alt="p-1">
                                                        <img src="{{asset("assets/client/img/product/home-pro-2.jpg")}}" class="img-fluid img2" alt="p-2">
                                                    </a>
                                                    <!-- product-action start -->
                                                    <div class="product-action pro-quiqview">
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <span class="tooltip-text">Xem sản phẩm</span>
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-cart">
                                                        <div class="product-action cart-wishlist">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <i class="feather-shopping-bag"></i>
                                                                <span class="add-title">Thêm vào giỏ hàng</span>
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
                                                        <h6><a href="product-template.html">Dép cói</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">111.000 <u>đ</u></span>
                                                            <span class="old-price ms-3">127.000 <u>đ</u></span>
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
                                                        <a href="javascript:void(0)" class="add-to-cart cart-width">
                                                            <i class="feather-shopping-bag"></i>
                                                        </a>
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <i class="feather-eye"></i>
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
                                                    <a href="#" class="pro-img">
                                                        <img src="{{asset("assets/client/img/product/home-pro-3.jpg")}}" class="img-fluid img1" alt="p-1">
                                                        <img src="{{asset("assets/client/img/product/home-pro-4.jpg")}}" class="img-fluid img2" alt="p-2">
                                                    </a>
                                                    <!-- product-action start -->
                                                    <div class="product-action pro-quiqview">
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <span class="tooltip-text">Xem sản phẩm</span>
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-cart">
                                                        <div class="product-action cart-wishlist">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <i class="feather-shopping-bag"></i>
                                                                <span class="add-title">Thêm vào giỏ hàng</span>
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
                                                        <h6><a href="product-template.html">Túi cói</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">121.000 <u>đ</u></span>
                                                            <span class="old-price ms-3">142.000 <u>đ</u></span>
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
                                                        <a href="javascript:void(0)" class="add-to-cart cart-width">
                                                            <i class="feather-shopping-bag"></i>
                                                        </a>
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <i class="feather-eye"></i>
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
                                                        <img src="{{asset("assets/client/img/product/home-pro-1.jpg")}}" class="img-fluid img1" alt="p-1">
                                                        <img src="{{asset("assets/client/img/product/home-pro-2.jpg")}}" class="img-fluid img2" alt="p-2">
                                                    </a>
                                                    <!-- product-action start -->
                                                    <div class="product-action pro-quiqview">
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <span class="tooltip-text">Xem sản phẩm</span>
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-cart">
                                                        <div class="product-action cart-wishlist">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <i class="feather-shopping-bag"></i>
                                                                <span class="add-title">Thêm vào giỏ hàng</span>
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
                                                        <h6><a href="product-template.html">Dép cói</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">111.000 <u>đ</u></span>
                                                            <span class="old-price ms-3">127.000 <u>đ</u></span>
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
                                                        <a href="javascript:void(0)" class="add-to-cart cart-width">
                                                            <i class="feather-shopping-bag"></i>
                                                        </a>
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <i class="feather-eye"></i>
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
                                                        <img src="{{asset("assets/client/img/product/home-pro-3.jpg")}}" class="img-fluid img1" alt="p-1">
                                                        <img src="{{asset("assets/client/img/product/home-pro-4.jpg")}}" class="img-fluid img2" alt="p-2">
                                                    </a>
                                                    <!-- product-action start -->
                                                    <div class="product-action pro-quiqview">
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <span class="tooltip-text">Xem sản phẩm</span>
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-cart">
                                                        <div class="product-action cart-wishlist">
                                                            <a href="javascript:void(0)" class="add-to-cart">
                                                                <i class="feather-shopping-bag"></i>
                                                                <span class="add-title">Thêm vào giỏ hàng</span>
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
                                                        <h6><a href="product-template.html">Túi cói</a></h6>
                                                        <!-- product-title end -->
                                                        <!-- product-price start -->
                                                        <div class="price-box">
                                                            <span class="new-price">121.000 <u>đ</u></span>
                                                            <span class="old-price ms-3">142.000 <u>đ</u></span>
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
                                                        <a href="javascript:void(0)" class="add-to-cart cart-width">
                                                            <i class="feather-shopping-bag"></i>
                                                        </a>
                                                        <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                            <i class="feather-eye"></i>
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
                                    <a href="#" class="btn btn-style3">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product end -->
    </main>
@endsection


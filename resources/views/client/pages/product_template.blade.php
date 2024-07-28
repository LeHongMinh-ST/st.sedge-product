@extends('client.layouts.master')

@section('title')
    Chi tiết sản phẩm - {{ $product->name }}
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
                                <a class="breadcrumb-link" href="">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">{{ $product->name }}</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- pro-detail-page start -->
    <section class="product-details-page pro-style1 bg-color section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pro-details-pos pro-details-left-pos">
                        <!-- Product slider start -->
                        <div class="product-detail-slider product-details-tb product-details">
                            <!-- Product slider start -->
                            <div class="product-detail-img product-detail-img-bottom">
                                <!-- top slick-slider start -->
                                <div class="product-img-top">
                                    <button class="full-view"><i class="bi bi-arrows-fullscreen"></i></button>
                                    <div class="slider-big slick-slider">
                                        
                                        <div class="slick-slide">
                                            <a href="{{ asset($product->thumbnail) }}" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('{{ asset($product->thumbnail) }}');">
                                                    <img src="{{ asset($product->thumbnail) }}" class="img-fluid" alt="{{ $product->name }}">
                                                </figure>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- top slick-slider end -->
                                <!-- small slick-slider start -->
                                <div class="pro-slider">
                                    <div class="slider-small pro-detail-slider small-slider">
                                    {{--
                                        @foreach ($product->galleries as $gallery)
                                        <div class="slick-slide">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="{{ asset($gallery->image_path) }}" class="img-fluid" alt="{{ $product->name }}">
                                            </a>
                                        </div>
                                        @endforeach --}}
                                    </div>
                                </div>
                                <!-- small slick-slider end -->
                            </div>
                            <!-- Product slider end -->
                        </div>
                        <!-- product detail start -->
                        <div class="product-details-wrap product-details-tb product-details">
                            <div class="product-details-info">
                                <div class="pro-nprist">
                                    <div class="product-info">
                                        <!-- product-title start -->
                                        <div class="product-title">
                                            <h2>{{ $product->name }}</h2>
                                        </div>
                                        <!-- product-title end -->
                                    </div>
                                    <div class="product-info">
                                        <div class="pro-prlb pro-sale">
                                            <div class="price-box">
                                                <span class="new-price">{{ number_format($product->price) }} <u>đ</u></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-inventory">
                                            <div class="stock-inventory stock-more">
                                                <p class="text-success">Bạn hãy nhanh tay! còn lại
                                                    <span class="available-stock bg-success">{{ $product->quantity }}</span>
                                                    <span>sản phẩm trong kho!</span>
                                                </p>
                                            </div>
                                            <div class="product-variant">
                                                <h6>Tình trạng:</h6>
                                                @if($product->quantity > 0)
                                                <span class="stock-qty in-stock text-success">
                                                    <span>Còn hàng<i class="bi bi-check2"></i></span>
                                                </span>
                                                @else
                                                <span class="stock-qty out-stock text-danger">
                                                    <span>Hết hàng</span>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="pro-detail-action">
                                            <form method="post" action="" class="cart">
                                                @csrf
                                                <div class="product-quantity-action">
                                                    <h6>Số lượng:</h6>
                                                    <div class="product-quantity">
                                                        <div class="cart-plus-minus">
                                                            <button class="dec qtybutton minus"><i class="fa-solid fa-minus"></i></button>
                                                            <input type="number" name="quantity" value="1" min="1" max="{{ $product->quantity }}">
                                                            <button class="inc qtybutton plus"><i class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-actions">
                                                    <!-- pro-deatail button start -->
                                                    <div class="pro-detail-button">
                                                        <button type="submit" class="btn-style3 ajax-spin-cart">
                                                            <span class="cart-title">THÊM VÀO GIỎ HÀNG</span>
                                                        </button>
                                                        <a href="" class="btn btn-cart btn-theme">
                                                            <span>MUA NGAY</span>
                                                        </a>
                                                    </div>
                                                    <!-- pro-deatail button end -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="form-group">
                                            <a href="#deliver-modal" data-bs-toggle="modal">Giao hàng & Hoàn hàng</a>
                                        </div>
                                    </div>
                                    <!-- que-modal start -->
                                    <div class="modal fade que-modal" id="que-modal" aria-modal="true" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="pop-close" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
                                                    <div class="product-form-list">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image">
                                                                <a class="pro-img" href="{{ route('client.product.details', $product->id) }}">
                                                                    <img class="img-fluid img1 resp-img1" src="{{ asset('assets/client/img/product/home-pro-12.jpg') }}" alt="p-1">
                                                                    <img class="img-fluid img2 resp-img2" src="{{ asset('assets/client/img/product/home-pro-13.jpg') }}" alt="p-2">
                                                                </a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="{{ route('client.product.details', $product->id) }}">Nón</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Giá 44.00</span>
                                                                            <span class="old-price">Giá cũ 49.00</span>
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
                                    <!-- que-modal end -->
                                    <div class="product-info">
                                        <p><span>🚚</span> Mặt hàng sẽ được giao vào hoặc trước <span id="ten-days-ahead">ngày 3 tháng 3 năm 2024</span></p>
                                    </div>
                                    <div class="product-info">
                                        <div class="share-icons">
                                            <h6>Chia sẻ qua:</h6>
                                            <div class="pro-social">
                                                <ul class="social-icon">
                                                    <li>
                                                        <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://web.telegram.org/" class="telegram"><i class="fab fa-telegram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://in.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product detail end -->
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- pro-detail-page end -->
</main>
@endsection

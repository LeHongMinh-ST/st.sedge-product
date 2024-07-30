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
                                <a class="breadcrumb-link" href="{{route('todo.home')}}">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-li">
                                <a class="breadcrumb-link" href="{{route('todo.collection')}}">Sản phẩm</a>
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
                                        @foreach ($product->galeries as $gallery)
                                        <div class="slick-slide">
                                            <a href="{{ asset($gallery->thumbnail) }}" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('{{ asset($gallery->thumbnail) }}');">
                                                    <img src="{{ asset($gallery->thumbnail) }}" class="img-fluid" alt="{{ $product->name }}">
                                                </figure>
                                            </a>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                <!-- top slick-slider end -->
                                <!-- small slick-slider start -->
                                <div class="pro-slider">
                                    <div class="slider-small pro-detail-slider small-slider">
                                        @if (!empty($product->galeries))
                                        @foreach ($product->galeries as $gallery)
                                        <div class="slick-slide">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="{{ asset($gallery->thumbnail) }}" class="img-fluid" alt="{{ $product->name }}">
                                            </a>
                                        </div>
                                        @endforeach
                                        @endif
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
                                                <p class="text-success">Bạn ơi hãy nhanh tay! còn lại
                                                <span class="available-stock {{ $product->quantity == 0 ? 'bg-danger' : 'bg-success' }}">{{ $product->quantity }}</span>
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
                                    <!-- product detail end -->
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- pro-detail-page end -->
</main>
@endsection
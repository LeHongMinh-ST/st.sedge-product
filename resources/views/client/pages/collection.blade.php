@extends('client.layouts.master')

@section('title')
Danh mục sản phẩm - Cóincidence
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
                                <span class="breadcrumb-text">Sản phẩm</span>
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
                                    <label for="SortBy">Sắp xếp:</label>
                                    <select class="nice-select" name="sortby" id="SortBy">
                                        <option value="best-selling">Bán chạy</option>
                                        <option value="created-descending">Sản phẩm mới</option>
                                        <option value="created-ascending">Sản phẩm cũ</option>
                                        <option value="title-ascending">Tên sản phẩm A đến Z</option>
                                        <option value="title-descending">Tên sản phẩm Z đến A</option>
                                        <option value="price-ascending">Giá từ thấp đến cao</option>
                                        <option value="price-descending">Giá từ cao đến thấp</option>
                                    </select>
                                    <a href="javascript:void(0)" class="short-title">
                                        <span class="sort-title">Bán chạy</span>
                                        <span class="sort-icon"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                    <a href="javascript:void(0)" class="short-title short-title-lg">
                                        <span class="sort-title">Bán chạy</span>
                                        <span class="sort-icon"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                    <ul class="pro-ul collapse">
                                        <li class="pro-li selected"><a href="javascript:void(0)">Bán chạy</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Sản phẩm mới</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Sản phẩm cũ</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Tên sản phẩm A đến Z</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Tên sản phẩm Z đến A</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Giá từ thấp đến cao</a></li>
                                        <li class="pro-li"><a href="javascript:void(0)">Giá từ cao đến thấp</a></li>
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
                                                    @foreach($products as $product)
                                                    <li class="pro-item-li">
                                                        <div class="single-product-wrap">
                                                            <!-- product-img start -->
                                                            <div class="product-image">
                                                                <a href="{{route('client.product.details', $product->id)}}" class="pro-img">
                                                                    <img src="{{ asset($product->thumbnail) }}" class="img-fluid img1" alt="{{ $product->name }}">
                                                                    <img src="{{ asset($product->thumbnail) }}" class="img-fluid img2" alt="{{ $product->name }}">
                                                                </a>
                                                                <!-- product-action start -->
                                                                <div class="product-action pro-quiqview">
                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view" data-product-id="{{ $product->id }}">
                                                                        <span class="tooltip-text">Xem sản phẩm</span>
                                                                        <i class="feather-eye"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="product-cart">
                                                                    <div class="product-action cart-wishlist">
                                                                        <a href="javascript:void(0)" class="add-to-cart" data-product-id="{{ $product->id }}">
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
                                                                    <h6><a href="{{ route('client.product.details', $product->id) }}">{{ $product->name }}</a></h6>
                                                                    <!-- product-title end -->
                                                                    <!-- product-price start -->
                                                                    <div class="price-box">
                                                                        <span class="new-price">{{ number_format($product->price, 0, ',', '.') }}<u>đ</u></span>
                                                                        @if($product->old_price)
                                                                        <span class="old-price ms-3">{{ number_format($product->old_price, 0, ',', '.') }} <u>đ</u></span>
                                                                        @endif
                                                                    </div>
                                                                    <!-- product-price end -->
                                                                    <div class="product-description">
                                                                        <p>{{ $product->description }}</p>
                                                                    </div>
                                                                </div>
                                                                <!-- product-action start -->
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview" data-product-id="{{ $product->id }}">
                                                                        <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart" data-product-id="{{ $product->id }}">
                                                                        <span class="cart-title">
                                                                            <span class="add-c-title">
                                                                                <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                                <span class="add-title">Thêm vào giỏ hàng</span>
                                                                            </span>
                                                                        </span>
                                                                    </a>

                                                                </div>
                                                                <!-- product-action end -->
                                                            </div>
                                                            <!-- product-content end -->
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <div class="paginatoin-area">
                                                <ul class="pagination-page-box">
                                                    {{-- Previous Page Link --}}
                                                    @if ($products->onFirstPage())
                                                    <li class="page-prev disabled" aria-disabled="true">
                                                        <a href="javascript:void(0)" class="theme-glink"><i class="fa-solid fa-angle-left"></i></a>
                                                    </li>
                                                    @else
                                                    <li class="page-prev">
                                                        <a href="{{ $products->previousPageUrl() }}" class="theme-glink"><i class="fa-solid fa-angle-left"></i></a>
                                                    </li>
                                                    @endif

                                                    {{-- Pagination Elements --}}
                                                    @foreach ($products->links()->elements as $element)
                                                    {{-- "Three Dots" Separator --}}
                                                    @if (is_string($element))
                                                    <li class="number disabled" aria-disabled="true"><a href="javascript:void(0)" class="gradient-text">{{ $element }}</a></li>
                                                    @endif

                                                    {{-- Array Of Links --}}
                                                    @if (is_array($element))
                                                    @foreach ($element as $page => $url)
                                                    @if ($page == $products->currentPage())
                                                    <li class="number active" aria-current="page"><a href="javascript:void(0)" class="theme-glink">{{ $page }}</a></li>
                                                    @else
                                                    <li class="number"><a href="{{ $url }}" class="gradient-text">{{ $page }}</a></li>
                                                    @endif
                                                    @endforeach
                                                    @endif
                                                    @endforeach

                                                    {{-- Next Page Link --}}
                                                    @if ($products->hasMorePages())
                                                    <li class="page-next">
                                                        <a href="{{ $products->nextPageUrl() }}" class="theme-glink"><i class="fa-solid fa-angle-right"></i></a>
                                                    </li>
                                                    @else
                                                    <li class="page-next disabled" aria-disabled="true">
                                                        <a href="javascript:void(0)" class="theme-glink"><i class="fa-solid fa-angle-right"></i></a>
                                                    </li>
                                                    @endif
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
                                                        <h6 class="shop-title">Danh mục</h6>
                                                        <a href="#collapse-5" data-bs-toggle="collapse" class="shop-title shop-title-lg">Categories<i class="fa fa-angle-down"></i></a>
                                                        <div class="collapse show shop-element" id="collapse-5">
                                                            <ul class="brand-ul scrollbar">
                                                                @foreach($categories as $category)
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label">
                                                                        <input type="checkbox" class="cust-checkbox">
                                                                        <span class="check-name">{{ $category->name }}</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- filter-form end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- collection end -->
</main>

<!-- quickview modal start -->
@include('client.includes.quickview_modal')
<!-- quickview modal end -->
@endsection
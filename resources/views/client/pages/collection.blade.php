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
                                <a class="breadcrumb-link" href="{{route('todo.collection')}}">Sản phẩm</a>
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
                                    <button class="filter-button" type="button"><i class="fa-solid fa-filter"></i><span>Danh mục</span></button>
                                </div>
                                <div class="product-view-mode">
                                    <!-- shop-item-filter-list start -->
                                    <a href="javascript:void(0)" class="list-change-view grid-three active" data-grid-view="3"><i class="fa-solid fa-border-all"></i></a>
                                    <!-- shop-item-filter-list end -->
                                </div>
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- special-product start -->
                            <div class="special-product grid-3" id="product-list">
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
                                                                    <a href="{{ route('product.quickview', $product->id) }}" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view" data-product-id="{{ $product->id }}">
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
                                                                    <a href="{{ route('product.quickview', $product->id) }}" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview" data-product-id="{{ $product->id }}">
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
                                            <form class="facets-form" method="GET" action="{{ route('todo.collection') }}">
                                                <div class="facets-wrapper">
                                                    <!-- Product-Categories start -->
                                                    <div class="shop-sidebar">
                                                        <h6 class="shop-title">Danh mục</h6>
                                                        <a href="#collapse-5" data-bs-toggle="collapse" class="shop-title shop-title-lg">Danh mục<i class="fa fa-angle-down"></i></a>
                                                        <div class="collapse show shop-element" id="collapse-5">
                                                            <ul class="brand-ul scrollbar">
                                                                @foreach($categories as $category)
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label">
                                                                        <input type="checkbox" class="cust-checkbox category-filter" name="categories[]" value="{{ $category->id }}" {{ in_array($category->id, request('categories', [])) ? 'checked' : '' }}>
                                                                        <span class="check-name">{{ $category->name }}</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-style">Lọc</button>


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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Xử lý sự kiện click cho các nút quick-view
            document.querySelectorAll('.quick-view').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    var productId = this.dataset.productId;

                    fetch(`/product/${productId}/quickview`)
                        .then(response => response.json())
                        .then(data => {
                            document.querySelector('#quickview .product-title h6').textContent = data.name;
                            document.querySelector('#quickview .product-price .new-price').textContent = data.price + ' đ';
                            document.querySelector('#quickview .quick-image img').src = data.thumbnail;
                            document.querySelector('#quickview .product-desc p').textContent = data.description;

                            // Cập nhật liên kết cho hình ảnh trong quick view
                            document.querySelector('#quickview .quick-image a').href = `/product/${productId}`;

                            var quickviewModal = new bootstrap.Modal(document.getElementById('quickview'));
                            quickviewModal.show();
                        })
                        .catch(error => console.error('Error:', error));
                });
            });

            // Xử lý việc đóng modal và xóa overlay
            var quickviewElement = document.getElementById('quickview');
            if (quickviewElement) {
                quickviewElement.addEventListener('hidden.bs.modal', function() {
                    cleanupModalEffects();
                });
            }

            // Hàm tiện ích để xóa các thuộc tính modal và overlay
            function cleanupModalEffects() {
                document.body.classList.remove('modal-open');
                document.body.style.removeProperty('overflow');
                document.body.style.removeProperty('padding-right');
                let modalBackdrop = document.querySelector('.modal-backdrop');
                if (modalBackdrop) {
                    modalBackdrop.remove();
                }
            }
        });
        
    </script>
</main>
<!-- quickview modal start -->
@include('client.includes.quickview_modal')
<!-- quickview modal end -->
@endsection
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
                                                            <livewire:client.product-item :$product :key="$product->id">
                                                        <li>
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
@if($products->total() > 0)
    @include('client.includes.quickview_modal')
@endif
<!-- quickview modal end -->
@endsection

@section('script_custom')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('click', function(event) {
            if (event.target.closest('.add-to-cart')) {
                Swal.fire({
                    title: "Thêm sản phẩm thành công!",
                    icon: "success",
                    showCancelButton: true,
                    cancelButtonText: "Mua hàng tiếp",
                    confirmButtonText: "Đến giỏ hàng",
                    cancelButtonColor: "#d33",
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('todo.cart') }}";
                    }
                });
            }
        });
    </script>
@endsection

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
    <livewire:client.product-detail :$product :key="$product->id">
    <!-- pro-detail-page end -->
</main>
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


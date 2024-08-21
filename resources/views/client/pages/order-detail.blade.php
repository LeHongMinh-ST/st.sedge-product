@extends('client.layouts.master')

@section('title')
    Kiểm tra đơn hàng - Cóincidence
@endsection

@section('content')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-ul">
                            <li class="breadcrumb-li">
                                <a class="breadcrumb-link" href="{{ route('todo.home') }}">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-li">
                                <a href="{{ route('todo.checkorder') }}" class="breadcrumb-link">Kiểm tra đơn hàng</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Chi tiết đơn hàng </span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="order-complete section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-area">
                        <!-- order-price start -->
                        <div class="order-price">
                            <ul class="total-order">
                                <li>
                                    <span class="order-no d-flex">Mã đơn hàng:<span class="mb-2 ms-2 text-primary">{{ $order->code }}</span></span>
                                    <span class="order-date"><span class="order-date">{{ $order->order_date }}</span></span>
                                </li>
                                <li>
                                    <span class="total-price">Tổng tiền đơn hàng:</span>
                                    <span class="amount">{{ number_format($order->total, 0, ',', '.') }} VNĐ</span>
                                </li>
                            </ul>
                        </div>
                        <!-- order-price end -->
                        <!-- order-delivery start -->
                        <div class="order-delivery">
                            <ul class="delivery-payment">
                                <li class="delivery">
                                    <div class="text-wrap">
                                        <h6 class="d-inline-block">Tên khách hàng: </h6>
                                        <span class="d-inline"> {{ $order->fullname }}</span>
                                    </div>
                                    <div class="text-wrap">
                                        <span class="order-span d-inline-block">Địa chỉ:</span>
                                        @if($ward == null && $district == null && $province == null)
                                            <span class="d-inline">{{ $order->address }}</span>
                                        @else
                                        <span class="d-inline">{{ $order->address }}, {{ $ward }}, {{ $district }}, {{ $province }}</span>
                                        @endif
                                    </div>
                                    <div class="text-wrap">
                                        <span class="order-span d-inline-block">Số điện thoại:</span>
                                        <span class="d-inline">{{ $order->phone_number }}</span>
                                    </div>
                                    <span class="order-span">Trạng thái: {!! $order->StatusClient !!}</span>
                                </li>
                                <li class="pay">
                                    <div class="d-flex justify-content-between me-3 mb-3 text-muted fw-bolder">
                                        <span>Chi tiết sản phẩm:</span>
                                        <div>
                                            <span class="text-primary">{{ $products->count() }}</span>
                                            <span>sản phẩm</span>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover text-center" style="vertical-align: middle">
                                        <thead>
                                        <tr>
                                            <th width="100px"></th>
                                            <th>Sản phẩm</th>
                                            <th>Đơn giá</th>
                                            <th>Số lượng</th>
                                            <th>Tạm tính</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    <div>
                                                        <img src="{{ asset($product->pivot->thumbnail) }}" alt="{{ $product->pivot->name }}" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>{{ $product->name }}</h6>
                                                </td>
                                                <td>{{ number_format($product->pivot->price) }} VNĐ</td>
                                                <td>{{ $product->pivot->quantity }}</td>
                                                <td>{{ number_format($product->pivot->price * $product->pivot->quantity) }} VNĐ</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                        <!-- order-delivery start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-ptb bt"></div>
@endsection

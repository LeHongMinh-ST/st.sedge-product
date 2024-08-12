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
                                <a class="breadcrumb-link" href="index.html">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Đặt hàng</span>
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
                        <!-- order-details start -->
                        <div class="order-details">
                            <span class="text-success order-i"><i class="fa fa-check-circle"></i></span>
                            <h4>Cảm ơn đã đặt hàng</h4>
                            <span class="order-s">Đơn hàng của bạn đang chờ xác nhận</span>
                            <a href="{{ route('todo.checkorder',['phone' => $order->phone_number]) }}" class="tracking-link btn btn-style3">Kiểm tra đơn hàng</a>
                        </div>
                        <!-- order-details start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('client.layouts.master')

@section('title')
    Hóa đơn đặt hàng - Cóincidence
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
                                <a class="breadcrumb-link" href="{{ route('todo.home') }}">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Thông tin đơn</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- checkout-area start -->
    <section class="section-ptb check-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="check-3-title">Thông tin thanh toán sản phẩm</h2>
                    <ul class="check-3-ul">
                        <li class="check-3-li ck-cat">
                            @livewire('client.checkout')
                        </li>
                        <!-- form 2 -->
                        <li class="check-3-li ck-address">
                            @livewire('client.component.checkout-info')
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout-area end -->
</main>
@endsection
<!-- setion city -->

@section('style_custom')
    <style>
        /* CSS cho thông báo lỗi */
        .invalid-feedback {
            display: block;
            color: red;
            font-size: 0.875em;
            margin-top: 0.25rem;
        }

        .is-invalid {
            border-color: red !important;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: inline-block;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .form-group input {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

    </style>
@endsection





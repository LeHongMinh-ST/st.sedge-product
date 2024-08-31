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
                    <div class="row check-3-ul">
                        <div class="col-md-5 ck-cat">
                            @livewire('client.checkout')
                        </div>
                        <!-- form 2 -->
                        <div class="col-md-7 ck-address">
                            @livewire('client.component.checkout-info')
                        </div>
                    </div>
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

        #check-3-cat {
            font-size: 18px;
            padding: 15px;
            background-color: var(--extra-bgcolor);
            line-height: 1;
        }

        .selection {
            width: 100%;
        }
    </style>
@endsection





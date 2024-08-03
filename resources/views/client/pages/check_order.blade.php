@extends('client.layouts.master')

@section('title')
    Kiểm tra đơn hàng - Cóincidence
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
                                    <span class="breadcrumb-text">Kiểm tra đơn hàng</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- order history start -->
        <section class="order-histry-area section-ptb">
            @livewire('client.check-order')
        </section>
        <!-- order history end -->
    </main>
@endsection

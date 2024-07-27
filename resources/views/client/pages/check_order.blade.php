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
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="password-block">
                            <!-- order profile start -->
                            <div class="profile-info">
                                <div class="search-order">
                                    <form method="get">
                                        <input name="q" class="input-text" placeholder="Nhập số điện thoại để kiểm tra đơn hàng." required autocomplete="off">
                                        <a href="search-blog.html" class="btn-search-order"><i class="fa-solid fa-magnifying-glass"></i></a>
                                    </form>
                                </div>
                            </div>
                            <!-- order profile end -->
                            <!-- order info start -->
                            <div class="profile-form order-info ms-4 mt-4">
                                <div class="pro-add-title">
                                    <h6>Đơn hàng của bạn</h6>
                                </div>
                                <table class="table table-hover table-responsive table-striped">
                                    <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Tình trạng</th>
                                        <th>Tổng tiền</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>78A643CD409</td>
                                        <td>April 08, 2024</td>
                                        <td class="canceled">Canceled</td>
                                        <td>Rs. 760.50</td>
                                    </tr>
                                    <tr>
                                        <td>34VB5540K83</td>
                                        <td>April 11, 2024</td>
                                        <td class="process">In progress</td>
                                        <td>Rs. 540.30</td>
                                    </tr>
                                    <tr>
                                        <td>78A643CD409</td>
                                        <td>April 15, 2024</td>
                                        <td class="delayed">Delayed</td>
                                        <td>Rs. 142.00</td>
                                    </tr>
                                    <tr>
                                        <td>78A643CD409</td>
                                        <td>April 18, 2024</td>
                                        <td class="delivered">Delivered</td>
                                        <td>Rs. 805.00</td>
                                    </tr>
                                    <tr class="no-bottom-border">
                                        <td>78A643CD409</td>
                                        <td>April 21, 2024</td>
                                        <td class="delivered">Delivered</td>
                                        <td>Rs. 270.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- order info end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- order history end -->
    </main>
@endsection

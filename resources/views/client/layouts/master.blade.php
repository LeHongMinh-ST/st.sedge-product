<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset("assets/client/img/logo/logo-1.png")}}" type="image/x-icon">

        <meta name="description" content="Khám phá những sản phẩm đồ thủ công từ tre mang đậm chất truyền thống và thân thiện với môi trường. Giỏ tre, đèn tre trang trí, bàn ghế tre và nhiều hơn nữa.">
        <meta name="keywords" content="đồ thủ công, sản phẩm tre, đồ thủ công tre, giỏ tre, đèn tre, bàn ghế tre, sản phẩm truyền thống, đồ trang trí tre">
        <meta name="author" content="Cóinsidence">
        <meta property="og:title" content="Đồ Thủ Công Tre - Sản Phẩm Truyền Thống & Thân Thiện Với Môi Trường">
        <meta property="og:description" content="Những sản phẩm từ tre chất lượng, được làm thủ công và mang lại sự tinh tế cho không gian sống của bạn.">
        <meta property="og:image" content="link_đến_hình_ảnh_của_sản_phẩm_chính.jpg">
        <meta property="og:url" content="link_đến_trang_web_của_bạn">
        <meta property="og:type" content="website">

        <!-- title -->
        <title>@yield('title')</title>
        <!-- favicon -->
        @include('client.includes.style')
    </head>
    <body>
        <!-- notification-bar start -->
        @include('client.includes.notification_bar')
        <!-- notification-bar end -->
        <!-- header start -->
        @include('client.includes.header')
        <!-- header end -->
        <!-- main start -->
        @yield('content')
        <!-- main end -->
        <!-- footer-copyright start -->
        @include('client.includes.footer_copyright')
        <!-- footer-copyright end -->

        <!-- mobile-menu start -->
        @include('client.includes.mobile_menu')
        <!-- mobile-menu end -->
        <!-- cart-drawer start -->
        @livewire('client.component.cart')
{{--        @include('client.includes.cart_drawer')--}}
        <!-- cart-drawer end -->
        <!-- bg-scren start -->
        <div class="bg-screen"></div>
        <!-- bg-scren end -->
        <!-- preloader start -->
        <div class="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader end -->
        <!-- bottom-menu start -->
        {{-- @include('client.includes.bottom_menu')' --}}
        <!-- bottom-menu end -->
        <!-- jquery js -->
        @include('client.includes.script')
    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta name="description" content="A best stylish, creative, modern responsive template for different eCommerce business or industries." />
        <meta name="keywords" content="food template, bakery products, html, eCommerce html template,plants, organic food, restaurant, live tree, responsive, pizza, burger, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories" />
        <meta name="author" content="spacingtech_webify">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset("assets/client/img/logo/logo-1.png")}}" type="image/x-icon">
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
        @include('client.includes.cart_drawer')
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
        @include('client.includes.script')'
    </body>
</html>

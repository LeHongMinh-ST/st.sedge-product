<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from spacingtech.com/html/panno/panno/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 17:06:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="description" content="A best stylish, creative, modern responsive template for different eCommerce business or industries." />
        <meta name="keywords" content="food template, bakery products, html, eCommerce html template,plants, organic food, restaurant, live tree, responsive, pizza, burger, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories" />
        <meta name="author" content="spacingtech_webify">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        {{-- <title>Panno - The Plants & Organic Food eCommerce HTML5 template</title>                           --}}
        <title>@yield('title')</title>                          
        <!-- favicon -->
        @include('client.includes.style')
    </head>
    <body>
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
        <!-- search-popup start -->
        @include('client.includes.search_popup')
        <!-- search-popup end -->
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
        @include('client.includes.bottom_menu')'
        <!-- bottom-menu end -->
        <!-- jquery js -->
        @include('client.includes.script')'
    </body>

<!-- Mirrored from spacingtech.com/html/panno/panno/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 17:08:03 GMT -->
</html>
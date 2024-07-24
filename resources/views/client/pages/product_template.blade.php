@extends('client.layouts.master')

@section('title')
product-template
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
                                <a class="breadcrumb-link" href="index.html">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Các sản phẩm từ cói</span>
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
    <section class="product-details-page pro-style1 bg-color section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pro-details-pos pro-details-left-pos">
                        <!-- Product slider start -->
                        <div class="product-detail-slider product-details-tb product-details">
                            <!-- Product slider start -->
                            <div class="product-detail-img product-detail-img-bottom">
                                <!-- top slick-slider start -->
                                <div class="product-img-top">
                                    <button class="full-view"><i class="bi bi-arrows-fullscreen"></i></button>
                                    <div class="slider-big slick-slider">
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-1.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-1.jpg');">
                                                    <img src="assets/client/img/product/home-pro-1.jpg" class="img-fluid" alt="pro-1">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-2.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-2.jpg');">
                                                    <img src="assets/client/img/product/home-pro-2.jpg" class="img-fluid" alt="pro-2">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-3.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-3.jpg');">
                                                    <img src="assets/client/img/product/home-pro-3.jpg" class="img-fluid" alt="pro-3">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-4.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-4.jpg');">
                                                    <img src="assets/client/img/product/home-pro-4.jpg" class="img-fluid" alt="pro-4">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-5.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-5.jpg');">
                                                    <img src="assets/client/img/product/home-pro-5.jpg" class="img-fluid" alt="pro-5">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-6.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-6.jpg');">
                                                    <img src="assets/client/img/product/home-pro-6.jpg" class="img-fluid" alt="p-6">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-7.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-7.jpg');">
                                                    <img src="assets/client/img/product/home-pro-7.jpg" class="img-fluid" alt="p-7">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-8.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-8.jpg');">
                                                    <img src="assets/client/img/product/home-pro-8.jpg" class="img-fluid" alt="pro-8">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-9.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-9.jpg');">
                                                    <img src="assets/client/img/product/home-pro-9.jpg" class="img-fluid" alt="pro-9">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-10.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-10.jpg');">
                                                    <img src="assets/client/img/product/home-pro-10.jpg" class="img-fluid" alt="pro-10">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-11.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-11.jpg');">
                                                    <img src="assets/client/img/product/home-pro-11.jpg" class="img-fluid" alt="pro-11">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="assets/client/img/product/home-pro-12.jpg" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('assets/client/img/product/home-pro-12.jpg');">
                                                    <img src="assets/client/img/product/home-pro-12.jpg" class="img-fluid" alt="pro-12">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- top slick-slider end -->
                                <!-- small slick-slider start -->
                                <div class="pro-slider">
                                    <div class="slider-small pro-detail-slider small-slider">
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-1.jpg" class="img-fluid" alt="pro-1">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-2.jpg" class="img-fluid" alt="pro-2">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-3.jpg" class="img-fluid" alt="pro-3">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-4.jpg" class="img-fluid" alt="pro-4">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-6.jpg" class="img-fluid" alt="pro-5">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-6.jpg" class="img-fluid" alt="pro-6">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-7.jpg" class="img-fluid" alt="pro-7">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-8.jpg" class="img-fluid" alt="pro-8">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-9.jpg" class="img-fluid" alt="pro-9">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-10.jpg" class="img-fluid" alt="pro-10">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-11.jpg" class="img-fluid" alt="pro-11">
                                            </a>
                                        </div>
                                        <div class="slick-slide ">
                                            <a href="javascript:void(0)" class="product-single--thumbnail">
                                                <img src="assets/client/img/product/home-pro-12.jpg" class="img-fluid" alt="pro-12">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- small slick-slider end -->
                            </div>
                            <!-- Product slider end -->
                        </div>
                        <!-- peoduct detail start -->
                        <div class="product-details-wrap product-details-tb product-details">
                            <div class="product-details-info">
                                <div class="pro-nprist">
                                    <div class="product-info">
                                        <!--  product-ratting start -->
                                        <div class="product-ratting">
                                            <span class="pro-ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>
                                            <span class="spr-badge-caption">3 Đánh giá</span>
                                        </div>
                                        <!--  product-ratting end -->
                                    </div>
                                    <div class="product-info">
                                        <!-- product-title start -->
                                        <div class="product-title">
                                            <h2>Dép</h2>
                                        </div>
                                        <!-- product-title end -->
                                    </div>
                                    <div class="product-info">
                                        <div class="pro-prlb pro-sale">
                                            <div class="price-box">
                                                <span class="new-price">Giá 21.00</span>
                                                <span class="old-price">Giá cũ 25.00</span>
                                                <span class="percent-count">16</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-inventory">
                                            <div class="stock-inventory stock-more">
                                                <p class="text-success">Bạn hãy nhanh tay! còn lại
                                                    <span class="available-stock bg-success">4</span>
                                                    <span>sản phẩm trong kho!</span>
                                                </p>
                                            </div>
                                            <div class="product-variant">
                                                <h6>Tình trạng:</h6>
                                                <span class="stock-qty in-stock text-success">
                                                    <span>Còn hàng<i class="bi bi-check2"></i></span>
                                                </span>
                                                <span class="stock-qty out-stock text-danger collapse" style="display:none;">
                                                    <span>Hết hàng</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="pro-detail-action">
                                            <form method="get" class="cart">
                                                <div class="product-variant-option">
                                                    <div class="swatch-variant">
                                                        <div class="swatch clearfix Color">
                                                            <div class="header">
                                                                <h6><span>Màu sắc</span></h6>
                                                            </div>
                                                            <div class="variant-wrap">
                                                                <div class="variant-property">
                                                                    <div class="swatch-element Black first-variant">
                                                                        <input type="radio" name="option-0" value="Black" checked>
                                                                        <label>Đen</label>
                                                                    </div>
                                                                    <div class="swatch-element Red">
                                                                        <input type="radio" name="option-0" value="Red">
                                                                        <label>Đỏ</label>
                                                                    </div>
                                                                    <div class="swatch-element Green">
                                                                        <input type="radio" name="option-0" value="Green">
                                                                        <label>Xanh lá</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <form method="post" class="cart">
                                            <div class="product-quantity-action">
                                                <h6>Số lượng:</h6>
                                                <div class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <button class="dec qtybutton minus"><i class="fa-solid fa-minus"></i></button>
                                                        <input type="text" name="quantity" value="1">
                                                        <button class="inc qtybutton plus"><i class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-actions">
                                            <!-- pro-deatail button start -->
                                            <div class="pro-detail-button">
                                                <button type="button" onclick="location. href='cart-page.html'" class="btn add-to-cart ajax-spin-cart">
                                                    <span class="cart-title">THÊM VÀO GIỎ HÀNG</span>
                                                </button>
                                                <a href="cart-empty.html" class="btn btn-cart btn-theme">
                                                    <span>MUA NGAY</span>
                                                </a>
                                            </div>
                                            <!-- pro-deatail button start -->
                                            <!-- pro-deatail wishlist start -->
                                            <div class="pro-aff-che">
                                                <a href="wishlist-product.html" class="wishlist">
                                                    <span class="wishlist-icon action-wishlist tile-actions--btn wishlist-btn">
                                                        <span class="add-wishlist"><i class="bi bi-heart"></i></span>
                                                    </span>
                                                    <span class="wishlist-text">Thêm vào danh sách yêu thích</span>
                                                </a>
                                            </div>
                                            <!-- pro-deatail wishlist end -->
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="form-group">
                                            <a href="#deliver-modal" data-bs-toggle="modal">Giao hàng &amp; Hoàn hàng</a>
                                            <a href="#que-modal" data-bs-toggle="modal">Đặt câu hỏi</a>
                                        </div>
                                    </div>
                                    <div class="modal fade deliver-modal" id="deliver-modal" tabindex="-1" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="pop-close" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
                                                    <div class="delivery-block">
                                                        <div class="space-block">
                                                            <h4>Giao hàng</h4>
                                                            <p>Tất cả các đơn hàng được vận chuyển bằng UPS Express.</p>
                                                            <p>Luôn miễn phí vận chuyển cho các đơn hàng trên 100.000</p>
                                                            <p>Tất cả các đơn hàng đều được vận chuyển kèm theo số theo dõi của UPS.</p>
                                                        </div>
                                                        <div class="space-block">
                                                            <h4>Hoàn hàng</h4>
                                                            <p>Các mặt hàng được trả lại trong vòng 14 ngày kể từ ngày giao hàng ban đầu giống như hàng mới
                                                                điều kiện sẽ đủ điều kiện để được hoàn tiền đầy đủ hoặc nhận tín dụng của cửa hàng</p>
                                                            <p>Tiền hoàn lại sẽ được tính trở lại hình thức thanh toán ban đầu được sử dụng để mua hàng.</p>
                                                            <p>Khách hàng chịu trách nhiệm thanh toán phí vận chuyển khi thực hiện trả lại hàng và
                                                                Phí vận chuyển/xử lý của giao dịch mua ban đầu sẽ không được hoàn lại.</p>
                                                            <p>Tất cả các mặt hàng bán đều là giao dịch mua cuối cùng.</p>
                                                        </div>
                                                        <div class="space-block">
                                                            <h4>Hỗ trợ</h4>
                                                            <p>Hãy liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi hoặc thắc mắc nào khác.</p>
                                                            <p>Email:<a href="mailto:contact@domain.com">demo@gmail.com</a></p>
                                                            <p>Phone:<a href="tel:+1(23)456789">+1 (23) 456 789</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- que-modal stat -->
                                    <div class="modal fade que-modal" id="que-modal" aria-modal="true" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="pop-close" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
                                                    <div class="product-form-list">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image">
                                                                <a class="pro-img" href="collection.html">
                                                                    <img class="img-fluid img1 resp-img1" src="assets/client/img/product/home-pro-12.jpg" alt="p-1">
                                                                    <img class="img-fluid img2 resp-img2" src="assets/client/img/product/home-pro-13.jpg" alt="p-2">
                                                                </a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="product-template.html">Nón</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Giá 44.00</span>
                                                                            <span class="old-price">Giá cũ 49.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ask-form">
                                                        <h6>Đặt câu hỏi</h6>
                                                        <form method="post" class="contact-form">
                                                            <input type="hidden" name="contact[product url]" value="">
                                                            <div class="form-grp">
                                                                <input type="text" name="contact[name]" required="" placeholder="Your name*">
                                                                <input type="text" name="contact[phone]" placeholder="Your phone number">
                                                                <input type="email" name="contact[email]" required="" placeholder="Your email*">
                                                                <textarea name="contact[question]" rows="4" required="" placeholder="Your message*"></textarea>
                                                                <p>* Phần bắt buộc</p>
                                                                <button type="submit" class="btn-style2">Xác nhận ngay bây giờ</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- que-modal end -->
                                    <div class="product-info">
                                        <p><span>🚚</span> Mặt hàng sẽ được giao vào hoặc trước <span id="ten-days-ahead">ngày 3 tháng 3 năm 2024</span></p>
                                    </div>

                                    <div class="product-info">
                                        <div class="share-icons">
                                            <h6>Chia sẻ qua:</h6>
                                            <div class="pro-social">
                                                <ul class="social-icon">
                                                    <li>
                                                        <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://web.telegram.org/" class="twitter"><i class="fab fa-telegram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://in.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- peoduct detail end -->
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- pro-detail-page end -->
    <!-- product start -->
    <section class="product-tab section-ptb">
        <div class="collection-category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="section-capture tab">
                            <div class="section-title">
                                <h2><span>Sản phẩm phổ biến</span></h2>
                            </div>
                        </div>
                        <div class="collection-wrap">
                            <div class="collection-slider swiper" id="new-product">
                                <div class="swiper-wrapper">
                                    <!-- ******************************************************************* -->
                                    <!-- sp1 -->
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{asset("assets/client/img/product/home-pro-26.jpg")}}" class="img-pro img-fluid img1" alt="p-1">
                                                    <img src="{{asset("assets/client/img/product/home-pro-27.jpg")}}" class="img-pro img-fluid img2" alt="p-2">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Xem sản phẩm</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Thêm vào giỏ hàng</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Túi xách thời trang nữ</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">Giá 99.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">Giá cũ 125.000 <u>đ</u></span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <!-- end sp1 -->
                                    <!-- ***************************************** -->
                                    <!-- sp2 -->
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{asset("assets/client/img/product/home-pro-18.jpg")}}" class="img-pro img-fluid img1" alt="p-1">
                                                    <img src="{{asset("assets/client/img/product/home-pro-19.jpg")}}" class="img-pro img-fluid img2" alt="p-2">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Xem sản phẩm</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Thêm vào giỏ hàng</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Túi xách đeo chéo</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">Giá 111.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">Gía cũ 127.000 <u>đ</u></span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <!-- end sp2 -->
                                    <!-- *********************************************** -->
                                    <!-- sp3 -->
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{asset("assets/client/img/product/home-pro-16.jpg")}}" class="img-pro img-fluid img1" alt="p-1">
                                                    <img src="{{asset("assets/client/img/product/home-pro-31.jpg")}}" class="img-pro img-fluid img2" alt="p-2">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Xem sản phẩm</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Thêm vào giỏ hàng</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Túi xách đi biển</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">Giá 121.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">Giá cũ 155.000 <u>đ</u></span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <!-- end sp3 -->
                                    <!-- sp5 -->
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{asset("assets/client/img/product/home-pro-2.jpg")}}" class="img-pro img-fluid img1" alt="p-1">
                                                    <img src="{{asset("assets/client/img/product/home-pro-1.jpg")}}" class="img-pro img-fluid img2" alt="p-2">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Xem sản phẩm</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Thêm vào giỏ hàng</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Dép cói</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">Giá 21.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">Giá cũ 25.000 <u>đ</u></span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <!-- end sp5 -->
                                    <!-- sp6 -->
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{asset("assets/client/img/product/home-pro-5.jpg")}}" class="img-pro img-fluid img1" alt="p-1">
                                                    <img src="{{asset("assets/client/img/product/home-pro-4.jpg")}}" class="img-pro img-fluid img2" alt="p-2">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Xem sản phẩm</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Thêm vào giỏ hàng</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Giỏ đựng</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">Giá 90.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">Giá cũ 120.000 <u>đ</u></span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <!-- end sp6 -->
                                    <!-- sp7 -->
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="{{asset("assets/client/img/product/home-pro-21.jpg")}}" class="img-pro img-fluid img1" alt="p-1">
                                                    <img src="{{asset("assets/client/img/product/home-pro-22.jpg")}}" class="img-pro img-fluid img2" alt="p-2">
                                                </a>
                                                <!-- product-action start -->
                                                <div class="product-action pro-quiqview">
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <span class="tooltip-text">Xem sản phẩm</span>
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-cart">
                                                    <div class="product-action cart-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-shopping-bag"></i>
                                                            <span class="add-title">Thêm vào giỏ hàng</span>
                                                        </a>
                                                        <a href="wishlist.html" class="wishlist">
                                                            <span class="tooltip-text">Yêu thích</span>
                                                            <i class="feather-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-img end -->
                                            <!-- product-content start -->
                                            <div class="product-content">
                                                <div class="product-info">
                                                    <!-- product-title start -->
                                                    <h6><a href="product-template.html">Giỏ đựng đồ màu sắc</a></h6>
                                                    <!-- product-title end -->
                                                    <!-- product-price start -->
                                                    <div class="price-box">
                                                        <span class="new-price">Giá 100.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">Giá cũ 110.000 <u>đ</u></span>
                                                    </div>
                                                    <!-- product-price end -->
                                                    <!-- product-rating start -->
                                                    <div class="product-ratting">
                                                        <span class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                    </div>
                                                    <!-- product-rating end -->
                                                </div>
                                                <!-- product-action start -->
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                        <i class="feather-shopping-bag"></i>
                                                    </a>
                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <i class="feather-heart"></i>
                                                    </a>
                                                </div>
                                                <!-- product-action end -->
                                            </div>
                                            <!-- product-content end -->
                                        </div>
                                        <!-- product end -->
                                    </div>
                                    <!-- end sp7 -->
                                </div>
                                <div class="collection-button">
                                    <a href="collection.html" class="btn btn-style">Xem sản phẩm</a>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button class="swiper-prev swiper-prev-new"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                                <polyline points="15 18 9 12 15 6"></polyline>
                                            </svg></span></button>
                                    <button class="swiper-next swiper-next-new"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></span></button>
                                </div>
                            </div>
                            <div class="swiper-dots">
                                <div class="swiper-pagination swiper-pagination-new"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product end -->
</main>
@endsection
@extends('client.layouts.master')

@section('title')
    Tieu de trang - Cóincidence
@endsection

@section('content')
    <main id="main-content">
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
                                    <span class="breadcrumb-text">Tiêu đề bài viết</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- article-area start -->
        <section class="article-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="blog-article-wrapper left-side">
                            <div class="blog-grid-wrap  blog-sidebar">
                                <!-- blog sidebar start -->
                                <div class="blog-sidebar-wrap">
                                    <!-- blog-sidebar search start -->
                                    <div class="blog-post-sidebar blog-search">
                                        <h6 class="blog-sidebar-title">Tìm kiếm</h6>
                                        <div class="search-post">
                                            <form method="get">
                                                <input name="q" class="input-text" placeholder="Bạn cần tìm gì?" required autocomplete="off">
                                                <a href="search-blog.html" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- blog-sidebar search end -->
                                    <!-- blog-sidebar recent-post start -->
                                    <div class="blog-post-sidebar blog-recent-post">
                                        <h6 class="blog-sidebar-title">Bài đăng gần đây</h6>
                                        <div class="sidbar-inner sidbar-inner-wrap">
                                            <div class="post-image">
                                                <a href="" class="banner-img">
                                                    <img src="assets/client/img/blog/blog-bg.jpg" class="img-fluid" alt="blog-bg">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content">
                                                <h6>
                                                    <a href="article-post-right.html">Tiêu đề bài viết.</a>
                                                </h6>
                                                <span>Ngày, 07, 2024</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner banner-hover">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img">
                                                    <img src="assets/client/img/blog/blog-mini-1.jpg" class="img-fluid" alt="blog-1">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content banner-img">
                                                <h6><a href="article-post-right.html">Tiêu đề bài viết.</a></h6>
                                                <span>Ngày, 07, 2024</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner banner-hover">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img">
                                                    <img src="assets/client/img/blog/blog-mini-2.jpg" class="img-fluid" alt="blog-2">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content">
                                                <h6>
                                                    <a href="article-post-right.html">Tiêu đề bài viết.</a>
                                                </h6>
                                                <span>Ngày, 07, 2024</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner banner-hover">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img">
                                                    <img src="assets/client/img/blog/blog-mini-1.jpg" class="img-fluid" alt="blog-1">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content banner-img">
                                                <h6><a href="article-post-right.html">Tiêu đề bài viết.</a></h6>
                                                <span>Ngày, 07, 2024</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner banner-hover">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img">
                                                    <img src="assets/client/img/blog/blog-mini-2.jpg" class="img-fluid" alt="blog-2">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content">
                                                <h6>
                                                    <a href="article-post-right.html">Tiêu đề bài viết.</a>
                                                </h6>
                                                <span>Ngày, 07, 2024</span>
                                            </div>
                                        </div>
                                        <div class="sidbar-inner">
                                            <div class="post-image">
                                                <a href="article-post-right.html" class="banner-img">
                                                    <img src="assets/client/img/blog/blog-mini-1.jpg" class="img-fluid" alt="blog-4">
                                                </a>
                                            </div>
                                            <div class="recent-blog-content">
                                                <h6>
                                                    <a href="article-post-right.html">Tiêu đề bài viết.</a>
                                                </h6>
                                                <span>Ngày, 07, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog-sidebar recent-post end -->
                                </div>
                                <!-- blog sidebar end -->
                            </div>
                            <div class="blog-article-wrap blog-article">
                                <!-- blog single-post start -->
                                <div class="article-blog-post">
                                    <!-- blog img start -->
                                    <div class="blog-post-opt blog-post-img">
                                        <div class="blog-image">
                                                <img src="assets/client/img/blog/home-blog1.jpg" class="img-fluid" alt="article-01">
                                            <ul>
                                                <!-- blog-date start -->
                                                <li class="date-time">
                                                    <span>Ngày, 07, 2024</span>
                                                </li>
                                                <!-- blog-date end -->
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- blog img start -->
                                    <!-- blog title start -->
                                    <div class="blog-post-opt blog-post-title">
                                        <div class="blog-revert">
                                            <h6 class="post-title">Tiêu đề bài viết</h6>
                                            <!-- blog-info start -->
                                        </div>
                                    </div>
                                    <!-- blog title end -->
                                    <!-- blog content start -->
                                    <div class="blog-post-opt blog-post-content">
                                        <div class="blog-content">
                                            <div class="blog-wrap-desc">
                                                <p class="blog-desc">
                                                    Cói là một loại cây cỏ mọc ở các vùng đất ngập nước. Nguyên liệu này hoàn toàn từ thiên nhiên, thân thiện với môi trường và có khả năng phân hủy sinh học.
                                                </p>
                                                <p class="blog-desc">
                                                    Các sản phẩm từ cói thường có độ bền cao, chịu được tải trọng lớn. Nhờ có cấu trúc sợi chắc chắn, chúng có thể sử dụng trong thời gian dài mà không bị hỏng hóc.
                                                </p>
                                                <div class="blog-image my-4" style="width: 80%; display: block; margin: auto" >
                                                    <img src="assets/client/img/blog/home-blog2.jpg" alt="article-00" class="img-fluid">
                                                    <i class="d-block mt-2 text-center">Tiêu đề ảnh.</i>
                                                </div>
                                                <p class="blog-desc">
                                                    Cói là một loại cây cỏ mọc ở các vùng đất ngập nước. Nguyên liệu này hoàn toàn từ thiên nhiên, thân thiện với môi trường và có khả năng phân hủy sinh học.
                                                </p>
                                                <p class="blog-desc">
                                                    Các sản phẩm từ cói thường có độ bền cao, chịu được tải trọng lớn. Nhờ có cấu trúc sợi chắc chắn, chúng có thể sử dụng trong thời gian dài mà không bị hỏng hóc.
                                                </p>
                                        </div>
                                    </div>
                                    <!-- blog content end -->
                                    <!-- blog share start -->
                                    <div class="blog-post-opt blog-post-icon">
                                        <div class="blog-share">
                                            <ul class="social-icon">
                                                <li class="facebook">
                                                    <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="https://in.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- blog share end -->
                                </div>
                                <!-- blog single-post end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- article-area end -->
        <!-- blog start -->
        <section class="related-blog section-ptb bt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <h2><span>Bài viết khác</span></h2>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="blog-slider swiper" id="home1-blog">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="blog-post">
                                            <div class="blog-img-wrap">
                                                    <span class="date-time">
                                                        <span class="date">14</span>
                                                        <span class="month">May</span>
                                                    </span>
                                                <a href="article-post.html" class="blog-img">
                                                    <img src="assets/client/img/blog/home-blog1.jpg" class="img-fluid" alt="blog">
                                                    <span class="blog-icon"><i class="feather-link"></i></span>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <a href="article-post.html" class="blog-tag">
                                                    <h6>Tiêu đề bài viết.</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-post">
                                            <div class="blog-img-wrap">
                                                    <span class="date-time">
                                                        <span class="date">14</span>
                                                        <span class="month">May</span>
                                                    </span>
                                                <a href="article-post.html" class="blog-img">
                                                    <img src="assets/client/img/blog/home-blog2.jpg" class="img-fluid" alt="blog2">
                                                    <span class="blog-icon"><i class="feather-link"></i></span>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <a href="article-post.html" class="blog-tag">
                                                    <h6>Tiêu đề bài viết.</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-post">
                                            <div class="blog-img-wrap">
                                                    <span class="date-time">
                                                        <span class="date">14</span>
                                                        <span class="month">May</span>
                                                    </span>
                                                <a href="article-post.html" class="blog-img">
                                                    <img src="assets/client/img/blog/home-blog1.jpg" class="img-fluid" alt="blog">
                                                    <span class="blog-icon"><i class="feather-link"></i></span>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <a href="article-post.html" class="blog-tag">
                                                    <h6>Tiêu đề bài viết.</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-post">
                                            <div class="blog-img-wrap">
                                                    <span class="date-time">
                                                        <span class="date">14</span>
                                                        <span class="month">May</span>
                                                    </span>
                                                <a href="article-post.html" class="blog-img">
                                                    <img src="assets/client/img/blog/home-blog2.jpg" class="img-fluid" alt="blog2">
                                                    <span class="blog-icon"><i class="feather-link"></i></span>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <a href="article-post.html" class="blog-tag">
                                                    <h6>Tiêu đề bài viết.</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-post">
                                            <div class="blog-img-wrap">
                                                    <span class="date-time">
                                                        <span class="date">14</span>
                                                        <span class="month">May</span>
                                                    </span>
                                                <a href="article-post.html" class="blog-img">
                                                    <img src="assets/client/img/blog/home-blog1.jpg" class="img-fluid" alt="blog">
                                                    <span class="blog-icon"><i class="feather-link"></i></span>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <a href="article-post.html" class="blog-tag">
                                                    <h6>Tiêu đề bài viết.</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-post">
                                            <div class="blog-img-wrap">
                                                    <span class="date-time">
                                                        <span class="date">14</span>
                                                        <span class="month">May</span>
                                                    </span>
                                                <a href="article-post.html" class="blog-img">
                                                    <img src="assets/client/img/blog/home-blog2.jpg" class="img-fluid" alt="blog2">
                                                    <span class="blog-icon"><i class="feather-link"></i></span>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <a href="article-post.html" class="blog-tag">
                                                    <h6>Tiêu đề bài viết.</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-dots mt-4">
                                    <div class="swiper-pagination swiper-pagination-blog1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog end -->
    </main>
@endsection

@extends('client.layouts.master')

@section('title')
    Blog - Cóincidence
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
                                    <span class="breadcrumb-text">Blog</span>
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
                        <div class="blog-grid-wrapper left-side">
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
                                                <a href="article-post-right.html" class="banner-img">
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
                                    <!-- blog-sidebar tag start -->
                                    <div class="blog-post-sidebar blog-tags">
                                        <h6 class="blog-sidebar-title">Tag</h6>
                                        <div class="sidebartag">
                                            <ul class="sidebar-tag">
                                                <li><a href="#">Tag 1</a></li>
                                                <li><a href="#">Tag 2</a></li>
                                                <li><a href="#">Tag 3</a></li>
                                                <li><a href="#">Tag 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- blog-sidebar tag end -->
                                </div>
                                <!-- blog sidebar end -->
                            </div>
                            <div class="blog-grid-wrap blog-article">
                                <div class="blog-grid-view">
                                    <ul class="blog-area-wrap">
                                        <li class="blog-slider">
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
                                        </li>
                                        <li class="blog-slider">
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
                                        </li>
                                        <li class="blog-slider">
                                            <div class="blog-post">
                                                <div class="blog-img-wrap">
                                                        <span class="date-time">
                                                            <span class="date">14</span>
                                                            <span class="month">May</span>
                                                        </span>
                                                    <a href="article-post.html" class="blog-img">
                                                        <img src="assets/client/img/blog/home-blog3.jpg" class="img-fluid" alt="blog3">
                                                        <span class="blog-icon"><i class="feather-link"></i></span>
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <a href="article-post.html" class="blog-tag">
                                                        <h6>Tiêu đề bài viết.</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="blog-slider">
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
                                        </li>
                                        <li class="blog-slider">
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
                                        </li>
                                        <li class="blog-slider">
                                            <div class="blog-post">
                                                <div class="blog-img-wrap">
                                                        <span class="date-time">
                                                            <span class="date">14</span>
                                                            <span class="month">May</span>
                                                        </span>
                                                    <a href="article-post.html" class="blog-img">
                                                        <img src="assets/client/img/blog/home-blog3.jpg" class="img-fluid" alt="blog3">
                                                        <span class="blog-icon"><i class="feather-link"></i></span>
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <a href="article-post.html" class="blog-tag">
                                                        <h6>Tiêu đề bài viết.</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="paginatoin-area">
                                        <ul class="pagination-page-box">
                                            <li class="number active"><a href="javascript:void(0)" class="theme-glink">1</a></li>
                                            <li class="number"><a href="javascript:void(0)" class="gradient-text">2</a></li>
                                            <li class="page-next"><a href="javascript:void(0)" class="theme-glink"><i class="fa -solid fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- article-area end -->
    </main>
@endsection

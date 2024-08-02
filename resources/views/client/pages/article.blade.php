@extends('client.layouts.master')

@section('title')
{{ $post->title }} - Cóincidence
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
                                <a class="breadcrumb-link" href="{{route('client.blog')}}">Blog</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">{{ $post->title }}</span>
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
                                <!-- blog-sidebar recent-post start -->
                                <div class="blog-post-sidebar blog-recent-post">
                                    <h6 class="blog-sidebar-title">Bài đăng gần đây</h6>
                                    @foreach($recentPosts as $recentPost)
                                    <div class="sidbar-inner sidbar-inner-wrap">
                                        <div class="post-image">
                                            <a href="{{ route('client.blog.detail', $recentPost->id) }}" class="banner-img">
                                                <img src="{{ asset($recentPost->thumbnail) }}" class="img-fluid" alt="blog">
                                            </a>
                                        </div>
                                        <div class="recent-blog-content">
                                            <h6>
                                                <a href="{{ route('client.blog.detail', $recentPost->id) }}">{{ $recentPost->title }}</a>
                                            </h6>
                                            <span>{{ $recentPost->formatted_date }}</span>
                                        </div>
                                    </div>
                                    @endforeach
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
                                                <span class="month">{{ $formattedDate }}</span>
                                            </li>
                                            <!-- blog-date end -->
                                        </ul>
                                    </div>
                                </div>
                                <!-- blog img start -->
                                <!-- blog title start -->
                                <div class="blog-post-opt blog-post-title">
                                    <div class="blog-revert">
                                        <h6 class="post-title">{{ $post->title }}</h6>
                                        <!-- blog-info start -->
                                    </div>
                                </div>
                                <!-- blog title end -->
                                <!-- blog content start -->
                                <div class="blog-post-opt blog-post-content">
                                    <div class="blog-content">
                                        <div class="blog-wrap-desc">
                                            {!!$post->content!!}
                                        </div>
                                    </div>
                                    <!-- blog content end -->
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
                                @foreach($otherPosts as $otherPost)
                                <div class="swiper-slide">
                                    <div class="blog-post">
                                        <div class="blog-img-wrap">
                                            <span class="date-time">
                                                <span class="date">{{ $otherPost->created_at->format('d') }}</span>
                                                <span class="month">{{ $otherPost->formatted_month }}</span>
                                            </span>
                                            <a href="{{ route('client.blog.detail', $otherPost->id) }}" class="blog-img">
                                                <img src="{{ asset($otherPost->thumbnail) }}" class="img-fluid" alt="blog">
                                                <span class="blog-icon"><i class="feather-link"></i></span>
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <a href="{{ route('client.blog.detail', $otherPost->id) }}" class="blog-tag">
                                                <h6>{{ $otherPost->title }}</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
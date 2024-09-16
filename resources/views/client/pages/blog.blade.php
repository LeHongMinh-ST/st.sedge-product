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
                                <a class="breadcrumb-link" href="{{ route('todo.home') }}">Trang chủ</a>
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
                                <!-- blog-sidebar recent-post start -->
                                <div class="blog-post-sidebar blog-recent-post">
                                    <h6 class="blog-sidebar-title">Bài đăng gần đây</h6>
                                    @foreach($recentPosts as $post)
                                    <div class="sidbar-inner sidbar-inner-wrap">
                                        <div class="post-image">
                                            <a href="{{ route('client.blog.detail', $post->slug) }}" class="banner-img">
                                                <img src="{{asset($post->thumbnail)}}" class="img-fluid" alt="blog-bg">
                                            </a>
                                        </div>
                                        <div class="recent-blog-content">
                                            <h6>
                                                <a href="{{ route('client.blog.detail', $post->slug) }}">{{ $post->title }}</a>
                                            </h6>
                                            <span>{{ $post->formatted_date }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- blog-sidebar recent-post end -->
                            </div>
                            <!-- blog sidebar end -->
                        </div>
                        <div class="blog-grid-wrap blog-article">
                            <div class="blog-grid-view">
                                <ul class="blog-area-wrap">
                                    @foreach($posts as $post)
                                    <li class="blog-slider">
                                        <div class="blog-post">
                                            <div class="blog-img-wrap">
                                                <span class="date-time">
                                                    <span class="date">{{ $post->created_at->format('d') }}</span>
                                                    <span class="month">{{ $post->formatted_month }}</span>
                                                </span>
                                                <a href="{{route('client.blog.detail', $post->slug)}}" class="blog-img">
                                                    <img src="{{asset($post->thumbnail)}}" class="img-fluid" alt="blog">
                                                    <span class="blog-icon"><i class="feather-link"></i></span>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <a href="{{ route('client.blog.detail', $post->slug) }}" class="blog-tag">
                                                    <h6>{{ $post->title }}</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="paginatoin-area">
                                    <ul class="pagination-page-box">
                                        {{-- Previous Page Link --}}
                                        @if ($posts->onFirstPage())
                                        <li class="page-prev disabled" aria-disabled="true">
                                            <a href="javascript:void(0)" class="theme-glink"><i class="fa-solid fa-angle-left"></i></a>
                                        </li>
                                        @else
                                        <li class="page-prev">
                                            <a href="{{ $posts->previousPageUrl() }}" class="theme-glink"><i class="fa-solid fa-angle-left"></i></a>
                                        </li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @foreach ($posts->links()->elements as $element)
                                        {{-- "Three Dots" Separator --}}
                                        @if (is_string($element))
                                        <li class="number disabled" aria-disabled="true"><a href="javascript:void(0)" class="gradient-text">{{ $element }}</a></li>
                                        @endif

                                        {{-- Array Of Links --}}
                                        @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                        @if ($page == $posts->currentPage())
                                        <li class="number active" aria-current="page"><a href="javascript:void(0)" class="theme-glink">{{ $page }}</a></li>
                                        @else
                                        <li class="number"><a href="{{ $url }}" class="gradient-text">{{ $page }}</a></li>
                                        @endif
                                        @endforeach
                                        @endif
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($posts->hasMorePages())
                                        <li class="page-next">
                                            <a href="{{ $posts->nextPageUrl() }}" class="theme-glink"><i class="fa-solid fa-angle-right"></i></a>
                                        </li>
                                        @else
                                        <li class="page-next disabled" aria-disabled="true">
                                            <a href="javascript:void(0)" class="theme-glink"><i class="fa-solid fa-angle-right"></i></a>
                                        </li>
                                        @endif
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

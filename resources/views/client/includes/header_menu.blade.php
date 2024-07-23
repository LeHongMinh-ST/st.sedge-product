<div class="mainmenu-content">
    <div class="main-wrap">
        <ul class="main-menu">
            <li class="menu-link">
                <a href="{{route('todo.home')}}" class="link-title">
                    <span class="sp-link-title">Trang chủ</span>
                </a>
            </li>
            <li class="menu-link">
                <a href="{{route('todo.collection')}}" class="link-title">
                    <span class="sp-link-title">Sản phẩm<span class="header-sale-lable">Sale</span></span>
                    <span class="menu-arrow"><i class="fa fa-angle-down"></i></span>
                </a>
                <div class="menu-dropdown menu-mega collapse" id="colection">
                    <ul class="ul container p-0">
                        <li class="menumega-li">
                            <a href="javascript:void(0)" class="menumega-title">
                                <span class="sp-link-title">Danh mục sản phẩm</span>
                                <span class="menu-arrow"><i class="fa-solid fa-angle-down"></i></span>
                            </a>
                            <div class="menumegasup-dropdown collapse">
                                <ul class="menumegasup-ul">
                                    <li class="menumegasup-li">
                                        <a href="{{route('todo.collection')}}" class="menumegasup-title">
                                            <span class="sp-link-title"><i class="fa fa-angle-right"></i> Danh mục 1</span>
                                        </a>
                                    </li>
                                    <li class="menumegasup-li">
                                        <a href="{{route('todo.collection')}}" class="menumegasup-title">
                                            <span class="sp-link-title"><i class="fa fa-angle-right"></i> Danh mục 2</span>
                                        </a>
                                    </li>
                                    <li class="menumegasup-li">
                                        <a href="{{route('todo.collection')}}" class="menumegasup-title">
                                            <span class="sp-link-title"><i class="fa fa-angle-right"></i> Danh mục 3</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="menumega-li">
                            <div class="menu-product">
                                <ul class="menumegasup-ul">
                                    <li class="menumegasup-li">
                                        <div class="product-menu-list">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-template.html" class="pro-img img-height">
                                                        <img class="img-fluid img1" src="{{asset("assets/client/img/menu/home1-pro-banner1.jpg")}}" alt="menupro-1">
                                                        <img class="img-fluid img2" src="{{asset("assets/client/img/menu/home1-pro-banner1.jpg")}}" alt="menupro-2">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h6><a href="product-template.html">Sản phẩm cói 1</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">125.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">145.00 <u>đ</u></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menumegasup-li">
                                        <div class="product-menu-list">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-template.html" class="pro-img img-height">
                                                        <img class="img-fluid img1" src="{{asset("assets/client/img/menu/home1-pro-banner2.jpg")}}" alt="menupro-1">
                                                        <img class="img-fluid img2" src="{{asset("assets/client/img/menu/home1-pro-banner2.jpg")}}" alt="menupro-2">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h6><a href="product-template.html">Sản phẩm cói 2</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">125.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">145.00 <u>đ</u></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="menu-product-btn">
                                    <a href="collection.html" class="menu-pro-link">Xem thêm<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="menumega-li">
                            <div class="menu-product">
                                <ul class="menumegasup-ul">
                                    <li class="menumegasup-li">
                                        <div class="product-menu-list">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-template.html" class="pro-img img-height">
                                                        <img class="img-fluid img1" src="{{asset("assets/client/img/menu/home1-pro-banner1.jpg")}}" alt="menupro-1">
                                                        <img class="img-fluid img2" src="{{asset("assets/client/img/menu/home1-pro-banner1.jpg")}}" alt="menupro-2">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h6><a href="product-template.html">Sản phẩm cói 1</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">125.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">145.00 <u>đ</u></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menumegasup-li">
                                        <div class="product-menu-list">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-template.html" class="pro-img img-height">
                                                        <img class="img-fluid img1" src="{{asset("assets/client/img/menu/home1-pro-banner2.jpg")}}" alt="menupro-1">
                                                        <img class="img-fluid img2" src="{{asset("assets/client/img/menu/home1-pro-banner2.jpg")}}" alt="menupro-2">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h6><a href="product-template.html">Sản phẩm cói 2</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">125.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">145.00 <u>đ</u></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="menu-product-btn">
                                    <a href="collection.html" class="menu-pro-link">Xem thêm<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="menumega-li">
                            <div class="menu-product">
                                <ul class="menumegasup-ul">
                                    <li class="menumegasup-li">
                                        <div class="product-menu-list">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-template.html" class="pro-img img-height">
                                                        <img class="img-fluid img1" src="{{asset("assets/client/img/menu/home1-pro-banner1.jpg")}}" alt="menupro-1">
                                                        <img class="img-fluid img2" src="{{asset("assets/client/img/menu/home1-pro-banner1.jpg")}}" alt="menupro-2">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h6><a href="product-template.html">Sản phẩm cói 1</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">125.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">145.00 <u>đ</u></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menumegasup-li">
                                        <div class="product-menu-list">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-template.html" class="pro-img img-height">
                                                        <img class="img-fluid img1" src="{{asset("assets/client/img/menu/home1-pro-banner2.jpg")}}" alt="menupro-1">
                                                        <img class="img-fluid img2" src="{{asset("assets/client/img/menu/home1-pro-banner2.jpg")}}" alt="menupro-2">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h6><a href="product-template.html">Sản phẩm cói 2</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">125.000 <u>đ</u></span>
                                                        <span class="old-price ms-3">145.00 <u>đ</u></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="menu-product-btn">
                                    <a href="collection.html" class="menu-pro-link">Xem thêm<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-link">
                <a href="{{route('todo.blog')}}" class="link-title">
                    <span class="sp-link-title">Blog</span>
                </a>
{{--                <div class="menu-dropdown menu-single collapse" id="blogs">--}}
{{--                    <ul class="ul">--}}
{{--                        <li class="menusingle-li">--}}
{{--                            <a href="blog-grid-without.html" class="menusingle-title">--}}
{{--                                <span class="sp-link-title">Blog grid</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="menusingle-li">--}}
{{--                            <a href="blog-grid.html" class="menusingle-title">--}}
{{--                                <span class="sp-link-title">Blog grid left</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="menusingle-li">--}}
{{--                            <a href="blog-grid-right.html" class="menusingle-title">--}}
{{--                                <span class="sp-link-title">Blog grid right</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="menusingle-li">--}}
{{--                            <a href="article-post-without.html" class="menusingle-title">--}}
{{--                                <span class="sp-link-title">Article post</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="menusingle-li">--}}
{{--                            <a href="article-post.html" class="menusingle-title">--}}
{{--                                <span class="sp-link-title">Article post left</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="menusingle-li">--}}
{{--                            <a href="article-post-right.html" class="menusingle-title">--}}
{{--                                <span class="sp-link-title">Article post right</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </li>
            <li class="menu-link">
                <a href="{{route('todo.contact')}}" class="link-title">
                    <span class="sp-link-title">Liên hệ</span>
                </a>
            </li>
        </ul>
    </div>
</div>

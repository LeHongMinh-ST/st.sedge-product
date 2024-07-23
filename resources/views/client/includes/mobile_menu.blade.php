<div class="mobile-menu" id="mobile-menu">
    <div class="mobile-contents">
        <div class="menu-close">
            <button class="menu-close-btn">
            <span class="menu-close-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
            </button>
        </div>
        <div class="info-wrap">
            <div class="info-wrapper">
                <span class="icon">
                    <i class="feather-headphones"></i>
                </span>
                <div class="info-text">
                    <span class="label">SĐT: </span>
                    <p><a href="tel:(021)245368" class="info-link">+84 123 456 7890</a></p>
                </div>
            </div>
        </div>
        <div class="mobilemenu-content">
            <div class="main-wrap">
                <ul class="main-menu">
                    <li class="menu-link">
                        <a href="{{route('todo.home')}}" class="link-title" >
                            <span class="sp-link-title">Trang chủ</span>
                            {{-- <span class="menu-arrow"><i class="fa-solid fa-angle-down"></i></span> --}}
                        </a>
                    </li>
                    <li class="menu-link">
                        <a href="#menu-mega" class="link-title" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="sp-link-title">Sản phẩm</span>
                            <span class="menu-arrow"><i class="fa-solid fa-angle-down"></i></span>
                        </a>
                        <div class="menu-dropdown menu-mega collapse" id="menu-mega">
                            <ul class="ul container p-0">
                                <li class="menumega-li">
                                    <a href="#menumega-sup1" class="menumega-title" data-bs-toggle="collapse" aria-expanded="false">
                                        <span class="sp-link-title">Danh mục sản phẩm</span>
                                        <span class="menu-arrow"><i class="fa-solid fa-angle-down"></i></span>
                                    </a>
                                    <div class="menumegasup-dropdown collapse" id="menumega-sup1">
                                        <ul class="menumegasup-ul">
                                            <li class="menumegasup-li">
                                                <a href="collection-without.html" class="menumegasup-title">
                                                    <span class="sp-link-title">Danh mục 1</span>
                                                </a>
                                            </li>
                                            <li class="menumegasup-li">
                                                <a href="collection.html" class="menumegasup-title">
                                                    <span class="sp-link-title">Danh mục 2</span>
                                                </a>
                                            </li>
                                            <li class="menumegasup-li">
                                                <a href="collection-right.html" class="menumegasup-title">
                                                    <span class="sp-link-title">Danh mục 3</span>
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
                                                            <a href="product-template.html" class="pro-img">
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
                                                            <a href="product-template.html" class="pro-img">
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
                                                            <a href="product-template.html" class="pro-img">
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
                                                            <a href="product-template.html" class="pro-img">
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
                                                            <a href="product-template.html" class="pro-img">
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
                                                            <a href="product-template.html" class="pro-img">
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
                        <a href="{{route('todo.blog')}}" class="link-title" >
                            <span class="sp-link-title">Blog</span>
{{--                            <span class="menu-arrow"><i class="fa-solid fa-angle-down"></i></span>--}}
                        </a>
                    </li>
                    <li class="menu-link">
                        <a href="{{route('todo.contact')}}" class="link-title" >
                            <span class="sp-link-title">Liên hệ</span>
                            {{-- <span class="m enu-arrow"><i class="fa-solid fa-angle-down"></i></span> --}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

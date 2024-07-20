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
                <a href="#" class="link-title">
                    <span class="sp-link-title">Thông báo</span>
                </a>
            </li>
            <li class="menu-link">
                <a href="#" class="link-title">
                    <span class="sp-link-title">Blog</span>
                    <span class="menu-arrow"><i class="fa fa-angle-down"></i></span>
                </a>
                <div class="menu-dropdown menu-single collapse" id="blogs">
                    <ul class="ul">
                        <li class="menusingle-li">
                            <a href="blog-grid-without.html" class="menusingle-title">
                                <span class="sp-link-title">Blog grid</span>
                            </a>
                        </li>
                        <li class="menusingle-li">
                            <a href="blog-grid.html" class="menusingle-title">
                                <span class="sp-link-title">Blog grid left</span>
                            </a>
                        </li>
                        <li class="menusingle-li">
                            <a href="blog-grid-right.html" class="menusingle-title">
                                <span class="sp-link-title">Blog grid right</span>
                            </a>
                        </li>
                        <li class="menusingle-li">
                            <a href="article-post-without.html" class="menusingle-title">
                                <span class="sp-link-title">Article post</span>
                            </a>
                        </li>
                        <li class="menusingle-li">
                            <a href="article-post.html" class="menusingle-title">
                                <span class="sp-link-title">Article post left</span>
                            </a>
                        </li>
                        <li class="menusingle-li">
                            <a href="article-post-right.html" class="menusingle-title">
                                <span class="sp-link-title">Article post right</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-link">
                <a href="{{route('todo.contact')}}" class="link-title">
                    <span class="sp-link-title">Liên hệ</span>
                    {{-- <span class="menu-arrow"><i class="fa fa-angle-down"></i></span> --}}
                </a>
                {{-- <div class="menu-dropdown menu-sub collapse" id="page">
                    <ul class="ul">
                        <li class="menusub-li">
                            <a href="about-us.html" class="menusub-title">
                                <span class="sp-link-title">About us</span>
                                <span class="menu-arrow"><i class="fa-solid fa-angle-right"></i></span>
                            </a>
                            <div class="menusup-dropdown collapse" id="About">
                                <ul class="menusup-ul">
                                    <li class="menusup-li">
                                        <a href="about-us.html" class="menusup-title">
                                            <span class="sp-link-title">About us</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="about-us-2.html" class="menusup-title">
                                            <span class="sp-link-title">About us 2</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="about-us-3.html" class="menusup-title">
                                            <span class="sp-link-title">About us 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menusub-li">
                            <a href="login-account.html" class="menusub-title">
                                <span class="sp-link-title">My account</span>
                                <span class="menu-arrow"><i class="fa-solid fa-angle-right"></i></span>
                            </a>
                            <div class="menusup-dropdown collapse">
                                <ul class="menusup-ul">
                                    <li class="menusup-li">
                                        <a href="order-history.html" class="menusup-title">
                                            <span class="sp-link-title">Order</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="profile.html" class="menusup-title">
                                            <span class="sp-link-title">Profile</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="pro-address.html" class="menusup-title">
                                            <span class="sp-link-title">Address</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="pro-wishlist.html" class="menusup-title">
                                            <span class="sp-link-title">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="pro-tickets.html" class="menusup-title">
                                            <span class="sp-link-title">My tickets</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="billing-info.html" class="menusup-title">
                                            <span class="sp-link-title">Billing info</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="track-page.html" class="menusup-title">
                                            <span class="sp-link-title">Track page</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="order-complete.html" class="menusup-title">
                                            <span class="sp-link-title">Order complete</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menusub-li">
                            <a href="contact-us.html" class="menusub-title">
                                <span class="sp-link-title">Contact us</span>
                                <span class="menu-arrow"><i class="fa-solid fa-angle-right"></i></span>
                            </a>
                            <div class="menusup-dropdown collapse">
                                <ul class="menusup-ul">
                                    <li class="menusup-li">
                                        <a href="contact-us.html" class="menusup-title">
                                            <span class="sp-link-title">Contact us</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="contact-us-2.html" class="menusup-title">
                                            <span class="sp-link-title">Contact us 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menusub-li">
                            <a href="checkout-style1.html" class="menusub-title">
                                <span class="sp-link-title">Checkout</span>
                                <span class="menu-arrow"><i class="fa-solid fa-angle-right"></i></span>
                            </a>
                            <div class="menusup-dropdown collapse">
                                <ul class="menusup-ul">
                                    <li class="menusup-li">
                                        <a href="checkout-style1.html" class="menusup-title">
                                            <span class="sp-link-title">Contact us</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="checkout-style2.html" class="menusup-title">
                                            <span class="sp-link-title">Contact us 2</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="checkout-style3.html" class="menusup-title">
                                            <span class="sp-link-title">Contact us 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menusub-li">
                            <a href="javascript:void(0)" class="menusub-title">
                                <span class="sp-link-title">Features</span>
                                <span class="menu-arrow"><i class="fa-solid fa-angle-right"></i></span>
                            </a>
                            <div class="menusup-dropdown collapse">
                                <ul class="menusup-ul">
                                    <li class="menusup-li">
                                        <a href="cancellation.html" class="menusup-title">
                                            <span class="sp-link-title">Cancellation</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="cart-page.html" class="menusup-title">
                                            <span class="sp-link-title">Cart page</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="wishlist-product.html" class="menusup-title">
                                            <span class="sp-link-title">Wishlist product</span>
                                        </a>
                                    </li>
                                    <li class="menusup-li">
                                        <a href="sitemap.html" class="menusup-title">
                                            <span class="sp-link-title">Sitemap</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menusub-li">
                            <a href="faq.html" class="menusub-title">
                                <span class="sp-link-title">Faq's</span>
                            </a>
                        </li>
                        <li class="menusub-li">
                            <a href="privacy-policy.html" class="menusub-title">
                                <span class="sp-link-title">Privacy policy</span>
                            </a>
                        </li>
                        <li class="menusub-li">
                            <a href="payment-policy.html" class="menusub-title">
                                <span class="sp-link-title">Payment policy</span>
                            </a>
                        </li>
                        <li class="menusub-li">
                            <a href="terms-condition.html" class="menusub-title">
                                <span class="sp-link-title">Terms &amp; condition</span>
                            </a>
                        </li>
                        <li class="menusub-li">
                            <a href="return-policy.html" class="menusub-title">
                                <span class="sp-link-title">Return policy</span>
                            </a>
                        </li>
                        <li class="menusub-li">
                            <a href="404.html" class="menusub-title">
                                <span class="sp-link-title">404</span>
                            </a>
                        </li>
                        <li class="menusub-li">
                            <a href="coming-soon.html" class="menusub-title">
                                <span class="sp-link-title">Coming soon</span>
                            </a>
                        </li>
                    </ul>
                </div> --}}
            </li>
        </ul>
    </div>
</div>

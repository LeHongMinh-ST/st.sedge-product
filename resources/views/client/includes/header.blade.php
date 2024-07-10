<header class="main-header" id="stickyheader">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-area">
                        <div class="header-element header-logo">
                            <div class="header-theme-logo">
                                <a href="index.html" class="theme-logo">
                                    <img src="assets/client/img/logo/logo.png" class="img-fluid" alt="logo"> 
                                </a>
                            </div>
                        </div>
                        <div class="header-element header-menu">
                            <!-- header-menu start -->
                            @include('client.includes.header_menu')
                            <!-- header-menu end -->
                        </div>
                        <div class="header-element header-icon">
                            <div class="header-icon-block">
                                <ul class="shop-element">
                                    <li class="side-wrap toggler-wrap">
                                        <div class="toggler-wrapper">
                                            <button type="button" class="toggler-btn">
                                            <span class="toggler-icon"><i class="feather-menu"></i></span>
                                            </button>
                                        </div>
                                    </li>
                                    <li class="side-wrap search-wrap">
                                        <div class="search-wrapper">
                                            <a href="#searchmodal" data-bs-toggle="modal">
                                                <span class="search-icon"><i class="feather-search"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="side-wrap user-wrap">
                                        <div class="user-wrapper">
                                            <a href="login-account.html">
                                                <span class="user-icon"><i class="feather-user"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="side-wrap wishlist-wrap">
                                        <div class="wishlist-wrapper">
                                            <a href="wishlist-product.html">
                                                <span class="wishlist-icon-count">
                                                    <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                                    <span class="wishlist-count">5</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="side-wrap cart-wrap">
                                        <div class="cart-wrapper">
                                            <a href="javascript:void(0)" class="js-cart-drawer">
                                                <span class="cart-icon-count">
                                                    <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                    <span class="cart-count">4</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
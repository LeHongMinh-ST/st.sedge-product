<header class="main-header" id="stickyheader">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-area">
                        <div class="header-element header-logo">
                            <div class="header-theme-logo">
                                <a href="{{route('todo.home')}}" class="theme-logo">
                                    <img src="{{asset('assets/client/img/logo/logo.png')}}" class="img-fluid" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="header-element header-menu">
                            <!-- header-menu start -->
                            @include('client/includes/header_menu')
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
                                    @if(!in_array(Route::currentRouteName(), ['todo.checkout']))
                                    <li class="side-wrap cart-wrap">
                                        <div class="cart-wrapper">
                                            <a href="#" class="js-cart-drawer">
                                               <span class="cart-icon-count">
                                                    <span class="sp-link-title me-2" style="font-weight: 500" >GIỎ HÀNG </span>
                                                    <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M6.505 2h11a1 1 0 0 1 .8.4l2.7 3.6v15a1 1 0 0 1-1 1h-16a1 1 0 0 1-1-1V6l2.7-3.6a1 1 0 0 1 .8-.4m12.5 6h-14v12h14zm-.5-2l-1.5-2h-10l-1.5 2zm-9.5 4v2a3 3 0 1 0 6 0v-2h2v2a5 5 0 0 1-10 0v-2z"/></svg></span>
                                                    @livewire('client.component.cart-count')
                                                </span>
                                            </a>
                                        </div>
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
</header>

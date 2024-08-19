<div class="mainmenu-content">
    <div class="main-wrap">
        <ul class="main-menu">
            <li class="menu-link">
                <a href="{{route('todo.home')}}" class="link-title " >
                    <span class="sp-link-title">Trang chủ</span>
                </a>
            </li>
            <li class="menu-link">
                <a href="{{ route('todo.collection') }}" class="link-title">
                    <span class="sp-link-title">Sản phẩm</span></span>
                </a>
            </li>
            <li class="menu-link">
                <a href="{{route('client.blog')}}" class="link-title">
                    <span class="sp-link-title">Blog</span>
                </a>
            </li>
{{--            <li class="menu-link">--}}
{{--                <a href="{{route('todo.contact')}}" class="link-title">--}}
{{--                    <span class="sp-link-title">Liên hệ</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="menu-link">
                <a href="{{ route('todo.checkorder',['phone' => null]) }}" class="link-title">
                    <span class="sp-link-title">Kiểm tra đơn hàng</span>
                </a>
            </li>
        </ul>
    </div>
</div>

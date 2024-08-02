<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Hệ thống quản lý</h5>

                <div>
                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide"></div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="ph-house"></i>
                        <span>
                            Dashboard
                            <span class="d-block fw-normal opacity-50">Bảng điều khiển</span>
                        </span>
                    </a>
                </li>

                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Sản phẩm</div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->routeIs('admin.products.index') ? 'active' : '' }}">
                        <i class="ph-tote-simple"></i>
                        <span>
                            Sản phẩm
                            <span class="d-block fw-normal opacity-50">Danh sách sản phẩm</span>
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link {{ request()->routeIs('admin.categories.index') ?'active' : '' }}">
                        <i class="ph-stack"></i>
                        <span>
                            Danh mục
                            <span class="d-block fw-normal opacity-50">Danh mục sản phẩm</span>
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.post.index') }}" class="nav-link {{ request()->routeIs('admin.post.index') ?'active' : '' }}">
                        <i class="ph-newspaper"></i>
                        <span>
                            Bài viết
                            <span class="d-block fw-normal opacity-50">Quản lý bài viết</span>
                        </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->

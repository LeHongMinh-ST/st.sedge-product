<div class="single-product-wrap">
            <!-- product-img start -->
            <div class="product-image">
                <a href="{{route('client.product.details', $product->id)}}" class="pro-img">
                    <img src="{{ asset($product->thumbnail) }}" class="img-fluid img1" alt="{{ $product->name }}">
                    <img src="{{ asset($product->thumbnail) }}" class="img-fluid img2" alt="{{ $product->name }}">
                </a>
                <!-- product-action start -->
                <div class="product-action pro-quiqview">
                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view" data-product-id="{{ $product->id }}">
                        <span class="tooltip-text">Xem sản phẩm</span>
                        <i class="feather-eye"></i>
                    </a>
                </div>
                <div class="product-cart">
                    <div class="product-action cart-wishlist">
                        <a wire:click="handleAddToCart({{ $product->id }})" href="javascript:void(0)" class="add-to-cart" data-product-id="{{ $product->id }}">
                            <i class="feather-shopping-bag"></i>
                            <span class="add-title">Thêm vào giỏ hàng</span>
                        </a>
                    </div>
                </div>
                <!-- product-action end -->
            </div>
            <!-- product-img end -->
            <!-- product-content start -->
            <div class="product-content">
                <div class="product-info">
                    <!-- product-title start -->
                    <h6><a href="{{ route('client.product.details', $product->id) }}">{{ $product->name }}</a></h6>
                    <!-- product-title end -->
                    <!-- product-price start -->
                    <div class="price-box">
                        <span class="new-price">{{ number_format($product->price, 0, ',', '.') }}<u>đ</u></span>
                        @if($product->old_price)
                            <span class="old-price ms-3">{{ number_format($product->old_price, 0, ',', '.') }} <u>đ</u></span>
                        @endif
                    </div>
                    <!-- product-price end -->
                    <div class="product-description">
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
                <!-- product-action start -->
                <div class="product-action">
                    <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview" data-product-id="{{ $product->id }}">
                        <span class="pro-action-icon"><i class="feather-eye"></i></span>
                    </a>
                    <a wire:click="handleAddToCart({{ $product->id }})" class="add-to-cart" data-product-id="{{ $product->id }}">
                        <span class="cart-title">
                            <span class="add-c-title">
                                <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                <span class="add-title">Thêm vào giỏ hàng</span>
                            </span>
                        </span>
                    </a>

                </div>
                <!-- product-action end -->
            </div>
            <!-- product-content end -->
        </div>

<div>
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
                                    <a class="breadcrumb-link" href="{{route('todo.home')}}">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-li">
                                    <span class="breadcrumb-text">Giỏ hàng</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- cart-page start -->
        <section class="cart-page section-pt mb-5">
            <form method="post">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="cart-page-wrap">
                                <div class="cart-wrap-info">
                                    <div class="cart-item-wrap">
                                        <div class="cart-title">
                                            <h6>Giỏ hàng của tôi:</h6>
                                            <span class="cart-count">
                                                    <span class="cart-counter">{{ $cartQuantity }}</span>
                                                    <span class="cart-item-title ms-1">Sản phẩm</span>
                                                </span>
                                        </div>
                                        <div class="item-wrap">
                                            @foreach($cart as $item)
                                                <ul class="cart-wrap">
                                                <!-- cart-info start -->
                                                <li class="item-info">
                                                    <!-- cart-img start -->
                                                    <div class="item-img">
                                                        <a href="product-template.html">
                                                            <img src="{{ asset($item->options->thumbnail) }}" class="img-fluid" alt="{{ $item->name }}}">
                                                        </a>
                                                    </div>
                                                    <!-- cart-img end -->
                                                    <!-- cart-title start -->
                                                    <div class="item-text">
                                                        <a href="{{ route('client.product.details', ['id' => $item->id]) }}">{{ $item->name }}</a>

                                                        <span class="item-option">
                                                                <span class="item-price">Giá: {{ number_format($item->price, 0, ',', '.') }} <u>đ</u></span>
                                                            </span>
                                                    </div>
                                                    <!-- cart-title send -->
                                                </li>
                                                <!-- cart-info end -->
                                                <!-- cart-qty start -->
                                                <li class="item-qty">
                                                    <div class="product-quantity-action">
                                                        <div class="product-quantity">
                                                            <div class="cart-plus-minus">
                                                                <button wire:click="handelDecreasement('{{ $item->rowId }}')" class="dec qtybutton minus"><i class="fa-solid fa-minus"></i></button>
                                                                <input wire:change="handleChangeInput('{{ $item->rowId }}', $event.target.value)" type="text" name="quantity" value="{{ $item->qty }}">
                                                                <button wire:click="handelIncreasement('{{ $item->rowId }}')" class="inc qtybutton plus"><i class="fa-solid fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-remove">
                                                            <span class="remove-wrap">
                                                                <a wire:click="handelRemoveItem('{{ $item->rowId }}')" href="javascript:void(0)" class="text-danger">Xóa sản phẩm</a>
                                                            </span>
                                                    </div>
                                                </li>
                                                <!-- cart-qty end -->
                                                <!-- cart-price start -->
                                                <li class="item-price">
                                                    <span class="amount full-price"> {{ number_format($item->qty * $item->price, 0, ',', '.') }} <u>đ</u></span>
                                                </li>
                                                <!-- cart-price end -->
                                            </ul>
                                            @endforeach
                                        </div>
                                        <div class="cart-buttons">
                                            <a href="{{route('todo.collection')}}" class="btn-style3">Tiếp tục tìm sản phẩm</a>
                                            <a wire:click="removeCart()" class="btn-style3">Xóa tất cả sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-info-wrap">
                                    <div class="cart-total-wrap cart-info">
                                        <h6 class="cart-info-title">TỔNG TIỀN</h6>
                                        <div class="cart-total">
                                            <hr>
                                            <div class="total-amount">
                                                <h6 class="total-title">Tổng tiền</h6>
                                                <span class="amount total-price">{{ number_format($subtotal, 0, ',', '.') }}<u>đ</u></span>
                                            </div>
                                            <div class="proceed-to-checkout">
                                                <a href="{{route('todo.checkout')}}" class="btn btn-style3">Đặt hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- cart-page end -->
    </main>
</div>

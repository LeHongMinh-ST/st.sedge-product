<div class="drawer-inner">
    <div class="drawer-scrollable">
        <ul class="cart-items">
            @forelse($cart as $item)
                <li class="cart-item">
                    <div class="cart-item-info">
                        <div class="cart-item-image">
                            <a href="product-template.html">
                                <img src="{{ asset($item->options->thumbnail) }}" class="img-fluid" alt="{{ $item->name }}">
                            </a>
                        </div>
                        <div class="cart-item-details">
                            <div class="cart-item-name">
                                <a href="product-template.html">{{$item->name}}</a>
                            </div>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span>{{$item->qty}}</span>
                                    <span>×</span>
                                    <span class="price">{{ number_format($item->price, 0, ',', '.') }}<u>đ</u></span>
                                </div>
                            </div>
                            <div class="cart-item-sub">
                                <div class="cart-qty-price-remove">
                                    <div class="cart-item-qty">
                                        <div class="js-qty-wrapper">
                                            <div class="js-qty-wrap">
                                                <button wire:click="decreasement('{{$item->rowId }}')" type="button" class="js-qty-adjust ju-qty-adjust-minus"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button>
                                                <input wire:change="changeInput('{{ $item->rowId }}', $event.target.value)" type="text" class="js-qty-num" name="name" value="{{ $item->qty }}" pattern="[0-9]*">
                                                <button wire:click="increasement('{{$item->rowId }}')" type="button" class="js-qty-adjust ju-qty-adjust-plus">
                                                        <span>
                                                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                            </svg>
                                                        </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-price">
                                        <span class="cart-price">{{ number_format($item->qty * $item->price, 0, ',', '.') }}<u>đ</u></span>
                                    </div>
                                    <div class="cart-item-remove">
                                        <button wire:click="removeItem('{{ $item->rowId }}')" type="button" class="cart-remove"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <div class="drawer-cart-empty">
                    <div class="drawer-scrollable">
                        <h2>Chưa có sản phẩm nào trong giỏ hàng.</h2>
                    </div>
                </div>
            @endforelse
        </ul>
    </div>
    <div class="drawer-footer">
        <div class="drawer-block drawer-total">
            <span class="drawer-subtotal">Tổng tiền</span>
            <span class="drawer-totalprice">{{ number_format($subtotal, 0, ',', '.') }}<u>đ</u></span>
        </div>
        <div class="drawer-block drawer-cart-checkout">
            <div class="cart-checkout-btn">
                <button type="button" onclick="location.href='{{route('todo.cart')}}'" name="checkout" class="btn btn-style">Xem giỏ hàng</button>
                <button type="button" onclick="location.href='{{ route('todo.cart') }}'" class="checkout btn btn-style2">Mua hàng</button>
            </div>
        </div>
    </div>
</div>

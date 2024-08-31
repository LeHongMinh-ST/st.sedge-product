<div class="check-pro">
    <h2 id="check-3-cat">1. Sản phẩm có trong giỏ hàng ({{ $cartQuantity }})</h2>
    <ul class="check-ul font-size">
        @foreach($cart as $item)
        <li>
            <div class="check-pro-img">
                <a href="{{ route('client.product.details', ['id' => $item->id]) }}">
                    <img src="{{ asset($item->options->thumbnail) }}" class="img-fluid" alt="cart-1">
                </a>
            </div>
            <div class="check-content">
                <a href="{{ route('client.product.details', ['id' => $item->id]) }}">{{ $item->name }}</a>

                <div class="check-qty-pric">
                    <span class="check-qty">Số lượng: {{ $item->qty }}</span>
                </div>
                <div class="check-qty-pric">
                    <span class="check-price check">Giá: {{ number_format($item->price, 0, ',', '.') }}<u>đ</u></span>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    <span class="total1 ms-4">Tổng tiền: </span>
    <span class="total1 ms-2">{{ number_format($subtotal, 0, ',', '.') }}<u>đ</u></span>
</div>

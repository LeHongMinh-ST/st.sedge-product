<section class="product-details-page pro-style1 bg-color section-ptb">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="pro-details-pos pro-details-left-pos">
                    <!-- Product slider start -->
                    <livewire:client.component.product-detail-image :product="$product" :key="$product->id" />
                    <!-- product detail start -->
                    <div class="product-details-wrap product-details-tb product-details">
                        <div class="product-details-info">
                            <div class="pro-nprist">
                                <div class="product-info">
                                    <!-- product-title start -->
                                    <div class="product-title">
                                        <h2>{{ $product->name }}</h2>
                                    </div>
                                    <!-- product-title end -->
                                </div>
                                <div class="product-info">
                                    <div class="pro-prlb pro-sale">
                                        <div class="price-box">
                                            <span class="new-price">{{ number_format($product->price) }} <u>đ</u></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p>Mô tả:</p>
                                <div class="info-text">
                                    {{ $product->description }}
                                </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-inventory">
                                        <div class="stock-inventory stock-more">
                                            <p class="text-success">Bạn ơi hãy nhanh tay! còn lại
                                                <span class="available-stock {{ $product->quantity == 0 ? 'bg-danger' : 'bg-success' }}">{{ $product->quantity }}</span>
                                                <span>sản phẩm trong kho!</span>
                                            </p>
                                        </div>
                                        <div class="product-variant">
                                            <h6>Tình trạng:</h6>
                                            @if($product->quantity > 0)
                                                <span class="stock-qty in-stock text-success">
                                                    <span>Còn hàng<i class="bi bi-check2"></i></span>
                                                </span>
                                            @else
                                                <span class="stock-qty out-stock text-danger">
                                                    <span>Hết hàng</span>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="pro-detail-action">
                                        <form wire:submit="handleAddToCart({{ $product->id }})">
                                            <div class="product-actions">
                                                <!-- pro-deatail button start -->
                                                <div class="pro-detail-button">
                                                    <button type="submit" class="btn-style3 ajax-spin-cart add-to-cart">
                                                        <span class="cart-title">THÊM VÀO GIỎ HÀNG</span>
                                                    </button>
                                                    <a wire:click="buy({{$product->id}})" class="btn btn-cart btn-theme">
                                                        <span>MUA NGAY</span>
                                                    </a>
                                                </div>
                                                <!-- pro-deatail button end -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- product detail end -->
                            </div>
                        </div>
                    </div>
                </div>
</section>

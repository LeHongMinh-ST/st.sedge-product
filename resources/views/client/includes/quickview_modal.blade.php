<div class="productmodal">
    <div class="modal fade" id="quickview">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-quickview">Thông tin sản phẩm</h6>
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <!-- quickview-sliderstart -->
                    <div class="quickview-slider">
                        <div class="quick-view-tab">
                            <div class="quick-block">
                                <div class="quick-image">
                                    <a href="{{ route('client.product.details',['slug'=>$product->slug]) }}">
                                        <img src="{{ asset($product->thumbnail) }}" class="img-fluid" alt="{{ $product->name }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- quickview-slider end -->
                    <!-- quick-view-content start -->
                    <div class="quick-view-content">
                        <div class="pro-nprist">
                            <!-- product-title start -->
                            <div class="product-title">
                                <h6>{{ $product->name }}</h6>
                            </div>
                            <!-- product-title end -->
                            <!-- product-price start -->
                            <div class="product-price">
                                <div class="price-box">
                                    <span class="new-price">{{ number_format($product->price, 0, ',', '.') }} <u>đ</u></span>
                                    @if($product->old_price)
                                        <span class="old-price ms-3">{{ number_format($product->old_price, 0, ',', '.') }} <u>đ</u></span>
                                    @endif
                                </div>
                            </div>
                            <!-- product-price end -->
                            <!-- product-desc start -->
                            <div class="product-desc">
                                <p>{{ $product->description }}</p>
                            </div>
                            <!-- product-desc end -->
{{--                            <form id="add-item-qv" action="" method="post">--}}
{{--                                @csrf--}}
{{--                                <div class="quick-view-select">--}}
{{--                                    <div class="quick-view-text">--}}
{{--                                        <div class="selector-wrapper">--}}
{{--                                            <div class="pro-qty-wrap">--}}
{{--                                                <h6>Số lượng:</h6>--}}
{{--                                                <div class="product-quantity">--}}
{{--                                                    <div class="cart-plus-minus">--}}
{{--                                                        <button class="dec qtybutton minus"><i class="fa-solid fa-minus"></i></button>--}}
{{--                                                        <input value="1" type="text" name="quantity" pattern="[0-9]*">--}}
{{--                                                        <button class="inc qtybutton plus"><i class="fa-solid fa-plus"></i></button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="quickview-buttons">--}}
{{--                                    <button type="submit" class="btn btn-style3 mt-3">Thêm vào giỏ hàng</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
                        </div>
                    </div>
                    <!-- quick-view-content end -->
                </div>
            </div>
        </div>
    </div>
</div>





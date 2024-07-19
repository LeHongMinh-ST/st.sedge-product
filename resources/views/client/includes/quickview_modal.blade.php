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
                                    <a href="product-template.html"><img src="{{asset("assets/client/img/product/home-pro-1.jpg")}}" class="img-fluid" alt="p-1"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- quickview-slider end -->
                    <!-- quick-view-content start -->
                    <div class="quick-view-content">
                        <div class="pro-nprist">
                            <div class="product-ratting">
                                <span class="spr-badge">
                                    <span class="pro-ratting">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <span class="spr-badge-caption">No reviews</span>
                                </span>
                            </div>
                            <!-- product-title start -->
                            <div class="product-title">
                                <h6>Dép cói</h6>
                            </div>
                            <!-- product-title end -->
                            <!-- product-price start -->
                            <div class="product-price">
                                <div class="price-box">
                                    <span class="new-price">111.000 <u>đ</u></span>
                                    <span class="old-price ms-3">127.00 <u>đ</u></span>
                                </div>
                            </div>
                            <!-- product-price end -->
                            <!-- product-desc start -->
                            <div class="product-desc">
                                <p>
                                    Dép cói là một loại dép được làm từ sợi cói, thường được sử dụng trong mùa hè vì sự thoáng mát và thân thiện với môi trường.</p>
                            </div>
                            <!-- product-desc end -->
                            <form id="add-item-qv" action="https://spacingtech.com/cart/add" method="post">
                                <div class="quick-view-select">
                                    <div class="quick-view-text">
                                        {{-- <div class="selector-wrapper">
                                            <label>Color:</label>
                                            <select class="single-option-selector" data-option="option1" id="product-color">
                                                <option value="Green">Green</option>
                                                <option value="Olive">Olive</option>
                                                <option value="Silver">Silver</option>
                                            </select>
                                        </div> --}}
                                        <div class="selector-wrapper">
                                            <div class="pro-qty-wrap">
                                                <h6>Số lượng:</h6>
                                                <div class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <button class="dec qtybutton minus"><i class="fa-solid fa-minus"></i></button>
                                                        <input value="1" type="text" name="quantity" pattern="[0-9]*">
                                                        <button class="inc qtybutton plus"><i class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quickview-buttons">
                                    <button type="button" onclick="location.href='cart-page.html'" class="btn btn-style">Thêm vào giỏ hàng</button>
                                    <a href="cart-empty.html">
                                        <span class="icon"><i class="feather-heart"></i></span>
                                        <span class="wishlist-text">Yêu thích</span>
                                    </a>
                                </div>
                            </form>
                            <!-- product-title end -->
                        </div>
                    </div>
                    <!-- quick-view-content end -->
                </div>
            </div>
        </div>
    </div>
</div>

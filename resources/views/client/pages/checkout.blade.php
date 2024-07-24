@extends('client.layouts.master')
@section('content')
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
                                <a class="breadcrumb-link" href="index.html">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Thông tin đơn</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- checkout-area start -->
    <section class="section-ptb check-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="check-3-title">Thông tin thanh toán sản phẩm</h2>
                    <ul class="check-3-ul">
                        <li class="check-3-li ck-cat">
                            <div class="check-pro">
                                <h2>1. Sản phẩm có trong giỏ hàng (4)</h2>
                                <ul class="check-ul font-size">
                                    <li>
                                        <div class="check-pro-img">
                                            <a href="product-template.html">
                                                <img src="assets/client/img/product/home-pro-1.jpg" class="img-fluid" alt="cart-1">
                                            </a>
                                        </div>
                                        <div class="check-content">
                                            <a href="product-template.html">Dép cói</a>

                                            <div class="check-qty-pric">
                                                <span class="check-qty">Số lượng: X1</span>
                                            </div>
                                            <div class="check-qty-pric">
                                                <span class="check-price check">Giá: 125.000<u>đ</u></span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end sp1 -->
                                    <!-- sp2 -->
                                    <li>
                                        <div class="check-pro-img">
                                            <a href="product-template.html">
                                                <img src="assets/client/img/product/home-pro-4.jpg" class="img-fluid" alt="cart-1">
                                            </a>
                                        </div>
                                        <div class="check-content">
                                            <a href="product-template.html">Túi cói</a>

                                            <div class="check-qty-pric">
                                                <span class="check-qty">Số lượng: X2</span>
                                            </div>
                                            <div class="check-qty-pric">
                                                <span class="check-price check">Giá: 380.000<u>đ</u></span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end sp2  -->
                                    <!-- sp3 -->
                                    <li>
                                        <div class="check-pro-img">
                                            <a href="product-template.html">
                                                <img src="assets/client/img/product/home-pro-1.jpg" class="img-fluid" alt="cart-1">
                                            </a>
                                        </div>
                                        <div class="check-content">
                                            <a href="product-template.html">Dép cói</a>

                                            <div class="check-qty-pric">
                                                <span class="check-qty">Số lượng: X1</span>
                                            </div>
                                            <div class="check-qty-pric">
                                                <span class="check-price check">Giá: 125.000<u>đ</u></span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end sp3 -->
                                    <!-- sp4 -->
                                    <li>
                                        <div class="check-pro-img">
                                            <a href="product-template.html">
                                                <img src="assets/client/img/product/home-pro-4.jpg" class="img-fluid" alt="cart-1">
                                            </a>
                                        </div>
                                        <div class="check-content">
                                            <a href="product-template.html">Túi cói</a>

                                            <div class="check-qty-pric">
                                                <span class="check-qty">Số lượng: X2</span>
                                            </div>
                                            <div class="check-qty-pric">
                                                <span class="check-price check">Giá: 380.000<u>đ</u></span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end sp4 -->
                                </ul>
                                <span class="total1 ms-4">Tổng tiền: </span>
                                <span class="total1 ms-2">900.000 <u>đ</u></?u></span>
                            </div>
                        </li>
                        <!-- form 2 -->
                        <li class="check-3-li ck-address">
                            <div class="check-add">
                                <h2>2. Thông tin khách hàng</h2>
                                <form>
                                    <ul>
                                        <li>
                                            <label>Họ</label>
                                            <input type="text" name="f-name" placeholder="Nhập Họ">
                                        </li>
                                        <li>
                                            <label>Tên</label>
                                            <input type="text" name="l-name" placeholder="Nhập Tên">
                                        </li>
                                        <li>
                                            <label>Giới tính</label>
                                            <select>
                                                <option value="#">Nam</option>
                                                <option value="#">Nữ</option>
                                                <option value="#">Khác</option>
                                            </select>
                                        </li>
                                        <!-- <li>
                                            <label>Địa chỉ Email</label>
                                            <input type="text" name="mail" placeholder="Nhập Email">
                                        </li> -->
                                        <li>
                                            <label>Số điện thoại</label>
                                            <input type="text" name="number" placeholder="Nhập số điện thoại">
                                        </li>
                                        <li>
                                            <label>Vận chuyển tới</label>
                                            <select name="calc_shipping_district" required="">
                                                <option value="" selected>Việt Nam</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Chọn Tỉnh / Thành phố</label>
                                            <select class="form-select form-select-sm mb-3 select" id="city" aria-label=".form-select-sm">
                                                <option value="" selected>Tỉnh / Thành phố</option>
                                            </select>
                                        </li>
                                        <div class="section">
                                            <li>
                                                <label>Chọn Quận / Huyện </label>
                                                <select class="form-select form-select-sm mb-3 select" id="district" aria-label=".form-select-sm">
                                                    <option value="" selected>Quận / Huyện</option>
                                                </select>
                                            </li>
                                        </div>
                                        <div class="section">
                                            <li>
                                                <label>Chọn Xã / Phường </label>
                                                <select class="form-select form-select-sm select" id="ward" aria-label=".form-select-sm">
                                                    <option value="" selected>Xã / Phường</option>
                                                </select>
                                            </li>
                                        </div>
                                        <li>
                                            <label>Chi tiết địa chỉ nhận hàng</label>
                                            <input type="text" name="add" placeholder="Nhập Tên đường, Tòa nhà, Số nhà">
                                        </li>
                                    </ul>
                                </form>
                                <div class="check-btn enter">
                                    <a href="order-complete.html" class="btn-style">Xác nhận</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout-area end -->
</main>
@endsection
<!-- setion city -->
@section('script_custom')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
        method: "GET",
        responseType: "application/json",
    };
    var promise = axios(Parameter);
    promise.then(function(result) {
        renderCity(result.data);
    });

    function renderCity(data) {
        for (const x of data) {
            citis.options[citis.options.length] = new Option(x.Name, x.Id);
        }
        citis.onchange = function() {
            district.length = 1;
            ward.length = 1;
            if (this.value != "") {
                const result = data.filter(n => n.Id === this.value);

                for (const k of result[0].Districts) {
                    district.options[district.options.length] = new Option(k.Name, k.Id);
                }
            }
        };
        district.onchange = function() {
            ward.length = 1;
            const dataCity = data.filter((n) => n.Id === citis.value);
            if (this.value != "") {
                const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Id);
                }
            }
        };
    }
</script>
@endsection
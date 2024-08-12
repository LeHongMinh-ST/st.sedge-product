<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="password-block">
                    <!-- order profile start -->
                    <div class="profile-info">
                        <div class="search-order">
                            <form wire:submit="search">
                                <input wire:model.live="phoneNumber" name="q" class="input-text" placeholder="Nhập số điện thoại để kiểm tra đơn hàng.">
                                <a type="submit" class="btn-search-order"><i class="fa-solid fa-magnifying-glass"></i></a>
                            </form>
                        </div>
                    </div>
                    <!-- order profile end -->
                    <!-- order info start -->
                    <div class="profile-form order-info ms-4 mt-4">
                        <div class="pro-add-title">
                            <h6>Đơn hàng của bạn</h6>
                        </div>
                        @if ($phoneNumber)
                            <table class="table table-hover table-responsive table-striped text-center">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Địa chỉ</th>
                                    <th>Tình trạng</th>
                                    <th>Tổng tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $order->code }}</td>
                                        <td>{{ $order->order_date }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{!! $order->statusClient !!}</td>
                                        <td>{{ number_format($order->total, 0, ',', '.') }} VNĐ</td>
                                        <td><a href="{{ route('todo.orderdetail',['id' => $order->id]) }}"><i class="feather-eye"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Hãy nhập số điện thoại để tra cứu đơn hàng của bạn </p>
                        @endif
                    </div>
                    <!-- order info end -->
                </div>
            </div>
        </div>
    </div>
</div>

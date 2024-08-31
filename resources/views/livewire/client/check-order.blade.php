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
                            <table class="table table-hover table-responsive table text-center">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Địa chỉ</th>
                                    <th>Tình trạng</th>
                                    <th>Tổng tiền</th>
                                    <th>Chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        @if($order->newOrder)
                                            <td class="order-code">
                                                <a class="text-primary" href="{{ route('todo.orderdetail',['id' => $order->id]) }}">#{{ $order->code }}</a>
                                                <sup>
                                                    <p class="badge text-light">Mới</p>
                                                </sup>
                                            </td>
                                        @else
                                            <td><a class="text-primary" href="{{ route('todo.orderdetail',['id' => $order->id]) }}">#{{ $order->code }}</a></td>
                                        @endif
                                        <td>{{ $order->order_date }}</td>
                                        @if(!$order->province_name && !$order->district_name && !$order->ward_name)
                                            <td>{{ $order->address }}</td>
                                        @else
                                        <td>{{ $order->address }}, {{ $order->ward_name }}, {{  $order->district_name }}, {{  $order->province_name }}</td>
                                        @endif
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

@section('style_custom')
    <style>
        .badge {
            top: -50%; /* Adjust this value to move the badge higher or lower */
            right: 0;
            background-color: #ff0000;
            color: #fff;
            padding: 2px 5px;
            border-radius: 3px;
            font-size: 0.75rem;
            transform: translateY(-50%); /* Fine-tune vertical positioning */
        }
    </style>

@endsection

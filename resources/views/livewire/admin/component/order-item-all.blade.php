<div class="">
    @php
        use App\Enums\OrderStatus;
    @endphp
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class="text-center">STT</th>
            <th class="text-center">Mã đơn hàng</th>
            <th class="text-center">Tên khách hàng</th>
            <th class="text-center">Số điện thoại</th>
            <th class="text-center">Tổng tiền</th>
            <th class="text-center">Ngày đặt đơn</th>
            <th class="text-center">Trạng thái</th>
            <th class="text-center">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $order->code }}</td>
                <td>{{ $order->fullname}}</td>
                <td>{{ $order->phone_number }}</td>
                <td><b>{{ number_format($order->total, 0, ',', '.') }} VNĐ</b></td>
                <td>{{ $order->order_date }}</td>
                <td class="text-center">{!! $order->statusText !!}</td>
                <td class="text-center">
                    <div class="dropdown">
                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                            <i class="ph-list"></i>
                        </a>
                        <ul class="form-control dropdown-menu dropdown-menu-end">
                            @if($order->status == OrderStatus::Pending)
                                <li>
                                    <a wire:click="changeApprove({{ $order->id }})" class="dropdown-item">
                                        <i class="ph-paper-plane-tilt me-2"></i>
                                        Xác nhận
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                            @endif
                            @if($order->status != OrderStatus::Canceled && $order->status != OrderStatus::Completed)
                                <li>
                                    <a wire:click="changeCancel({{ $order->id }})" class="dropdown-item text-danger">
                                        <i class="ph-file-x me-2"></i>
                                        Hủy đơn
                                    </a>
                                </li>
                            @endif
                                @if($order->status == OrderStatus::Approved || $order->status == OrderStatus::Shipping)
                                    <li>
                                        <a wire:click="changeReturn({{ $order->id }})" class="dropdown-item">
                                            <i class="ph-arrow-clockwise me-2"></i>
                                            Hoàn hàng
                                        </a>
                                    </li>
                                @endif
                            @if($order->status == OrderStatus::Approved)
                                <li>
                                    <a wire:click="changeShipping({{ $order->id }})" class="dropdown-item text-success">
                                        <i class="ph-truck me-2"></i>
                                        Giao hàng
                                    </a>
                                </li>
                            @endif
                            @if($order->status == OrderStatus::Shipping)
                                <li>
                                    <a wire:click="changeComplete({{ $order->id }})" class="dropdown-item text-primary">
                                        <i class="ph-check-circle me-2"></i>
                                        Hoàn thành
                                    </a>
                                </li>
                            @endif
                                <li class="dropdown-divider"></li>
                            <li>
                                <a href="{{ route('admin.orders.show', $order->id) }}" class="dropdown-item">
                                    <i class="ph-eye me-2"></i>
                                    Xem chi tiết
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end align-items-center w-100 mt-3">
        <div class="pagination">
            {{ $orders->appends(request()->input())->links() }}
        </div>
    </div>
</div>


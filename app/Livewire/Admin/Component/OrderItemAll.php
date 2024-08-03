<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Component;

use App\Enums\OrderStatus;
use App\Models\Order;
use Livewire\Component;

class OrderItemAll extends Component
{
    protected $listeners = [
        'changeApprove' => 'changeApprove',
        'refresh' => '$refresh'
    ];

    public function render()
    {
        $orders = Order::query()->paginate(10);
        return view(
            'livewire.admin.component.order-item-all',
            [
                'orders' => $orders
            ]
        );
    }

    public function changeApprove($id): void
    {
        $order = Order::find($id);
        $order->status = OrderStatus::Approved;
        $order->save();
    }
}

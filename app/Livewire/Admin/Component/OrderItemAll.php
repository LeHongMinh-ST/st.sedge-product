<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Component;

use App\Enums\OrderStatus;
use App\Models\Order;
use Livewire\Component;

class OrderItemAll extends Component
{
    protected $listeners = [
        'confirmCancel' => 'confirmCancel',
        'changeCancel' => 'changeCancel'
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

    public function changeCancel($id): void
    {
        $this->dispatch('order-cancel', $id);
    }

    public function confirmCancel($id): void
    {
        $order = Order::find($id);
        $order->status = OrderStatus::Canceled;
        $order->save();
    }

    public function changeShipping($id): void
    {
        $order = Order::find($id);
        $order->status = OrderStatus::Shipping;
        $order->save();
    }

    public function changeComplete($id): void
    {
        $order = Order::find($id);
        $order->status = OrderStatus::Completed;
        $order->save();
    }

    public function changeReturn($id): void
    {
        $order = Order::find($id);
        $order->status = OrderStatus::Returned;
        $order->save();
    }
}

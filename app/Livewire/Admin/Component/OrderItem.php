<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Component;

use App\Enums\OrderStatus;
use App\Models\Order;
use Livewire\Component;

class OrderItem extends Component
{
    protected $listeners = [
        'refresh' => '$refresh',
        'confirmCancel' => 'handleConfirmCancel',
    ];

    public function render()
    {
        $orders = Order::query()->where('status', 'pending')->paginate(10);
        return view('livewire.admin.component.order-item', [
            'orders' => $orders
        ]);
    }

    public function handleChangeApprove($id): void
    {
        $order = Order::find($id);
        $order->status = OrderStatus::Approved;
        $order->save();
    }

    public function handleChangeCancel($id): void
    {
        $this->dispatch('order-cancel', $id);
    }

    public function handleConfirmCancel($id): void
    {
        $order = Order::find($id);
        $order->status = OrderStatus::Canceled;
        $order->save();
    }
}

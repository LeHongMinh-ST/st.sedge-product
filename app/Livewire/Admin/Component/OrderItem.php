<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Component;

use App\Models\Order;
use Livewire\Component;

class OrderItem extends Component
{
    protected $listeners = [
        'refresh' => '$refresh'
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
        $this->dispatch('changeApprove', $id);
        $this->dispatch('refresh');
    }
}

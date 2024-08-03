<?php

declare(strict_types=1);

namespace App\Livewire\Client;

use App\Models\Order;
use Livewire\Component;

class CheckOrder extends Component
{
    public $phoneNumber;
    public $orders = [];

    public function search(): void
    {
        if ($this->phoneNumber) {
            $this->orders = Order::where('phone_number', $this->phoneNumber)->get();
        } else {
            $this->orders = [];
        }
    }

    public function updatedPhoneNumber(): void
    {
        $this->search();
    }

    public function render()
    {
        return view(
            'livewire.client.check-order',
            [
                'orders' => $this->orders
            ]
        );
    }
}

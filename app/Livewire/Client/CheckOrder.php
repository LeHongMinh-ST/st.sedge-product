<?php

declare(strict_types=1);

namespace App\Livewire\Client;

use App\Models\Order;
use Illuminate\Support\Carbon;
use Kjmtrue\VietnamZone\Models\District;
use Kjmtrue\VietnamZone\Models\Province;
use Kjmtrue\VietnamZone\Models\Ward;
use Livewire\Component;

class CheckOrder extends Component
{
    public $phoneNumber;
    public $orders = [];

    public function mount(): void
    {
        $phone = request()->phone;
        if ($phone) {
            $this->phoneNumber = $phone;
            $this->search();
        }
    }

    public function search(): void
    {
        if ($this->phoneNumber) {
            $this->orders = Order::where('phone_number', $this->phoneNumber)->get()->map(function ($order) {
                $order->order_date = Carbon::parse($order->order_date)->format('d-m-Y H:i:s');
                $order->province_name = Province::whereId($order->province_id)->value('name');
                $order->district_name = District::whereId($order->district_id)->value('name');
                $order->ward_name = Ward::whereId($order->ward_id)->value('name');
                return $order;
            });
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
                'orders' => $this->orders,
            ]
        );
    }
}

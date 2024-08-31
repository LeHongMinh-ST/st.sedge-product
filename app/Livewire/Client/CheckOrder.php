<?php

declare(strict_types=1);

namespace App\Livewire\Client;

use App\Models\Order;
use Illuminate\Support\Carbon;
use Kjmtrue\VietnamZone\Models\District;
use Kjmtrue\VietnamZone\Models\Province;
use Kjmtrue\VietnamZone\Models\Ward;
use Livewire\Component;
use Livewire\WithPagination;

class CheckOrder extends Component
{
    use WithPagination;
    public $phoneNumber = '0983562383';
    public $orders;

    public function mount(): void
    {
        $phone = request()->phone;
        if ($phone) {
            $this->phoneNumber = $phone;
            $this->search();
        } else {
            $this->orders = collect();
        }
    }

    public function search(): void
    {
        if ($this->phoneNumber) {
            $this->orders = Order::where('phone_number', $this->phoneNumber)->orderByDesc('id')->get();

            foreach ($this->orders as $order) {
                $order->order_date = Carbon::parse($order->order_date)->format('d-m-Y H:i:s');
                $order->province_name = Province::whereId($order->province_id)->value('name');
                $order->district_name = District::whereId($order->district_id)->value('name');
                $order->ward_name = Ward::whereId($order->ward_id)->value('name');

                //                dd(Carbon::parse($order->order_date)->toDateString());
                //                dd(Carbon::now()->setTimezone('Asia/Ho_Chi_Minh')->toDateString()== Carbon::parse($order->order_date)->toDateString());
                $orderDate = Carbon::parse($order->order_date)->toDateString();
                $currentDate = Carbon::now()->setTimezone('Asia/Ho_Chi_Minh')->toDateString();

                if ($currentDate === $orderDate) {
                    $order->newOrder = 1;
                } else {
                    $order->newOrder = 0;
                }
            }
        } else {
            $this->orders = collect();
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

<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Models\Order;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;

class CheckOrderController extends BaseController
{
    public function index()
    {
        return view('client.pages.check_order');
    }

    public function orderDetail($id)
    {
        $order = Order::find($id);
        $order->order_date = Carbon::parse($order->order_date)->format('d-m-Y H:i:s');
        $products = $order->products;
        return view('client.pages.order-detail', [
            'order' => $order,
            'products' => $products
        ]);
    }
}

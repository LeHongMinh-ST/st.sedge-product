<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Models\Order;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;

class CheckoutController extends BaseController
{
    public function index()
    {
        return view('client.pages.checkout');
    }

    public function success($slug)
    {
        $id = (int) mb_substr(strchr($slug, '-'), 1);
        $order = Order::find($id);
        $order->order_date = Carbon::parse($order->order_date)->format('d-m-Y H:i:s');
        $products = $order->products;
        return view('client.pages.order-completed')->with([
            'order' => $order,
            'products' => $products
        ]);
    }
}

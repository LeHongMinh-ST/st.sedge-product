<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.pages.orders.index');
    }
    public function indexPending()
    {
        return view('admin.pages.orders.indexPending');
    }

    public function show($id)
    {
        $order = Order::find($id);
        $order->order_date = Carbon::parse($order->order_date)->format('d-m-Y H:i:s');
        $products = $order->products;
        return view('admin.pages.orders.order-show', [
            'order' => $order,
            'products' => $products
        ]);
    }
}

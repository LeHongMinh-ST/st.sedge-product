<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Carbon;
use Kjmtrue\VietnamZone\Models\District;
use Kjmtrue\VietnamZone\Models\Province;
use Kjmtrue\VietnamZone\Models\Ward;

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
        $user = User::where('username', 'admin')->first();
        $province = Province::whereId($order->province_id)->first()->name;
        $district = District::whereId($order->district_id)->first()->name;
        $ward = Ward::whereId($order->ward_id)->first()->name;
        return view('admin.pages.orders.order-show', [
            'order' => $order,
            'products' => $products,
            'user' => $user,
            'province' => $province,
            'district' => $district,
            'ward' => $ward
        ]);
    }
}

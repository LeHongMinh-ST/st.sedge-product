<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\Role;
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
        $user = User::where('role', Role::SuperAdmin)->first();
        $province = $order->province_id ? Province::whereId($order->province_id)->first()->name : '';
        $district = $order->district_id ? District::whereId($order->district_id)->first()->name : '';
        $ward = $order->ward_id ? Ward::whereId($order->ward_id)->first()->name : '';
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

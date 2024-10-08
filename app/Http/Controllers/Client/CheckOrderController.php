<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Models\Order;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;
use Kjmtrue\VietnamZone\Models\District;
use Kjmtrue\VietnamZone\Models\Province;
use Kjmtrue\VietnamZone\Models\Ward;

class CheckOrderController extends BaseController
{
    public function index()
    {
        return view('client.pages.check_order');
    }

    public function orderDetail($slug)
    {
        $id = (int) mb_substr(strchr($slug, '-'), 1);
        $order = Order::find($id);
        $order->order_date = Carbon::parse($order->order_date)->format('d-m-Y H:i:s');
        $province = $order->province_id ? Province::whereId($order->province_id)->firstOrFail()->name : '';
        $district = $order->district_id ? District::whereId($order->district_id)->firstOrFail()->name : '';
        $ward = $order->ward_id ? Ward::whereId($order->ward_id)->firstOrFail()->name : '';
        $products = $order->products;
        return view('client.pages.order-detail', [
            'order' => $order,
            'products' => $products,
            'province' => $province,
            'district' => $district,
            'ward' => $ward
        ]);
    }
}

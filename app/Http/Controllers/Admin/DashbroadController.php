<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;

use Illuminate\Support\Facades\DB;

class DashbroadController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $postCount = Post::count();
        $orderCount = Order::count();

        $orderStats = DB::table('orders')
            ->select(DB::raw('MONTH(order_date) as month'), DB::raw('COUNT(*) as count'))
            ->whereYear('order_date', date('Y'))
            ->groupBy(DB::raw('MONTH(order_date)'))
            ->pluck('count', 'month')
            ->toArray();

        $revenueData = DB::table('orders')
            ->select(DB::raw('MONTH(order_date) as month'), DB::raw('SUM(total) as revenue'))
            ->whereYear('order_date', date('Y'))
            ->where('status', 'completed')
            ->groupBy(DB::raw('MONTH(order_date)'))
            ->pluck('revenue', 'month')
            ->toArray();


        $revenuePerMonth = array_fill(1, 12, 0);
        $ordersPerMonth = array_fill(1, 12, 0);


        foreach ($orderStats as $month => $count) {
            $ordersPerMonth[$month] = $count;
        }


        foreach ($revenueData as $month => $revenue) {
            $revenuePerMonth[$month] = $revenue;
        }


        $months = ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'];

        return view('admin.pages.dashboard.index', compact('productCount', 'categoryCount', 'postCount', 'orderCount', 'months', 'ordersPerMonth', 'revenuePerMonth'));
    }

}

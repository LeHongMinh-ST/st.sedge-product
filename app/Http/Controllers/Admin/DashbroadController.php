<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;

class DashbroadController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $postCount = Post::count();
        $orderCount = Order::count();

        return view('admin.pages.dashboard.index', compact('productCount', 'categoryCount', 'postCount', 'orderCount'));
    }
}

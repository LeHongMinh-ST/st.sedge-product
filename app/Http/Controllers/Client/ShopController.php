<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ShopController extends BaseController
{
    public function index(Request $request)
    {
        $products = Product::paginate(9);
        $categories = Category::all();
        return view('client.pages.collection', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::with('galeries')->findOrFail($id);
        return view('client.pages.product_template', compact('product'));
    }

    public function showMenu()
    {
        $categories = Category::all();
        $products = Product::latest()->take(6)->get();
        return view('client.includes.header_menu', compact('categories', 'products'));
    }

    public function quickview($id): void
    {

    }
}

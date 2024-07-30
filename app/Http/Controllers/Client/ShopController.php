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
        $categories = Category::all();
        $query = Product::query();
        if ($request->has('categories')) {
            $query->whereIn('category_id', $request->categories);
        }
        $products = $query->paginate(9);

        return view('client.pages.collection', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::with('galeries')->findOrFail($id);
        return view('client.pages.product_template', compact('product'));
    }

    public function quickView($id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'id' => $product->id,
            'name' => $product->name,
            'price' => number_format($product->price, 0, ',', '.'),
            'thumbnail' => asset($product->thumbnail),
            'description' => $product->description,
        ]);
    }

    public function home()
    {
        $latestProducts = Product::latest()->take(10)->get();
        $categories = Category::all();

        return view('client.pages.index', compact('latestProducts', 'categories'));
    }
}

<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(5);
        return view('admin.pages.products.index')->with('products', $products);
    }

    public function create()
    {
        $categories = Category::all();
        $statuses = Status::cases();
        return view('admin.pages.products.create', compact('categories', 'statuses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'productName' => 'required|string',
            'descript' => 'required|string',
            'price' => 'required|numeric|min:0',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = new Product();
        $product->name = $request->input('productName');
        $product->description = $request->input('descript');
        $product->price = $request->input('price');
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $path = $thumbnail->storeAs('assets/admin/images', $thumbnail->getClientOriginalName(), 'public');
            $product->thumbnail = 'storage/' . $path;
        }
        $product->status = Status::InStock;
        $product->quantity = $request->input('quantity');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được tạo thành công');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $statuses = Status::cases();
        return view('admin.pages.products.update', compact('product', 'categories', 'statuses'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'productName' => 'required|string',
            'descript' => 'required|string',
            'price' => 'required|numeric|min:0',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg',
            'status' => 'required|in:' . implode(',', array_column(Status::cases(), 'value')),
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->input('productName');
        $product->description = $request->input('descript');
        $product->price = $request->input('price');
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $path = $thumbnail->storeAs('assets/admin/images', $thumbnail->getClientOriginalName(), 'public');
            $product->thumbnail = 'storage/' . $path;
        }
        if ($data['status'] === Status::OutOfStock->value) {
            $data['quantity'] = 0;
        }

        $product->update($data);
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được cập nhật thành công');

    }

    public function delete(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được xóa thành công');
    }

}

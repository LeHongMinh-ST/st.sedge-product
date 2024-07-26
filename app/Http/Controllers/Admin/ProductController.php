<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $query = request('q');
        $products = Product::with('category');
        if ($query) {
            $products = $products->where('name', 'like', '%' . $query . '%');
        }
        $products = $products->paginate(5);
        return view('admin.pages.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $statuses = Status::cases();
        return view('admin.pages.products.create', compact('categories', 'statuses'));
    }

    public function store(ProductRequest $request)
    {
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

    public function update(ProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('productName');
        $product->description = $request->input('descript');
        $product->price = $request->input('price');
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $path = $thumbnail->storeAs('assets/admin/images', $thumbnail->getClientOriginalName(), 'public');
            $product->thumbnail = 'storage/' . $path;
        }
        if ($request->input('status') === Status::OutOfStock->value) {
            $request->merge(['quantity' => 0]);
        }

        $product->update($request->all());
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

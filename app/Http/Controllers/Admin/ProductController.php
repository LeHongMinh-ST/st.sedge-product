<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\Role;
use App\Enums\Status;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $query = request('q');
        $products = Product::with('category');
        if ($query) {
            $products = $products->where('name', 'like', '%' . $query . '%');
        }
        $products = $products->orderBy('id', 'desc')->paginate(5);
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
            $path = $thumbnail->storeAs('upload/imagesProduct', $thumbnail->getClientOriginalName(), 'public');
            $product->thumbnail = 'storage/' . $path;
        }
        $product->status = Status::InStock;
        $product->quantity = $request->input('quantity');
        $product->category_id = $request->input('category_id');
        $product->user_id = auth()->id();
        $product->save();
        $product->slug = Str::slug($request->input('productName') . '-' . $product->id);
        $product->save();

        if ($request->hasFile('galleries')) {
            foreach ($request->file('galleries') as $image) {
                $pathGallery = $image->store('upload/galleries');
                $product->galeries()->create([
                    'thumbnail' => $pathGallery
                ]);
            }
        }

        //$request->session()->forget(['selectedFile', 'selectedGalleries']);

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được tạo thành công');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        if (Role::SuperAdmin === auth()->user()->role) {
            $categories = Category::all();
            $statuses = Status::cases();
            return view('admin.pages.products.update', compact('product', 'categories', 'statuses'));
        }

        if (Role::Admin === auth()->user()->role && $product->user_id === auth()->id()) {
            $categories = Category::all();
            $statuses = Status::cases();
            return view('admin.pages.products.update', compact('product', 'categories', 'statuses'));
        }

        return redirect()->route('admin.products.index')->with('error', 'Bạn không có quyền chỉnh sửa sản phẩm này');
    }

    public function update(ProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);

        $product->name = $request->input('productName');
        $product->description = $request->input('descript');
        $product->price = $request->input('price');
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $filename = time() . '_' . $thumbnail->getClientOriginalName();
            $path = $thumbnail->storeAs('upload/imagesProduct', $filename);
            $product->thumbnail =  $path . '?v=' . time();
        }

        if ($request->hasFile('galleries')) {
            foreach ($request->file('galleries') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $pathGallery = $image->storeAs('upload/galleries', $filename);
                $product->galeries()->create([
                    'thumbnail' => $pathGallery
                ]);
            }
        }

        if ($request->input('status') === Status::OutOfStock->value) {
            $request->merge(['quantity' => 0]);
        }

        $product->update($request->except(['thumbnail', 'galleries']));
        $product->category_id = $request->input('category_id');
        $product->slug = Str::slug($request->input('productName') . '-' . $product->id);
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được cập nhật thành công');
    }

    public function delete(string $id)
    {
        $product = Product::findOrFail($id);

        if (Role::SuperAdmin === auth()->user()->role) {
            $product->delete();
            return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được xóa thành công');
        }

        if (Role::Admin === auth()->user()->role && $product->user_id === auth()->id()) {
            $product->delete();
            return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được xóa thành công');
        }

        return redirect()->route('admin.products.index')->with('error', 'Bạn không có quyền xóa sản phẩm này');
    }

    public function show($id)
    {
        $product = Product::with('category', 'galeries')->findOrFail($id);
        return view('admin.pages.products.detail', compact('product'));
    }
}

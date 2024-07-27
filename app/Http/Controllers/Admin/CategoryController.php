<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Requests\category\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request): View|Factory|Application
    {
        $query = Category::query();

        if ($request->has('q')) {
            $query->where('name', 'like', '%' . $request->input('q') . '%');
        }

        $categories = $query->paginate(10);

        return view('admin.pages.categories.index', compact('categories'));
    }

    public function create(): View|Factory|Application
    {
        return view('admin.pages.categories.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được tạo thành công');
    }

    public function edit($id): View|Factory|Application
    {
        $category = Category::find($id);

        return view('admin.pages.categories.edit')->with(['category' => $category]);
    }

    public function update(CategoryStoreRequest $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được cập nhật thành công');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được xóa thành công');
    }
}

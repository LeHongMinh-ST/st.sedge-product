<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\Role;
use App\Http\Requests\Category\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $category->user_id = auth()->id();
        $category->save();
        $category->slug = Str::slug($request->name . '-' . $category->id);
        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được tạo thành công');
    }

    public function edit($id): View|Factory|Application|RedirectResponse
    {
        $category = Category::find($id);
        if (Role::SuperAdmin === auth()->user()->role) {
            return view('admin.pages.categories.edit')->with(['category' => $category]);
        }

        if (Role::Admin === auth()->user()->role && $category->user_id === auth()->id()) {
            return view('admin.pages.categories.edit')->with(['category' => $category]);
        }

        return redirect()->route('admin.categories.index')->with('error', 'Bạn không có quyền chỉnh sửa danh mục này');
    }

    public function update(CategoryStoreRequest $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = Str::slug($request->name . '-' . $category->id);
        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được cập nhật thành công');
    }

    public function delete($id)
    {
        $category = Category::find($id);

        if (Role::SuperAdmin === auth()->user()->role) {
            $category->delete();
            return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được xóa thành công');
        }
        if (Role::Admin === auth()->user()->role && $category->user_id === auth()->id()) {
            $category->delete();
            return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được xóa thành công');
        }

        return redirect()->route('admin.categories.index')->with('error', 'Bạn không có quyền xóa danh mục này');
    }
}

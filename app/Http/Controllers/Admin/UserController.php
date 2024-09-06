<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\Role;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.pages.users.index');
    }

    public function create()
    {
        if (Role::SuperAdmin === auth()->user()->role) {
            return view('admin.pages.users.create');
        }

        return redirect()->route('admin.users.index')->with('error', 'Bạn không có quyền truy cập trang này');
    }

    public function show($id)
    {
        if (auth()->id() === $id) {
            return view('admin.pages.users.profile')->with('id', $id);
        }

        return redirect()->route('admin.dashboard');
    }

    public function edit($id)
    {
        if (Role::SuperAdmin === auth()->user()->role) {
            return view('admin.pages.users.edit')->with('id', $id);
        }
        if (Role::Admin === auth()->user()->role && $id === auth()->id()) {
            return view('admin.pages.users.edit')->with('id', $id);
        }

        return redirect()->route('admin.users.index')->with('error', 'Bạn không có quyền chỉnh sửa tài khoản này');
    }

    public function resetPassword($id)
    {
        if (Role::SuperAdmin === auth()->user()->role) {
            return view('admin.pages.users.reset-password');
        }
        if (Role::Admin === auth()->user()->role && $id === auth()->id()) {
            return view('admin.pages.users.reset-password');
        }

        return redirect()->route('admin.users.index')->with('error', 'Bạn không có quyền đổi mật khẩu cho tài khoản này');
    }
}

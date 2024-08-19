<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.pages.users.index');
    }

    public function edit()
    {
        return view('admin.pages.users.edit');
    }

    public function resetPassword()
    {
        return view('admin.pages.users.reset-password');
    }
}

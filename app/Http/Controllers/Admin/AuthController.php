<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Login\LoginRequest;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->only('username', 'password');

        $remember = $request->has('remember');

        if  (auth()->attempt($data, $remember)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không đúng!');

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}

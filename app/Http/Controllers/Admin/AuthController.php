<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $rule = [
            'username' => 'required',
            'password' => 'required',
        ];

        $message = [
            'username.required' => 'Tài khoản không được để trống!',
            'password.required' => 'Mật khẩu không dược để trống!'
        ];

        $request->validate($rule, $message);
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

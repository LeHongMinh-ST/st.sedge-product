<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Login\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->only('email', 'password');

        $remember = $request->has('remember');

        if  (auth()->attempt($data, $remember)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng!');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function resetPasswordShow($token)
    {
        $resetToken = DB::table('password_reset')->where('token', $token)->first();
        if (!$resetToken) {
            return redirect()->route('login');
        }
        $user = User::where('email', $resetToken->email)->first();
        return view('login.reset-password', compact('user'));
    }
}

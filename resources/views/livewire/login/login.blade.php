<form class="login-form" action="{{ route('login.post') }}" method="POST">
    @csrf
    <label for="username">Tài khoản:</label>
    <input type="text" id="username" name="username" placeholder="Tài khoản" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror">
    @error('username')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <label for="password">Mật khẩu:</label>
    <input type="password" id="password" name="password" placeholder="Mật khẩu"  value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
    @error('password')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <div class="login-options">
        <label class="remember-me">
            <input type="checkbox" name="remember">
            Ghi nhớ mật khẩu
        </label>
        <a wire:click="openForgotPassword" class="link-primary cursor-pointer">Quên mật khẩu?</a>
    </div>
    <button type="submit">Đăng nhập</button>
</form>

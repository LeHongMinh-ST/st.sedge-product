<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/admin/css/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="overlay"></div>
    <div class="app-content">
        <div class="content-center">
            <div class="login-container">
                <!-- logo --->
                <div class="login-logo">
                    <img src="{{ asset('/images/logo.png') }}" alt="Logo" class="logo">
                    <h6>CÓINCIDENCE</h6>
                </div>
                <!-- header -->
                <div class="login-header">
                    <h1>Chào mừng đến bạn với CÓINCIDENCE</h1>
                </div>
                @if (session('error'))
                <div class="error-center">
                    {{ session('error') }}
                </div>
                @endif
                <!-- form  -->
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
                        <a href="#">Quên mật khẩu?</a>
                    </div>
                    <button type="submit">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

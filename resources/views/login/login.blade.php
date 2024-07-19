<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <h1>Chào mừng đến bạn với CÓINCIDENCE <i class="fa-solid fa-check"></i></h1>
                </div>
                <!-- form  -->
                <form class="login-form">
                    <label for="email">Tài khoản/Email</label>
                    <input type="email" id="email" placeholder="Email" required>
                    <label for="password">Mật khẩu:</label>
                    <input type="password" id="password" placeholder="Mật khẩu" required>
                    <div class="login-options">
                        <label class="remember-me">
                            <input type="checkbox">
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
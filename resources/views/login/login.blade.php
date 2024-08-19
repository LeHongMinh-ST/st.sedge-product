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
                <livewire:login.login />
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('openForgotPassword', async () => {
            const {value: email} = await Swal.fire({
                title: "Nhập email của bạn",
                input: "email",
                inputLabel: "Mật khẩu mới sẽ được gửi đến email của bạn",
                inputPlaceholder: "Nhập email",
            });
            if (email) {
                Livewire.dispatch('checkEmail', [email]);
                Swal.fire(`Đã gửi thông báo đến: ${email}`);
            }
        });
    });
</script>
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('checkEmailError', (event) => {
            Swal.fire({
                title: 'Lỗi!',
                text: 'Email không tồn tại!',
                icon: 'error',
                confirmButtonText: 'Nhập lại'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('openForgotPassword');
                }
            });
        });
    });
</script>
</body>

</html>

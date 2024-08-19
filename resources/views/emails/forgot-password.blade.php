<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 730px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background-color: #004d80;
            padding: 20px;
            text-align: center;
            color: #ffffff;
        }
        .email-header h1 {
            margin: 0;
        }
        .email-body {
            padding: 30px;
            color: #333333;
        }
        .email-body h3 {
            color: #004d80;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.6;
        }
        .email-footer {
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
            font-size: 14px;
            color: #777777;
        }
        .btn {
            display: inline-block;
            padding: 10px 25px;
            color: white !important;
            background-color: #004d80;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #003366;
        }
    </style>
</head>
<body>

<div class="email-container">
    <div class="email-header">
        <h1>Yêu cầu đổi mật khẩu</h1>
    </div>
    <div class="email-body">
        <h3>Xin chào {{ $user->fullname }}</h3>
        <p>Bạn nhận được email này vì chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.</p>
        <p>Nếu bạn không yêu cầu đặt lại mật khẩu, bạn không cần thực hiện thêm hành động nào nữa.</p>
        <p>Bấm vào đây để đặt lại mật khâu mới:</p>
        <div style="justify-content: center">
            <a href="{{ route('reset-password', $token) }}" class="btn text-warning d-flex justify-content-center"><b>Đặt lại mật khẩu</b></a>
        </div>
    </div>
    <div class="email-footer">
        <p>Nếu bạn gặp sự cố khi nhấp vào nút "Đặt lại mật khẩu", hãy sao chép và dán URL bên dưới vào trình duyệt web của bạn:</p>
        <p><a href="{{ route('reset-password', $token) }}">{{ route('reset-password', $token) }}</a></p>
    </div>
</div>

</body>
</html>


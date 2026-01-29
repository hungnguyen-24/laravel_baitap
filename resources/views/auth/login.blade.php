<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập hệ thống</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background: #f4f4f4; }
        .login-card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 350px; }
        h2 { text-align: center; color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Đăng Nhập</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf <div class="form-group">
                <label>Email hoặc Tên đăng nhập:</label>
                <input type="text" name="username" required placeholder="Nhập admin...">
            </div>
            <div class="form-group">
                <label>Mật khẩu:</label>
                <input type="password" name="password" required placeholder="Nhập mật khẩu...">
            </div>
            <button type="submit">Đăng nhập</button>
        </form>
        <p style="text-align: center; font-size: 0.9em; margin-top: 15px;">
            <a href="{{ route('home') }}">Quay lại trang chủ</a>
        </p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .btn { padding: 8px 15px; text-decoration: none; background: #28a745; color: white; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Danh sách sản phẩm mẫu</h1>
    
    <a href="{{ route('product.add') }}" class="btn">Thêm sản phẩm mới</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>123</td>
                <td>Điện thoại iPhone 15</td>
                <td>20.000.000đ</td>
            </tr>
            <tr>
                <td>124</td>
                <td>Laptop Dell XPS</td>
                <td>35.000.000đ</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
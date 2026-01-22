<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 300px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        button { padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Thêm sản phẩm mới</h1>
    
    <form action="#" method="POST">
        @csrf <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" id="name" name="name" placeholder="Nhập tên sản phẩm..." required>
        </div>

        <div class="form-group">
            <label for="price">Giá sản phẩm:</label>
            <input type="number" id="price" name="price" placeholder="Nhập giá..." required>
        </div>

        <div class="form-group">
            <label for="desc">Mô tả:</label>
            <input type="text" id="desc" name="desc" placeholder="Mô tả ngắn gọn...">
        </div>

        <button type="submit">Lưu sản phẩm</button>
        <a href="{{ route('product.index') }}">Quay lại danh sách</a>
    </form>
</body>
</html>
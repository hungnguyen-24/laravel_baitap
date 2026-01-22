<?php

use Illuminate\Support\Facades\Route;

// 1. Trang chủ (Trả về view home thay vì welcome mặc định)
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Gom nhóm "/product"
Route::prefix('product')->group(function () {
    
    // Trả về view product.index
    Route::get('/', function () {
        return view('product.index');
    })->name('product.index');

    // Trả về view product.add
    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    // Chi tiết sản phẩm: id kiểu chuỗi, mặc định 123
    Route::get('/{id?}', function ($id = '123') {
        return "Trang chi tiết sản phẩm. ID hiện tại: " . $id;
    })->where('id', '[A-Za-z0-9]+');
});

// 3. Thông tin sinh viên (Tham số mặc định theo đề bài)
Route::get('/sinhvien/{name?}/{mssv?}', function ($name = "Nguyen Phi Hung", $mssv = "0195867") {
    return "<h3>Thông tin giới thiệu:</h3> Student Name: $name <br> MSSV: $mssv";
});

// 4. Bàn cờ vua n*n
Route::get('/banco/{n}', function ($n) {
    return view('banco', ['n' => (int)$n]);
});

// 5. Ví dụ gọi route qua tên (Yêu cầu số 2 trong ảnh)
Route::get('/test-link', function() {
    return '<a href="'.route('product.add').'">Đến trang thêm sản phẩm bằng Route Name</a>';
});

// 6. Trả về trang error.404 khi không tìm thấy route
Route::fallback(function () {
    return view('error.404');
});
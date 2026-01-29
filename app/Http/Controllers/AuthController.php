<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Trả về view SignIn
    public function SignIn() {
        return view('auth.signin');
    }

    // Kiểm tra dữ liệu gửi từ form
    public function CheckSignIn(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        $repass = $request->input('repass');

        // Thông tin sinh viên làm bài (Nguyen Phi Hung - 0195867)
        $myUser = "hung"; // Bạn có thể tùy chỉnh username này
        $myPass = "0195867";

        if ($username == $myUser && $password == $myPass && $password == $repass) {
            return "Đăng ký thành công!";
        } else {
            return "Đăng ký thất bại!";
        }
    }
}
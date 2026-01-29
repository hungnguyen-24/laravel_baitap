<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
public function handle(Request $request, Closure $next)
{
    $age = session('user_age');

    // Nếu nhập chữ 
    if (!is_numeric($age)) {
        return response("Dữ liệu không phải số", 403);
    }

    // Nếu là số nhưng nhỏ hơn 18
    if ($age < 18) {
        return response("Không được phép truy cập", 403);
    }

    return $next($request);
}
}

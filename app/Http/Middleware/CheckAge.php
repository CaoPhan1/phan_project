<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckAge
{
    public function handle(Request $request, Closure $next)
    {
        $age = Session::get('age');

        if (!is_numeric($age) || $age < 18) {
            return response("Không được phép truy cập");
        }

        return $next($request);
    }
}

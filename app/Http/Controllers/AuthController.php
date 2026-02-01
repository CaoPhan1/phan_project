<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function signIn(){
        return view('signin');
    }  
    
    //Kiểm tra dữ liệu form
    public function checkSignIn(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $repass   = $request->repass;
        $mssv     = $request->mssv;
        $lop      = $request->lopmonhoc;
        $gioitinh = $request->gioitinh;

        // Thông tin sinh viên làm bài (FIX CỨNG)
        if (
            $username === 'Hieulx' &&
            $password === '123abc' &&
            $repass === '123abc' &&
            $mssv === '26867' &&
            $lop === '67PM1' &&
            $gioitinh === 'nam'
        ) {
            return "Đăng ký thành công!";
        }

        return "Đăng ký thất bại";
    }

    // Trả về view nhập tuổi
    public function age()
    {
        return view('age');
    }

    // Lưu tuổi vào session
    public function saveAge(Request $request)
    {
        Session::put('age', $request->age);
        return redirect('/protected');
    }

}


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('home');
});

Route::prefix('product')->name('product.')->group(function () {
    Route::controller(ProductController::class)->group(function() {
        Route::get('/', 'index');
        Route::get('/add', 'create')->name('add');
        Route::get('/detail/{id}', 'get');
        Route::post('/store', 'store')->name('store');
    });
    
});
// Route::prefix('product')->group(function () {

//     Route::get('/', [ProductController::class, "index"]);
//     Route::get('/add', [ProductController::class, 'create'])->name('add');
//     Route::get('/detail/{id}', [ProductController::class, 'get']);
// });

// Route::get('/login', function( ){
//     return view('login.login');
// });

Route::get('/signin', [AuthController::class, 'signIn'])->name('signin');
Route::post('/signin', [AuthController::class, 'checkSignIn'])->name('signin.check');

Route::fallback(function () {
    return view('error.404');
});

Route::get('/sinhvien/{name?}/{mssv?}', function (
    $name = 'Luong Xuan Hieu',
    $mssv = '123456'
) {
    return "
        <h2>Thông tin sinh viên</h2>
        <p>Họ tên: $name</p>
        <p>MSSV: $mssv</p>
    ";
});

Route::get('/banco/{n}', function ($n) {
    return view('banco', compact('n'));
});

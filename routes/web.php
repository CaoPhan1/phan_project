<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/product', function () {
    $products = [
        ['id' => 1, 'name' => 'iPhone 15'],
        ['id' => 2, 'name' => 'Samsung S24'],
        ['id' => 3, 'name' => 'Xiaomi 14'],
    ];

    return view('product.index', compact('products'));
});

Route::get('/product/add', function () {
    return view('product.add');
});

Route::get('/product/{id?}', function ($id = '123') {
    return "Product ID: " . $id;
})->where('id', '[A-Za-z0-9]+');

Route::prefix('product')->group(function () {

    Route::get('/', function () {
        $products = [
            ['id' => 1, 'name' => 'iPhone 15'],
            ['id' => 2, 'name' => 'Samsung S24'],
            ['id' => 3, 'name' => 'Xiaomi 14'],
        ];
        return view('product.index', compact('products'));
    })->name('product.index');

    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    Route::get('/{id?}', function ($id = '123') {
        return "Product ID: " . $id;
    })->where('id', '[A-Za-z0-9]+');
});

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

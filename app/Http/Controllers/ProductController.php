<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(){
         $title = "Product List";
        return view("product.index", ['title' => $title, 
        'products' => [
        ['id' => 1, 'name' => 'iPhone 15', 'price' => 100],
        ['id' => 2, 'name' => 'Samsung S24', 'price' => 150],
        ['id' => 3, 'name' => 'Xiaomi 14', 'price' => 200],
            ]
        ]);
    }
    public function get(string $id = "123"){
        return view("product.detail", ['id' => $id ]);
    }
    public function create(){
        return view("product.add");
    }
    // public function store(Request $request){
    //     return $request-> all();
    // }
    public function store(Request $request)
    {
        // Lấy dữ liệu từ form
        $name  = $request->name;
        $price = $request->price;

        // Test xem có nhận được không
        dd($name, $price);

        // Sau này sẽ lưu DB
    }
    
}

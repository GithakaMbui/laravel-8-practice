<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = "Welcome to my new page made using Laravel 8";
        $description = "Laravel is kinda awesome man. I love it";
        $data = [
            'productOne' => 'Iphone',
            'productTwo' => 'Samsung',
            'productThree' => 'Tecno',
            'productFour' => 'Huawei'
        ];

        // 1. compact method of passing data
        // return view('products.index', compact('title', 'description'));

        // 2. Second method os passing data is via the with method
        // return view('products.index')->with('title', $title); 

        // 2.1 Second method os passing array data is via the with method
            //return view('products.index')->with('data', $data); 

            // 3. Third method is passing data directly
            return view('products.index', ['data'=> $data]); 
    }

    //I can return anything in the controller class. even a basic string
    public function about() {
        return 'About Us Page';
    }

    //new show function to display a specific product
    // public function show($id) {
    //      return $id;
    // }

    public function show($name) {
        $data = [
            'iphone' => 'Iphone',
            'samsung' => 'Samsung'
        ];
        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist'
        ]);
   }

}

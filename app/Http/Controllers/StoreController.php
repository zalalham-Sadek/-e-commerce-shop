<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    //

    public function product()
    {
        $products = [
            ['name' => 'Product 1', 'price' => 29.99, 'image' => 'assets/img/products/product-img-1.jpg'],
            ['name' => 'Product 2', 'price' => 39.99, 'image' => 'assets/img/products/product-img-2.jpg'],
            ['name' => 'Product 3', 'price' => 19.99, 'image' => 'assets/img/products/product-img-3.jpg'],
            ['name' => 'Product 4', 'price' => 49.99, 'image' => 'assets/img/products/product-img-4.jpg'],
            ['name' => 'Product 5', 'price' => 59.99, 'image' => 'assets/img/products/product-img-5.jpg'],
            ['name' => 'Product 6', 'price' => 24.99, 'image' => 'assets/img/products/product-img-6.jpg'],
        ];

        return view('shop.products', compact('products'));
    }

    public function details()
    {
        return view('shop.product-details');
    }
}

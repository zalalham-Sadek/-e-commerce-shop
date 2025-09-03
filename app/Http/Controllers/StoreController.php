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
     public function about()
    {
        // About page data
        $about = [
            'title' => 'About Our Store',
            'description' => 'We are a fruit store providing the freshest fruits directly from farms to your home.',
            'rawHtml' => '<strong>Our mission</strong> is to deliver quality fruits at the best prices with fast delivery.',
        ];

        // Team members data
        $team = [
            [
                'name' => 'Jimmy Doe',
                'role' => 'Farmer',
                'image' => 'assets/img/team/team-bg-1.jpg',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ],
            ],
            [
                'name' => 'Marry Doe',
                'role' => 'Farmer',
                'image' => 'assets/img/team/team-bg-2.jpg',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ],
            ],
            [
                'name' => 'Simon Joe',
                'role' => 'Farmer',
                'image' => 'assets/img/team/team-bg-3.jpg',
                'social' => [
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ],
            ],
        ];

        return view('shop.about', compact('about', 'team'));
    }

    public function contact()
    {
        return view('shop.contact');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/products', [StoreController::class, 'product'])->name('shop.products');
Route::get('/product/details', [StoreController::class, 'details'])->name('shop.product.details');
Route::get('/about', [StoreController::class, 'about'])->name('shop.about');

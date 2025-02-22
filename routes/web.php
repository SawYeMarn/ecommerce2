<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
       $products = Product::where('name','LIKE','%'.request('search').'%')->get();
    return view('welcome', [
        'products' => $products
    ]);      
});

Route::get('/register', function () {
    
    return view('register');      
});

Route::get('/login', function () {
    
    return view('login');      
});

Route::get('/checkout', function () {
    
    return view('checkout');      
});

Route::get('/admin', function () {
    
    return view('admin');      
});

Route::get('/productdetail', function () {
    
    return view('productdetail');      
});

Route::get('/create', function () {
    
    return view('create');      
});

 
Route::get('products/{product}', function (Product $product) {
    $latestProducts = Product::orderBy('created_at', "desc")->take(3)->get();
    $relatedproducts = Product::orderBy('created_at', 'asc')->take(4)->get();
    
    return view ('productdetail', [
      'product' => $product,
      'latestProducts' => $latestProducts,
      'relatedproducts' => $relatedproducts,
    ]);
});

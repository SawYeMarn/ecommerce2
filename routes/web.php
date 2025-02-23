<?php
use App\Http\Controllers\MyController;
use App\Http\Controllers\AdminProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/',[MyController:: class,'index']);

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

 
Route::get('products/{product}', [
    MyController::class ,"show"
] );

Route::get('/admin/products',[AdminProductController::class ,"index"]);

Route::get('/admin/productscreate',[AdminProductController::class ,"create"]);

// Route::get('/admin/products')
<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        $products = Product::where('name','LIKE','%'.request('search').'%')->get();
     return view('welcome', [
         'products' => $products
     ]);      
 }

 public function show(Product $product) {
    $latestProducts = Product::orderBy('created_at', "desc")->take(3)->get();
    $relatedproducts = Product::orderBy('created_at', 'asc')->take(4)->get();
    
    return view ('productdetail', [
      'product' => $product,
      'latestProducts' => $latestProducts,
      'relatedproducts' => $relatedproducts,
    ]);
}
}

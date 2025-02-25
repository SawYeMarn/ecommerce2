<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        $products = Product::where('name','LIKE','%'.request('search').'%')
        ->orderBy('created_at', "desc")
        ->paginate(12);
     return view('welcome', [
         'products' => $products,
         "categories" => Category::all(),
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

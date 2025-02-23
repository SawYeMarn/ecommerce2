<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::orderBy('created_at', 'desc')->paginate(10)

        ]);
    }
    public function create()
    {
        return view('admin.products.create');
    }
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'descp'=>$request->description

        ]);
        return redirect()->route('product.index');
    }
}

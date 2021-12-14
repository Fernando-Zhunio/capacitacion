<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
// use App\Models\Product

class ProductController extends Controller
{
    public function index()
    {
        $page = request('page', 1);
        $products = Product::get();
        return view('products', compact('products'));
    }

    public function create()
    {
        return view('storeProduct');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'slug' => 'required',
        ]);

        $product = Product::create($request->all());

        return redirect()->route('product.index');
    }

}

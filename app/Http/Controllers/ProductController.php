<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('product.product', compact('products'));
    }

    public function show($id_products)
    {
        $products = Product::findOrFail($id_products); 
        return view('product.detail', compact('products'));
    }

}

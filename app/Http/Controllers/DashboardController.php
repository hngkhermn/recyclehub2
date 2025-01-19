<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard.index', compact('products'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categories' => 'required'
        ]);

        if ($request->hasFile('images')){
            $validateData['images'] = $request->file('images')->store('images', 'public');
        }

        Product::create($request->all());
        return redirect()->route('dashboard.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('dashboard.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('dashboard.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product->update($request->all());
        return redirect()->route('dashboard.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.index')->with('success', 'Product deleted successfully.');
    }
}

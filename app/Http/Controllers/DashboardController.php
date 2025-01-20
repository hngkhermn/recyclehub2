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

        // if ($request->hasFile('images')){
        //     $validateData['images'] = $request->file('images')->store('images', 'public');
        // }

        $data = $request->all();

        if ($request->hasFile('images')) {
            $originalFilename = $request->file('images')->getClientOriginalName();
            $encryptedFilename = md5($originalFilename . time()) . '.' . $request->file('images')->getClientOriginalExtension();
            $request->file('images')->storeAs('images', $encryptedFilename, 'public');
            $data['images'] = $encryptedFilename;
        }

        Product::create($data);
        return redirect()->route('dashboard.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $dashboard)
    {
        // $single_product = Product::where('id', $product)->first();
        return view('dashboard.show', compact('dashboard'));
    }

    public function edit(Product $dashboard)
    {
        return view('dashboard.edit', compact('dashboard'));
    }

    public function update(Request $request, Product $dashboard)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'nullable|image|mimes:jpeg,jpg,png|max:5120',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categories' => 'required'
        ]);
    
        $data = $request->except('images');
    
        if ($request->hasFile('images')) {
            $originalFilename = $request->file('images')->getClientOriginalName();
            $encryptedFilename = md5($originalFilename . time()) . '.' . $request->file('images')->getClientOriginalExtension();
            
            $request->file('images')->storeAs('images', $encryptedFilename, 'public');
            
            $data['images'] = $encryptedFilename;
        }
    
        $dashboard->update($data);
    
        return redirect()->route('dashboard.index')->with('success', 'Product updated successfully.');
    }
}

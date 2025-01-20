<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index() {
        return view('product.checkout');
    }

    public function checkout(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'quantity' => 'required|integer|min:1',
    ]);

    // Ambil produk berdasarkan nama (disarankan menggunakan ID di form)
    $product = Product::where('name', $request->name)->first();

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Periksa apakah stok mencukupi
    if ($product->stock < $request->quantity) {
        return redirect()->back()->with('error', 'Insufficient stock.');
    }

    // Kurangi stok produk menggunakan query langsung
    DB::table('products')->where('name', $request->name)->decrement('stock', $request->quantity);

    // Simpan data order ke tabel orders
    $data = Order::create([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
        'quantity' => $request->quantity,
        'total_price' => $request->price * $request->quantity,
    ]);

    // Redirect ke halaman sukses dengan data order
    return redirect()->route('success')->with('order', $data);
}

    public function success()
    {
        return view(('product.success'));

    }
}

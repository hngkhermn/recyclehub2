<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManualController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function loginProses(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Regenerasi session jika login berhasil
            $request->session()->regenerate();
            // Redirect ke dashboard atau halaman lain
            return redirect()->route('dashboard');

            return back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.login');
    }
}

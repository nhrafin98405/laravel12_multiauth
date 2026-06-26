<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductAuth;

class ProductAuthController  extends Controller
{
    public function showLoginForm()
    {
        return view('auth.product_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('product')->attempt($credentials)) {
            return redirect()->intended('product/dashboard');
        }

        return redirect('product/login')->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Auth::guard('product')->logout();
        return redirect('product/login');
    }
}

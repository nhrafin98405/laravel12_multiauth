<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;

class StudentsController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.student_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->intended('student/dashboard');
        }

        return redirect('student/login')->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect('student/login');
    }
}
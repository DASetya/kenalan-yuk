<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        // Cek input
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // Cek apakah butuh remember
        $rememberMe = $request->remember ? true:false;

        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $rememberMe)) {
            // Sukses login
            return redirect()->route('admin.index');
        } else {
            // Gagal login
            return redirect()->back()->withInput()->withErrors(['message' => 'Username atau Password Anda salah']);
        }
    }
}

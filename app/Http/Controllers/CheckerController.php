<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckerController extends Controller
{
    public function loginChecker()
    {
        return view('checker.login.index');
    }
    public function autentikasi(Request $request)
    {
        $credentials = $request-> validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        // dd($request);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->intended('/checker/dashboard');
        }

        return back()->with('loginError', 'Login Gagal!');
    }
    public function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login/checker');
    }
    public function dashboard()
    {
        return view('checker.dashboard.index');
    }
}

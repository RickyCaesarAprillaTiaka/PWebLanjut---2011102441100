<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Template.Content.Auth.Login');
    }

    public function loginProses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->route('auth.login')->withErrors('Salah Email atau Password');
        }
    }

    public function register()
    {
        # code...
    }

    public function registerProses(Request $request)
    {
        # code...
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}

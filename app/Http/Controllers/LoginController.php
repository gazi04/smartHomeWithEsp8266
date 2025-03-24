<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginPage()
    {
        if(!Auth::check()){
            return view('login');
        }

        return redirect()->route('dashboard');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'name' => 'Kredencialet e dhëna nuk përputhen me të dhënat tona.',
        ])->onlyInput('name');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('access.index',[
            'title' => 'Login',
            'active' => 'access'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'login_email' => 'required|email:dns',
            'login_password' => 'required'
        ]);
        $credentials['email'] = $credentials['login_email'];
        $credentials['password'] = $credentials['login_password'];
        unset($credentials['login_email']);
        unset($credentials['login_password']);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect ('/');
    }
}

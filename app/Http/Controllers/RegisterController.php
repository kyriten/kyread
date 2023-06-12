<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('access.index', [
            'title' => 'Register',
            'active' => 'access'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:1|max:12|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:8|max:16',
            'password_confirmation' => 'required|min:8|max:16',
        ]);

        $validatedData['password_confirmation'] = Hash::make($validatedData['password_confirmation']);

        User::create($validatedData);
        $request->session()->flash('success', 'Registration successfull! Please login.');
        return redirect('/');
    }
}

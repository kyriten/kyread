<?php

namespace App\Http\Controllers;

use App\Models\Pos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(Pos $pos)
    {
        $pos = Pos::all();
        return view('pos.pages.dashboard', compact('pos'));
    }

    public function products()
    {
        return view('pos.pages.products', [
            'title' => 'Product',
        ]);
    }

    public function addproduct()
    {
        return view('pos.pages.addproduct', [
            'title' => 'Add Product',
        ]);
    }

    public function editproduct()
    {
        return view('pos.pages.editproduct', [
            'title' => 'Edit Product',
        ]);
    }

    public function storeprofile()
    {
        $pos = Pos::all();
        return view('pos.pages.storeprofile', compact('pos'));
    }

    public function transaction()
    {
        return view('pos.pages.transaction', [
            'title' => 'Store Profile',
        ]);
    }

    public function locked()
    {
        return view('pos.pages.featurelocked', [
            'title' => 'Feature is Locked',
        ]);
    }

    public function logoutshop()
    {
        return redirect('/home');
    }

    public function faq()
    {
        return view('pos.pages.faq', [
            'title' => 'F.A.Q',
        ]);
    }

    public function contact()
    {
        return view('pos.pages.contact', [
            'title' => 'Contact Us',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createRegister()
    {
        return view('pos.access.register', [
            'title' => 'Register',
            'active' => 'access'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $posrequest)
    {
        $validatedData = $posrequest->validate([
            'name' => 'required|unique:pos',
            'email' => 'required|email:dns|unique:pos',
            'description' => 'required',
            'password' => 'required|min:8|max:16',
        ]);

        Pos::create($validatedData);
        $request->session()->flash('success', 'Registration successfull! Welcome.');
        return redirect('/dashboard');
    }

    public function createLogin()
    {
        return view('pos.access.login', [
            'title' => 'Login',
            'active' => 'access'
        ]);
    }
    public function shoplogout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/home');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'login_store_name' => 'required',
            'login_store_password' => 'required'
        ]);
        $credentials['name'] = $credentials['login_store_name'];
        $credentials['password'] = $credentials['login_store_password'];
        unset($credentials['login_store_name']);
        unset($credentials['login_store_password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Pos $pos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pos $pos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pos $pos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pos $pos)
    {
        //
    }
}

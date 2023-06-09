<?php

namespace App\Http\Controllers;

use App\Models\Pos;
use App\Http\Requests\StorePosRequest;
use App\Http\Requests\UpdatePosRequest;
use Illuminate\Support\Facades\Auth;

class PosController extends Controller
{
    // public function index()
    // {
    //     return view('pos.access.index',[
    //         'title' => 'Login',
    //         'active' => 'access'
    //     ]);
    // }
    // public function addshop(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'username' => 'required|min:1|max:12|unique:users',
    //         'email' => 'required|email:dns|unique:users',
    //         'password' => 'required|confirmed|min:8|max:16',
    //         'password_confirmation' => 'required|min:8|max:16',
    //     ]);

    //     $validatedData['password_confirmation'] = Hash::make($validatedData['password_confirmation']);

    //     User::create($validatedData);
    //     $request->session()->flash('success', 'Registration successfull! Please login.');
    //     return redirect('/');
    // }
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('pos.pages.dashboard',[
            'title' => 'Dashboard',
        ]);
    }

    public function products()
    {
        return view('pos.pages.products',[
            'title' => 'Product',
        ]);
    }

    public function addproduct()
    {
        return view('pos.pages.addproduct',[
            'title' => 'Add Product',
        ]);
    }

    public function editproduct()
    {
        return view('pos.pages.editproduct',[
            'title' => 'Edit Product',
        ]);
    }

    public function stall()
    {
        return view('pos.pages.stall',[
            'title' => 'Store Profile',
        ]);
    }

    public function logoutshop()
    {
        return redirect ('/home');
    }

    public function faq()
    {
        return view('pos.pages.faq',[
            'title' => 'F.A.Q',
        ]);
    }

    public function contact()
    {
        return view('pos.pages.contact',[
            'title' => 'Contact Us',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePosRequest $request)
    {
        //
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
    public function update(UpdatePosRequest $request, Pos $pos)
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

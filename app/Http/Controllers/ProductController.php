<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use \Cviebrock\EloquentSluggable\Services\SlugService;

class ProductController extends Controller
{
    // public function checkSlug(Request $request){
    //     $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
    // }
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'username' => 'required|min:1|max:12|unique:users',
    //         'email' => 'required|email:dns|unique:users',
    //     ]);

    //     $validatedData['password_confirmation'] = Hash::make($validatedData['password_confirmation']);

    //     User::create($validatedData);
    //     $request->session()->flash('success', 'Registration successfull! Please login.');
    //     return redirect('/');
    // }

    
}

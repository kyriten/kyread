<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validate Form
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'nickname' => 'required|max:255',
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email:dns|unique:users',
            'about' => 'max:255',
            'phone' => 'required|min:13|max:14',
        ]);

        $user->update([
            'fullname' => $request->fullname,
            'nickname' => $request->nickname,
            'username' => $request->username,
            'email' => $request->email,
            'about' => $request->about,
            'phone' => $request->phone
        ]);

        $request->session()->flash('success', 'Data has changed.');
        return redirect('/edit-profile');
    }
}

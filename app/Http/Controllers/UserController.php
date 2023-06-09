<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('profile.edit',[
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'fullname' => 'max:30',
            'nickname' => 'max:12',
            'about' => 'max:30',
            'street' => 'required|max:130',
            'city' => 'required|max:32',
            'province' => 'required|max:14',
            'zipcode' => 'required|max:5'

        ];

        if ($request->username != $user->username) {
            $rules['username'] = 'required|min:5|max:12|unique:users';
        }

        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        if ($request->phone != $user->phone) {
            $rules['phone'] = 'digits_between:12,15|unique:users';
        }

        $validatedData = $request->validate($rules);

        User::where('id', $user->id)
            ->update($validatedData);
        $request->session()->flash('success', 'Your data has been updated.');
        return redirect('/edit-profile');
    }

    public function destroy(User $user){
        User::destroy($user->id);
        return redirect('/')->with('success', 'Your account has been removed!');
    }
}

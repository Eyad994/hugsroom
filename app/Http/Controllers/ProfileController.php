<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email|unique:users,email,' . $request->id
        ]);

        User::where('id', auth()->id())->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender == 1 ? 'male' : 'female',
            'email' => $request->email,
            'timezone' => $request->timezone,
            'lang' => $request->language,
        ]);

        return back()->with('msg', 'Updated Successfully');

    }
}

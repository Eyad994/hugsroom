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

        if (isset($request->country) && $request->country != null && $request->country != '' )
        {
            User::where('id', auth()->id())->update(['country' => $request->country]);
        }

        return back()->with('msg', 'Updated Successfully');

    }

    public function updateNotification($notification, $val)
    {
        $user = auth()->user();
        switch ($notification)
        {
            case 'journal':
                $user->update(['journal_notification' => $val]);
                $user->save();
                break;
            case 'wishes':
                $user->update(['wishes_notification' => $val]);
                $user->save();
                break;
            case 'photos':
                $user->update(['photos_notification' => $val]);
                $user->save();
                break;
            case 'gifts':
                $user->update(['gifts_notification' => $val]);
                $user->save();
                break;
        }
        return $user;
    }
}

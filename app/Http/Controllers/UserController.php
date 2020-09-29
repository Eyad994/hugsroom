<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }
    public function account()
    {
        $user = new User();
        $countries = $user->getAllCountries();
        return view('user.account',compact('countries'));
    }
    public function notification()
    {
        return view('user.notification');
    }
    public function additionalInfo()
    {
        return view('user.additionalInfo');
    }
    public function settings()
    {
        die('x');
    }
}

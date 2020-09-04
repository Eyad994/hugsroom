<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main.createwebsite');
    }

    public function home2()
    {
        return view('welcome');
    }

    public function createwebsite()
    {
        if (Auth::check()) {
            return view('main.createwebsite');
        } else {
            return view('auth.login2');
        }

    }

    public function login2()
    {

        return view('auth.login2');
    }

    public function rooms()
    {

        return view('main.rooms');
    }

    public function page2()
    {
        return view('page2');
    }
    public function register2(Request $request)
    {
        $email = $request->email;
        return view('auth.register')->with('email', $email);
    }

    public function checkIsUser(Request $request)
    {
        $email = $request->email;
        $users = New User();
        $data = $users->checkIsUserByEmail($email);
        return response()->json(count($data));
        if (count($data) > 0) {
            return view('auth.login')->with('email', $email);
        } else {
            return view('auth.register')->with('email', $email);
        }
    }

    public function addUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'firstName' => 'required',
            'lastName' => 'required'
        ]);

        $data = array();
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['firstName'] = $request->firstName;
        $data['lastName'] = $request->lastName;

        $users = new User();
        $users->addNewUser($data);
    }

    public function getCheckIsUser()
    {
        return view('auth.login')->with('email', '');
    }
}

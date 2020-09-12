<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->stateless()->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect('/home');

            }else{
                $parts = explode(" ", $user->name);
                $last_name = array_pop($parts);
                $first_name = implode(" ", $parts);
                $newUser = User::create([
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $user->email,
                    'google_id'=> $user->id
                ]);

                Auth::login($newUser);

                return redirect('/home');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    /**
     * Redirect the user to the FACEBOOK authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from FACEBOOK.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();

            $parts = explode(" ", $user->getName());
            $last_name = array_pop($parts);
            $first_name = implode(" ", $parts);

            $finduser = User::where('facebook_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/home');
            } else {
                $newUser = User::create([
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                ]);
                Auth::login($newUser);
                return view('welcome');
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}

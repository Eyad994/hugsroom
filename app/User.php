<?php

namespace App;

use App\Models\LikableWishes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable, Likable, LikableComment, LikableWishes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'gender', 'city_id', 'country', 'facebook_id', 'google_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function checkIsUserByEmail($email)
    {
        $data = DB::table('users')->where('email', '=', $email)->get();
        return $data;
    }

    public function addNewUser($data)
    {
        $id = DB::table('users')->insertGetId(
            [
                'first_name' => $data['firstName'],
                'last_name' => $data['quantity'],
                'email' => $data['email'],
                'password' => $data['password'],
                'gender' => 'mail',
                'country_id' => '1',
                'city_id' => '1',
                'illness' => 'asds',
                'current_hospital' => 'dsad',
                'type' => '1',
            ]
        );
        return $id;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

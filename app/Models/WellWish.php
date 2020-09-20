<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class WellWish extends Model
{
    use LikableWishes;
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(WellWish::class)->whereNull('parent_id')->latest();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

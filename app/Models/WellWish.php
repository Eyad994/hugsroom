<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WellWish extends Model
{
    use LikableWishes;
    protected $guarded = [];
}

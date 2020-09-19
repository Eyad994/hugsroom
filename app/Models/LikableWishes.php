<?php
/**
 * Created by PhpStorm.
 * User: Eyad
 * Date: 9/13/2020
 * Time: 8:17 PM
 */

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Builder;

trait LikableWishes
{
    public function likesWishes()
    {
        return $this->hasMany(LikeWish::class);
    }

    public function likeWish($user = null, $liked = true)
    {
        $this->likesWishes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
            'liked' => $liked
        ]);
    }

    public function dislikeWish($user = null)
    {
        return $this->likeWish($user, false);
    }

    public function isLikedByWish(User $user)
    {
        return (bool) $user->likesWishes->where('well_wish_id', $this->id)->where('liked', true)->count();
    }

    public function isDisLikedByWish(User $user)
    {
        return (bool) $user->likesWishes->where('well_wish_id', $this->id)->where('liked', false)->count();
    }

    public function scopeWithLikesWishes(Builder $query)
    {
        $query->leftjoinSub(
            'select well_wish_id, sum(liked) likes, sum(!liked) dislikes from like_wishes group by well_wish_id',
            'like_wishes',
            'like_wishes.well_wish_id',
            'well_wish_id'
        );
    }
}
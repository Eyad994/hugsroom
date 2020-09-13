<?php
/**
 * Created by PhpStorm.
 * User: Eyad
 * Date: 9/13/2020
 * Time: 8:17 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
            'liked' => $liked
        ]);
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        return (bool) $user->likes->where('post_id', $this->id)->where('liked', true)->count();
    }

    public function isDisLikedBy(User $user)
    {
        return (bool) $user->likes->where('post_id', $this->id)->where('liked', false)->count();
    }

    public function scopeWithLikes(Builder $query)
    {
        $query->leftjoinSub(
            'select post_id, sum(liked) likes, sum(!liked) dislikes from likes group by post_id',
            'likes',
            'likes.post_id',
            'post_id'
        );
    }
}
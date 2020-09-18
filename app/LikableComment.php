<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait LikableComment
{
    public function likes()
    {
        return $this->hasMany(CommentLike::class);
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
        return (bool) $user->likes->where('comment_id', $this->id)->where('liked', true)->count();
    }

    public function isDisLikedBy(User $user)
    {
        return (bool) $user->likes->where('comment_id', $this->id)->where('liked', false)->count();
    }

    public function scopeWithLikes(Builder $query)
    {
        $query->leftjoinSub(
            'select comment_id, sum(liked) likes, sum(!liked) dislikes from likes group by comment_id',
            'comment_likes',
            'comment_likes.comment_id',
            'comment_id'
        );
    }
}
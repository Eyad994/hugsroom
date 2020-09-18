<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait LikableComment
{
    public function likesComment()
    {
        return $this->hasMany(CommentLike::class);
    }

    public function likeComment($user = null, $liked = true)
    {
        $this->likesComment()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
            'liked' => $liked
        ]);
    }

    public function dislikeComment($user = null)
    {
        return $this->likeComment($user, false);
    }

    public function isLikedByComment(User $user)
    {
        return (bool) $user->likesComment->where('comment_id', $this->id)->where('liked', true)->count();
    }

    public function isDisLikedByComment(User $user)
    {
        return (bool) $user->likesComment->where('comment_id', $this->id)->where('liked', false)->count();
    }

    public function scopeWithLikesComment(Builder $query)
    {
        $query->leftjoinSub(
            'select comment_id, sum(liked) likes, sum(!liked) dislikes from comment_likes group by comment_id',
            'comment_likes',
            'comment_likes.comment_id',
            'comment_id'
        );
    }
}
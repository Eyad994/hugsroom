<?php

namespace App\Http\Controllers;

use App\Comment;
use App\CommentLike;
use App\Like;
use App\Post;
use App\rooms;

class LikeController extends Controller
{
    public function store(Post $post)
    {
        $like = Like::where('post_id', $post->id)->where('user_id', auth()->id())->first();

        if (!is_null($like))
        {
            $like->delete();
            return back();
        }

        $post->like(auth()->user());
        $postLikes = Like::where('post_id', $post->id)->count();
        $room = rooms::where('id', $post->room_id)->first();
        return view('mbRooms.post', compact('post', 'postLikes', 'room'));
    }

    public function destroy(Post $post)
    {
        $post->dislike(auth()->user());
        return back();
    }

    public function storeComment(Comment $comment)
    {
        $like = CommentLike::where('comment_id', $comment->id)->where('user_id', auth()->id())->first();

        if (!is_null($like))
        {
            $like->delete();
            return back();
        }

        $comment->like(auth()->user());
        $commentLikes = CommentLike::where('comment_id', $comment->id)->count();

    }
}

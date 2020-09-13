<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;

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
        return back();
    }

    public function destroy(Post $post)
    {
        $post->dislike(auth()->user());
        return back();
    }
}

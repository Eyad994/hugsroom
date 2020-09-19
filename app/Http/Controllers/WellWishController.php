<?php

namespace App\Http\Controllers;

use App\Models\LikeWish;
use App\Models\WellWish;
use App\rooms;
use Illuminate\Http\Request;

class WellWishController extends Controller
{
    public function storeWish(Request $request)
    {
        $comment = new WellWish();

        $comment->body = $request->comment;

        $comment->room_id = $request->room_id;
        $comment->user()->associate($request->user());
    }

    public function storeLike(WellWish $wish)
    {
        $likeWish = LikeWish::where('wish_id', $wish->id)->where('user_id', auth()->id())->first();

        if (!is_null($likeWish))
        {
            $likeWish->delete();
            return back();
        }

        $wish->likeWish(auth()->user());
        $wishLikes = LikeWish::where('wish_id', $wish->id)->count();
        $room = rooms::where('id', $wish->room_id)->first();
        return view('mbRooms.post', compact('wish', 'wishLikes', 'room'));
    }

    public function destroy(WellWish $wish)
    {
        $wish->dislikeWish(auth()->user());
        return back();
    }

}

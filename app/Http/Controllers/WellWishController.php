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

        $comment->save();
    }

    public function storeLike(WellWish $wish)
    {
        $likeWish = LikeWish::where('well_wish_id', $wish->id)->where('user_id', auth()->id())->first();

        if (!is_null($likeWish))
        {
            $likeWish->delete();
            return back();
        }

        $wish->likeWish(auth()->user());

        //return view('mbRooms.post', compact('wish', 'room'));
    }

    public function destroy(WellWish $wish)
    {
        $wish->dislikeWish(auth()->user());
        return back();
    }

}
